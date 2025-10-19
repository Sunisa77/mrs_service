<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\machines;


class Machine02Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */


     public function index()
    {
        return response()->json(machines::all(), 200);
    }

    // เพิ่มข้อมูลเครื่องจักร
    public function store(Request $request)
    {
        $model =  machines::create([
        'machine_name' => $request->machine_name,
        'machine_type' => $request->machine_type,
        'status' => $request->status,
        'last_maintenance' => $request->last_maintenance,
        'maintenance_cycle' => $request->maintenance_cycle,

     ]);
        return response()->json([
            'message' => 'Created successfully',
            'data' => $model
        ], 201); //สถานะ 201 หมายถึง สร้างข้อมูลสำเร็จ
    }

    // แสดงเครื่องจักรเฉพาะ ID
     public function show($machine_id)
    {
        $machine = machines::where('machine_id', $machine_id)->first();

        if (!$machine) {
            return response()->json(['message' => 'Machine not found'], 404);
        }

        return response()->json($machine);
    }

    // แก้ไขข้อมูล
    public function update(Request $request, $machine_id)
    {
        // dd($machine_id);
        // dd($request);

        machines::where('machine_id',$machine_id)
        ->update([
        'machine_name' => $request->machine_name,
        'machine_type' => $request->machine_type,
        'status' => $request->status,
        'last_maintenance' => $request->last_maintenance,
        'maintenance_cycle' => $request->maintenance_cycle
        ]);

        return response()->json([
            'message' => 'Updated successfully',
           ]);
    }
    

    // ลบข้อมูล
    public function destroy($machine_id)
    {
        $model = machines::find($machine_id);
        if (!$model) {
            return response()->json(['message' => 'Machine not found'], 404);
        }
        $model->delete();
        return response()->json(['message' => 'Deleted successfully'], 200);  

    }

    //แก้ข้อมูลบางส่วน
    public function patch(Request $request, $machine_id)
    {
        $machine = machines::find($machine_id);

        if (!$machine) {
            return response()->json(['message' => 'Machine not found'], 404);
        }

        $machine->update($request->only([
            'machine_name',
            'machine_type',
            'status',
            'last_maintenance',
            'maintenance_cycle'
        ]));

        return response()->json([
            'message' => 'Partially updated successfully',
            'data' => $machine
        ], 200);
    }
}
