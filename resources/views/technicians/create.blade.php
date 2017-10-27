@extends('layouts.app')

@section('content')

   <h1>
    TechnicianController#create
    </h1>
    
     
 
    <div class="panel panel-default">
        <div class="panel-heading">New Technician</div>
        <div class="panel-body">
            <form action="/technicians" method="POST">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group col-md-10 col-md-offset-1">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" />
                </div>
                <div class="form-group col-md-10 col-md-offset-1">
                    <label for="last_name">Last Name:</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" />
                </div>
                <div class="form-group col-md-10 col-md-offset-1">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control"/>
                </div>
                
                <div class="form-group col-md-6 col-md-offset-1" id="div_form_profile">
                    <label for="profile">Profile/es:</label>
                    <select name="profile[0]" class="form-control">
                        @foreach($profiles as $profile)
                        <option value="{{$profile->id}}">{{$profile->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4" id="div_form_technician_id_trc">
                    <label for="technician_id_trc">technician_id_trc:</label>
                    <input type="number" class="form-control" name="technician_id_trc[0]"/>
                </div>
                
                <div class="form-group col-md-10 col-md-offset-1">
                    <p class="btn btn-default" id="btn_del_profile"><span class="glyphicon glyphicon-minus-sign"></span></p>
                    <p class="btn btn-default" id="btn_add_profile"><span class="glyphicon glyphicon-plus-sign"></span></p>
                </div>
                
                <div class="form-group col-md-10 col-md-offset-1">
                    <a href="{{ url('technicians') }}" class="btn btn-default btn-sm col-md-offset-10">Cancel</a> 
                    <input type="submit" value="Save" class="btn btn-primary btn-sm"/>
                </div>
                
            </form>
         </div>
    </div>
        
   
    
@endsection
