<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('welcome', compact('testimonials'));
    }
    public function about()
    {
        $members = Member::all();
        return view('landingpage.about',compact('members'));
    }
    public function artikel()
    {
        return view('landingpage.artikel');
    }
    public function test()
    {
        return view('landingpage.test');
    }
    public function diskusi()
    {
        return view('landingpage.diskusi');
    }
    public function detailArtikel()
    {
        return view('landingpage.detail-artikel');
    }
    public function detailKategori()
    {
        return view('landingpage.detail-kategori');
    }
}
