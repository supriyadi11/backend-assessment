<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    protected $table = 'cuti';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 
        'user_id',
        'alasan_cuti', 
        'tgl_awal',
        'tgl_akhir',
        'created_at',
        'updated_at',
        'delete_at'
    ];

}
