<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class BranchController extends Controller
{

    
    /**
     * Display a listing of the branches.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //Logged in user_id data
        $user_id = Auth::user()->id;
        $branches = Branch::where('user_id','=',$user_id)->get();
        return view('corporate-dashboard.branches')->with(['branches' => $branches]);

    }


    /**
     * Add a Branch to the database and return a view with a success message.
     *
     * @return \Illuminate\Http\Response
     */
    public function addBranch(Request $request)
    {   
         //Logged in user_id
         $user_id = Auth::user()->id;

         //validate new branch and store details to db
         $request->validate([
            'branch_code' => ['required', 'string', 'max:255'],
            'branch_name' => ['required', 'string', 'max:255']
         ]);

         $data = $request->all();

         Branch::create([

            'user_id' => $user_id,
            'branch_code' => $data['branch_code'],
            'branch_name' => $data['branch_name'],
         ]);
        
         session()->flash('success','Branch added Successfully');
         return redirect()->back();
    }


    
    /**
     * get Branch data.
     *
     * @param  Class Branch $branch
     * @return  Json
     */
    public function getBranchData(Branch $branch)
    {
        $branch = Branch::where('id','=',$branch->id)->get();
        return response()->json([
                'branch' => $branch
            ]);
    }
  

    /**
     * Edit Branch data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return  view
     */
    public function editBranch(Request $request)
    {

        //validate edited branch and store details to db
        $request->validate([
            'edited_branch_code' => ['required', 'string', 'max:255'],
            'edited_branch_name' => ['required', 'string', 'max:255']
         ]);

         $data = $request->all();

         Branch::where('id','=',$data['branch_id'])->update([
            'branch_code' => $data['edited_branch_code'],
            'branch_name' => $data['edited_branch_name'],
         ]);
        
         session()->flash('success','Branch Edited Successfully');
         return redirect()->back();
        
    }



     /**
     * Delete Branch data.
     *
     * @param  \Illuminate\Http\Request  $request, Class Branch $branch
     * @return  view
     */
    public function deleteBranch(Branch $branch)
    {
        $branch->delete();
        session()->flash('success','Branch deleted Successfully');
        return redirect()->back();
    }
}
