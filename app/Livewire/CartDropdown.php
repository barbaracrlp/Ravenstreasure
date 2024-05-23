<?php

namespace App\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartDropdown extends Component
{
    // public function render()
    // {
    //     return view('livewire.cart-dropdown');
    // }


    public $cart;

    protected $listeners = ['cartUpdated' => 'loadCart'];

    public function mount()
    {
        $this->loadCart();
    }

    public function loadCart()
    {
        //aqui cambio de user_id a buyer_id si veo que falla tengo que cambiarlo
        if (Auth::check()) {
            $this->cart = Cart::where('buyer_id', Auth::id())->with('cartItems.design')->first();
        } else {
            $this->cart = null;
        }
    }

    public function render()
    {
        return view('livewire.cart-dropdown');
    }
}
