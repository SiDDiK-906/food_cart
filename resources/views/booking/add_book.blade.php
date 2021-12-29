@extends('layouts.app')
@section('breadcrumb')
    <div class="page-title-box">
        <h4 class="page-title">Booking</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Add Booking</li>
        </ol>
    </div>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">
                    <h5>Add Booking</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('booking.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if (session('insertion_sms'))
                            <div class="alert alert-success">
                                {{ session('insertion_sms') }}
                            </div>
                        @endif
                        <div class="form-group">
                          <label>Booking Days</label>
                          <select name="day"  class="form-control">
                              <option value="Saterday to Sunday">Saterday to Sunday</option>
                              <option value="Sunday to Monday">Sunday to Monday</option>
                              <option value="Monday to Tuesday">Monday to Tuesday</option>
                              <option value="Tuesday to Wednesday">Tuesday to Wednesday</option>
                              <option value="Wednesday to Thrusday">Wednesday to Thrusday</option>
                          </select>
                        </div>
                        @error('day')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                          <label>Booking Time</label>
                          <div style="display: flex">
                                <div class="div1">
                                    <input type="text" style="width:50px; padding-left: 15px;" name="starting_time">
                                    <select name="starting_time1" class="text-black" style="border-radius: 0px; padding: 3px 0px;" >
                                        {{-- <option value>Select</option> --}}
                                        <option value="AM">AM</option>
                                        <option value="PM">PM</option>
                                    </select>
                                </div>
                                <span style="margin: 0px 10px 0px 10px">_</span>
                                <div class="div1">
                                    <input type="text" style="width:50px; padding-left: 15px;" name="ending_time">
                                    <select name="ending_time1" class="text-black" style="border-radius: 0px; padding: 3px 0px;" >
                                        <option value="AM">AM</option>
                                        <option value="PM">PM</option>
                                    </select>
                                </div>
                          </div>
                        </div>
                        <div style="display: flex; flex-direction:column">
                            @error('starting_time')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            @error('ending_time')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-2 ">Submit</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
