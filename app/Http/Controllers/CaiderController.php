<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Caider;
use App\CaiderSchedule;
use Illuminate\Support\Facades\Input;

class CaiderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules = [
        'name' => 'required|min:3',
        'local_id_trc' => 'required',
        'address' => 'required|min:5',
        'phone' => 'required|min:9|max:9',
        'zip_code' => 'required|min:5|max:5',
    ];
     
    public function index()
    {
        $caiders = Caider::all();
        return view('caiders/index',compact('caiders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('caiders/create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules);
        
        $data =  Input::all();
        
        $caider = new Caider();
        
        $caider->local_id_trc = $data['local_id_trc'];
        $caider->name = $data['name'];
        $caider->address = $data['address'];
        $caider->phone = $data['phone'];
        $caider->zip_code = $data['zip_code'];
        
        

        if($caider->save()){
            $caiderSchedules = [];
            for($i = 0; $i < count($data['schedule_from']); $i++){
                $caiderSchedules[$i] = new CaiderSchedule([
                                    'caider_id' => $caider->id,
                                    'schedule_from' => $data['schedule_from'][$i],
                                    'schedule_to' => $data['schedule_to'][$i],
                                    'weekday' => $data['weekday'][$i]
                                  ]);
                
            }
            $caider->schedules()->saveMany($caiderSchedules);
            $date_search = date('Y-m-d');
            return view("caiders/show",compact("caider","date_search"));
        } else {
            return redirect("/caiders");
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
        $caider = Caider::find($id);
        $date_search = date('Y-m-d');
        return view('caiders/show',compact('caider','date_search'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caider = Caider::find($id);
  
        if($caider){
            return view("caiders/edit",compact('caider'));
        } else {
            return redirect("/caiders");
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
        $this->validate($request, $this->rules);
        
        $data =  Input::all();
        
        $caider =  Caider::find($id);
        
        if($caider){
            $caider->local_id_trc = $data['local_id_trc'];
            $caider->name = $data['name'];
            $caider->address = $data['address'];
            $caider->phone = $data['phone'];
            $caider->zip_code = $data['zip_code'];
            
        
    
            if($caider->update()){
                if($caider->schedules){
                    $caider->schedules()->delete();
                }
                $caiderSchedules = [];
                for($i = 0; $i < count($data['schedule_from']); $i++){
                    $caiderSchedules[$i] = new CaiderSchedule([
                                        'caider_id' => $caider->id,
                                        'schedule_from' => $data['schedule_from'][$i],
                                        'schedule_to' => $data['schedule_to'][$i],
                                        'weekday' => $data['weekday'][$i]
                                      ]);
                    
                }
                $caider->schedules()->saveMany($caiderSchedules);
                $date_search = date('Y-m-d');
                $caider =  Caider::find($id);
                return view("caiders/show",compact("caider","date_search"));
            }else {
                return redirect("/caiders");
            }
        } else {
            return redirect("/caiders");
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
        $caider = Caider::find($id);
        if($caider){
            if($caider->schedules){
                $caider->schedules()->delete();
            }
            $caider->delete();
        } 
        return redirect("/caiders");
    }
    
    public function searchDate(Request $request,$id) {
        $caider = Caider::find($id);
        $date_search = $request->date_search;
        return view('caiders/show',compact('caider','date_search'));
    }
    
    public function updateSchedule ($id) {
        $caider = Caider::find($id);
        return view('caiders/update_schedule',compact('caider'));
    }
}
