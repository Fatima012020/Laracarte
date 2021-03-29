<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Scopes\DateScopable;

class Message extends Model
{
    use HasFactory;
    
    use DateScopable;

    protected $fillable = ['name', 'email', 'message'];

    
}
