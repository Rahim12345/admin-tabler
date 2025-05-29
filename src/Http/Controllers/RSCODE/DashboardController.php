<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Visitor;

class DashboardController extends Controller
{
    public function index()
    {
        $totalVisitors = Visitor::count();
        $uniqueVisitors = Visitor::distinct('ip_address')->count('ip_address');
        $visitorsLast30Days = Visitor::where('visited_at', '>=', now()->subDays(30))->count();

        $dailyVisitors = Visitor::where('visited_at', '>=', now()->subDays(30))
            ->selectRaw('DATE(visited_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date', 'desc')
            ->get();

        return view('back.pages.dashboard.index', compact('totalVisitors', 'uniqueVisitors', 'visitorsLast30Days', 'dailyVisitors'));
    }
}
