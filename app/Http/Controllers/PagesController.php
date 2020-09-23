<?php

namespace App\Http\Controllers;

use App\Room;
use App\Healthcare;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
    	return view('pages.index');
    }
    
    public function showrooms() {
    	$rooms = Room::all();
    	return view('pages.rooms', compact('rooms'));    
    }

    public function roomInfo(Room $room) {
    	//$room = Room::findOrFail($room); 
    	return view('rooms.show', compact('room'));  
    }

    public function showhealthcares() {
    	$healthcares = Healthcare::all();
    	return view('pages.healthcares', compact('healthcares'));    
    }
    
	public function healthcareInfo(Healthcare $healthcare) {
    	//$healthcare =  Healthcare::findOrFail($healthcare); 
    	return view('healthcares.show', compact('healthcare'));  
    }
    
}
