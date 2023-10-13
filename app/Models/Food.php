<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table = 'food';
    protected $fillable = ['nome', 'umidade', 'energia', 'proteina', 'lipideos', 'colesterol', 'carboidrato', 'fibra_alimentar', 'cinzas', 'calcio', 'magnesio', 'manganes',
        'fosforo', 'ferro', 'sodio', 'potassio', 'cobre', 'zinco', 'retinol', 're', 'rae', 'tiamina', 'riboflavina', 'piridoxina', 'niacina', 'vitamina_c', 'category_id'];

    public function category()
    {
        return $this->belongsTo(
            Category::class,
            'category_id',
            'id'
        );
    }
}
