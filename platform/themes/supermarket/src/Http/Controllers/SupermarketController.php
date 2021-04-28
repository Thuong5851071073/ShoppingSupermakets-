<?php

namespace Theme\Supermarket\Http\Controllers;

use Platform\Page\Repositories\Interfaces\PageInterface;
use Platform\Slug\Repositories\Interfaces\SlugInterface;
use Platform\Support\Http\Requests\Request;
use Platform\Theme\Http\Controllers\PublicController;

class SupermarketController extends PublicController
{
    public function index(PageInterface $pageRepository, SlugInterface $slugRepository, Request $request){
        return Theme::scope('index')->render();
    }
}
