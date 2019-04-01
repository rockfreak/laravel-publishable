<?php

namespace RockFreak\Publishable\Tests;

use Illuminate\Database\Eloquent\Model;
use RockFreak\Publishable\Publishable;

class Post extends Model
{
    use Publishable;
    
    protected $guarded = [];
}
