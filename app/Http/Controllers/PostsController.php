<?php

namespace App\Http\Controllers;

use App\PostTypeEnum;

class PostsController extends Controller
{
    public function index(PostTypeEnum $status = PostTypeEnum::Published)
    {
        dd($status);
    }
}
