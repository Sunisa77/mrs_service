<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // การตรวจสอบข้อมูลที่ส่งมา ก่อนบันทึกลงฐานข้อมูล
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // ตรวจสอบว่าข้อมูลที่ส่งมา มีความถูกต้องหรือไม่
        if ($validator->fails()) {
            return response()->json([
                'status_code' => 400,
                'message' => 'Bad Request',
            ]);
        }

        // บันทึกข้อมูลลงฐานข้อมูล
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // bcrypt คือการเข้ารหัส password เพื่อความปลอดภัย
        $user->email_verified_at = now(); // now() คือการกำหนดวันที่ปัจจุบัน
        $user->save();

        return response()->json([
            'status_code' => 200,
            'message' => 'User created successfully',
        ], 201);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status_code' => 400,
                'message' => 'Bad Request',
            ]);
        }

        // ตรวจสอบข้อมูลการเข้าสู่ระบบ
         $credentials = $request->only(['email', 'password']);
        // ถ้าข้อมูลไม่ถูกต้อง
        if (!Auth::attempt($credentials)) {
            return response()->json([
                'status_code' => 401,
                'message' => 'Unauthorized',
            ]);
        }
        else {
            $user = User::where('email', $request->email)->first();
            // สร้าง token สำหรับการเข้าสู่ระบบ
            $tokenResult = $user->createToken('authToken')->plainTextToken;

            return response()->json([
                'status_code' => 200,
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
            ]);
        }



      
    }
}
