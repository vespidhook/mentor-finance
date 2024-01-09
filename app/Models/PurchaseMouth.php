<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class PurchaseMouth extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_list_id',
        'purchase_mdate',
        'total',
        'status',
    ];

    public function purchaseList(): BelongsTo
    {
        return $this->belongsTo(PurchaseList::class);
    }

    public function purchaseItems(): HasMany
    {
        return $this->HasMany(PurchaseItem::class);
    }

    public function payment():MorphOne
    {
        return $this->morphOne(Payment::class, 'purchaseable');
    }
}
