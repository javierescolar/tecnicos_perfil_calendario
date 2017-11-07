@extends('layouts.app')

@section('content')

   <h1>
    CaiderController#update_schedule
    </h1>
    
    
    <a href="{{ url('caiders/'.$caider->id) }}" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-chevron-left"></span></a> 
   
    <div class="panel panel-default">
        <div class="panel-heading">Update Schedule Days Caider</div>
        <div class="panel-body">
            @if( count($caider->schedulesUpdate) == 0 ) )
            <p>Result not found ...</p>
            @else
                @foreach ($caider->schedulesUpdate as $scheduleUpdate)
                 <form>
                 <td>{{$scheduleUpdate->weekday }}</td>
                    <td>{{$scheduleUpdate->schedule_from }}</td>
                    <td>{{$scheduleUpdate->schedule_to }}</td>
                 </form>
                @endforeach
            @endif
         </div>
    </div>
        
   
    
@endsection
