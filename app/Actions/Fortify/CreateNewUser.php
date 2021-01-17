<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
//        Validator::make($input, [
//            'nachname' => ['required', 'string', 'max:255'],
//            'vorname' => ['required', 'string', 'max:255'],
//            'reg_email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'reg_password' => $this->passwordRules(),
//        ])->validate();

        return User::create([
            'vorname' => $input['vorname'],
            'nachname' => $input['nachname'],
            'email' => $input['reg_email'],
            'street' => $input['street'],
            'ort' => $input['ort'],
            'telefonnummer' => $input['telefonnummer'],
            'streetno' => $input['streetno'],
            'zip' => $input['zip'],
            'password' => Hash::make($input['reg_password']),
        ]);
    }
}
