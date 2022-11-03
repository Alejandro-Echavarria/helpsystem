<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index()
    {
        return view('records.index');
    }

    public function records()
    {
        $data = Record::orderBy('id', 'desc')->limit(120)->get();

        return response()->json($data);
    }

    public function devices($id)
    {
        $data = Record::where('device_id', $id)->pluck('device_id');

        return response()->json($data);
    }
}
