<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\UserElegible;



class TokenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('checkelgibile');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->stsu == "yestoken"){
            
            $result = UserElegible::where('mrcb', $request->mrcbd)->where('token', $request->tokend)->where('headname', $request->hname)->get();
                
            $res = count($result);

            if($res == 1){
            foreach($result as $nresult){
                        $uid =  $nresult->id;
                        $uname = $nresult->headname;
                        $vid = $nresult->register_vid;

                        if($vid == 0){
                        return view('auth.register')->with(['usid'=>$uid,'randno'=>$request->tokend,'namehead'=>$uname]); }
                        else{return view('auth.login');}
                }
            }else{$message="error2"; 
                return view('checkelgibile')->with('msg',$message);}

        }else{
     
            if($request->hunit=='1' and $request->hhno == 1 and $request->uunit=='1' and $request->rrlabel=='1'){
                $rnumber = rand(100000,999999);

                $token = UserElegible::create([
                    'mrcb' => $request->mrcbf,
                    'headname' => $request->headlname,
                    'contactno' => $request->phone,
                    'token' => $rnumber,
                ]);

                $result = UserElegible::where('mrcb', $request->mrcbf)->where('token', $rnumber)->where('contactno', $request->phone)->get();

                foreach($result as $nresult){
                        $uid =  $nresult->id;
                        $uname = $nresult->headname;
                }
                
                return view('auth.register')->with(['usid'=>$uid,'randno'=>$rnumber,'namehead'=>$uname]);

            }else{
                
                $message="error"; 
                return view('checkelgibile')->with('msg',$message); }

            }
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
