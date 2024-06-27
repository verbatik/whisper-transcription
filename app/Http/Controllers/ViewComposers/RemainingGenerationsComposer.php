<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class RemainingGenerationsComposer
{
    public function compose(View $view)
    {
        if (auth()->check()) {
            $user = auth()->user();
            if ($user->is_subscriber) {
                $remainingGenerations = 'Unlimited';
            } else {
                $remainingGenerations = 10 - $user->daily_generations;
            }
            $view->with('remainingGenerations', $remainingGenerations);
        }
    }
}