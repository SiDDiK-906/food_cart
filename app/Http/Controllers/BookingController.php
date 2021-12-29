<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Str;
class BookingController extends Controller
{
    public function index()
    {
        return view('booking.view_book',[
            'view_books' => Booking::all(),
            'condition_show' => Booking::where('status','show')->count(),
            'id_count' => Booking::all()->count(),
        ]);
    }

    public function create()
    {
        return view('booking.add_book');
    }

    public function store(Request $request)
    {
        $request->validate([
            'day'=> 'required',
            'starting_time'=> 'required',
            'ending_time'=> 'required',
        ]);
        $time = $request->starting_time.' '.$request->starting_time1.' - '.$request->ending_time.' '.$request->ending_time1;
        Booking::insert([
            'day'=> $request->day,
            'time'=> $time,
            'created_at'=> Carbon::now(),
        ]);
        return back()->with('insertion_sms','Data Inserted Successfully');
    }

    public function show($id)
    {
        return view('booking.show',[
            'show_data'=>Booking::withTrashed()->find($id),
        ]);
    }

    public function edit($id)
    {
        return view('booking.edit',[
            'the_data'=> Booking::withTrashed()->find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        Booking::withTrashed()->find($id)->update([
            'day'=> $request->day,
            'time'=> $request->time,
            'status'=> $request->status,
        ]);
        return back()->with([
            'edit_success'=> "Shift Edited Successfully",
        ]);
    }

    public function destroy($id)
    {
        $smart_move = Booking::find($id);
        Booking::find($id)->update([
            'status'=> 'hide'
        ]);
        $smart_move->delete();
        return back();
    }
    // custom method
    public function show_hide_edit_method($id)
    {
        if (Booking::find($id)->status == 'show') {
            Booking::find($id)->update([
                'status'=> 'hide'
            ]);
            return back()->with('hide_success','Status of '.$id.' hidden Successfully');
        }
        else {
            Booking::find($id)->update([
                'status'=> 'show'
            ]);
            return back()->with('show_success','Status of '.$id.' showed Successfully');
        }
    }
    public function show_hide_trash_method($id)
    {
        return back()->with('edit_warning','Go to "View Booking" For changing Shift Status');
    }
    // custom force delete method
    public function trash_method()
    {
        return view('booking.trash',[
            'trash_data'=> Booking::onlyTrashed()->get(),
        ]);
    }
    // custom force delete method
    public function force_delete_method($id)
    {
        $the_trash = Booking::onlyTrashed()->find($id);
        $the_trash->forceDelete();
        return back();
    }
    // custom restore method
    public function restore_method($id)
    {
        $smart_move = Booking::onlyTrashed()->find($id);
        $smart_move->restore();
        return back();
    }
}
