@extends('layouts.app')

@section('content')

   <h1>
    ProfileController#create
    </h1>
    
     
    <a href="{{ url('profiles') }}" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-chevron-left"></span></a>  
    <div class="panel panel-default">
        <div class="panel-heading">New Profile</div>
        <div class="panel-body">
            <form action="/profiles" method="POST">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group col-md-10 col-md-offset-1">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" />
                </div>
                
                <div class="form-group col-md-10 col-md-offset-1">
                    <input type="submit" value="Save" class="btn btn-primary col-md-offset-11"/>
                </div>
                
            </form>
         </div>
    </div>
        
   
    
@endsection
