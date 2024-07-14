<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Models\Disaster;
use App\Models\Province;
use App\Models\Report;
use Illuminate\Http\RedirectResponse;

class DashboardController extends Controller
{

    public function index()
    {
        $disasters = Disaster::all();
        $provinces = Province::all();
        $cities = City::all();
        $reports = Report::with(['disaster', 'province', 'city'])->get();
        return view('auth.admin.dashboard', compact('provinces', 'cities', 'disasters', 'reports'));
    }

    public function getCities($provinceId)
    {
        $cities = City::where('province_id', $provinceId)->get();
        return response()->json($cities);
    }

    public function store(Request $request): RedirectResponse
    {
        Report::create($request->all());
        return redirect('/dashboard');
    }
}
