<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Comentario;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Policies\ComentarioPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Comentario::class => ComentarioPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('editar-comentario', function (User $user, Comentario $comentario) {
            return $user->id === $comentario->user_id
            ? Response::allow()
            : Response::deny('Mo puedes editar este comentario');
        });
    }
}
