<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class acc_model extends Model
{



    public function selectQuery($sql_stmt) {
        return DB::select($sql_stmt);
    }

    public function sqlStatement($sql_stmt) {
        DB::statement($sql_stmt);
    }
}
