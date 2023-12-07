<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
/*         'model', */
        'v_models_id',
        'trademarks_id',
        'categories_id',
        'is_avaliable',
        'tarifa',
/*         'image', */
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_marca' => 'integer',
        'id_categoria' => 'integer',
        'is_avaliable' => 'boolean',
    ];

    public function vmodel(): BelongsTo
    {
        return $this->belongsTo(VModel::class, 'id');
    }

    public function idMarca(): BelongsTo
    {
        return $this->belongsTo(Trademark::class);
    }

    public function idCategoria(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function rate(): BelongsTo
    {
        return $this->belongsTo(Rate::class, 'tarifa', 'tarifa');
    }
}
