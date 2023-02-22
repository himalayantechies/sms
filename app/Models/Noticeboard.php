<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
// use Carbon\Carbon;

class Noticeboard extends Model
{
    use HasFactory;

    protected $table = 'noticeboard';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'notice_title', 'notice', 'start_date', 'start_time', 'end_date', 'end_time', 'status', 'show_on_website', 'image', 'school_id','session_id'
    ];

    public function get_all_Notice($session_id, $school_id)
    {
        // $notices = Noticeboard::where('session_id', $session_id)
        //     ->where('school_id', $school_id)
        //     ->where('status', 1)
        //     ->select(DB::raw("id, notice_title, notice, start_date, start_time, end_date, end_time, image"))
        //     // ->select(DB::raw("id,notice_title, notice, start_date, start_time, end_date, end_time, image"))
        //     ->orderby('start_date', 'desc')
        //     ->get();
            
            $notices = DB::select("
                            select id, notice_title, notice, TO_DATE(start_date, 'MM/DD/YYYY') as start_date, start_time, TO_DATE(end_date, 'MM/DD/YYYY') as end_date, end_time, image
                              from noticeboard 			
                             where school_id = ? and session_id = ? 
                          order by start_date", [$school_id, $session_id]);

        return $notices;
    }
}
