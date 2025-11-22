<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\ContactPage;
use App\Models\Setting;
use App\Models\Translation;
use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    public function index($locale)
    {
        app()->setLocale($locale);

        $contact = ContactPage::first(); 
        $settings = Setting::first(); 
         return view('client.pages.contact', compact('contact', 'locale','settings'));
    }

    public function submit(Request $request)
    {
        try {
            $request->validate([
                'username' => 'required',
                'email'     => 'required|email',
                'contact_message' => 'required',
            ]);

            ContactMessage::create([
                'username' => $request->username,
                'email' => $request->email,
                'message' => $request->contact_message,
            ]);

            // Uğurlu mesaj
            return back()->with(
                'success',
                Translation::getValue('contact_success', app()->getLocale())
            );

        } catch (\Exception $e) {

            // Uğursuz mesaj
            return back()->with(
                'error',
                Translation::getValue('contact_failed', app()->getLocale())
            );
        }
    }



}
