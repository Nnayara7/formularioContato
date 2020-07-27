<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\formulario\Formulario;

class RegisterFormularioTest extends DuskTestCase
{
    /** @test */
    public function checkFormFilling()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->type('name', 'Naiara Fátima')
                ->type('email', 'nnayara.pedrozo@gmail.com')
                ->type('phone', '62982326956')
                ->attach('file', storage_path('app/public/Naiara_Pedrozo_Português.pdf'))
                ->type('message', 'Teste Automatizado')
                ->press('Enviar')
                ->waitForText('Contato enviado com sucesso!')
                ->assertPathIs('/');
        });
    }

    public function checkRequiredFields()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Formulário de Contato')
                ->type('name', '')
                ->press('Enviar')
                ->waitForText('O campo nome é obrigatório.')
                ->type('name', 'Naiara Pedrozo')
                ->type('email', '')
                ->press('Enviar')
                ->waitForText('O campo email é obrigatório.')
                ->type('email', 'nnayara.pedrozo@gmail.com')
                ->type('phone', '')
                ->press('Enviar')
                ->waitForText('O campo telefone é obrigatório.')
                ->type('phone', '62982326956')
                ->attach('file', storage_path('app/public/Naiara_Pedrozo_Português.pdf'))
                ->type('message', '')
                ->press('Enviar')
                ->waitForText('O campo mensagem é obrigatório.')
                ->type('phone', '62982326956')
                ->type('message', 'Teste Automatizado')
                ->press('Enviar')
                ->waitForText('Contato enviado com sucesso!')
                ->assertPathIs('/');
        });
    }

}
