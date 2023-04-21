<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pcomment extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = ['name', 'email', 'rate', 'comment', 'product_id', 'deleted_at'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id',);
    }
}
