<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrasaranaTanah extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'erp_prasarana_tanah';

    public function bangunan()
    {
        return $this->hasMany(PrasaranaBangunan::class);
    }
}
