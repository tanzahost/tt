<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function pricing() {
        $pageTitle = 'Pricing';
        return view('templates.basic.pricing.index', compact('pageTitle'));
    }

    public function security() {
        $pageTitle = 'Security & Technology';
        return view('templates.basic.security.index', compact('pageTitle'));
    }

    public function support() {
        $pageTitle = 'Support';
        return view('templates.basic.support.index', compact('pageTitle'));
    }

    public function panel() {
        $pageTitle = 'Control Panel';
        return view('templates.basic.panel.index', compact('pageTitle'));
    }

    public function uptime() {
        $pageTitle = 'Our Uptime Guarantees';
        return view('templates.basic.uptime.index', compact('pageTitle'));
    }

    public function reviews() {
        $pageTitle = 'Our Customers Reviews';
        return view('templates.basic.reviews.index', compact('pageTitle'));
    }

    public function partners() {
        $pageTitle = 'Our Partners';
        return view('templates.basic.partners.index', compact('pageTitle'));
    }
}
