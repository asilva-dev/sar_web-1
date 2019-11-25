@extends("theme.$theme.layout")
@section('titulo')
	Lista de Perfis
@endsection
@section('conteudo')
<div class="row">
    <div class="col">

        @can('Administrador',$admin)
        <a id="list" href="{{URL::route('perfil.create')}}" title="Cadastrar" class="btn btn-primary custom"><i class="fa fa-briefcase"></i> Novo Perfil</a>
        <a id="list" href="{{URL::route('relatorios.relatorioperfils')}}" title="Gerar Pdf" class="btn btn-primary custom-pdf"><i class="fa fa-file-pdf-o"></i></a>              
        @endcan

        @can('perfil-create',$permissoes)
        <a id="list" href="{{URL::route('perfil.create')}}" title="Cadastrar" class="btn btn-primary custom"><i class="fa fa-briefcase"></i> Novo Perfil</a>          
        @endcan

        @can('relatorio-perfil',$permissoes)
        <a id="list" href="{{URL::route('relatorios.relatorioperfils')}}" title="Gerar Pdf" class="btn btn-primary custom-pdf"><i class="fa fa-file-pdf-o"></i></a>               
        @endcan
    </div> 
    
</div>
@if(!empty($dados) && count($dados) > 0)
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Perfis</h3>
    </div>
    <div class="box-body">
        <table id="table" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Ordem</th>
                    <th>Perfil</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
        @foreach($dados as $key => $valor)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$valor->nome}}</td>
                    <td class="acoes-lista">
                            @can('Administrador',$admin)
                                <a id="edit" href="{{URL::route('perfil.edit',$valor->id_perfil)}}" title="Editar" class="fa fa-edit"></a>
                                <form action="{{ action('PerfilsController@destroy', $valor->id_perfil) }}" method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                <button id="delete" type='submit' title="Excluir" class="fa fa-fw fa-trash"></button>
                                </form>
                            @endcan
                            @can('perfil-edit',$permissoes)
                                <a id="edit" href="{{URL::route('perfil.edit',$valor->id_perfil)}}" title="Editar" class="fa fa-edit"></a>
                            @endcan
                            @can('perfil-delete',$permissoes)
                                <form action="{{ action('PerfilsController@destroy', $valor->id_perfil) }}" method="POST">
                                     {{ method_field('DELETE') }}
                                     {{ csrf_field() }}
                                    <button id="delete" type='submit' title="Excluir" class="fa fa-fw fa-trash"></button>
                                </form>
                            @endcan                
                    </td>
                </tr>
        @endforeach
            </tbody>
        </table>
    </div>
@else
    <div class="sem-dados">
        <span class="sem-dados">Não há perfis Cadastrados</span>
    </div>    
@endif
@push('scripts')
    <script src="{{ url('js/toast.js') }}"></script>
@endpush
@endsection