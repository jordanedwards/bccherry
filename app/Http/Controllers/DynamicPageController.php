<?php

namespace App\Http\Controllers;

use App\Cherry;
use App\FAQ;
use App\Member;
use App\NewsItem;
use App\Page;
use Carbon\Carbon as Carbon;
use Illuminate\Http\Request;

class DynamicPageController extends Controller
{
    public function index()
    {
        // Get most recent two news items
        $news = NewsItem::where('published', '1')->orderBy('created_at', 'desc')->limit(2)->get();

        if (!$news){
            $data = [
                "news" => [],
            ];
        } else {
            $data = [
                "news" => $news,
            ];
        }

        return view('home', $data);
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

    public function SalesDirectory(Request $request)
    {
        $where = [
            ['sales_directory_active', "=",  '1'],
            ['active', "=", '1'],
        ];


        if ($request->has('searchTerm')){
            $where = [
                ['sales_directory_active', "=",  '1'],
                ['active', "=", '1'],
                ['name', "LIKE", "%" . $request->get('searchTerm') . "%"],
            ];

            $orWhere_lead = [
                ['sales_directory_active', "=",  '1'],
                ['active', "=", '1'],
                ['name', "LIKE", $request->get('searchTerm') . "%"],
            ];

            $orWhere_follow = [
                ['sales_directory_active', "=",  '1'],
                ['active', "=", '1'],
                ['name', "LIKE", $request->get('searchTerm') . "%"],
            ];

            $members = Member::where($where)
                ->orWhere($orWhere_lead)
                ->orWhere($orWhere_follow)
                ->orderBy('name', 'asc')
                ->get();
        }

        elseif($request->has('filter')) {
            // Evaluate filters
            $filter = $request->get('filter');
            $value = $request->get('value');

            if ($filter == "city"){
                $where = [
                    ['sales_directory_active', "=",  '1'],
                    ['active', "=", '1'],
                    ['city', $value]
                ];
            } elseif($filter == "variety"){

            } elseif($filter == "harvest"){

            } elseif($filter == "certification"){

            }

            $members = Member::where($where)
                ->orderBy('name', 'asc')
                ->get();
        }

        else
        {
            $members = Member::where($where)
                ->orderBy('name', 'asc')
                ->get();
        }


        if (!$members){
            return view('errors.404');
        }

        $cherries = Cherry::orderBy('name', 'asc')->get();
        if (!$cherries){
            return view('errors.404');
        }

        $data = [
            'members' => $members,
            'title' => 'BC Cherry Association',
            'footer' => 'dark',
            'side_menu' => 'employment',
            "cherries" => $cherries,
        ];

        return view('pages.sales-directory', $data);
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
        $page = Page::where('slug', 'employment-directory')->first();
        if (!$page){
            return view('errors.404');
        }

        $members = Member::where('employment_directory_active', '1')
            ->where('active', '1')
            ->orderBy('name', 'asc')
            ->get();

        if (!$members){
            return view('errors.404');
        }

        $data = [
            'members' => $members,
            'page' => $page,
            'title' => 'BC Cherry Association',
            'footer' => 'dark',
            'side_menu' => 'employment',
        ];

        return view('pages.employment-directory', $data);
    }

    public function ApplicationForm()
    {
        return view('pages.application-form');
    }

    public function ExportingToPRC()
    {
        $page = Page::where('slug', 'exporting-to-prc')->first();
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

    public function Members()
    {
        $data = [
            "page" => (object) [
                "title" => "Member Login",
                "updated_at" => Carbon::now(),
                "content" => "<p>Coming Soon</p>"
            ],
            'title' => 'BC Cherry Association',
            'footer' => 'dark',
            'side_menu' => 'association'
        ];

        return view('pages.standard-page', $data);
    }

    public function FAQ()
    {
        $page = Page::where('slug', 'faqs')->first();
        if (!$page){
            return view('errors.404');
        }

        $faqs = FAQ::orderBy('id', 'asc')->get();
        if (!$faqs){
            return view('errors.404');
        }

        $data = [
            "page" => $page,
            "faqs" => $faqs,
        ];

        return view('pages.faq', $data);

    }

    public function News()
    {
        $news = NewsItem::where('published', '1')
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        if (!$news){
            return view('errors.404');
        }

        $data = [
            'news' => $news,
            'title' => 'BC Cherry Association',
            'footer' => 'dark',
            'side_menu' => 'association',
        ];

        return view('pages.news', $data);
    }

    public function Links()
    {
        return view('pages.links');
    }

//    public function Members()
//    {
//        return view('pages.member-list');
//    }

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
