<?php

namespace App\Http\Controllers;

use App\Models\Consumable;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function scan()
    {
        return view('order.scan');
    }

    public function order()
    {
        // get all consumables
        $consumables = Consumable::all();
        return view('order.order', [
            'consumables' => $consumables
        ]);
    }
}
