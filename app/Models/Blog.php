<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'status',
        // Add 'status' to the list
        // ... other fields
    ];


    protected $table = "blogs";
    protected $primaryKey = "id";
}