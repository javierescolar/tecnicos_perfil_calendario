@extends('layouts.app')

@section('content')

   <h1>
    TechnicianController#edit
    </h1>
    
     
    <a href="{{ url('technicians') }}" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-chevron-left"></span></a>  
    <div class="panel panel-default">
        <div class="panel-heading">New Technician</div>
        <div class="panel-body">
            <form action="/technicians/{{$technician->id}}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group col-md-10 col-md-offset-1">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$technician->name}}"/>
                </div>
                <div class="form-group col-md-10 col-md-offset-1">
                    <label for="last_name">Last Name:</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" value="{{$technician->last_name}}" />
                </div>
                <div class="form-group col-md-10 col-md-offset-1">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{$technician->email}}"/>
                </div>
                
                
                <div class="form-group col-md-6 col-md-offset-1" id="div_form_profile">
                    <label for="profile">Profile/es:</label>
                @foreach($technician->profiles as $key => $t_profile)
                    <select name="profile[{{$key}}]" class="form-control">
                        @foreach($profiles as $profile)
                            @if($t_profile->id == $profile->id)
                            <option selected value="{{$profile->id}}">{{$profile->name}}</option>
                            @else
                            <option value="{{$profile->id}}">{{$profile->name}}</option>
                            @endif
                        @endforeach
                    </select>
                @endforeach
                </div>
                <div class="form-group col-md-4" id="div_form_technician_id_trc">
                    <label for="technician_id_trc">technician_id_trc:</label>
                @foreach($technician->profiles as $key => $t_profile)
                    <input type="number" class="form-control" name="technician_id_trc[{{$key}}]" value="{{ $t_profile->pivot->technician_id_trc}}"/>
                 @endforeach
                </div>
               <div class="form-group col-md-10 col-md-offset-1">
                    <p class="btn btn-default" id="btn_del_profile_edit"><span class="glyphicon glyphicon-minus-sign"></span></p>
                    <p class="btn btn-default" id="btn_add_profile_edit"><span class="glyphicon glyphicon-plus-sign"></span></p>
                </div>
                <div class="form-group col-md-10 col-md-offset-1">
                    <input type="submit" value="Save" class="btn btn-primary col-md-offset-11"/>
                </div>
            </form>
         </div>
    </div>
        
   
    
@endsection