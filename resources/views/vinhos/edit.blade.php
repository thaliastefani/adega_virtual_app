@extends('layouts.dashboard')

@section('content')
  <div class="row" style="margin-top: 5rem;">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
          <h2>Editar Vinho</h2>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('vinhos.index') }}"> Voltar</a>
      </div>
    </div>
  </div>

  @if ($errors->any())
      <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

  <form action="{{ route('vinhos.update',$vinho->id) }}" method="POST">
      @csrf
      @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome do Vinho:</strong>
                    <input type="text" name="nome" value="{{ $vinho->nome }}" class="form-control input-form" maxlength="100" required>
                </div>
                <div class="form-group">
                    <strong>Ano da Safra:</strong>
                    <input type="text" name="safra_ano" value="{{ $vinho->safra_ano }}" class="form-control input-form" maxlength="4" required>
                    <strong>Especifidade:</strong>
                    <input type="text" name="especifidade" value="{{ $vinho->especifidade }}" class="form-control input-form" maxlength="100" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <br>
                    <strong>País:</strong>
                    <select class="form-control input-form" style="height:auto;" name="pais_id">
                        @foreach($paises as $pais)
                            <hr class="custom-hr-heading"/>
                            <option value="{{$pais->id}}" {{ ($vinho->pais->nome === $pais->nome) ? 'Selected' : ''}}>
                                {{$pais->nome}}
                            </option>
                        @endforeach
                    </select>
                </div>
                    <strong>Região:</strong>
                    <input type="text" name="regiao" value="{{ $vinho->regiao }}" class="form-control input-form" maxlength="100" required>
                    <strong>Teor Alcoólico:</strong>
                    <input type="text" name="teor_alcoolico" value="{{ $vinho->teor_alcoolico }}" class="form-control input-form" required>
                <div class="form-group">
                    <br>
                    <strong>Vinicola:</strong>
                    <select class="form-control input-form" style="height:auto;" name="vinicola_id">
                          @foreach($vinicolas as $vinicola)
                              <hr class="custom-hr-heading"/>
                              <option value="{{$vinicola->id}}" {{ ($vinho->vinicola->nome === $vinicola->nome) ? 'Selected' : ''}}>
                                  {{$vinicola->nome}}
                              </option>
                          @endforeach
                    </select>
                    <strong>Tipo do Vinho (Tinto, Branco, Rosé, Espumante, Fortificado):</strong>
                    <input type="text" name="tipo_vinho" value="{{ $vinho->tipo_vinho }}" class="form-control input-form" maxlength="100" required>
                </div>
                <div class="form-group">
                  <br>
                  <strong>Tipo de Uva:</strong>
                      <select class="form-control input-form" style="height:auto;" name="tipo_uva_id">
                          @foreach($tipo_uvas as $tipo_uva)
                              <hr class="custom-hr-heading"/>
                              <option value="{{$tipo_uva->id}}" {{ ($vinho->tipo_uva->nome === $tipo_uva->nome) ? 'Selected' : ''}}>
                                   {{$tipo_uva->nome}}
                              </option>
                          @endforeach
                      </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
      </div>
  </form>
@endsection