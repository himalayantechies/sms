<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Noticeboard;

class NoticeBoardController extends Controller
{
    public function index(){
        try{
            $active_session = get_school_settings(auth()->user()->school_id)->value('running_session');
            $school_id = auth()->user()->school_id;
            
            $notices = (new Noticeboard)->get_all_Notice($active_session, $school_id);
            return response()->json([
                                        "success" => true, 
                                        "data" => $notices, 
                                        "msg" => "Notices returned successfully",
                                        "imagepath" => "/public/assets/uploads/noticeboard/"
                                    ]);

        }catch(Exception $exp){
            return response()->json(["success" => false, "msg" => $exp->getMessage()]);
        }
    }
}
