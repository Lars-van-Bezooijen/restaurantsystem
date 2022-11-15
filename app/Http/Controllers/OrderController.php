<?php

namespace App\Http\Controllers;

use App\Models\Table;
use App\Models\Consumable;
use App\Models\Category;
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

    public function tablePost()
    {
        $table = Table::where('number', request('table_number'))->first();
        if ($table) {
            return redirect()->route('order.order', ['table' => $table->id]);
        } else {
            return redirect()->route('order.table')->with('error', 'Ongeldig tafelnummer');
        }
    }

    public function order($table)
    {
        $table_order = Table::find($table);
        $consumables = Consumable::all();
        $categories = Category::all();
        return view('order.order', [
            'table_order' => $table_order,
            'consumables' => $consumables,
            'categories' => $categories
        ]);
    }
}
