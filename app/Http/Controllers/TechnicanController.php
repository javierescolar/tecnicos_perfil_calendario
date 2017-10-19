<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Technician;
use App\Profile;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class TechnicanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technicians = Technician::all();
        return view("technicians/index",compact("technicians"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profiles = Profile::all();
        return view("technicians/create",compact('profiles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =  Input::all();
        $technician = new Technician();
        $technician->name = $data['name'];
        $technician->last_name = $data['last_name'];
        $technician->email = $data['email'];
        
        if(($data['name'] != "" && $data['last_name'] != "" && $data['email'] != "") && $technician->save()){
            

            $sync_data = [];
            foreach($data['profile'] as $key => $profile){
                $sync_data[$profile] = ['technician_id_trc' => $data['technician_id_trc'][$key] ];
            }
            $technician->profiles()->sync($sync_data);
            return view("technicians/show",compact("technician"));
        } else {
            return redirect("/technicians");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $technician = Technician::find($id);
        if($technician){
            return view("technicians/show",compact("technician"));
        } else {
            return redirect("/technicians");
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $technician = Technician::find($id);
        $profiles = Profile::all();
        if($technician){
            return view("technicians/edit",compact("technician","profiles"));
        } else {
            return redirect("/technicians");
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $technician = Technician::find($id);
        $data =  Input::all();
        if($technician && ($data['name'] != "" && $data['last_name'] != "" && $data['email'] != "" )){
            
            $technician->name = $data['name'];
            $technician->last_name = $data['last_name'];
            $technician->email = $data['email'];
            
    
            $sync_data = [];
            foreach($data['profile'] as $key => $profile){
                $sync_data[$profile] = ['technician_id_trc' => $data['technician_id_trc'][$key] ];
            }
            $technician->profiles()->detach();
            if($technician->profiles()->sync($sync_data) && $technician->update()){
                return view("technicians/show",compact("technician"));
            } else {
                return redirect("/technicians");
            }
        } else {
            return redirect("/technicians");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $technician = Technician::find($id);
        if($technician){
           $technician->profiles()->detach();
           $technician->delete();
        } 
        return redirect("/technicians");
        
    }
}
