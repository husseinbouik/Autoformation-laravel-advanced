<?php

namespace App\Models;
use App\Casts\PriorityCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "completed",
        "priority",

    ];

    // protected function name(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn (string $value) => ucfirst($value)
    //     );
    // }
    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucfirst($value),
            set: fn (string $value) => strtolower($value)
        );
    }
    // This casting ensures that the completed attribute is treated as a boolean.
    // protected $casts = [
    //     'completed' => 'boolean',
    // ];
    protected $casts = [
        'priority' => PriorityCast::class,
    ];
    
}
