
@extends('layouts.app')

@section('content')

   <h1>
    ProfileController#index
    </h1>
    
     
     <a href="{{ url('home') }}" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-chevron-left"></span></a>  
     <a href="{{ url('profiles/create') }}" class="btn btn-success btn-sm">New</a> 
     
    <div class="panel panel-default">
        <div class="panel-heading">Technicians</div>
        <div class="panel-body">
        @foreach ($profiles as $profile)
            <diV class="row">
                <div class="col-md-11">
                    <form action="/profiles/{{$profile->id}}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group col-md-10">
                            <input type=text name="name" value="{{ $profile->name}}" class="form-control"/>
                        </div>
                        <div class="form-group col-md-1">
                            <button type="submit" class="btn btn-primary btn-sm btn-display-none"><span class="glyphicon glyphicon-ok"></span></button>
                        </div>
                        <div class="col-md-1"><p class="btn btn-warning btn-sm btn_edit_profile_index"><span class="glyphicon glyphicon-edit"></span></p></div>
                    </form>
                </div>
                
                <div class="col-md-1">
                    <form action="/profiles/{{$profile->id}}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button>
                    </form>
                </div>
            </div>
            <br>
        @endforeach
        </div>
    </div>
    {{ $profiles->links() }}
        
   
    
@endsection
