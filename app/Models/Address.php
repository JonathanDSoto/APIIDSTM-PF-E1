<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Address extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address',
        'code_postal',
        'residence_number',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'code_postal' => 'integer',
    ];

    protected function address()
    {
        return new Attribute(set: function ($value) {
            return strtolower($value);
        });
    }

    protected function residence_number()
    {
        return new Attribute(set: function ($value) {
            return strtolower($value);
        });
    }
}
