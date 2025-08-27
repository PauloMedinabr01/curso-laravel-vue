<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class IndexController extends Controller
{
    /**
     * Display the index page.
     *
     * @return View
     */
    public function index(): View
    {
        return view('index.index');
    }
}
