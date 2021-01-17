<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff;

const STAFFS = '/staffs';
class staffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = staff::all();
        return view('staffs.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'img'=>'required',
            'name'=>'required',
            'role'=>'required',
            'email'=>'required',
            'id'=>'required'
        ]);

        $staffs = new staff([
            'User_pic' => $request->get('img'),
            'User_name' => $request->get('name'),
            'User_role' => $request->get('role'),
            'User_email' => $request->get('email'),
            'User_id' => $request->get('id')
        ]);
        $staffs->save();
        return redirect(STAFFS)->with('success', 'User Details Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = staff::find($id);
        return view('staffs.show', compact('staffs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staffs = staff::find($id);
        return view('staffs.edit', compact('staffs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $staffs = staff::find($id);
        $staffs->User_pic =  $request->get('img');
        $staffs->User_name = $request->get('name');
        $staffs->User_role = $request->get('role');
        $staffs->User_email = $request->get('email');
        $staffs->User_id = $request->get('id');
        $staffs->save();
        return redirect(STAFFS)->with('success', 'User Details Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staffs = staff::find($id);
        $staffs->delete();
        return redirect(STAFFS)->with('success', 'User Deleted!');
    }
}
