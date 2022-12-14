@extends('template.nav')

@section("conteudo")
    <div class="pt-5 pl-3 pr-3">
        <div class="d-flex justify-content-between">
            <h2 class="fst-italic fw-bold">Meus Jobs</h2>
        </div>
        @if (!empty($jobsEntity))
            <table class="table table-light table-striped ">
                <thead class="table-warning">
                <tr>
                    <td>Título</td>
                    <td>Função</td>
                    <td>Descrição</td>
                    <td>Valor</td>
                    <td>Ações</td>
                </tr>
                </thead>
                <tbody>
                @foreach ( $jobsEntity as $jobs )
                    @php
                        $linkEditItem = url ('/job/edit/' . $jobs->id);
                        $linkRemoveItem = url ('/job/delete/' . $jobs->id);
                    @endphp

                    <tr>
                        <td style="vertical-align:middle">{{$jobs->titulo}}</td>
                        <td style="vertical-align:middle">{{$jobs->job_type->nome}}</td>
                        <td style="vertical-align:middle">{{$jobs->descricao}}</td>
                        <td style="vertical-align:middle">{{$jobs->valor_hora}}</td>
                        <td>
                            <div class="d-flex">
                                <a href={{$linkEditItem}} class="btn btn-warning mr-2" style="color:white"><i class="fa fa-pen mr-1 mb-0" aria-hidden="true"></i>Editar</a>
                                <a href={{$linkRemoveItem}} class="btn btn-danger mr-2"><i class="fa fa-trash mr-1 mb-0" aria-hidden="true"></i>Excluir</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
        @endif
    </div>
@endsection
