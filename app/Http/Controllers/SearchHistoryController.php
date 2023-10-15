<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserSearchHistory;
use App\Models\User;
use DB;
use Carbon\Carbon;

class SearchHistoryController extends Controller
{
    public function index()
    {
        // Get all keywords with their counts
        $keywords = UserSearchHistory::select('search_keyword', DB::raw('count(*) as count'))
            ->groupBy('search_keyword')
            ->get();

        // Get all users
        $users = User::all();
        $searchResults = UserSearchHistory::with('user:id,name')->get();
        return view('search_history.index', compact('keywords', 'users','searchResults'));
    }

    public function search(Request $request){
          // Apply filters
          $filteredHistory = UserSearchHistory::query();
        //   $filteredHistory = UserSearchHistory::with('user:id,name')->query();

          if ($request->has('keywords')) {
              $filteredHistory->whereIn('search_keyword', $request->input('keywords'));
          }

          if ($request->has('users')) {
              $filteredHistory->whereIn('user_id', $request->input('users'));
          }

          if ($request->has('yesterday')) {
              $yesterday = Carbon::now()->subDay();
              $filteredHistory->where('search_time', '>=',$yesterday);
          }

          if ($request->has('lastweek')) {
                $lastWeekStartDay = Carbon::now()->subWeek()->startOfWeek();
                $lastWeekEndDay = Carbon::now()->subWeek()->endOfWeek();
                $filteredHistory->whereBetween('search_time',[$lastWeekStartDay,$lastWeekEndDay]);
            }

            if ($request->has('lastmonth')) {
                $lastMonthStartDay = Carbon::now()->subMonth()->startOfMonth();
                $lastMonthEndDay = Carbon::now()->subMonth()->endOfMonth();
                $filteredHistory->whereBetween('search_time',[$lastMonthStartDay,$lastMonthEndDay]);
            }

          if ($request->has('start_date') && $request->has('end_date')) {
              $filteredHistory->whereBetween('search_time', [$request->input('start_date'), $request->input('end_date')]);
          }

          $searchResults = $filteredHistory->get();
          return view('search_history.search_result',compact('searchResults'));
    }

}
