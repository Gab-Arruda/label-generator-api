<?php

namespace App\Imports;

use App\Models\Food;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class FoodImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Food([
            'nome' => $row['nome'],
            'umidade' => $row['umidade'],
            'energia' => $row['energia'],
            'proteina' => $row['proteina'],
            'lipideos' => $row['lipideos'],
            'colesterol' => $row['colesterol'],
            'carboidratos' => $row['carboidrato'],
            'fibra_alimentar' => $row['fibra_alimentar'],
            'cinzas' => $row['cinzas'],
            'calcio' => $row['calcio'],
            'magnesio' => $row['magnesio'],
            'manganes' => $row['manganes'],
            'fosforo' => $row['fosforo'],
            'ferro' => $row['ferro'],
            'sodio' => $row['sodio'],
            'potassio' => $row['potassio'],
            'cobre' => $row['cobre'],
            'zinco' => $row['zinco'],
            'retinol' => $row['retinol'],
            're' => $row['re'],
            'rae' => $row['rae'],
            'tiamina' => $row['tiamina'],
            'riboflavina' => $row['riboflavina'],
            'piridoxina' => $row['piridoxina'],
            'niacina' => $row['niacina'],
            'vitamina_c' => $row['vitamina_c'],
            'category_id' => $row['category_id'],
        ]);
    }
}
