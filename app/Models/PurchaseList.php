<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PurchaseList extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status'
    ];

    public function itemLists(): HasMany
    {
        return $this->hasMany(ItemList::class);
    }

    public function purchaseMouths(): HasMany
    {
        return $this->hasMany(PurchaseMouth::class);
    }
}
