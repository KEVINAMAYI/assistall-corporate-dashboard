<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the branches.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::all();
        return view('corporate-dashboard.branches')->with(['branches' => $branches]);


    }



    /**
     * Add a Branch to the database and return a view with a success message.
     *
     * @return \Illuminate\Http\Response
     */
    public function addBranch(Request $request)
    {
         //validate new branch and store details to db
         $request->validate([
            'branch_code' => ['required', 'string', 'max:255'],
            'branch_name' => ['required', 'string', 'max:255']
         ]);

         $data = $request->all();

         Branch::create([
            'branch_code' => $data['branch_code'],
            'branch_name' => $data['branch_name'],
         ]);
        
         session()->flash('success','Branch added Successfully');
         return redirect()->back();
    }

  

      /**
     * Edit Branch data.
     *
     * @param  \Illuminate\Http\Request  $request, Class Branch $branch
     * @return  view
     */
    public function editBranch(Branch $branch)
    {
        //
    }




     /**
     * Delete Branch data.
     *
     * @param  \Illuminate\Http\Request  $request, Class Branch $branch
     * @return  view
     */
    public function deleteBranch(Branch $branch)
    {
        //
    }
}
