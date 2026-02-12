<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\ContactPage;
use App\Models\Setting;
use App\Models\Translation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactPageController extends Controller
{
    public function index($locale)
    {
        app()->setLocale($locale);

        $contact = ContactPage::first();
        $settings = Setting::first();
        return view('client.pages.contact', compact('contact', 'locale', 'settings'));
    }

    public function submit(Request $request)
    {
        try {
            $request->validate([
                'type' => 'required',
                'username' => 'required',
                'email'     => 'required|email',
                'message' => 'required',
            ]);

            ContactMessage::create([
                'type' => $request->type,
                'username' => $request->username,
                'email' => $request->email,
                'phone'    => $request->phone ?? null,
                'entity_type' => $request->entity_type ?? null,
                'message'  => $request->message,
            ]);
            $toEmail = $request->type === 'partnership'
                ? config('mail.info_address')      // info mail
                : config('mail.support_address');  // support mail

            Mail::raw("
        Yeni müraciət:

        Ad: {$request->username}
        Email: {$request->email}
        Telefon: {$request->phone}
        Mesaj: {$request->message}
    ", function ($message) use ($toEmail) {
                $message->to($toEmail)
                    ->subject('Yeni müraciət');
            });

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
