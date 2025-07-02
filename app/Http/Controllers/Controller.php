<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Menu;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    public function showForm($id) {
        $menu = Menu::findOrFail($id);
        return view('order.form', compact('menu'));
    }

    public function submitOrder(Request $request) {
        $request->validate([
            'menu_id' => 'required',
            'jumlah' => 'required|numeric|min:1',
            'alamat' => 'required',
            'metode_pembayaran' => 'required',
        ]);

        $menu = Menu::findOrFail($request->menu_id);
        Order::create([
            'user_id' => Auth::id(),
            'menu_id' => $menu->id,
            'jumlah' => $request->jumlah,
            'total' => $menu->harga * $request->jumlah,
            'alamat' => $request->alamat,
            'metode_pembayaran' => $request->metode_pembayaran,
            'status' => 'Diproses',
        ]);

        return redirect('/dashboard')->with('success', 'Pesanan berhasil dibuat!');
    }

}
