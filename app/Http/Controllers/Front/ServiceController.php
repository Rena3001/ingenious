<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactPage;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index($locale)
    {
        $services = Service::first();// bütün xidmətlər
        app()->setLocale($locale);
        $contact = ContactPage::first();
        
        return view('client.pages.services', compact('services','locale','contact'));
    }

}
