<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $fillable=[
        'taskName',
        'taskDescription',
        'taskStatus',
        'taskPriority',
        'taskDueDate'
    ];

    protected $casts =[
        'taskDueDate'=> 'datetime',
    ];
}
