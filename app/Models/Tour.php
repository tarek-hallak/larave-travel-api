<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\Attributes\Node\Attributes;

class Tour extends Model
{
    use HasFactory , HasUuids;

    protected $fillable = [
        'travel_id',
        'name',
        'starting_date',
        'ending_date',
        'price'
    ];

    public function price() :Attribute
    {
        return Attribute::make(
            get: fn($value) => $value /100,
            set: fn($value) => $value *100
        );
    }
}
