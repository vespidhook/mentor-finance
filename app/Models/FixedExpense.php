<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class FixedExpense extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'amount',
        'day_of_month',
    ];

    public function payments(): MorphMany
    {
        return $this->morphMany(Payment::class, 'purchaseable');
    }
}
