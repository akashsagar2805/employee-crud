<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;

class ManagersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $managers = Manager::all();
        return view('managers.index',compact('managers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('managers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $manager = $request->validate([
            'name'=>'required',
            'email'=>'required|email'
        ]);

        $manager = new Manager();
        $manager->name = $request->name;
        $manager->email = $request->email;

        $manager->save();
        return redirect('/managers');
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Manager $manager
     * @return \Illuminate\Http\Response
     */
    public function show(Manager $manager)
    {
        return view('managers.show',compact('manager'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Manager $manager
     * @return \Illuminate\Http\Response
     */
    public function edit(Manager $manager)
    {
        return view('managers.edit', compact('manager'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Manager $manager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manager $manager)
    {
         $request->validate([
            'name'=>'required',
            'email'=>'required|email'
        ]);

        $manager->name = $request->name;
        $manager->email = $request->email;

        $manager->save();

        return redirect('/managers');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param   App\Models\Manager $manager
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manager $manager)
    {
        $manager->delete();
        return redirect('/managers');
    }
}
