<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory;
    use HasTranslations;
    use SoftDeletes;

    protected $fillable = ['image_path', 'reference', 'product_type', 'status', 'comment_status', 'visibility', 'name', 'description', 'short_description', 'price', 'promo_price', 'quantity_in_stock', 'meta_description', 'meta_keywords', 'meta_image_path', 'pcategory_id', 'views', 'deleted_at'];

    public $translatable = ['name', 'description', 'short_description'];

    public function tags()
    {
        return $this->belongsToMany(Ptag::class, 'ptag_product', 'product_id', 'ptag_id');
    }

    public function category()
    {
        return $this->belongsTo(Pcategory::class, 'pcategory_id',);
    }

    public function comments()
    {
        return $this->hasMany(Pcomment::class, 'product_id');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable', 'imageable_type', 'imageable_id');
    }
}
