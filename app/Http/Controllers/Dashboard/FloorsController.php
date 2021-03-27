<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use App\Models\Floor;
use Illuminate\Http\Request;
use App\DataTables\FloorsDataTable;


class FloorsController extends Controller
{
    public function index(FloorsDataTable $dataTable)
    {
        $count = Floor::count();
        return $dataTable->render('dashboard.floors.index', compact('count'));
    }

    public function create()
    {
        return view('dashboard.floors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'            => 'required|string|min:5|max:50|unique:floors,name',
            'number'          => 'required|numeric|min:1000|unique:floors,number',
        ]); // This For Validation The Inputs
        // dd($request->number);

        $request['manager_id'] = auth()->user()->id;
        $floor = Floor::create($request->all());
        session()->flash('success', 'Floor Successfuly Created');
        return redirect()->route('dashboard.floors.index');
    }

    public function show(Floor $floor)
    {
        return view('dashboard.floors.show', compact('floor'));
    }

    public function edit(Floor $floor)
    {

        return view('dashboard.floors.edit', compact('floor'));
    }

    public function update(Request $request, Floor $floor)
    {
        // dd($floor->name);
        $request->validate([
            'name'            => 'required|string|min:5|max:50|unique:floors,name,' . $floor->id,
            'number'          => 'required|numeric|min:1000|unique:floors,number,' . $floor->id,
        ]); // This For Validation The Inputs

        $floor->update($request->all());
        session()->flash('success', 'floor Successfuly Updated');
        return redirect()->route('dashboard.floors.index');
    }

    public function destroy(Floor $floor)
    {
        $floor->delete();
        session()->flash('success', 'Floor Successfuly Deleted');
        return redirect()->route('dashboard.floors.index');
    }
}