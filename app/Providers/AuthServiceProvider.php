<?php

namespace App\Providers;

use App\Models\Personaje;
use App\Models\User;
use App\Models\Team;
use App\Policies\PersonajePolicy;
use App\Policies\TeamPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Team::class => TeamPolicy::class,
        Personaje::class => PersonajePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('update-personaje', function (User $user, Personaje $personaje) {
            return $user->id === $personaje->user_id;
        });
    }
}
