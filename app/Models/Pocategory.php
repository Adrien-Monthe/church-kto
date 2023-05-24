<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Pocategory extends Model
{
    use HasFactory;
    use HasTranslations;
    use SoftDeletes;

    public $translatable = ['name', 'description'];
    protected $fillable = ['codename', 'name', 'description', 'short_description', 'deleted_at', 'meta_description', 'meta_keywords', 'meta_image_path', 'image_path'];

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }
}
