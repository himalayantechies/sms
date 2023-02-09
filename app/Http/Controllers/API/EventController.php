<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\FrontendEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\TryCatch;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = (new FrontendEvent)->all_event();
        return response()->json(["success" => true, "data" => $data, "msg" => "All active events listed successfully"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'timestamp' => 'required',
            'status' => 'required'
        ]);

        //Validation success
        if ($validator->fails()) {
            return response()->json(["success" => false, "error" => $validator->errors()->all()], 400);
        } else {
            $data = $request->all();
            (new FrontendEvent)->store_event($data);
            return response()->json(["success" => true, "msg" => "Event created successfully"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = (new FrontendEvent)->show_specific_event($id);
        return response()->json(["success" => true, "data" => $data, "msg" => "Active event fetched successfully"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'timestamp' => 'required',
            'status' => 'required'
        ]);

        //Validation success
        if ($validator->fails()) {
            return response()->json(["success" => false, "error" => $validator->errors()->all()], 400);
        } else {
            $data = $request->all();
            (new FrontendEvent)->update_event($data, $id);
            return response()->json(["success" => true, "msg" => "Event updated successfully"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        (new FrontendEvent)->delete_event($id);
        return response()->json(["success" => true, "msg" => "Event deleted successfully"]);
    }
}
