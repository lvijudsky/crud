<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;

class ProdutosController extends Controller
{
    public function index(){

        // Carregar os produtos da base de dados
        $produtos = Produto::paginate(2);

        // Retortar a view com os produtos levantados
        return view('produtos.index',compact ('produtos'));

    }

    public function show($id){

        // Carregar os produtos da base de dados
        $produto = Produto::find($id);

        // Retortar a view com os produtos levantados
        return view('produtos.show',compact ('produto'));

    }

    public function edit($id){

        // Carregar os produtos da base de dados
        $produto = Produto::find($id);
        $categoria = Categoria::all();
        

        // Retortar a view com os produtos levantados
        return view('produtos.edit',compact ('produto', 'categoria'));

    }

    public function update($id){

        // Carregar os produtos da base de dados
        $produto = Produto::find($id);
        $categoria = Categoria::all();
        
        // Alterar os valores do produto
        $produto->nome = request('nome');
        $produto->preco = request('preco');
        $produto->quantidade = request('quantidade');
        $produto->id_categoria = request('id_categoria');
        
        // Salvar as alterações no DB
        $produto->save();

        // Retortar a view com os produtos levantados
        return redirect('/produtos');

    }

    public function delete($id){

        

    }
}


