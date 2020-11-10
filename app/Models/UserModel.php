<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Users extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function index(Request $request)
    {
        $result = null;

        // *** Build a basic query for active users
        $query = User::query();


        // Prepare and send the JSON response
        return $query;
    }
}

