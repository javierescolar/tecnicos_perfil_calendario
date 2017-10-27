@extends('layouts.app')

@section('content')

   <h1>
    CaiderController#create
    </h1>
    

    <div class="panel panel-default">
        <div class="panel-heading">New Caider</div>
        <div class="panel-body">
            <form action="/caiders" method="POST">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="form-group col-md-4 col-md-offset-1">
                    <label for="local_id_trc">Id Local TRC:</label>
                    <input type="text" name="local_id_trc" id="local_id_trc" class="form-control" />
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" />
                </div>
                <div class="form-group col-md-10 col-md-offset-1">
                    <label for="address">Address:</label>
                    <input type="text" name="address" id="address" class="form-control"/>
                </div>
                
                <div class="form-group col-md-6 col-md-offset-1">
                    <label for="phone">Phone:</label>
                    <input type="number" name="phone" id="phone" class="form-control"/>
                </div>
                <div class="form-group col-md-4">
                    <label for="zip_code">Zip Code:</label>
                    <input type="number" name="zip_code" id="zip_code" class="form-control"/>
                </div>
                
                <div class="form-group col-md-3 col-md-offset-1" id="div_form_schedule_from">
                     <label for="schedule_from">Schedule From:</label>
                     <select class="form-control" name="schedule_from[0]">
                        <option value="08:00">08:00</option>
                        <option value="09:00">09:00</option>
                        <option value="10:00">10:00</option>
                        <option value="11:00">11:00</option>
                        <option value="12:00">12:00</option>
                        <option value="13:00">13:00</option>
                     </select>
                </div>
                <div class="form-group col-md-3" id="div_form_schedule_to">
                    <label for="schedule_to">technician_id_trc:</label>
                    <select class="form-control" name="schedule_to[0]">
                        <option value="08:00">08:00</option>
                        <option value="09:00">09:00</option>
                        <option value="10:00">10:00</option>
                        <option value="11:00">11:00</option>
                        <option value="12:00">12:00</option>
                        <option value="13:00">13:00</option>
                     </select>
                </div>
                <div class="form-group col-md-4" id="div_form_weekday">
                    <label for="weekday">technician_id_trc:</label>
                    <select class="form-control" name="weekday[0]">
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                     </select>
                </div>
                <div class="form-group col-md-10 col-md-offset-1">
                    <p class="btn btn-default" id="btn_del_schedule"><span class="glyphicon glyphicon-minus-sign"></span></p>
                    <p class="btn btn-default" id="btn_add_schedule"><span class="glyphicon glyphicon-plus-sign"></span></p>
                </div>
                
                <div class="form-group col-md-10 col-md-offset-1">
                    <a href="{{ url('caiders') }}" class="btn btn-default btn-sm col-md-offset-10">Cancel</a>  
                    <input type="submit" value="Save" class="btn btn-primary btn-sm"/>
                </div>
                
            </form>
         </div>
    </div>
        
   
    
@endsection
