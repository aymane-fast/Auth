<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = ['value', 'module_id', 'user_id'];

    public function module() {
        return $this->belongsTo(Module::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
