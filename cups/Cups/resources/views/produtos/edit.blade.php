@extends('layouts.admin-master',['CreateProdutoAtivo'=>true])
@section('content')
<form action="" class="flex-grow-1 w-auto m-5" method="post">
	<div class="form-group">
		<label for="nome">Nome</label>
	<input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do produto" value="{{$produto['nome']}}">
	</div>
	<div class="form-group">
		<label for="categoria">Categoria</label>
		<select class="form-control" id="categoria" name="categoria">
			@foreach ($categoria as $c)
			<option value="{{ $c->id == $produto ->id_categoria ? 'selected' : ''  }}">Categoria....</option>	
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label for="nome">Preço</label>
		<input type="number" step="0.01" class="form-control" name="preco" id="preco" placeholder="Preço" value="">
	</div>
	<div class="form-group">
		<label for="qtde">Quantidade</label>
		<input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Quantidade" value="">
	</div>
	<button class="btn btn-warning float-right w-25">Salvar</button>
</form>
@endsection