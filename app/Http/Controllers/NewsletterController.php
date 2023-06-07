<?php

namespace App\Http\Controllers;
use Illuminate\Validation\ValidationException;
use App\Services\Newsletter;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    
    public function __invoke(Newsletter $newsletter){
       
        request()->validate(['email' => 'required|email']);
     try {

        $newsletter->subscribe(request('email'));
        
    } catch (\Exception $e) {
        throw ValidationException::withMessages([
            'email' => 'This email could not be added to our newsletter list.'
        ]);
    }
    return redirect('/')
            ->with('success', 'Thank you for subscribing to our newsletter!');
    }
}