<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        $news = [
            ['title' => 'Evento Corporativo', 'description' => 'Participe do nosso evento anual!'],
            ['title' => 'Nova Política Interna', 'description' => 'Confira as atualizações na política interna da empresa.'],
            ['title' => 'Treinamento Disponível', 'description' => 'Aproveite os novos treinamentos online.'],
        ];

        return view('dashboard', [
            'links' => Link::query()->paginate(),
            'news' => $news,
        ]);
    }
}
