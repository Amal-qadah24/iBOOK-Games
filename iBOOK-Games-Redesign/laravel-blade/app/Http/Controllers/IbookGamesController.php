<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class IbookGamesController extends Controller
{
    private function catalog(): array
    {
        // Replace with an adapter to the real Game model when source is provided.
        return config('ibook_games', []);
    }

    public function home(): View
    {
        $games = collect($this->catalog());
        $featured = $games->whereIn('id', [1, 2, 3, 11, 29, 47, 50, 59]);
        return view('ibook.home', compact('games', 'featured'));
    }

    public function index(Request $request): View
    {
        $games = collect($this->catalog());
        $selectedSubject = $request->query('subject', 'All');
        return view('ibook.index', compact('games', 'selectedSubject'));
    }

    public function show(string $slug): View
    {
        $games = collect($this->catalog());
        $game = $games->firstWhere('slug', $slug);
        abort_unless($game, 404);
        $related = $games->where('slug', '!=', $slug)
            ->where('subject', $game['subject'])->take(4);
        $related = $related->concat($games->where('slug', '!=', $slug)
            ->whereNotIn('slug', $related->pluck('slug'))->take(4 - $related->count()));
        return view('ibook.show', compact('game', 'related'));
    }

    public function subjects(): View
    {
        $games = collect($this->catalog());
        return view('ibook.subjects', compact('games'));
    }

    public function grades(): View
    {
        return view('ibook.grades');
    }
}
