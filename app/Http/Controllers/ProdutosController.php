<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index() {
        return Produtos::all();
    }

    public function store(Request $request) {
        Produtos::create([
            "name" => $request->name,
            "price" => $request->price
        ]);

        return response("OK", 200);
    }

    public function update(Request $request)
    {
        $produto = Produtos::find($request->id);

        $produto->name = $request->name;
        $produto->price = $request->price;
        $produto->save();

        return response("OK", 200);

    }

    public function delete(Request $request)
    {
        $produto = Produtos::find($request->id);

        $produto->delete();

        return response("Produto Deletado!", 200);
    }
}
