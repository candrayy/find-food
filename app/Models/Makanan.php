<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;
    protected $table = 'makanans';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'kriteria_id', 'rasa_id', 'nama_makanan',
    ];

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }

    public function rasa()
    {
        return $this->belongsTo(Rasa::class);
    }
}
