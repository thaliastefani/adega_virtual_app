@extends('layouts.dashboard')

@section('content')
<div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Minha Adega</h2>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="pull-right">
              <a href="{{ route('vinhos.create') }}">
                <img src="/images/add_vinho.svg" alt="">+Adicionar um Vinho
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
            <th>Vinícola</th>
            <th>País</th>
            <th>Uvas</th>
            <th width="280px">Ações</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ $value->nome }}<br>Safra: {{ $value->safra_ano }}</td>
            <td>{{ $value->vinicola->nome }}<br>{{$value->regiao }}</td>
            <td>{{ $value->pais->nome }}</td>
            <td>@if ($value->especifidade)
                {{ $value->especifidade }}
            @endif
            <br>
              {{ $value->tipo_uva->nome }}
            </td>
            <td>
                <form action="{{ route('vinhos.destroy',$value->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('vinhos.edit',$value->id) }}"><i class='bx bx-edit-alt'></i></a>
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