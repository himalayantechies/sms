<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CommonController extends Controller
{
    //
    public function getClassSectionList($school_id){
        $result = DB::select('  select cs.class_id, cs.name, json_agg(sections) as sections
                                from (
                                        select c.id as class_id, c.name, row_to_json( row(s.id,  s.name )) as sections
                                        from classes        c 
                                        join sections       s on c.id = s.class_id 
                                        where s.school_id = ? or s.school_id is null
                                        order by c.id, s.id ) cs
                                group by cs.class_id, cs.name
                            ', [$school_id]);

        return $result;

    }
}
