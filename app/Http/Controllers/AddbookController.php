<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreaddbooksRequest;
use App\Http\Requests\UpdateaddbooksRequest;
use App\Models\addbooks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Redirect;

class AddbookController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
    
        $addbooks = addbooks::all();
        return view('addbooks.index',compact('addbooks'));
    }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addbooks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreaddbooksRequest $request)
    {
        addbooks::create($request->validated());
        return redirect()->route('addbooks.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AddRating  $addrating
     * @return \Illuminate\Http\Response
     */
    public function show(addbooks $addbooks)
    {
        
        return view('addbooks.show', compact('addbooks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AddRating  $addrating
     * @return \Illuminate\Http\Response
     */
    public function edit(addbooks $addbooks)
    {
       
        return view('addbooks.edit', compact('addbooks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AddRating  $addrating
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateaddbooksRequest $request, addbooks $addbooks)
    {
       $addbooks ->update($request->validated());
       return redirect()->route('addbooks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddRating  $addrating
     * @return \Illuminate\Http\Response
     */
    public function destroy(addbooks $addbooks)
    {
        $addbooks->delete();
        return redirects()->route('addbooks.index');
    }
}
