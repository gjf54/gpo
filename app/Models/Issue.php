<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Issue extends Model
{
    use HasFactory;
    use Notifiable;


    protected $fillable = [
        'name',
        'last_name',
        'email',
        'topic',
        'issue',
    ];
}
