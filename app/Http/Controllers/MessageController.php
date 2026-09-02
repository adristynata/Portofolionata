<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::latest()->get();
        return view('dashboard.message.index', compact('messages'));
    }

    public function markAsRead(Message $message)
    {
        $message->update(['is_read' => !$message->is_read]);
        return back()->with('success', 'Status pesan berhasil diperbarui!');
    }

    public function destroy(Message $message)
    {
        $message->delete();
        return back()->with('success', 'Pesan berhasil dihapus!');
    }
}
