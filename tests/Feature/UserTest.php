<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseTransactions;

    public function test_cria_usuario()
    {
        // $usuario = User::create([
        //     'matricula' => '1111',
        //     'nome'  => 'Thiago',
        //     'password'  => bcrypt('123'),
        //     'email' => 'thiago@gmail.com',
        //     'imagem' => 'padrao.png',
        //     'usuario_alteracao' => 'Sistema'
        // ]);
        // $this->assertDatabaseHas('users',[
        //     'matricula' => '1111',
        //     'nome'  => 'Thiago',
        //     'password'  => bcrypt('123'),
        //     'email' => 'thiago@gmail.com',
        //     'imagem' => 'padrao.png',
        //     'usuario_alteracao' => 'Sistema'
        // ]);
    }
}