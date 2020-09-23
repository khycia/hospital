<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function create() {
    	return view('rooms.create');
    }

    public function store() {
    	$room = new Room;
    	$room->room_type = request()->room_type;
    	$room->ward = request()->ward;
    	$room->save();

    	return redirect('/showrooms');
    }

    public function edit(Room $room) {
    	return view('rooms.edit' , compact('room'));
    }

    public function update(Room $room) {
    	$room->room_type = request()->room_type;
    	$room->ward = request()->ward;
    	$room->save();

    	return redirect('/showrooms/'.$room->id);
    }

    public function destroy(Room $room) {
    	$room->delete();
    	return redirect('/showrooms');
    }
}
