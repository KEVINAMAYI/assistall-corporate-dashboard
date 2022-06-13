<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Load Employees data
     *
     * @return view
     */
    public function index()
    {
        
        $employees = Employee::all();
        return view('corporate-dashboard.employees')->with(['employees' => $employees ]);

    }


    /**
     * Add an Employee to the database and return a view with a success message
     *
     * @param  \Illuminate\Http\Request  $request
     * @return  view
     */
    public function addEmployee(Request $request)
    {

         //validate new employee and store details to db
         $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => 'required',
            'id_number' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
         ]);

         $data = $request->all();

         Employee::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone_number' => $data['phone'],
            'id_number' => $data['id_number'],
            'email' => $data['email'],

         ]);
        
         session()->flash('success','Employee added Successfully');
         return redirect()->back();

    }

   

    /**
     * Edit Employees data.
     *
     * @param  \Illuminate\Http\Request  $request, Class Employee employee
     * @return  view
     */
    public function editEmployee(Employee $employee)
    {
        //
    }

  

    /**
     * Delete Employees data.
     *
     * @param  \Illuminate\Http\Request  $request, Class Employee employee
     * @return  view
     */
    public function deleteEmployee(Employee $employee)
    {
        $employee->delete();
        session()->flash('success','Employee deleted Successfully');
        return redirect()->back();
    }
}
