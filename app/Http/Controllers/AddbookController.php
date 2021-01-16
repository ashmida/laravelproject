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
    
    public function index()
    {
    
        $addbooks = addbooks::all();
        return view('addbooks.index',compact('addbooks'));
    }

   
    public function create()
    {
        return view('addbooks.create');
    }

  
    public function store(StoreaddbooksRequest $request)
    {
        addbooks::create($request->validated());
        return redirect()->route('addbooks.index');
    }

    public function show(addbooks $addbooks)
    {
        return view('addbooks.show', compact('addbooks'));
    }

    
    public function edit(addbooks $addbooks)
    {
        return view('addbooks.edit', compact('addbooks'));
    }

    
    public function update(UpdateaddbooksRequest $request, addbooks $addbooks)
    {
       $addbooks ->update($request->validated());
       return redirect()->route('addbooks.index');
    }

    
    public function destroy(addbooks $addbooks)
    {
        $addbooks->delete();
        return redirects()->route('addbooks.index');
    }
}
