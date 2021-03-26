<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\RoomsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index(RoomsDataTable $dataTable)
    {
        $count = Room::count();
        return $dataTable->render('dashboard.rooms.index', compact('count'));
    }

    public function create()
    {
        return view('dashboard.rooms.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'            => 'required|string|min:5|max:50|unique:rooms,name',
            'number'          => 'required|numeric|min:2|max:25|unique:rooms,number',
            'size'            => 'required|numeric|min:1|max:5',
            'price'           => 'required',
            'floor'           => 'required|numeric|min:1|max:10',
        ]); // This For Validation The Inputs

        $request['admin_id'] = auth()->user()->id;
        $room = Room::create($request->all());
        session()->flash('success', 'Room Successfuly Created');
        return redirect()->route('dashboard.rooms.index');
    }

    public function show(Room $room)
    {
        return view('dashboard.rooms.show', compact('room'));
    }

    public function edit(Room $room)
    {
        return view('dashboard.rooms.edit', compact('room'));
    }

    public function update(Request $request, Room $room)
    {
        $request->validate([
            'name'            => 'required|string|min:5|max:50|unique:rooms,name,' . $room->id,
            'number'          => 'required|numeric|min:2|max:25|unique:rooms,number,' . $room->id,
            'size'            => 'required|numeric|min:1|max:5',
            'price'           => 'required',
            'floor'           => 'required|numeric|min:1|max:10',
        ]); // This For Validation The Inputs

        $room->update($request->all());
        session()->flash('success', 'Room Successfuly Updated');
        return redirect()->route('dashboard.rooms.index');
    }

    public function destroy(Room $room)
    {
        $room->delete();
        session()->flash('success', 'Room Successfuly Deleted');
        return redirect()->route('dashboard.rooms.index');
    }
}
