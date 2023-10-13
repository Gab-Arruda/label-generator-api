<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table = 'food';
    protected $fillable = ['nome', 'category_id', 'umidade', 'energia', 'proteina', 'lipideos', 'colesterol', 'carboidrato', 'fibra_alimentar', 'cinzas', 'calcio',
    'magnesio', 'manganes', 'fosforo', 'ferro', 'sodio', 'potassio', 'cobre', 'zinco', 'retinol', 're', 'rae', 'tiamina', 'riboflavina', 'piridoxina', 'niacina',
    'vitamina_c', 'saturados', 'mono_insaturados', 'poli_insaturados'];

    public function category()
    {
        return $this->belongsTo(
            Category::class,
            'category_id',
            'id'
        );
    }
}
