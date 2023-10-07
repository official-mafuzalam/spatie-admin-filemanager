<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;    

    protected $fillable = [
        'message', 'link', 'status', // Add 'status' to the list
        // ... other fields
    ];

    protected $table = "announcements";
    protected $primaryKey = "id";
}
