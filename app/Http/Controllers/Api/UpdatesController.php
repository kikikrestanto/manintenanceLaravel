<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Update;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class UpdatesController extends Controller
{
    public function create(Request $request){
        $update = new Update;
        $update->user_id = Auth::user()->id;
        $update->post_id = $request->id;
        $update->no = $request->no;
        $update->tanggalMaintenance = $request->tanggalMaintenance;
        $update->tanggalMaintenanceSelanjutnya = $request->tanggalMaintenanceSelanjutnya;
        $update->tindakan = $request->tindakan;
        $update->keterangan = $request->keterangan;

        $update->save();
        $update->user;
        return response()->json([
            'success' => true,
            'updates'=>$update,
            'message' => 'update added'
        ]);

        }

    public function delete(Request $request){
        $update = Update::find($request->id);
        // check user
        if(Auth::user()->id != $update->user_id){
            return response()->json([
                'success' => false,
                'message' => 'unauthorized access'
            ]);
        }
        $update->delete();
        
        return response()->json([
            'success' => true,
            'message' => 'post deleted'
        ]);
    }

    public function updates(Request $request){
        $updates = Update::where('post_id',$request->id)->get();
        //show user of each update
        foreach($updates as $update){
            $update->user;
        }

        return response()->json([
            'success' => true,
            'updates' => $updates
        ]);
    }
    
    //public function date(){
      //  $date = Date::orderby('')
    //}
}
