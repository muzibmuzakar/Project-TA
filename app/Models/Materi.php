<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Slide;

class Materi extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_pelajaran',
        'judul',
        'video',
        'game',
    ];

    public function slide(){
        return $this->hasMany(Slide::class);
    }

}
