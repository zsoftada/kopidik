<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrasaranaBangunan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'erp_prasarana_bangunan';

    public function ruang()
    {
        return $this->hasMany(PrasaranaRuang::class);
    }
}
