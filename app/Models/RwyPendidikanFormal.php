<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RwyPendidikanFormal extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'erp_rwy_pend_formal';
}
