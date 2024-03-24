<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'session_id', 'user_id'];

    public function session() {
        return $this->belongsTo(Session::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
