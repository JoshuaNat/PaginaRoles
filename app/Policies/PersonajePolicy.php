<?php

namespace App\Policies;

use App\Models\Personaje;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PersonajePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Personaje  $personaje
     * @return mixed
     */
    public function view(User $user, Personaje $personaje)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Personaje  $personaje
     * @return mixed
     */
    public function update(User $user, Personaje $personaje)
    {
        return $user->id === $personaje->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Personaje  $personaje
     * @return mixed
     */
    public function delete(User $user, Personaje $personaje)
    {
        return $user->id === $personaje->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Personaje  $personaje
     * @return mixed
     */
    public function restore(User $user, Personaje $personaje)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Personaje  $personaje
     * @return mixed
     */
    public function forceDelete(User $user, Personaje $personaje)
    {
        //
    }

    public function vincular(User $user, Personaje $personaje)
    {
        return $user->id === $personaje->user_id;
    }
}
