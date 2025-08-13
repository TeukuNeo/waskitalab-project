<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index(){
        return view('halaman.index');
    }

    function RoadmapPubSpeak(){
        return view('halaman.RoadmapPubSpeak');
    }

    function RoadmapLiteratureAI(){
        return view('halaman.RoadmapLiteratureAI');
    }

    function RoadmapPersonalBranding(){
        return view('halaman.RoadmapPersonalBranding');
    }

    function RoadmapFreelancing(){
        return view('halaman.RoadmapFreelancing');
    }

    function Project() {
        return view('halaman.Project');
    }
}
