<?php

namespace App\Http\Controllers;

use App\Models\Table;
use App\Models\Consumable;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function scan()
    {
        return view('order.scan');
    }

    public function table()
    {
        return view('order.table');
    }

    public function order($table)
    {
        $table = Table::where('id', $table);
        dd($table);
        $consumables = Consumable::all();
        return view('order.order');
    }
}
