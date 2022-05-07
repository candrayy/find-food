<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;
    protected $table = 'kriterias';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'kd_kriteria', 'nama_kriteria',
    ];

    public function makanan()
    {
        return $this->hasMany(Makanan::class);
    }
}
