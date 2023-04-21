<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Bcatergory extends Model
{
    use HasFactory;
    use HasTranslations;
    use SoftDeletes;

    protected $fillable = ['codename','name','description', 'short_description', 'deleted_at','meta_description','meta_keywords','meta_image_path','image_path'];

    public $translatable = ['name','description'];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
