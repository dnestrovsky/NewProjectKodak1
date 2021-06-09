<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SouvenirsPhoto extends Model
{
    use HasFactory;

    protected $table = 'souvenirs_photos';

    protected $fillable = ['souvenir_id', 'filename'];

}
