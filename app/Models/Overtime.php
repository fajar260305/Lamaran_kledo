<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class overtime extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get the user that owns the Overtime
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(employee::class, 'employee_id', 'id');
    }

    // public function overtime(): HasOne
    // {
    //     return $this->hasOne(Overtime::class, 'employee_id', 'id');
    // }

    /**
     * Get all of the comments for the Overtime
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function overtime(): HasMany
    {
        return $this->hasMany(Overtime::class, 'employee_id', 'id');
    }
}
