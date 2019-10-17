@extends('layouts.templatecadastro')

@section('titulo')
EDIÇÃO DE ATENDIMENTOS
@stop

@section('form')

<form class="form-horizontal" method="POST" action="/atendimento/{{$atendimento->id}}">
{{csrf_field() }}
{{ method_field('PUT') }}
<fieldset>
<div class="panel panel-primary">
      
    <div class="form-group">
<!--
<div class="form-group">   
<div class="col-md-4 control-label">
    <img id="logo" src="http://blogdoporao.com.br/wp-content/uploads/2016/12/Faculdade-pitagoras.png"/>
</div>
<div class="col-md-4 control-label">
    <h1>Cadastro de Cliente</h1>
    
</div>
</div>
    -->
<div class="col-md-11 control-label">
        <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="descricao">Descricao <h11>*</h11></label>  
  <div class="col-md-8">
  <input id="descricao" name="descricao" value="{{$atendimento->descricao}}" class="form-control input-md" required="" type="text">
  </div>
</div>

<!-- Prepended text-->

<!-- Prepended text-->



<!-- Prepended text-->

<div class="form-group">
  <label class="col-md-2 control-label" for="valor_total">Valor Total <h11>*</h11></label>  
  <div class="col-md-2">
    <input id="valor_total" name="valor_total" value="{{$atendimento->valor_total}}" class="form-control input-md" required="" type="text">
  </div>
  <br>
  <label class="col-md-2 control-label" for="data_atendimento">Data <h11>*</h11></label>  
  <div class="col-md-2">
    <input id="data_atendimento" name="data_atendimento" value="{{$atendimento->data}}" class="form-control input-md" required="" type="date">
  </div>
  <br>
  <label class="col-md-2 control-label">Carro <h11>*</h11></label>
  <div class="col-md-3">
    <select required id="CBcarro" value="{{$atendimento->carro_id}}" name="CBcarro" class="form-control">
    <option value="">Escolha uma placa</option>
    @foreach($carro as $c)
      <option value="{{$c->id}}">{{$c->placa}}</option>
    @endforeach
    </select>
  </div>
  <br>
  <label class="col-md-2 control-label">Situação <h11>*</h11></label>
  <div class="col-md-3">
    <select required id="situacao" value="{{$atendimento->situacao}}" name="situacao" class="form-control">
      <option value="">Escolha Situação</option>
      <option value="1">Solucionado</option>
      <option value="2">Em andamento</option>
      <option value="3">Em espera</option>
    
    </select>
  </div>
</div>






<div class="form-group">
  <label class="col-md-2 control-label" for=""></label>  
  <div class="col-md-8">
  <div class="form-group">
    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
    <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
</div>
  </div>
</div>





</fieldset>
</form>
@stop
