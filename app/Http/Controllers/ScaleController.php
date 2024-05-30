<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreScaleRequest;
use App\Http\Requests\UpdateScaleRequest;
use App\Models\Scale;

class ScaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scales = Scale::with('trackings')->get();

        return view('scale.index', ['scales' => $scales]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('scale.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScaleRequest $request)
    {
        $scale = Scale::create($request->validated());

        return redirect(route('scales.show', ['scale' => $scale]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Scale $scale)
    {
        $scale->load('trackings');

        return view('scale.show', ['scale' => $scale]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Scale $scale)
    {
        return view('scale.edit', ['scale' => $scale]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScaleRequest $request, Scale $scale)
    {
        $scale->update($request->validated());

        return redirect(route('scales.show', ['scale' => $scale]));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Scale $scale)
    {
        $scale->delete();

        return redirect(route('scales.index'));
    }
}
