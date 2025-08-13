<?php

/**
 * @author TIL <til@army.mil.bd>
 *
 * @contributor Md. Mostafijur Rahman <[mostafijur.til@gmail.com]>
 *
 * @created 10-04-2025
 */


declare(strict_types=1);

namespace App\Traits;

use Illuminate\Contracts\Auth\Authenticatable;

trait AuthorizationChecker
{
    /**
     * Check if the user is authorized to perform the action.
     *
     * @param  Authenticatable  $user
     * @param  array|string  $permissions
     */
    public function checkAuthorization($user, $permissions): void
    {
        if (is_null($user) || ! $user->can($permissions)) {
            abort(403, 'Sorry !! You are unauthorized to perform this action.');
        }
    }
}