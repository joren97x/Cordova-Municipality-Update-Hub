<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Official extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'position',
        'position_name'
    ];

}
    // $table->foreignId('barangay_id');
    //         $table->string('name');
    //         $table->string('image');
    //         $table->string('position');
    //         $table->string('position_name');

