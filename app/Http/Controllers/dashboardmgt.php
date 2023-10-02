<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\user_step;

//use App\Models\UserElegible;

class dashboardmgt extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        

        //return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */

     public function edit(Request $request): View
     {
        $uid = Auth::user()->id;

        //$result = DB::select('select * from user_step where userid = ?', $uid );


        $result = DB::table('user_steps')
    ->selectRaw('*')
    ->where('userid', '=', $uid )
    ->get();

        foreach($result as $nresult){
            $unid =  $nresult->userid;
            $stepone = $nresult->step1;
            $steptwo = $nresult->step2;
            $stepthree = $nresult->step3;
            $stepfour = $nresult->step4;
        }
        $resuser1 = count($result);
        if($resuser1==1){

            if ($steptwo == null and $stepthree ==null and $stepfour == null){
               $sts = "steptwo";
                return view('content.edit')->with(['iduser'=>$unid,'spts'=> $sts]);

            }elseif($steptwo != null and $stepthree ==null and $stepfour == null){
                $sts = "stepthree";
                return view('content.edit')->with(['iduser'=>$unid,'spts'=> $sts]);
            }elseif($steptwo != null and $stepthree !=null and $stepfour == null){
                $sts = "stepfour";
                return view('content.edit')->with(['iduser'=>$unid,'spts'=> $sts]);
            }elseif($steptwo != null and $stepthree !=null and $stepfour != null){
                $sts = "stepfive";
                return view('content.edit')->with(['iduser'=>$unid,'spts'=> $sts]);
            }else{
                $sts = "stepone";
                return view('content.edit')->with(['iduser'=>$unid,'spts'=> $sts]);
            }
        
        }else{return view('content.edit');}
     }



    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        //
        if ($request->unsts == "one"){
            $affected = DB::insert('insert into user_steps (userid) values (?)', array($request->unid));
        }elseif($request->unsts == "two"){
            $affected = DB::update(
                'update user_steps set step2 = ? where userid  = ?',
                [now(),$request->unid]
            );
        }elseif($request->unsts == "three"){
            $affected = DB::update(
                'update user_steps set step3 = ? where userid  = ?',
                [now(),$request->unid]
            );
        }elseif($request->unsts == "four"){
            $affected = DB::update(
                'update user_steps set step4 = ? where userid  = ?',
                [now(),$request->unid]
            );
        }
        return Redirect::route('content.store')->with('status', 'profile-updated');
    }
   

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
