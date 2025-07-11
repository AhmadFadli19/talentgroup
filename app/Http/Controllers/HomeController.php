<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Slidebanner;
use Illuminate\Http\Request;
use App\Models\BannerCardCreate;
use App\Models\Kolaborasi;
use App\Models\SlideBlogger;

class HomeController extends Controller
{
    public function index() {
        $slidecard = Card::all();
        $slidebanner = Slidebanner::all();
        $bannerCard = BannerCardCreate::all();
        return view('Home/index', compact('slidecard', 'slidebanner', 'bannerCard'));
    }

    public function about() {
        return view('Home/about');
    }

    public function blog() {
        $slideblogger = SlideBlogger::all();
        return view('Home/blog', compact('slideblogger'));
    }

    public function partnerkolaborasi() {
        $kolaborasi = Kolaborasi::all();
        return view('Home/partnerkolaborasi', compact('kolaborasi'));
    }
}
