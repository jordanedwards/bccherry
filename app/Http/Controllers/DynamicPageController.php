<?php

namespace App\Http\Controllers;

use App\Cherry;
use App\Page;

class DynamicPageController extends Controller
{
    public function index()
    {
        return view('home');
    }
    
    public function OurCherries()
    {
        $cherries = Cherry::where('published', '1')->orderBy('name', 'asc')->get();
        if (!$cherries){
            return view('errors.404');
        }

        $data = [
            "cherries" => $cherries,
        ];

        return view('pages.our-cherries', $data);
    }

    public function SalesDirectory()
    {
        return view('pages.sales-directory');
    }

    public function EmploymentInfo()
    {
        $employment_page = Page::where('slug', 'employment-info')->first();
        if (!$employment_page){
            return view('errors.404');
        }

        $data = [
            "page" => $employment_page,
            'title' => 'BC Cherry Association',
            'footer' => 'dark',
            'side_menu' => 'employment'
        ];

        return view('pages.standard-page', $data);
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
        $page = Page::where('slug', 'about-us')->first();
        if (!$page){
            return view('errors.404');
        }

        $data = [
            "page" => $page,
            'title' => 'BC Cherry Association',
            'footer' => 'dark',
            'side_menu' => 'association'
        ];

        return view('pages.standard-page', $data);
    }

    public function Membership()
    {
        $page = Page::where('slug', 'membership')->first();
        if (!$page){
            return view('errors.404');
        }

        $data = [
            "page" => $page,
            'title' => 'BC Cherry Association',
            'footer' => 'dark',
            'side_menu' => 'association'
        ];

        return view('pages.standard-page', $data);
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
        $page = Page::where('slug', 'grower-resources')->first();
        if (!$page){
            return view('errors.404');
        }

        $data = [
            "page" => $page,
            'title' => 'BC Cherry Association',
            'footer' => 'dark',
            'side_menu' => ''
        ];

        return view('pages.parallax-header-page', $data);
    }

    public function OurMarketing()
    {
        $page = Page::where('slug', 'our-marketing')->first();
        if (!$page){
            return view('errors.404');
        }

        $data = [
            "page" => $page,
            'title' => 'BC Cherry Association',
            'footer' => 'dark',
            'side_menu' => ''
        ];

        return view('pages.parallax-header-page', $data);
    }

    public function OurResearch()
    {
        $page = Page::where('slug', 'our-research')->first();
        if (!$page){
            return view('errors.404');
        }

        $data = [
            "page" => $page,
            'title' => 'BC Cherry Association',
            'footer' => 'dark',
            'side_menu' => ''
        ];

        return view('pages.parallax-header-page', $data);
    }

}
