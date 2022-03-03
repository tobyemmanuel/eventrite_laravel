<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventreg extends Model
{
    use HasFactory;
    protected $table = 'eventreg';
    protected $fillable = ['regName', 'regEmail', 'regNoTickets'];
}
