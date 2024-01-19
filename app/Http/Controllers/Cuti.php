<?php

namespace App\Http\Controllers;

use App\Cuti as M_Cuti;
use Illuminate\Http\Request;

class Cuti extends Controller
{
    public function post(Request $request) {
        $user = $request->user();
        
        try {
            $data=new M_Cuti();
            $data->user_id=$user->id;
            $data->alasan_cuti=$request->alasan_cuti;
            $data->tgl_awal=$request->tgl_awal;
            $data->tgl_akhir=$request->tgl_akhir;
            $data->save();

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
