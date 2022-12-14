<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $managers = Manager::all();
        return view('employees.create', compact('managers'));
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
            'name' => 'required',
            'email' => 'required|email',
            'manager'=>'required',
            'phone' => 'required',
            'designation' => 'required',
            'salary' => 'required',
            'city' => 'required',
            'state' => 'required',
            'address' => 'required'
        ]);


        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->manager_id = $request->manager;
        $employee->phone = $request->phone;
        $employee->designation = $request->designation;
        $employee->salary = $request->salary;
        $employee->city = $request->city;
        $employee->state = $request->state;
        $employee->address = $request->address;

        $employee->save();

        return redirect('/employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
       // $employee = Employee::find();
        $manager = Manager::find($employee->manager_id);
        return view('employees.show', compact('employee','manager'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //$employee = Employee::find($id);
        $managers = Manager::all();
        return view('employees.edit', compact('employee','managers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'designation' => 'required',
            'salary' => 'required',
            'city' => 'required',
            'state' => 'required',
            'address' => 'required'
        ]);

        //$employee = Employee::find($id);

        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->designation = $request->designation;
        $employee->salary = $request->salary;
        $employee->city = $request->city;
        $employee->state = $request->state;
        $employee->address = $request->address;

        $employee->save();

        return redirect('/employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
       // $employee = Employee::find($id);

        $employee->delete();

        return redirect('/employees');
    }
}
