<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class something1 extends Model
{
    use HasFactory;
    protected $table = 'something1';
    protected $dates = ['tanggal_sesuatu'];
    protected $primaryKey = 'id_sesuatu';
        
}