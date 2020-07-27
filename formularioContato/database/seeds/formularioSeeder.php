<?php

use Illuminate\Database\Seeder;

class formularioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$formulario = [
    		0 => ['nome' => 'Naiara',
    		'email' => 'nnayara.pedrozo@gmail.com',
    		'telefone' => '62982326956',
    		'mensagem' => 'teste Naiara',
    		'arquivo' => 'teste Naiara']

    	];
        DB::table('formulario')->insert($formulario);
    }
}
