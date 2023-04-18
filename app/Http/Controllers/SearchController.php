<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $video = Video::where('title', 'LIKE', "%$query%")->get();
        return response()->json($video);
    }
}
