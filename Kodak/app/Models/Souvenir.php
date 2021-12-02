<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Translatable;

class Souvenir extends Model
{
    use HasFactory, Translatable;

    protected $table = 'souvenirs';

    protected $fillable = [
        'name',
        'description',
        'image',
        'name_ro',
        'description_ro',
        ];

    public function Photos(){
        return $this->hasMany(Image::class);
    }
}
