@extends('layouts.dashboard')

@section('content')
<div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Degustações</h2>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="pull-right">
              <a href="{{ route('ficha_degustacoes.create') }}">
                <img src="/images/add_ficha_degustacao.svg" alt="">+Adicionar uma Degustação
              </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <br>
    <table class="table">
        <tr>
            <th>Vinho</th>
            <th>Harmonização</th>
            <th>Data</th>
            <th width="280px">Ações</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ $value->vinho->nome.''.$value->vinho->safra_ano }}-{{ $value->vinho->vinicola->nome }}</td>
            <td>{{ $value->harmonizacoes->preparacao->tipo }}<br>{{ $value->harmonizacoes->caracteristicas }}</td>
            <td>{{ $value->data_degustacao }}</td>
            <td>
                <form action="{{ route('ficha_degustacoes.destroy',$value->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('ficha_degustacoes.edit',$value->id) }}"><i class='bx bx-edit-alt'></i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class='bx bx-trash' ></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $data->links() !!}
@endsection