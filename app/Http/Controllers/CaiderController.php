<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Caider;
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
        'phone' => 'required|length:9',
        'zip_code' => 'required|length:5',
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
        $caider->name = $date['name'];
        $caider->address = $data['address'];
        $caider->phone = $data['phone'];
        $caider->zip_code = $data['zip_code'];
        
         if($caider->save()){
            $sync_data = [];
            foreach($data['schedule_from'] as $key => $schedule_from){
                $sync_data[$schedule_from] = ['schedule_to' => $data['schedule_to'][$key], 'weekday' => $data['weekday'][$key] ];
            }
            $caider->schedules()->sync($sync_data);
            return view("caiders/show",compact("caider"));
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
        //
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
    }
    
    public function searchDate(Request $request,$id) {
        $caider = Caider::find($id);
        $date_search = $request->date_search;
        return view('caiders/show',compact('caider','date_search'));
    }
}
