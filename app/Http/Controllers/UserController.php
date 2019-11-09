<?php

namespace App\Http\Controllers;

use App\User;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Laravel\Lumen\Routing\Controller as BaseController;

class UserController extends BaseController
{

    public function getAllUsers()
    {
        return response()->json(User::all());
    }

    public function createUser(Request $request)
    {
        if (!$request->has('name')) {
            return response('`name` is required.', 400);
        }
        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    public function getUser($user_id)
    {
        try {
            $user = User::findOrFail($user_id);
        } catch (ModelNotFoundException $e) {
            return response('User not found', 404);
        }
        return response()->json($user);
    }

    public function updateUser($user_id, Request $request)
    {
        try {
            $user = User::findOrFail($user_id);
        } catch (ModelNotFoundException $e) {
            return response('User not found', 404);
        }
        $user->update($request->all());
        return response()->json($user, 200);
    }

    public function deleteUser($user_id, Request $request)
    {
        try {
            $user = User::findOrFail($user_id);
        } catch (ModelNotFoundException $e) {
            return response('User not found', 404);
        }
        $user->delete();
        Message::where('sender_id', $user->id)->orWhere('receiver_id', $user->id)->delete();
        return response()->json('Deleted Successfully', 200);
    }

    public function getInbox($user_id)
    {
        try {
            $user = User::findOrFail($user_id);
        } catch (ModelNotFoundException $e) {
            return response('User not found', 404);
        }
        $messages = Message::where('receiver_id', $user->id)->latest()->get();
        return response()->json($messages, 200);
    }

    public function getSent($user_id)
    {
        try {
            $user = User::findOrFail($user_id);
        } catch (ModelNotFoundException $e) {
            return response('User not found', 404);
        }
        $messages = Message::where('sender_id', $user->id)->latest()->get();
        return response()->json($messages, 200);
    }
}
