@extends('layouts.app')
@section('breadcrumb')
    <div class="page-title-box">
        <h4 class="page-title">Category</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Category</li>
            <li class="breadcrumb-item active">Edit Category</li>
        </ol>
    </div>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">Edit the Category</div>
                @if (session('edit_success'))
                    <h4 class="alert alert-success text-center mt-1">
                        {{ session('edit_success') }}
                    </h4>
                @endif
                <div class="card-body">
                    <form action="{{ route('booking.update',$the_data->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Booking Days</label>
                            <select name="day"  class="form-control">
                                <option value="Saterday to Sunday" {{ $the_data->day == 'Saterday to Sunday' ? 'selected' : '' }}>Saterday to Sunday</option>
                                <option value="Sunday to Monday" {{ $the_data->day == 'Sunday to Monday' ? 'selected' : '' }}>Sunday to Monday</option>
                                <option value="Monday to Tuesday" {{ $the_data->day == 'Monday to Tuesday' ? 'selected' : '' }}>Monday to Tuesday</option>
                                <option value="Tuesday to Wednesday" {{ $the_data->day == 'Tuesday to Wednesday' ? 'selected' : '' }}>Tuesday to Wednesday</option>
                                <option value="Wednesday to Thrusday" {{ $the_data->day == 'Wednesday to Thrusday' ? 'selected' : '' }}>Wednesday to Thrusday</option>
                            </select>
                          </div>
                          @error('day')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                          <div class="form-group">
                            <label>Booking Time</label>
                                <input type="text" class="form-control" name="time" value="{{ $the_data->time }}">
                          </div>
                          <div style="display: flex; flex-direction:column">
                              @error('starting_time')
                                  <span class="text-danger">{{ $message }}</span>
                              @enderror
                              @error('ending_time')
                                  <span class="text-danger">{{ $message }}</span>
                              @enderror
                          </div>
                        @if ($the_data->deleted_at == NULL)
                            <div class="form-group">
                                <label for="status">Shift Status</label>
                                <select name="status" class="form-control">
                                    <option value="show" {{ $the_data->status == 'show' ? 'selected' : '' }}>Show</option>
                                    <option value="hide" {{ $the_data->status == 'hide' ? 'selected' : '' }}>Hide</option>
                                </select>
                            </div>
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        @else
                            <div class="form-group">
                                <label>Booking Time</label>
                                <h5 style="margin: 0 !important;" class="text-danger form-control">Go to "View Booking" For changing Shift Status</h5>
                            </div>

                        @endif
                        <div class="form-group">
                            <button class="btn btn-primary mt-2">Edit</button>
                        </div>
                    </form>
                    @if (session('image_success'))
                        <div class="alert alert-success">
                            <span>{{ session('image_success') }}</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
