<?php

namespace App\Models;

use App\Models\User;
use App\Models\Planning;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registration extends Model
{
    use HasFactory;

    /**
     * Get all of the user for the Planning
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function planning()
    {
        return $this->belongsTo(Planning::class);
    }


}
