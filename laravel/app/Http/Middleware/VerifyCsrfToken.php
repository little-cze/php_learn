<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *应该从CSRF验证中排除的URI。
     * @var array
     */
    protected $except = [
        //排除csrf验证的路由
//        'admin/test2',
    //通配符。排除所有的路由
        '*'
    ];
}
