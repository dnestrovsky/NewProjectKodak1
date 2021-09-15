<?php

namespace App\Models;

use App\Models\Traits\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Souvenirs extends Model
{
    use HasFactory, Translatable;
    protected $primaryKey = 'id';

    protected $table = 'souvenirs';

    protected $fillable = [
        'name',
        'description',
        'image',
        'name_ro',
        'description_ro',
        ];

}
