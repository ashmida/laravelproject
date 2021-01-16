<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddRatingRequest;
use App\Http\Requests\UpdateAddRatingRequest;
use App\Models\AddRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class AddRatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addrating = AddRating::all();
        return view('addrating.index', compact('addrating'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addrating.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAddRatingRequest $request)
    {
        addrating::create($request->validated());

        return redirect()->route('addrating.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AddRating  $addrating
     * @return \Illuminate\Http\Response
     */
    public function show(AddRating $addrating)
    {
        $addrating = AddRating::all();
        return view('addrating.show', compact('addrating'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AddRating  $addrating
     * @return \Illuminate\Http\Response
     */
    public function edit(AddRating $addrating)
    {
        return view('addrating.edit', compact('addrating'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AddRating  $addrating
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAddRatingRequest $request, AddRating $addrating)
    {
        $addrating->update($request->validated());

        return redirect()->route('addrating.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddRating  $addrating
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddRating $addrating)
    {
        $addrating->delete();
        return redirect()->route('addrating.index');
    }
}
