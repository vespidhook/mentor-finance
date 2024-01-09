<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PurchaseItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_mouth_id',
        'item_list_id',
        'name',
        'quantity',
        'purchased',
    ];

    public function purchase_mouth(): BelongsTo
    {
        return $this->belongsTo(PurchaseMouth::class);
    }

    public function item_list(): BelongsTo
    {
        return $this->belongsTo(ItemList::class);
    }
}
