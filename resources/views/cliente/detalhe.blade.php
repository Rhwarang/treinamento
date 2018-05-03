@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li class="active"> Detalhe </li>
                </ol>
                <div class="panel-body">
                    <p>
                        <b> Cliente: {{$cliente->nome}} </b>
                        <b> E-mail: {{$cliente->email}} </b>
                        <b> Endereço: {{$cliente->endereco}} </b>
                    </p>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Número</th>
                                <th>Ação</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($cliente->telefones as $telefone)
                                <tr>
                                    <th scope="row"> {{ $telefone->id }} </th>
                                    <td> {{ $telefone->titulo }} </td>
                                    <td> {{ $telefone->telefone }} </td>
                                    <td> 
                                        <!--<a class="btn btn-default" href="{{route('cliente.editar', $telefone->id)}}"> Editar </a>
                                        <a class="btn btn-danger" href="javascript:(confirm('Deseja realmete excluir?') ? window.location.href='{{route('cliente.deletar', $telefone->id)}}' : '')"> Excluir </a>-->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
