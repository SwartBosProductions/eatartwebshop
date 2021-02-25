<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class RegisterRequest extends FormRequest
{
    public function rules() {
        return [
            'first_name' => 'required|string|max:100',
            'insertion' => 'nullable|string|max:45',
            'last_name' => 'required|string|max:100',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'birthday' => 'required|date',
            'street' => 'required|string|max:255',
            'house_num' => 'required|string|max:5',
            'house_num_addition' => 'nullable|string|max:5',
            'postal_code' => 'required|string|max:7',
            'city' => 'required|string|max:255',
            'conditions_confirmed' => 'required'
        ];
    }

    public function messages() {
        return [
            'required' => 'Dit veld moet nog ingevuld worden.',
            'email.unique' => 'Dit emailadres is al in gebruik.',
            'password.min' => 'Het wachtwoord moet minimaal uit acht tekens bestaan.',
            'password.confirmed' => 'De opgegeven wachtwoorden zijn niet gelijk.',
            'postal_code.max' => 'Een Nederlandse postcode bestaat uit vier cijfers en twee letters.',
            'conditions_confirmed' => 'Registreren is alleen mogelijk na akkoord met onze voorwaarden.',
        ];
    }
}