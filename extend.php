<?php

/*
 * This file is part of clamours/sticky-sidenav-blog.
 *
 * Copyright (c) 2023 Clamours.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CLAMOURS\StickySidenavBlog;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        
        ->css(__DIR__.'/less/blog.less'),
    
    
];
