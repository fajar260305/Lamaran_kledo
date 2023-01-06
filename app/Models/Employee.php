<?php

namespace App\Models;

use App\Models\Overtime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class employee extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get the user associated with the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function overtime(): HasOne
    {
        return $this->hasOne(Overtime::class, 'employee_id', 'id');
    }

    /**
     * Get all of the comments for the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function overtime(): HasMany
    // {
    //     return $this->hasMany(Overtime::class, 'employee_id', 'id');
    // }
}
