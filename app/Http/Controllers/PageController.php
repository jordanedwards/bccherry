<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }
    
    public function OurCherries()
    {
        return view('pages.our-cherries');
    }

    public function SalesDirectory()
    {
        return view('pages.sales-directory');
    }

    public function EmploymentInfo()
    {
        return view('pages.employment-info');
    }

    public function EmploymentDirectory()
    {
        return view('pages.employment-directory');
    }

    public function ApplicationForm()
    {
        return view('pages.application-form');
    }

    public function AboutUs()
    {
        return view('pages.about-us');
    }

    public function Membership()
    {
        return view('pages.membership');
    }

    public function FAQ()
    {
        return view('pages.faq');
    }

    public function News()
    {
        return view('pages.news');
    }

    public function Links()
    {
        return view('pages.links');
    }

    public function Members()
    {
        return view('pages.members-list');
    }

    public function Contact()
    {
        return view('home');
    }

    // Features

    public function GrowerResources()
    {
        return view('pages.grower-resources');
    }

    public function OurMarketing()
    {
        return view('pages.our-marketing');
    }

    public function OurResearch()
    {
        return view('pages.our-research');
    }

}
