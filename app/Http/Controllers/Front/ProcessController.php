<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Process;
use App\Models\ContactPage;
use App\Models\Step;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    public function index($locale)
    {
        app()->setLocale($locale);


        // Process section admin-dən gəlir
        $process = Process::first();

        // Contact bölməsini də əlavə edirik (səhifənin aşağısında istifadə olunursa)
        $contact = ContactPage::first();
        $steps = Step::orderBy('step_number')->get();

        return view('client.pages.process', compact('process', 'contact', 'locale','steps'));
    }
}
