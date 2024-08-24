<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Comment extends Model
{
    use HasFactory,SoftDeletes;


    protected $fillable = [
        'comment_title',
        'comment_content',
        'comment_image',
        'comment_users',
    ];
}
