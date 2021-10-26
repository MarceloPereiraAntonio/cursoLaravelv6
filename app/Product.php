<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'valor', 'description'];

    public function search($filter)
    {
        $results = $this->where(function($query) use($filter){
            if($filter)
            {
                $query->where('name', 'LIKE', "%{$filter}%");
            }
        })->paginate();

        return $results;

    }
}
