<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewModel extends Model
{
    use HasFactory;

    protected $table = 'tb_view';
    protected $fillable = [
        'id' , 'jumlah_view' , 'created_at' , 'updated_at'
    ];
}
