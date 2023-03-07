<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Category;
use App\Models\Backend\Game;
use App\Models\Backend\GameCategory;
use App\Models\Backend\GameTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FrontGameController extends Controller
{
    public function __construct()
    {
        $categories = Category::orderBy('id', 'asc')->get();
        View::share([
            'categories'=>$categories,
        ]);
    }

    //---all_games
    public function all_games()
    {
        $games = Game::orderBy('serial_number', 'desc')->paginate(120);
        return view('frontend.game.all_game', [
            'games'=>$games,
        ]);
    }

    public function categoryGame($slug)
    {
        $single_category = Category::where('slug', $slug)->first();
        $game_categories = GameCategory::where('category_slug', $slug)->with('Game')->paginate(90);
        return view('frontend.game.categoryGame', compact('game_categories', 'slug', 'single_category'));
    }
    //gamePlay
    public function gamePlay($slug)
    {
        $game = Game::where('slug', $slug)->with('gameCategory')->first();
        $category = GameCategory::where('game_id', $game->id)->first();
        $game_same_categories = GameCategory::where('game_id', $game->id)->get();
        $game_same_tags = GameTag::where('game_id', $game->id)->get();
        $related_games = GameCategory::where('category_name', $category->category_name)->with('Game')->inRandomOrder()->get();
        $games = Game::orderBy('serial_number', 'desc')->take(200)->get();
        return view('frontend.game.gamePlay', compact('game', 'related_games', 'games', 'category', 'game_same_categories', 'game_same_tags'));
    }

     //best_games
     public function best_games()
     {
        $best_games = Game::where('serial_number', '>', 0)->orderBy('serial_number', 'desc')->with('gameCategory')->paginate(90);
         return view('frontend.game.best_games', compact('best_games'));
     }

     //featured_games---
     public function featured_games()
     {
        $featured_games = Game::where('is_featured', 1)->with('gameCategory')->paginate(90);
         return view('frontend.game.featured_game', compact('featured_games'));
     }
}
