<?php

namespace App\Models\Admin;

use App\Models\Admin\GameType;
use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameList extends Model
{
    use HasFactory;

    protected $fillable = ['game_type_id', 'product_id', 'name', 'code', 'image_url', 'click_count', 'status', 'hot_status'];



    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function gameType()
    {
        return $this->belongsTo(GameType::class, 'game_type_id');
    }

    public function getImgUrlAttribute()
    {
        return asset('/game_logo/'.$this->image);
    }


}
