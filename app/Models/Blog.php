<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Blog extends Model
{
    use HasFactory;
    use HasTranslations;
    use SoftDeletes;

    protected $fillable = [
        'codename',
        'type',
        'status',
        'comment_status',
        'visibility',
        'title',
        'author',
        'meta_description',
        'meta_keywords',
        'meta_image_path',
        'image_path',
        'description',
        'short_description',
        'views',
        'youtube_code',
        'read_time',
        'bcatergory_id',
        'deleted_at'];

    public $translatable = ['title', 'description', 'short_description'];

    public function tags()
    {
        return $this->belongsToMany(Btag::class, 'btag_blog', 'blog_id', 'btag_id');
    }

    public function category()
    {
        return $this->belongsTo(Bcategory::class, 'bcatergory_id');
    }

    public function comments()
    {
        return $this->hasMany(Bcomment::class, 'blog_id');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable', 'imageable_type', 'imageable_id');
    }
}
