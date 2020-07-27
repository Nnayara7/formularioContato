<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactEmail;
use File;
use \Validator;
use App\Posts;
use DB;
use App\Models\formulario\Formulario;

class contactController extends Controller
{

	private $formulario;

	public function _construct(Formulario $formulario)
	{
		$this->fomulario = $formulario;
		
	}

    public function sendContact(Request $request) 
    {
    	$this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'phone' => 'required|numeric|min: 11',
            'file' => 'required|max: 500|mimes:pdf,doc,docx,txt,odt'
        ]); 
        
        
     	$file = request()->file('file');
		
		$request->rota = $file->store('toPath', ['disk' => 'archive']);
		$this->store($request);


		$email = 'nnayara.pedrozo@gmail.com'; 
        Mail::to($email)->send(new contactEmail($request));
    	return redirect()->back()->with('success', 'Contato enviado com sucesso!');
       
    }

     public function store(Request $request)
    {
    	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	   		$ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	    	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
	    	$ip = $_SERVER['REMOTE_ADDR'];
		}

    	return DB::table('formulario')->insert([
			'nome' => $request->name,
			'email' => $request->email,
			'telefone' => $request->phone,
			'arquivo' => $request->rota,
			'mensagem' => $request->message,
			'ip' => $ip,
			'created_at' => date('Y-m-d H:i:s')]);
    }

}
