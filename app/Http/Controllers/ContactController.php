<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $apiKey = 'AIzaSyCv-LRZY3So8Ejo7uSFMP3205rUoel6paA';

        return view('contact-us.index', [
            'apiKey' => $apiKey
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|email',
            'subject' => 'required|string|max:250',
            'message' => 'nullable|string|max:500',
        ]);

        $item = new ContactMessage();
        $item->name = $request->input('name');
        $item->email = $request->input('email');
        $item->subject = $request->input('subject');
        $item->message = $request->input('message');
        $item->save();

        if ($request->ajax()) {
            return response()->json([
                'response' => 'success',
                'message' => "We have <strong>successfully</strong> received your message.<br>We will get back to you as soon as possible."
            ]);
        } else {
            return redirect()->back()->with('success', "We have <strong>successfully</strong> received your message.<br>We will get back to you as soon as possible.");
        }
    }
}
