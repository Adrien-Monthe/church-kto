<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Portfolio extends Model
{
    use HasFactory;

    use HasTranslations;
    use SoftDeletes;

    public $translatable = ['name', 'description', 'short_description'];
    protected $fillable = [
        'codename',
        'slug',
        'name',
        'description',
        'short_description',
        'views',
        'visibility',
        'deleted_at',
        'added_by',
        'pocategory_id',
        'event_date',
        'image_path',
        'image_path_banner',
    ];

    public function tags()
    {
        return $this->belongsToMany(Potag::class, 'potag_portfolio', 'portfolio_id', 'potag_id');
    }

    public function category()
    {
        return $this->belongsTo(Pocategory::class, 'pocategory_id',);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable', 'imageable_type', 'imageable_id');
    }


}
