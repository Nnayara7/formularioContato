<?php

namespace Tests\Unit;
use App\Models\formulario\Formulario;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase;

class FormularioTest extends TestCase
{
    /** @test */

    public function creckIfFormularioColumnsIsCorrect()
    {
    	$formulario = new Formulario;

        $data = [
        	'nome',
    		'email',
    		'telefone',
    		'mensagem',
    		'ip',
    		'arquivo'
    	];

     	$arCompare = array_diff($data, $formulario->getFillable());
     
		$this->assertEquals(0,count($arCompare));
    }
}