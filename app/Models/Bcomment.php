<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bcomment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name','email', 'comment', 'blog_id', 'deleted_at'];

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id', );
    }
}
