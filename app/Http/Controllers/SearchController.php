<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourGroup;
use App\Models\UpcommingTourPlan;
use App\Models\TourPlan;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        $searchQuery = $request->input('search_query');

        $tourplans = Tourplan::where('location', 'LIKE', "%$searchQuery%")->get();
        $upcomingTourplans = UpcommingTourPlan::where('location', 'LIKE', "%$searchQuery%")->get();
        $tourGroups = TourGroup::where('group_name', 'LIKE', "%$searchQuery%")->get();

        return view('frontend.search_results', compact('tourplans', 'upcomingTourplans', 'searchQuery'));
    }
    }

