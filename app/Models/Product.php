<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable =[
        
        'image',
        'name',
        'description',
        'category',
        'brand',
        'quantity',
        'provider',
        'data_venc',
        'price',
        'saleprice',

    ];

    public function getProduct(string $search = null)
    {
        $products = $this->where(function ($query) use ($search) {
            if($search){
                $query->where('description', $search);
                $query->orwhere('name', 'LIKE', "%{$search}%");
            }
        })
            ->paginate(5);

        return $products;
    }
}
