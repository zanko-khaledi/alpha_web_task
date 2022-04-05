<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;
class View extends MongoModel
{
    use HasFactory;

    protected $connection = "mongodb";

    protected $fillable = [
        "article_id","article_title","counter"
    ];
}
