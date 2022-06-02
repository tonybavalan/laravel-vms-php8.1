<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display the employee index page for the user.
     *
     */
    public function indexEmployees()
    {
        $employees = Employee::with(['department', 'role'])->get();
        return view('employees.index', compact('employees'));
    }

    /**
     * Display the employee index page for the user.
     *
     */
    public function indexAddEmployees()
    {
        $departments = Department::all();
        $roles = Role::all();
        return view('employees._form', compact('departments','roles'));
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['created_by'] = auth()->user()->id;
        $data['updated_by'] = auth()->user()->id;
        
        if($request->file('avatar')):
            $fileName = time().$request->file('avatar')->getClientOriginalName();
            $path = $request->file('avatar')->storeAs('avatars', $fileName, 'public');
            $data['avatar'] = '/storage/'.$path;
        endif;

        Employee::create($data);

        return redirect()->back();
    }

    public function show($id)
    {
    }
}
