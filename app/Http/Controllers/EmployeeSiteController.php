<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Site;
use App\Models\EmployeeSite;
use Illuminate\Http\Request;

class EmployeeSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function create(Role $role)
    {
        $managers = $role->find(1)->employees()->get();
        $sites = Site::all();
        return view('sites.allocate_form', compact('managers', 'sites'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['employee_id'] = $request->employee_id;
        $data['sites_id'] = implode(' ',$request->sites_id);
        $data['created_by'] = auth()->user()->id;
        $data['updated_by'] = auth()->user()->id;

        EmployeeSite::create($data);

        return response()->json('sites allocated to employee successfully',200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeSite  $employeeSite
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeSite $employeeSite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployeeSite  $employeeSite
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeeSite $employeeSite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmployeeSite  $employeeSite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeSite $employeeSite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeSite  $employeeSite
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeSite $employeeSite)
    {
        //
    }
}
