<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    use HasFactory;

    protected $fillable = ['manager_id', 'name', 'number'];

    public function manager()
    {
        return $this->belongsTo(User::class);
    } // make relationship between room and user

    public function getManagerIdAttribute($manager_id)
    {
        return Admin::findOrFail($manager_id)->name;
    }
}