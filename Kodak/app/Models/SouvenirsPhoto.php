<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SouvenirsPhoto extends Model
{
    use HasFactory;
    protected $primaryKey = 'souvenir_id';
    protected $table = 'souvenirs_photos';

    protected $fillable = ['souvenir_id', 'filename'];

    public function souvenirs()
    {
        return $this->belongsTo(Souvenirs::class,'souvenir_id');
    }

}
