@extends('layout.layout')

@section('title', 'Viewing office and their colleagues')

@section('content')
    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')
                <!-- New Office Form -->
        <form action="{{url('add')}}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
                    <!-- Office Name -->
            <div class="form-group">
                <label for="officeName" class="col-sm-3 control-label">Office Name</label>
                <div class="col-sm-6">
                    <input type="text" name="officeName" id="office-name" class="form-control">
                </div>
            </div>
            <!-- Office Address -->
            <div class="form-group">
                <label for="officeAddress" class="col-sm-3 control-label">Office Name</label>
                <div class="col-sm-6">
                    <input type="text" name="officeAddress" id="office-address" class="form-control">
                </div>
            </div>
            <!-- Office Phone -->
            <div class="form-group">
                <label for="officePhone" class="col-sm-3 control-phone">Office Name</label>
                <div class="col-sm-6">
                    <input type="text" name="officePhone" id="office-name" class="form-control">
                </div>
            </div>
            <!-- Office Phone -->
            <div class="form-group">
                <label for="appointmentLetter" class="col-sm-3 control-label">Appointment Letter</label>
                <div class="col-sm-6">
                    <input type="file" name="appointmentLetter" id="appointment-letter" class="form-control">
                </div>
            </div>

            <!-- Add Office Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
