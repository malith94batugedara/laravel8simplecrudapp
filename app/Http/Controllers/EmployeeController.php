<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Http\Requests\EmployeeFormRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees=Employee::all();
        return view('employee.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeFormRequest $request)
    {
        $data = $request->validated();

        $employee = new Employee;

        $employee->name = $data['empname'];

        $employee->age = $data['empage'];

        $employee->address = $data['empaddress'];

        $employee->department = $request->empdep;

        $employee->save();

        return redirect(route('employee.index'))->with('status','Employee Added Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($empid)
    {
        $employee=Employee::find($empid);
        return view('employee.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeFormRequest $request, $empid)
    {
        $data = $request->validated();

        $employee = Employee::find($empid);

        $employee->name = $data['empname'];

        $employee->age = $data['empage'];

        $employee->address = $data['empaddress'];

        $employee->department = $request->empdep;

        $employee->update();

        return redirect(route('employee.index'))->with('status','Employee Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($empid)
    {
        $employee = Employee::find($empid);

        $employee->delete();

        return redirect(route('employee.index'))->with('status','Employee Deleted Successfully!');
    }
}
