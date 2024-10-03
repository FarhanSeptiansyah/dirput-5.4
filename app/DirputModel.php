<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class DirputModel extends Model
{
    protected $table = 'tb_dirput';
    protected $fillable = ['no_banding', 'j_perkara', 'tgl_put_banding', 'putusan'];
    protected $dates = ['create_at', 'update_at'];
}
