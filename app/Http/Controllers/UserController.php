<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $result = null;

        // *** Build a basic query for active users
        $query = User::query();
        $result = $query->get();

        // Prepare and send the JSON response
        try {
            return self::sendResponse($result, "Alle User erfolgreich gefunden");
        } catch (\Exception $e){
            return self::sendError($e->getMessage());
        }
    }

    public function getUserById(int $user_id)
    {
        // Load the Event with the given ID or throw an Exception

        try {
            $user = User::findOrFail($user_id);
            return self::sendResponse($user, "User mit ID $user_id erfolgreich gefunden");
        } catch (\Exception $e){
            return self::sendError($e->getMessage());
        }

    }
}
