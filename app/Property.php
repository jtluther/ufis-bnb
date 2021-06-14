<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type;
use App\Review;

class Property extends Model
{
    protected $table = 'property';
    protected $primaryKey = 'property_id';

    public function type() {
        return Type::find($this->type_id);
    }

    public function reviews() {
        return Review::where('property_id', $this->property_id)->get();
    }

    public function averageRating() {
        $number = $this->reviews()->avg('rating');
        
        return number_format((float)$number, 1, '.', '');
    }
}
