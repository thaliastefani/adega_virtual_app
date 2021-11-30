@extends('layouts.dashboard')

@section('content')
  <div class="row" style="margin-top: 5rem;">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
          <h2>Adicionar nova Degustação</h2>
          <h4>Adicione uma nova experiência de degustação,<br>
          harmonizando um prato com vinho.</h4>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('ficha_degustacoes.index') }}"> Back</a>
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

  <form action="{{ route('ficha_degustacoes.store') }}" method="POST">
      @csrf

      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Data da Degustação:</strong>
                  <input type="date" name="data_degustacao" required>
              </div>
              <div class="form-group">
                  <strong>Informações do Vinho</strong><br>
                  <strong>Detalhes sobre o vinho para degustação</strong><br><br>
                  <strong>Vinho:</strong>
                  <select class="form-control" style="height:auto;" name="pais_id">
                      @foreach($vinhos as $vinho)
                          <hr class="custom-hr-heading"/>
                          <option value="{{$vinho->id}}">
                              {{$vinho->nome.' '.$vinho->safra_ano}}
                          </option>
                      @endforeach
                  </select>
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Rolha Defeituosa?:</strong><br>
                <input class="form-check-input" type="radio" name="rolha_defeituosa" value="0" checked>
                <label class="form-check-label" for="rolha_defeituosa">Não</label>
                <input class="form-check-input" type="radio" name="rolha_defeituosa" value="1">
                <label class="form-check-label" for="rolha_defeituosa">Sim</label>
              </div>
              <div class="form-group">
                <strong>Brilho:</strong><br>
                <input type="range" list="tickmarks" name="brilho_nivel_id">
                        <datalist id="tickmarks">
                    @foreach($niveis as $nivel)
                            <option value="{{ $nivel->id }}" label="{{ $nivel->nome }}">
                    @endforeach
                        </datalist>
              </div>
              <div class="form-group">
                <strong>Pelarge:</strong><br>
                <input type="range" list="tickmarks" name="pelarge_nivel_id">
                        <datalist id="tickmarks">
                    @foreach($niveis as $nivel)
                            <option value="{{ $nivel->id }}" label="{{ $nivel->nome }}">
                    @endforeach
                        </datalist>
              </div>
              <div class="form-group">
                <strong>Arcos:</strong><br>
                <input type="range" list="tickmarks" name="arcos_nivel_id">
                        <datalist id="tickmarks">
                    @foreach($niveis as $nivel)
                            <option value="{{ $nivel->id }}" label="{{ $nivel->nome }}">
                    @endforeach
                        </datalist>
              </div>
              <div class="form-group">
                  <strong>Cor:</strong>
                  <input type="text" name="cor" class="form-control input-form" maxlength="100" required>
              </div>
              <div class="form-group">
                  <strong>Aspectos do Vinho - Aromas</strong><br>
                  <strong>Classificação<br>Você sentiu algum aroma? Qual(quais)?</strong><br>
                  <textarea name="classificacao_aroma" cols="30" rows="10"></textarea>
              </div>
              <div class="form-group">
                  <strong>Qualidade dos Aromas</strong><br>
                  <input class="form-check-input" type="radio" name="qualidade_aroma" value="Desagradável">
                        <label class="form-check-label" for="exampleRadios1">
                            Desagradável
                        </label>
                  <input class="form-check-input" type="radio" name="qualidade_aroma" value="Indiferente">
                        <label class="form-check-label" for="exampleRadios1">
                            Indiferente
                        </label>
                  <input class="form-check-input" type="radio" name="qualidade_aroma" value="Agradável">
                        <label class="form-check-label" for="exampleRadios1">
                            Agradável
                        </label>
                  <input class="form-check-input" type="radio" name="qualidade_aroma" value="Muito Agradável">
                        <label class="form-check-label" for="exampleRadios1">
                            Muito Agradável
                        </label>
                  <input class="form-check-input" type="radio" name="qualidade_aroma" value="Excelente">
                        <label class="form-check-label" for="exampleRadios1">
                            Excelente
                        </label>
              <div class="form-group">
                <strong>Intensidade do(s) aroma(s) encontrado(s)</strong><br>
                <input type="range" list="tickmarks" name="intensidade_aroma_nivel_id">
                    <datalist id="tickmarks">
                @foreach($niveis as $nivel)
                        <option value="{{ $nivel->id }}" label="{{ $nivel->nome }}">
                @endforeach
                    </datalist>
              </div>
              <div class="form-group">
                <strong>Aspectos do Vinho - Sabores</strong><br>
                <strong>Acidez:</strong><br>
                <input type="range" list="tickmarks" name="acidez_nivel_id">
                        <datalist id="tickmarks">
                    @foreach($niveis as $nivel)
                            <option value="{{ $nivel->id }}" label="{{ $nivel->nome }}">
                    @endforeach
                        </datalist>
              <div class="form-group">
                <strong>Alcool</strong><br>
                <input type="range" list="tickmarks" name="alcool_nivel_id">
                        <datalist id="tickmarks">
                    @foreach($niveis as $nivel)
                            <option value="{{ $nivel->id }}" label="{{ $nivel->nome }}">
                    @endforeach
                        </datalist>
              </div>
              <div class="form-group">
                <strong>Amargor:</strong><br>
                <input type="range" list="tickmarks" name="amargor_nivel_id">
                        <datalist id="tickmarks">
                    @foreach($niveis as $nivel)
                            <option value="{{ $nivel->id }}" label="{{ $nivel->nome }}">
                    @endforeach
                        </datalist>
              </div>
              <div class="form-group">
                <strong>Doçura:</strong><br>
                <input type="range" list="tickmarks" name="docura_nivel_id">
                        <datalist id="tickmarks">
                    @foreach($niveis as $nivel)
                            <option value="{{ $nivel->id }}" label="{{ $nivel->nome }}">
                    @endforeach
                        </datalist>
              </div>
              <div class="form-group">
                <strong>Adstringência</strong><br>
                <input type="range" list="tickmarks" name="adstringencia_nivel_id">
                        <datalist id="tickmarks">
                    @foreach($niveis as $nivel)
                            <option value="{{ $nivel->id }}" label="{{ $nivel->nome }}">
                    @endforeach
                        </datalist>
              </div>
              <div class="form-group">
                <strong>Corpo:</strong><br>
                <input type="range" list="tickmarks" name="corpo_nivel_id">
                        <datalist id="tickmarks">
                    @foreach($niveis as $nivel)
                            <option value="{{ $nivel->id }}" label="{{ $nivel->nome }}">
                    @endforeach
                        </datalist>
               </div>
               <div class="form-group">
                <strong>Equilibrio</strong><br>
                    <input class="form-check-input" type="radio" name="equilibrio" value="Desequilibrado">
                            <label class="form-check-label" for="exampleRadios1">
                                Desequilibrado
                            </label>
                    <input class="form-check-input" type="radio" name="equilibrio" value="Desequilibrado">
                            <label class="form-check-label" for="exampleRadios1">
                                Equilibrio Imperfeito
                            </label>
                    <input class="form-check-input" type="radio" name="equilibrio" value="Desequilibrado">
                            <label class="form-check-label" for="exampleRadios1">
                                Equilibrado
                            </label>
                </div>
                <div class="form-group">
                    <strong>Qualidade dos Sabores</strong><br>
                    <input class="form-check-input" type="radio" name="qualidade_sabor" value="Desagradável">
                            <label class="form-check-label" for="exampleRadios1">
                                Desagradável
                            </label>
                    <input class="form-check-input" type="radio" name="qualidade_sabor" value="Indiferente">
                            <label class="form-check-label" for="exampleRadios1">
                                Indiferente
                            </label>
                    <input class="form-check-input" type="radio" name="qualidade_sabor" value="Agradável">
                            <label class="form-check-label" for="exampleRadios1">
                                Agradável
                            </label>
                    <input class="form-check-input" type="radio" name="qualidade_sabor" value="Muito Agradável">
                            <label class="form-check-label" for="exampleRadios1">
                                Muito Agradável
                            </label>
                    <input class="form-check-input" type="radio" name="qualidade_sabor" value="Excelente">
                            <label class="form-check-label" for="exampleRadios1">
                                Excelente
                            </label>
                </div>
                <div class="form-group">
                    <strong>Persistencia</strong><br>
                        <input class="form-check-input" type="radio" name="persistencia_sabor" value="0 a 3 seg">
                                <label class="form-check-label" for="exampleRadios1">
                                    0 a 3 seg
                                </label>
                        <input class="form-check-input" type="radio" name="qualidade_aroma" value="4 a 7 seg">
                                <label class="form-check-label" for="exampleRadios1">
                                    4 a 7 seg
                                </label>
                        <input class="form-check-input" type="radio" name="qualidade_aroma" value="+8 seg">
                                <label class="form-check-label" for="exampleRadios1">
                                    +8 seg
                                </label>
                </div>
                <div class="form-group">
                    <strong>Intensidade do(s) sabor(es) encontrado(s)</strong><br>
                    <input type="range" list="tickmarks" name="intensidade_sabor_nivel_id">
                        <datalist id="tickmarks">
                    @foreach($niveis as $nivel)
                            <option value="{{ $nivel->id }}" label="{{ $nivel->nome }}">
                    @endforeach
                        </datalist>
                </div>
                <div class="form-group">
                <strong>Harmonização</strong><br>
                <strong>Tipo da Preparação (Risotto, Massas, Peixe, Aves, Frutos do Mar, Pães, Saladas...):</strong><br>
                <input type="text" name="tipo_preparacao" class="form-control input-form" maxlength="100" required>
                <strong>Caracteristicas da Preparação</strong><br>
                  <textarea name="caracteristicas" cols="30" rows="10"></textarea>
                <strong>Qualidade da Harmonização</strong><br>
                <input class="form-check-input" type="radio" name="qualidade_harmonizacao" value="Desagradável">
                        <label class="form-check-label" for="exampleRadios1">
                            Desagradável
                        </label>
                <input class="form-check-input" type="radio" name="qualidade_harmonizacao" value="Indiferente">
                        <label class="form-check-label" for="exampleRadios1">
                            Indiferente
                        </label>
                <input class="form-check-input" type="radio" name="qualidade_harmonizacao" value="Agradável">
                        <label class="form-check-label" for="exampleRadios1">
                            Agradável
                        </label>
                <input class="form-check-input" type="radio" name="qualidade_harmonizacao" value="Muito Agradável">
                        <label class="form-check-label" for="exampleRadios1">
                            Muito Agradável
                        </label>
                <input class="form-check-input" type="radio" name="qualidade_harmonizacao" value="Excelente">
                        <label class="form-check-label" for="exampleRadios1">
                            Excelente
                        </label>
                <strong>Elementos Ressaltados Preparação</strong><br>
                  <textarea name="elementos_ressaltados_preparação" cols="30" rows="10"></textarea>
                <strong>Elementos Ressaltados Vinho</strong><br>
                  <textarea name="elementos_ressaltados_vinho" cols="30" rows="10"></textarea>
                <strong>Pontos Positivos</strong><br>
                  <textarea name="pontos_positivos" cols="30" rows="10"></textarea>
                <strong>Pontos Negativos</strong><br>
                  <textarea name="pontos_negativos" cols="30" rows="10"></textarea>
          </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
  </form>
@endsection