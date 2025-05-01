<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('frontend.home');
    }

    public function index2(): View
    {
        return view('frontend.index-2');
    }

    public function index3(): View
    {
        return view('frontend.index-3');
    }

    public function index4(): View
    {
        return view('frontend.index-4');
    }

    public function index5(): View
    {
        return view('frontend.index-5');
    }

    public function index6(): View
    {
        return view('frontend.index-6');
    }

    public function index7(): View
    {
        return view('frontend.index-7');
    }

    public function about(): View
    {
        return view('frontend.about');
    }

    public function blog1(): View
    {
        return view('frontend.blog-1');
    }

    public function blog2(): View
    {
        return view('frontend.blog-2');
    }

    public function blogDetails(): View
    {
        return view('frontend.blog-details');
    }

    public function featured(): View
    {
        return view('frontend.featured');
    }

    public function useCases(): View
    {
        return view('frontend.use-cases');
    }

    public function copywrite(): View
    {
        return view('frontend.copywrite');
    }

    public function faq(): View
    {
        return view('frontend.faq');
    }

    public function login(): View
    {
        return view('frontend.login');
    }

    public function register(): View
    {
        return view('frontend.register');
    }

    public function pricing(): View
    {
        return view('frontend.pricing');
    }

    public function privacyPolicy(): View
    {
        return view('frontend.privacy-policy');
    }

    public function termsService(): View
    {
        return view('frontend.terms-service');
    }
} 