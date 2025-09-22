<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Task extends Model
{
    use Hasfactory;

    protected $table = 'task'; // Adicione esta linha!

    protected $fillable = [
        'description',
        'is_completed',
    ];
}
