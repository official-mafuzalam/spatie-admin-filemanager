<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountDeposit extends Model
{
    use HasFactory;

    protected $table = "account_deposits";
    protected $primaryKey = "id";
}
