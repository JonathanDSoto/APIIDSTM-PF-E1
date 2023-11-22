<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rental extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_cliente',
        'id_vehiculo',
        'id_tarifa',
        'initial_day',
        'delivery_day',
        'days',
        'total',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_cliente' => 'integer',
        'id_vehiculo' => 'integer',
        'id_tarifa' => 'integer',
        'initial_day' => 'datetime',
        'delivery_day' => 'datetime',
        'days' => 'integer',
    ];

    public function id(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }

    public function idCliente(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function idTarifa(): BelongsTo
    {
        return $this->belongsTo(Rate::class);
    }
}
