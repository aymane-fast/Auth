<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $fillable = ['fillier_id', 'day_of_week', 'session_number', 'module_id'];

    public function fillier()
    {
        return $this->belongsTo(Fillier::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
