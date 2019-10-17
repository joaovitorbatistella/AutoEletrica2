@extends('layouts.templatelist')

@section('titulo')
  FORNECEDORES
@stop

@section('href')
  <a style="font-size:22px;" href="/cadastro/fornecedor/">CADASTRAR</a>
@stop

@section('conteudo')


<table class="table">
  <thead>
    <tr>
      <th style="font-size:30px" scope="col">#</th>
      <th style="font-size:30px" scope="col">Nome</th>
      <th style="font-size:30px" scope="col">E-mail</th>
      <th style="font-size:30px" scope="col">Endereço</th>
      <th style="font-size:30px" scope="col">UF</th>
      <th style="font-size:30px" scope="col">Cidade</th>
      <th style="font-size:30px" scope="col">Editar</th>
      <th style="font-size:30px" scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($fornecedor as $forn)
    <tr>
      <th style="font-size:30px" scope="row">{{$forn->id}}</th>
      <td style="font-size:30px">{{$forn->nome_fornecedor}}</td>
      <td style="font-size:30px">{{$forn->email}}</td>
      <td style="font-size:30px">{{$forn->endereco}}</td>
      <td style="font-size:30px">{{$forn->uf}}</td>
      <td style="font-size:30px">{{$forn->cidade}}</td>
      <td style="font-size:30px"><a href="/editar/fornecedor/{{$forn->id}}"><img src="{{URL::asset('/image/editar.png')}}" height="20" width="20"></a></td>
      <td style="font-size:30px"><a href="/excluir/fornecedor/{{$forn->id}}"><img src="{{URL::asset('/image/excluir.png')}}"  height="20" width="20"></a></td>
    </tr>
  @endforeach
  
  </tbody>
</table>
@stop