@extends('layouts.app')
@section('breadcrumb')
    <div class="page-title-box">
        <h4 class="page-title">Profile </h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Profie</li>
        </ol>
    </div>
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-info text-center">
                <h5>View Booking</h5>
            </div>
            @if (session('hide_success'))
                <div class="alert alert-success text-center mt-1">
                    {{ session('hide_success') }}
                </div>
            @endif
            @if (session('show_success'))
                <div class="alert alert-success text-center mt-1">
                    {{ session('show_success') }}
                </div>
            @endif
            @if (session('edit_warning'))
                <h4 class="text-center mt-1" style="color: #ff0000;">
                    {{ session('edit_warning') }}
                </h4>
            @else
                <div class="text-center" style=" display: flex; justify-content:center ">
                    <h5 style="color: black !important">Reminder: </h5>
                    <h5 class="text-danger"> You must have to keep exactly 2 time shift in Status as show</h5>
                </div>
            @endif
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Day</th>
                            <th>Time Shift</th>
                            <th>Shift Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                            @if ($condition_show == 2 AND $id_count >= 2)
                                @foreach ($view_books as $view_book)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $view_book->day }}</td>
                                        <td>{{ $view_book->time }}</td>
                                        <td>
                                            @if ($view_book->status == 'show')
                                                <a href="{{ route('show_hide_edit',$view_book->id) }}" class="btn btn-sm btn-success">Hide</a>
                                            @else
                                                <a href="{{ route('show_hide_edit',$view_book->id) }}" class="btn btn-sm btn-success">Show</a>
                                            @endif
                                        </td>
                                        <td>
                                            <div style="display: flex; justify-content:space-around">
                                                <a href="{{ route('booking.show',$view_book->id) }}" class="btn btn-sm btn-info">View</a>
                                                <a href="{{ route('booking.edit',$view_book->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <form action="{{ route('booking.destroy',$view_book->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                    <button class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @elseif ($id_count < 2 )
                                @foreach ($view_books as $view_book)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $view_book->day }}</td>
                                        <td>{{ $view_book->time }}</td>
                                        <td>
                                            @if ($view_book->status == 'show')
                                                <a href="{{ route('show_hide_edit',$view_book->id) }}" class="btn btn-sm btn-success">Hide</a>
                                            @else
                                                <a href="{{ route('show_hide_edit',$view_book->id) }}" class="btn btn-sm btn-success">Show</a>
                                            @endif
                                        </td>
                                        <td>
                                            <div style="display: flex; justify-content:space-around">
                                                <a href="{{ route('booking.show',$view_book->id) }}" class="btn btn-sm btn-info">View</a>
                                                <a href="{{ route('booking.edit',$view_book->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <form action="{{ route('booking.destroy',$view_book->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                    <button class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <div  class="text-center">
                                                    <h4  style="color: #ff0000;">Add 1 more shift  for showing 2 shift as shown</h4>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                @endforeach
                            @elseif ($condition_show < 2 or $condition_show > 2)
                                @foreach ($view_books as $view_book)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $view_book->day }}</td>
                                        <td>{{ $view_book->time }}</td>
                                        <td>
                                            @if ($view_book->status == 'show')
                                                <a href="{{ route('show_hide_edit',$view_book->id) }}" class="btn btn-sm btn-success">Hide</a>
                                            @else
                                                <a href="{{ route('show_hide_edit',$view_book->id) }}" class="btn btn-sm btn-success">Show</a>
                                            @endif
                                        </td>
                                        <td>
                                            <div style="display: flex; justify-content:space-around">
                                                <a href="{{ route('booking.show',$view_book->id) }}" class="btn btn-sm btn-info">View</a>
                                                <a href="{{ route('booking.edit',$view_book->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <form action="{{ route('booking.destroy',$view_book->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                    <button class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                <table class="table">
                                    <tr>
                                        <td>
                                            <div  class="text-center">
                                                <h4 style="color: #ff0000;">You must have to keep exactly 2 time shift in Status as show</h4>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            @elseif ($condition_show==0)
                                <table class="table">
                                    <tr>
                                        <td>
                                            <div  class="text-center">
                                                <h5  style="color: #ff0000;">No Data to Show</h5>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
