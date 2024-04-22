<?php

namespace Tests\Feature;

use App\Models\Archivos;
use App\Models\Comentario;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ComentarioControllerTest extends TestCase
{
    use RefreshDatabase;
    

    public function test_listado_comentarios(): void
    {
        $response1 = $this->get('/comentario');
        $response1->assertRedirect('/login');

        $this->actingAs($user = User::factory()->create());

        $response = $this->get('/comentario');
        $response->assertStatus(200) //Se van concatenando las pruebas
            ->assertSee('Listado de Comentarios');
    }

    public function test_formulario_creacion_comentario(): void
    {
        $this->actingAs($user = User::factory()->create());

        $response = $this->get(route('comentario.create'));
        $response->assertStatus(200)
            ->assertSee('textarea name="comentario"', false);

    }

    public function test_creacion_comentario(): void
    {
        $this->actingAs($user = User::factory()->create());

        $response = $this->post(route('comentario.store'), [
            'comentario' => 'Comentario de prueba',
            'ciudad' => 'Tonala',
        ]);

        $this->assertDatabaseHas('comentarios', [
            'comentario' => 'Comentario de prueba',
        ]);

        $response->assertRedirect(route('comentario.index'));

        
    }

    public function verifica_validacion_al_crear()
    {
        // $this->withoutExceptionHandling();

        $this->actingAs($user = User::factory()->create());
        

        $response = $this->post(route('comentario.store'), [
            'ciudad' => 'Tonala',
        ]);
        $response->assertInvalid(['comentario']);
    }
}

