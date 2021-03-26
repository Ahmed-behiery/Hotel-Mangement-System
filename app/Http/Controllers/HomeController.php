<?php

namespace App\Http\Controllers;

use App\DataTables\UserRoomsDataTable;
use App\Models\Room;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(UserRoomsDataTable $dataTable)
    {
        $count = Room::where('reservation', 0)->count();
        return $dataTable->render('ui.home', compact('count'));
    }
}
