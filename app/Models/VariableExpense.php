<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class VariableExpense extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'amount',
        'due_date',
        'status',
    ];

    public function payments(): MorphOne
    {
        return $this->morphOne(Payment::class, 'purchaseable');
    }
}
