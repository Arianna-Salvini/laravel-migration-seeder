<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $trains = Train::all();
    // $curentDay = now()->toDateString();
    // $trains = Train::whereDate('departure_time', $curentDay);
    // $trains = Train::where('departure_time', '>', '2024-05-15 00:00:00')->get();
    $trains = Train::where('departure_time', '>=', Carbon::now()->format('Y-m-d H:i:s'))->get();
    // dd($trains);
    return view ('guest.trains', compact('trains') );
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Train $train)
    {
        dd((Train::all()));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Train $train)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Train $train)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Train $train)
    {
        //
    }
}
