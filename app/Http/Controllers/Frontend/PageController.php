<?php

namespace App\Http\Controllers\Frontend;

use App\ContactMessages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage()
    {
        return view('welcome');
    }

    public function contactUs()
    {
        return view('layouts.frontend.contact');
    }

    public function aboutUs()
    {
        return view('layouts.frontend.about');
    }

    public function services()
    {
        return view('layouts.frontend.services');
    }

    public function facilitationService()
    {
        return view('layouts.frontend.facilitation-service');
    }

    public function claimsService()
    {
        return view('layouts.frontend.claims-service');
    }

    public function projectService()
    {
        return view('layouts.frontend.project-service');
    }

    public function working()
    {
        return view('layouts.frontend.working');
    }

    public function contactMessage(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        ContactMessages::create($request->all());

        return redirect()->back()
            ->with(['success' => 'Thank you for contact us. We will contact you shortly.']);
    }
}
