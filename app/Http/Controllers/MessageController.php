<?php

namespace App\Http\Controllers;

use App\User;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Laravel\Lumen\Routing\Controller as BaseController;

class MessageController extends BaseController
{
    public function getAllMessages()
    {
        $messages = Message::all();
        return response()->json($messages, 200);
    }


    public function createMessage(Request $request)
    {
        if (!$request->has(['sender_id', 'receiver_id', 'content'])) {
            return response('`sender_id`, `receiver_id` and `content` are required.', 400);
        }
        try {
            $sender = User::findOrFail($request->sender_id);
        } catch (ModelNotFoundException $e) {
            return response('Sender id not found', 404);
        }
        try {
            $receiver = User::findOrFail($request->receiver_id);
        } catch (ModelNotFoundException $e) {
            return response('Receiver id not found', 404);
        }
        $message = Message::create([
            'content' => $request->content,
            'sender_id' => $sender->id,
            'receiver_id' => $receiver->id,
        ]);
        return response()->json($message, 201);
    }

    public function getMessage($message_id)
    {
        try {
            $message = Message::findOrFail($message_id);
        } catch (ModelNotFoundException $e) {
            return response('Message not found', 404);
        }
        return response()->json($message);
    }

    public function updateMessage($message_id, Request $request)
    {
        try {
            $message = Message::findOrFail($message_id);
        } catch (ModelNotFoundException $e) {
            return response('Message not found', 404);
        }
        $message->update($request->all());
        return response()->json($message, 200);
    }

    public function deleteMessage($message_id, Request $request)
    {
        try {
            $message = Message::findOrFail($message_id);
        } catch (ModelNotFoundException $e) {
            return response('Message not found', 404);
        }
        $message->delete();
        return response()->json('Deleted Successfully', 200);
    }

    public function getConversation(Request $request)
    {
        if (!$request->has(['userA_id', 'userB_id'])) {
            return response('`userA_id` and `userB_id` are required.', 400);
        }
        try {
            $userA = User::findOrFail($request->query('userA_id'));
        } catch (ModelNotFoundException $e) {
            return response('User A not found', 404);
        }
        try {
            $userB = User::findOrFail($request->query('userB_id'));
        } catch (ModelNotFoundException $e) {
            return response('User B not found', 404);
        }
        $messagesAB = Message::where([
            ['sender_id', $userA->id],
            ['receiver_id', $userB->id],
        ])
            ->orWhere([
                ['sender_id', $userB->id],
                ['receiver_id', $userA->id],
            ])
            ->latest()
            ->get();
        return response()->json($messagesAB, 201);
    }
}
