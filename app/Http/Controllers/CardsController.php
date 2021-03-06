<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CardsContoller;

class CardsController extends Controller
{
    public function index(){
      $cards = Card::all();
      return view('cards.index', compact('cards'));
    }

    public function show(Card $card){
      // $card = Card::find($id);
      return view('cards.show', compact('cards'));
    }
}
