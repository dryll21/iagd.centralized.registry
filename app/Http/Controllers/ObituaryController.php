<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ObituaryController;
use App\Models\Obituary;
use Redirect,Response;

class ObituaryController extends Controller
{
    public function index()
    {
        //
        $data['ob_data'] = Obituary::orderBy('ob_id','desc')->get();
   
        return view('dashboard.index',$data);
        // return view('dashboard.layout',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $postID = $request->post_id;
        $ob_pet   =   Obituary::updateOrCreate(['ob_id' => $postID],
                    ['iagd_no' => $request->iagd_no,
                     'animal_name' => $request->animal_name,
                     'PetType' => $request->PetType,
                     'Date_of_death' => $request->Date_of_death
                    ]);
    
        return Response::json($ob_pet);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ob_id)
    {
        //
        $where = array('ob_id' => $ob_id);
        $ob_pet  = Obituary::where($where)->first();
 
        return Response::json($ob_pet);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $ob_pet = Obituary::where('ob_id',$id)->delete();
   
        return Response::json($ob_pet);
    }
}
