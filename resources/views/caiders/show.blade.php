@extends('layouts.app')

@section('content')

   <h1>
    CaiderController#show
    </h1>
    
    
    <a href="{{ url('caiders') }}" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-chevron-left"></span></a> 
    <form action="/caiders/{{$caider->id}}/search_date" method="GET">
        <input type="date" name="date_search" value="{{ $date_search }}"/>
        <button type"submit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-search"></button>
    </form>
   
    <div class="panel panel-default">
        <div class="panel-heading">Info Caider</div>
        <div class="panel-body">
            
                <div class="form-group col-md-10 col-md-offset-1">
                    <p><b>Name:</b> {{$caider->name}}</p>
                </div>
                <div class="form-group col-md-10 col-md-offset-1">
                   <p><b>Adress:</b>{{$caider->address}}</p>
                </div>
                <div class="form-group col-md-10 col-md-offset-1">
                    <p><b>Phone:</b>{{$caider->phone}}</p>
                </div>
               <div class="form-group col-md-10 col-md-offset-1">
                    <p><b>Schedules/s:</b></p>
                    <table class="table">
                        <thead>
                             <tr>
                                <th>Weekday</th>
                                <th>From</th>
                                <th>To</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($caider->schedules as $schedule)
                                <tr>
                                    <td>{{$schedule->weekday }}</td>
                                    <td>{{$schedule->schedule_from }}</td>
                                    <td>{{$schedule->schedule_to }}</td>
                                </tr>
                                @endforeach
                              @if(  $caider->checkUpdateScheduleFromDate(date('Y-m-d', strtotime($date_search))) )
                              <tr><th colspan="3">Modifications today</th></tr>
                                @foreach ($caider->schedulesFromDate($date_search) as $scheduleUpdate)
                                <tr class="color-scheduleUpdate">
                                    <td>{{ $scheduleUpdate->weekday }}</td>
                                    <td>{{$scheduleUpdate->schedule_from }}</td>
                                    <td>{{$scheduleUpdate->schedule_to }}</td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
         </div>
    </div>
        
   
    
@endsection
