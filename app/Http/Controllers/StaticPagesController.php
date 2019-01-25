<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * 静态页面
 * Class StaticPagesController
 * @package App\Http\Controllers
 */
class StaticPagesController extends Controller
{
    /**
     * 展示首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        return view('static_pages/home');
    }

    /**
     * 帮助页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function help()
    {
        return view('static_pages/help');
    }

    /**
     * 关于我页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        return view('static_pages/about');
    }
}
