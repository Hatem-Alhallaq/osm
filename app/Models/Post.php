<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $table = 'posts';
    protected $fillable = [
        'title','details','type','user_id','views','video_url','category_id','image'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
