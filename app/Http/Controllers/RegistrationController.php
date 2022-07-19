<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function userPlanning(User $user)
    {
        $planning = $user->load('registrations.planning');
        return  $user->registrations->pluck('planning');
    }
}
