<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\DataTables\ReservationsDataTable;


class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *  
     * @return \Illuminate\Http\Response
     */
    
    public function index(ReservationsDataTable $reservation)
    {
        $count = Reservation::count();
        return $reservation->render('dashboard.reservations.index', compact('count'));
    }

    public function create()
    {
        return view('dashboard.reservations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'paid_price'         => 'required',
            'room_id'            => 'required|numeric|min:1000|unique:reservations,room_id',
            'accompany_number'   => 'required|numeric|min:1|max:5'
        ]); // This For Validation The Inputs

        $request['client_id'] = auth()->user()->id;
        $reservation = Reservation::create($request->all());
        session()->flash('success', 'Reservation Successfuly Created');
        return redirect()->route('dashboard.reservations.index');
    }

    public function show(Reservation $reservation)
    {
        return view('dashboard.reservations.show', compact('reservation'));
    }

    public function edit(Reservation $reservation)
    {
        return view('dashboard.reservations.edit', compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            'paid_price'         => 'required',
            'room_id'            => 'required|numeric|min:1000|unique:reservations,room_id',
            'accompany_number'   => 'required|numeric|min:1|max:5'
        ]); // This For Validation The Inputs
        
        $request['client_id'] = auth()->user()->id;
        $reservation->update($request->all());
        session()->flash('success', 'Reservation Successfuly Updated');
        return redirect()->route('dashboard.reservations.index');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        session()->flash('success', 'Reservation Successfuly Deleted');
        return redirect()->route('dashboard.reservations.index');
    }
}