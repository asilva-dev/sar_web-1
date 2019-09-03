@extends("theme.$theme.layout")
@section('titulo')
    Editar Normas
@endsection
@section('conteudo')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">
        <div class="col-md-10">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Editar</h3>
            </div>
            <form role="form" action="{{ action('NormasController@update', $dados->id_norma) }}" method="POST">
            @method('PUT')
            @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="Numero da Norma">Número da Norma</label>
                  <input type="text" class="form-control" id="numero" placeholder="Número da Normas" name="numero_norma" value="{{$dados->numero_norma}}" maxlength="2" size="50" required>
                </div>
                <div class="form-group">
                  <label for="descricao">Descrição</label>
                  <input type="text" class="form-control" id="descricao" placeholder="Descrição da Norma" maxlength="400" name="descricao" value="{{$dados->descricao}}"size="50" required>
                </div>
              </div>
              <div class="box-footer">
                <a href="{{URL::route('norma.index')}}" title="Voltar" class="btn btn-primary">Voltar</a>
                <button type="submit" class="btn btn-primary">Atualizar</button>
              </div>
            </form>
          </div>
        </div>
    </div>
</div>
@endsection