<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishListController extends Controller
{
    public function store($id)
    {
        $course = Course::find($id);

        $wishlist = \Cart::session(Auth::user()->id.'_wishlist')->add([
            'id' => $course->id,
            'name' => $course->title,
            'price' => $course->price,
            'quantity' => 1,
            'associatedModel' => $course
        ]);

        return redirect()->route('cart.index')->with('success', 'Le cours a été ajouté à la liste de souhaits.');
    }

    public function destroy($id)
    {
        \Cart::session(Auth::user()->id.'_wishlist')->remove($id);

        return redirect()->route('cart.index')->with('success', 'Le cours a été supprimé de la liste de souhaits.');
    }

    public function toCart($id)
    {
        \Cart::session(Auth::user()->id.'_wishlist')->remove($id);

        $course = Course::find($id);

        $add = \Cart::session(Auth::user()->id)->add([
            'id' => $course->id,
            'name' => $course->title,
            'price' => $course->price,
            'quantity' => 1,
            'associatedModel' => $course
        ]);

        return redirect()->route('cart.index')->with('success', 'Le cours a été supprimé de la liste de souhaits et ajouté à votre panier !');
    }

    public function toWishList($id)
    {
        $course = Course::find($id);
        
        \Cart::session(Auth::user()->id)->remove($id);
        
        $add = \Cart::session(Auth::user()->id.'_wishlist')->add([
            'id' => $course->id,
            'name' => $course->title,
            'price' => $course->price,
            'quantity' => 1,
            'associatedModel' => $course
        ]);

        return redirect()->route('cart.index')->with('success', 'Le cours a été supprimé de votre panier et ajouté à votre liste de souhaits !');
    }
}
