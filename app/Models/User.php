<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable
{
    use HasFactory;
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable  = [
        'name',
        'email',
        'cin',
        'password',
    ];
    public function grades()
{
    return $this->hasMany(Grade::class);
}
};
