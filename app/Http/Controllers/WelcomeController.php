<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\View\View;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        return view('welcome', [
            'links' => Link::query()->paginate(),
        ]);
    }
}
