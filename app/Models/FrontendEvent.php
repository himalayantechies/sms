<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FrontendEvent extends Model
{
    use HasFactory;
    private $_data = [];
    protected $table = 'frontend_events';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'timestamp', 'status', 'school_id', 'session_id', 'created_by'
    ];

    public function all_event()
    {
        $school_id = auth()->user()->school_id;
        $active_session = get_school_settings(auth()->user()->school_id)->value('running_session');

        $this->_data['events'] = FrontendEvent::where('frontend_events.session_id', $active_session)
            ->where('frontend_events.school_id', $school_id)
            ->where('status', 1)
            ->select(DB::raw("id,title,to_char(to_timestamp(timestamp),'yyyy/mm/dd') as timestamp,description"))
            ->get();
        return $this->_data;
    }
    public function store_event($data)
    {
        DB::transaction(function () use ($data) {
            $active_session = get_school_settings(auth()->user()->school_id)->value('running_session');
            $data['created_by'] = auth()->user()->id;
            $data['timestamp'] = strtotime($data['timestamp']);
            $data['school_id'] = auth()->user()->school_id;
            $data['session_id'] = $active_session;
            FrontendEvent::create($data);
        });
    }
    public function show_specific_event($id)
    {
        $school_id = auth()->user()->school_id;
        $active_session = get_school_settings(auth()->user()->school_id)->value('running_session');

        $this->_data['events'] = FrontendEvent::where('frontend_events.session_id', $active_session)
            ->where('frontend_events.school_id', $school_id)
            ->where('status', 1)
            ->where('frontend_events.id', $id)
            ->select(DB::raw("id,title,to_char(to_timestamp(timestamp),'yyyy/mm/dd') as timestamp,description"))
            ->get();
        return $this->_data;
    }
    public function update_event($data, $id)
    {
        $active_session = get_school_settings(auth()->user()->school_id)->value('running_session');
        $data['timestamp'] = strtotime($data['timestamp']);
        $data['school_id'] = auth()->user()->school_id;
        $data['session_id'] = $active_session;
        $data['created_by'] = auth()->user()->id;
        FrontendEvent::where('id', $id)->update($data);
    }
    public function delete_event($id)
    {
        $event = FrontendEvent::find($id);
        $event->delete();
    }
}
