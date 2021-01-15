<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSearchbookRequest;
use App\Http\Requests\UpdateSearchbookRequest;
use App\Models\Searchbook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class SearchbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $searchbook = Searchbook::all();
        return view('searchbook.index', compact('searchbook'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('searchbook.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSearchbookRequest $request)
    {
        searchbook::create($request->validated());

        return redirect()->route('searchbook.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Searchbook $searchbook)
    {

        return view('searchbook.show', compact('searchbook'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Searchbook $searchbook)
    {
        return view('searchbook.edit', compact('searchbook'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSearchbookRequest $request, Searchbook $searchbook)
    {
        $searchbook->update($request->validated());

        return redirect()->route('searchbook.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Searchbook $searchbook)
    {
        $searchbook->delete();
        return redirect()->route('searchbook.index');
    }
}
