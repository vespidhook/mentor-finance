<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ItemList extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_list_id',
        'name'
    ];

    public function purchaseList(): BelongsTo
    {
        return $this->belongsTo(PurchaseList::class);
    }

    public function purchaseItems(): HasMany
    {
        return $this->HasMany(PurchaseItem::class);
    }
}
