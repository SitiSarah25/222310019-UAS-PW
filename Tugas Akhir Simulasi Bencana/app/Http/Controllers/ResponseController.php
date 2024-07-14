<?php

namespace App\Http\Controllers;

use App\Models\Disaster;
use App\Models\Province;
use App\Models\Report;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function index()
    {
        $disasters = Disaster::all();
        $provinces = Province::all();
        return view('auth.admin.response', [
            'disasters' => $disasters,
            'provinces' => $provinces
        ]);
    }

    public function result(Request $request)
    {
        $disasterId = $request->disaster_id;
        $provinceId = $request->province_id;
        $disasters = Disaster::all();
        $provinces = Province::all();

        $reports = Report::where('disaster_id', $disasterId)->where('province_id', $provinceId)->with(['disaster', 'province', 'city'])->get();

        $provinceRespondentCounts = Report::selectRaw('province_id, COUNT(*) as count')
            ->groupBy('province_id')
            ->pluck('count', 'province_id');

        $totalRespondents = $reports->count();

        return view('auth.admin.response', [
            'reports' => $reports,
            'disasters' => $disasters,
            'provinces' => $provinces,
            'provinceRespondentCounts' => $provinceRespondentCounts,
            'totalRespondents' => $totalRespondents
        ]);
    }
}
