<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\maintenance_records;

class Maintenance_recordsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return response()->json(maintenance_records::all(), 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
   {
        $model =  maintenance_records::create([
        'machine_id' => $request->machine_id,
        'maintenance_date' => $request->maintenance_date,
        'tech_id' => $request->tech_id,
        'next_due_date' => $request->next_due_date,
        'description' => $request->description
     ]);
        return response()->json([
            'message' => 'Created successfully',
            'data' => $model
        ], 201); //สถานะ 201 หมายถึง สร้างข้อมูลสำเร็จ
    }

    /**
     * Display the specified resource.
     */
    public function show(string $record_id)
    {
        $record = maintenance_records::where('record_id', $record_id)->first();

        if (!$record) {
            return response()->json(['message' => 'Machine not found'], 404);
        }

        return response()->json($record);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string  $record_id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string  $record_id)
     {
        // dd($machine_id);
        // dd($request);

       maintenance_records::where('record_id',$record_id)
        ->update([
        'machine_id' => $request->machine_id,
        'maintenance_date' => $request->maintenance_date,
        'tech_id' => $request->tech_id,
        'next_due_date' => $request->next_due_date,
        'description' => $request->description
        ]);

        return response()->json([
            'message' => 'Updated successfully',
           ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $record_id)
    {
        $model = maintenance_records::find($record_id);
        if (!$model) {
            return response()->json(['message' => 'Machine not found'], 404);
        }
        $model->delete();
        return response()->json(['message' => 'Deleted successfully'], 200);  
    }

    //แก้ข้อมูลบางส่วน
    public function patch(Request $request, string  $record_id)
    {
        $record = maintenance_records::find($record_id);

        if (!$record) {
            return response()->json(['message' => 'Machine not found'], 404);
        }

        $record->update($request->only([
            'machine_id',
            'maintenance_date',
            'tech_id',
            'next_due_date',
            'description'
        ]));

        return response()->json([
            'message' => 'Updated successfully',
           ]);
    }
}
