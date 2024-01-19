<?php

namespace App\Http\Controllers;

use App\Cuti as M_Cuti;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;

class Cuti extends Controller
{
    public function post(StorePostRequest $request) {
        $user = $request->user();
        
        try {
           
            $post = M_Cuti::create($request->validated() + ['user_id' => $user->id]);

            return response()->json([
                'status' => true,
                'message' => 'Data success'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }

    }

    public function view(Request $request) {
        $data = M_Cuti::all();
        return response()->json([
            'status' => true,
            'data' => $data
        ]);
    }

    public function view_id($id) {
        $data = M_Cuti::where('id',$id)->get();
        return response()->json([
            'status' => true,
            'data' => $data
        ]);
    }
}
