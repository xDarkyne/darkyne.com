<?php


namespace App\Http\View\Composers;

use Illuminate\View\View;

class BaseComposer
{
    public function compose(View $view): void {
        $nav = [
            ['home', '/', false],
            ['eso', '/eso', false],
            ['github', '/github', true],
            ['discord', '/discord', true]
        ];

        $view->with('nav', $nav);
    }
}
