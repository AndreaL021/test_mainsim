<?php

namespace App\Models;

use App\Models\ShoppingList;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'product',
        'price'
    ];
    
    public function shoppinglists(){
        
        return $this->hasMany(ShoppingList::class);
        
    }

}
