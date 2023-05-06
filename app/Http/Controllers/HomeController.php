<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   $videos = Video::limit(4)->get();

        return view('members.member', ['videos' => $videos]);
    }

    public function ProgramsController(){

        $videos = Video::all();
        return view('members.programs', ['videos' => $videos]);
    }
    public function ProgramController(){

        $videos = Video::all();
        return view('members.program', compact('videos'));
    }

    public function ProgramDashController(){

        $videos = Video::all();
        return view('members.program-f', compact('videos'));
    }

    public function PresentationsController()
    {   $videos = Video::paginate(20);
        $nextPageUrl = $videos->nextPageUrl();
       return view('members.eloadsok',
           [
               'videos' => $videos,
               'nextPageUrl' => $nextPageUrl,
           ]);
    }

    public function GuideController(){

        $videos = Video::all();
        return view('members.utmutatok', ['videos' => $videos]);

    }

    public function KnowledgeStoresController(){

        $videos = Video::all();
        return view('members.tudastar', ['videos' => $videos]);
    }

    public function CalendarsController(){

        $videos = Video::all();
        return view('members.naptar', ['videos' => $videos]);
    }


}
