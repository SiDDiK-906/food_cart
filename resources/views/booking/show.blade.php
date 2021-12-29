@extends('layouts.app')
@section('breadcrumb')
    <div class="page-title-box">
        <h4 class="page-title">Category </h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Category</li>
            <li class="breadcrumb-item active">View Category</li>
        </ol>
    </div>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">Show the Shift of <b>{{ $show_data->day }}</b></div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td>Category Id</td>
                            <td>{{ $show_data->id }}</td>
                        </tr>
                        <tr>
                            <td>Day</td>
                            <td>{{ $show_data->day }}</td>
                        </tr>
                        <tr>
                            <td>Time Shift</td>
                            <td>{{ $show_data->time }}</td>
                        </tr>
                        <tr>
                            <td>Shift Status</td>
                            <td>{{ $show_data->status }}</td>
                        </tr>
                        <tr>
                            <td>Category Created</td>
                            <td>{{ $show_data->created_at->diffForHumans() }}</td>
                        </tr>
                        <tr>
                            <td>Category Updated</td>
                            <td>
                                @if ($show_data->updated_at == NULL)
                                    N/A
                                @else
                                    {{ $show_data->updated_at->diffForHumans() }}
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
