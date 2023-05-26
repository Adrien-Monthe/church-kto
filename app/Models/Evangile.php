<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evangile extends Model
{
    use HasFactory;
    use HasTranslations;
    use SoftDeletes;
}
