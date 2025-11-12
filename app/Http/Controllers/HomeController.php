<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard.crm-analytics');
    }

    public function orders()
    {
        return view('dashboard.orders');
    }

    public function cryptoOne()
    {
        return view('dashboard.crypto-1');
    }

    public function cryptoTwo()
    {
        return view('dashboard.crypto-2');
    }

    public function cbankingOne()
    {
        return view('dashboard.banking-1');
    }

    public function bankingTwo()
    {
        return view('dashboard.banking-2');
    }

    public function personal()
    {
        return view('dashboard.personal');
    }

    public function cmsAnalytics()
    {
        return view('dashboard.cms-analytics');
    }

    public function influencer()
    {
        return view('dashboard.influencer');
    }

    public function travel()
    {
        return view('dashboard.travel');
    }

    public function teacher()
    {
        return view('dashboard.teacher');
    }

    public function education()
    {
        return view('dashboard.education');
    }

    public function authors()
    {
        return view('dashboard.authors');
    }

    public function doctor()
    {
        return view('dashboard.doctor');
    }

    public function employees()
    {
        return view('dashboard.employees');
    }

    public function workspace()
    {
        return view('dashboard.workspace');
    }

    public function meeting()
    {
        return view('dashboard.meeting');
    }

    public function projectBoards()
    {
        return view('dashboard.project-boards');
    }

    public function widgetUI()
    {
        return view('dashboard.widget-ui');
    }

    public function widgetContacts()
    {
        return view('dashboard.widget-contacts');
    }
}

