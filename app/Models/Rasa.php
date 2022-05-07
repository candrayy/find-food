<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rasa extends Model
{
    use HasFactory;
    protected $table = 'rasas';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'kd_rasa', 'nama_rasa',
    ];

    public function makanan()
    {
        return $this->hasMany(Makanan::class);
    }
}
