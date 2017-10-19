@extends('layouts.app')

@section('content')

   <h1>
    TechnicianController#show
    </h1>
    
     
    <a href="{{ url('technicians') }}" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-chevron-left"></span></a> 
    <div class="panel panel-default">
        <div class="panel-heading">Info Technician</div>
        <div class="panel-body">
            
                <div class="form-group col-md-10 col-md-offset-1">
                    <p><b>Name:</b> {{$technician->name}}</p>
                </div>
                <div class="form-group col-md-10 col-md-offset-1">
                   <p><b>Last Name:</b>{{$technician->last_name}}</p>
                </div>
                <div class="form-group col-md-10 col-md-offset-1">
                    <p><b>Email:</b>{{$technician->email}}</p>
                </div>
               <div class="form-group col-md-10 col-md-offset-1">
                    <p><b>Profile/es:</b></p>
                    <table class="table">
                        <thead>
                             <tr>
                                <th>Profile</th>
                                <th>Num.</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($technician->profiles as $profile)
                                <tr>
                                    <td>{{ $profile->name }}</td>
                                    <td>{{$profile->pivot->technician_id_trc}}</td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
            </div>
         </div>
    </div>
        
   
    
@endsection
