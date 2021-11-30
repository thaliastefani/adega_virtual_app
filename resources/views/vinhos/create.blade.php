@extends('layouts.dashboard')

@section('content')
  <div class="row" style="margin-top: 5rem;">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
          <h2>Adicionar novo Vinho</h2>
          <h4>Adicione o vinho desejado a sua adega.</h4>
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

  <form action="{{ route('vinhos.store') }}" method="POST">
      @csrf

      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Nome do Vinho:</strong>
                  <input type="text" name="nome" class="form-control input-form" maxlength="100" required>
              </div>
              <div class="form-group">
                  <strong>Ano da Safra:</strong>
                  <input type="text" name="safra_ano" class="form-control input-form" maxlength="4" required>
                  <strong>Especifidade:</strong>
                  <input type="text" name="especifidade" class="form-control input-form" maxlength="100" required>
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <br>
                  <strong>País:</strong>
                  <select class="form-control input-form" style="height:auto;" name="pais_id">
                      @foreach($paises as $pais)
                          <hr class="custom-hr-heading"/>
                          <option value="{{$pais->id}}">
                              {{$pais->nome}}
                          </option>
                      @endforeach
                  </select>
              </div>
                  <strong>Região:</strong>
                  <input type="text" name="regiao" class="form-control input-form" maxlength="100" required>
                  <strong>Teor Alcoólico:</strong>
                  <input type="text" name="teor_alcoolico" class="form-control input-form" required>
              <div class="form-group">
                  <br>
                  <strong>Vinicola:</strong>
                  <select class="form-control input-form" style="height:auto;" name="vinicola_id">
                        @foreach($vinicolas as $vinicola)
                            <hr class="custom-hr-heading"/>
                            <option value="{{$vinicola->id}}">
                                {{$vinicola->nome}}
                            </option>
                        @endforeach
                  </select>
                  <br>
                  <strong>Tipo do Vinho (Tinto, Branco, Rosé, Espumante, Fortificado):</strong>
                  <input type="text" name="tipo_vinho" class="form-control input-form" maxlength="100" required>
              </div>
              <div class="form-group">
                <br>
                <strong>Tipo de Uva:</strong>
                    <select class="form-control input-form" style="height:auto;" name="tipo_uva_id">
                        @foreach($tipo_uvas as $tipo_uva)
                            <hr class="custom-hr-heading"/>
                            <option value="{{$tipo_uva->id}}">
                                {{$tipo_uva->nome}}
                            </option>
                        @endforeach
                    </select>
              </div>
          </div>
          <br>
          <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </div>
  </form>
@endsection