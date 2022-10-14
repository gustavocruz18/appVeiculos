@extends('padrao')
@section('content')
<section>
<div class="container cadastroCarros">
<form class="row g-3" method="post" action="{{route('salvar-banco')}}">
  @csrf
  <div class="col-md-12">
    <label for="inputModelo" class="form-label">Modelo</label>
    <input type="text" name="modelo" value="{{old('modelo')}}" class="form-control" id="inputModelo" placeholder="Fusca">
 @error('modelo')
    <div><p class="text-light">Preecher o campo modelo </div>
 @enderror
  </div>

  
  <div class="col-12">
    <label for="inputMarca" class="form-label">Marca</label>
    <input type="text" name="marca" value="{{old('marca')}}" class="form-control" id="inputMarca" placeholder="BMW">
    @error('marca')
    <div><p class="text-light">Preecher o campo marca</div>
 @enderror
  </div>


  <div class="col-12">
    <label for="inputAno" class="form-label">Ano</label>
    <input type="text" name="ano" value="{{old('ano')}}" class="form-control" id="inputAno" placeholder="2000">
    @error('ano')
    <div><p class="text-light">Preecher o campo ano </div>
 @enderror
  </div>
  <div class="col-md-12">
    <label for="inputCor" class="form-label">Cor</label>
    <input type="text" name="cor" value="{{old('cor')}}" class="form-control" id="inputCor" placeholder="02569-9874">
    @error('cor')
    <div><p class="text-light">Preecher o campo Cor </div>
 @enderror
  </div>

 
  <div class="col-md-12">
    <label for="inputValor"  class="form-label">Valor</label>
    <input type="text" name="valor" value="{{old('valor')}}" class="form-control" id="inputValor" placeholder="25.660,23">
    @error('valor')
    <div><p class="text-light">Preecher o campo Valor </div>
 @enderror
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</div>
</section>
@endsection
