<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DatesController extends Controller
{
    public function create(Request $request){
        $date = new Date;
        $date->user_id = Auth::user()->id;
        $date->post_id = $request->id;
        $date->tanggalMaintenance = $request->id;
        $date->tanggalMaintenanceSelanjutnya = $request->id;
        $date->tindakan = $request->id;
        $date->keterangan = $request->id;

        $date->save();
        $date->user;
        return response()->json([
            'success' => true,
            'date' => $date
        ]);

        }

    public function delete(Request $request){
        $date = Date::find($request->id);
        // check user
        if(Auth::user()->id != $post->user_id){
            return response()->json([
                'success' => false,
                'message' => 'unauthorized access'
            ]);
        }
        $post->delete();
        
        return response()->json([
            'success' => true,
            'message' => 'post deleted'
        ]);
    }
    
    //public function date(){
      //  $date = Date::orderby('')
    //}
}
