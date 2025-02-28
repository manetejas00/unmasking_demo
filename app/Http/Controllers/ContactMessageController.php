<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;


class ContactMessageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
            'website' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Exclude _token before inserting into database
        $formData = $request->except('_token');

        // Save to Database
        $message = ContactMessage::create($formData);

        return response()->json(['message' => 'Your message has been sent successfully!'], 200);
    }
}


