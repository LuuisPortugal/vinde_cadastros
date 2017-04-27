@extends('layouts.app')
@section('style')
    <style type="text/css" rel="stylesheet">
        .form-horizontal.group-border-dashed .form-group {
            margin: 0;
            padding: 20px 0;
            border-bottom: 1px dashed #efefef;
        }

        .form-horizontal.group-border-dashed .form-group:last-child {
            border-bottom: 0;
        }

        .form-horizontal .form-group label {
            font-weight: normal;
        }

        fieldset {
            margin-bottom: 20px;
        }

        .jumbotron img {
            margin: auto;
            width: 220px;
            padding-top: 0;
        }

        @media (max-width: 767px) {
            .form-horizontal.group-border-dashed .form-group label {
                margin-top: 15px;
            }

            .jumbotron img {
                width: 50%;
                display: block;
                margin: auto;
            }
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="jumbotron">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <img src="/images/logo_vinde.png" />
                                </div>
                                <div class="col-md-9 col-sm-6">
                                    <h2>
                                        Cadastro de Membros
                                    </h2>
                                    <p>
                                        Manter o cadastro dos membros da sua Célula sempre atualizado e bem organizado é parte fundamental para o ministério de um líder eficaz.

                                        Assim, a Vinde traz a versão do <b>cadastro digital</b> pra você participar do cadastro geral das Células e se tornar um líder ainda mais excelente.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($errors->first())
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="alert alert-warning alert-white rounded">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <div class="icon"><i class="fa fa-times-circle"></i></div>
                                <strong>Alerta!</strong>
                                <ul>
                                    @foreach($errors->all() as $chave => $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <form role="form" class="form-horizontal group-border-dashed" method="POST" action="{{ url('/save') }}">
                            {{ csrf_field() }}
                            <fieldset>
                                <legend>Dados Pessoais</legend>
                                <div class="form-group">
                                    <label class="control-label col-sm-1" for="cpfID">CPF</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="cpf" class="form-control" id="cpfID" required />
                                    </div>

                                    <label class="control-label col-sm-2" for="nomeID">Nome Completo</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="name" class="form-control" id="nomeID" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="dataNascimentoID">Data de
                                        Nascimento</label>
                                    <div class="col-sm-2">
                                        <input type="date" name="dataNascimento" class="form-control"
                                               id="dataNascimentoID" required />
                                    </div>

                                    <label class="control-label col-sm-2" for="celularID">Celular</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="celular" class="form-control" id="celularID" required />
                                    </div>

                                    <label class="control-label col-sm-2" for="celularWhatsappID">Whatsapp</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="celularWhatsapp" class="form-control"
                                               id="celularWhatsappID" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="estadoCivilID">Estado Civil</label>
                                    <div class="col-sm-3">
                                        <select name="estadoCivil" class="form-control" id="estadoCivilID" required>
                                            <option value>Selecione</option>
                                            <option value="1">Solteiro (a)</option>
                                            <option value="2">Casado (a)</option>
                                            <option value="3">Divorciado (a)</option>
                                            <option value="4">Namorando</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-2 col-sm-offset-1">
                                        <div class="checkbox">
                                            <label for="filhosID">
                                                <input type="checkbox" value="1" name="filhos" id="filhosID" /> Tem Filhos?
                                            </label>
                                        </div>
                                    </div>

                                    <label class="control-label col-sm-2" for="numeroFilhosID">Número de
                                        Filhos? </label>
                                    <div class="col-sm-2">
                                        <input type="number" name="numeroFilhos" class="form-control"
                                               id="numeroFilhosID" min="0" disabled />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-1" for="cepEnderecoID">CEP</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="cepEndereco" class="form-control"
                                               id="cepEnderecoID" required />
                                        <p class="help-block" style="display: none;"></p>
                                    </div>

                                    <label class="control-label col-sm-1" for="enderecoID">Endereço</label>
                                    <div class="col-sm-8">
                                        <p class="form-control-static"></p>
                                        <input type="hidden" name="endereco" class="form-control" id="enderecoID" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-1" for="numeroEnderecoID">Número</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="numeroEndereco" class="form-control"
                                               id="numeroEnderecoID" required />
                                    </div>

                                    <label class="control-label col-sm-1" for="bairroEnderecoID">Bairro</label>
                                    <div class="col-sm-2">
                                        <p class="form-control-static"></p>
                                        <input type="hidden" name="bairroEndereco" class="form-control"
                                               id="bairroEnderecoID" required />
                                    </div>

                                    <label class="control-label col-sm-1" for="cidadeEnderecoID">Cidade</label>
                                    <div class="col-sm-2">
                                        <p class="form-control-static"></p>
                                        <input type="hidden" name="cidadeEndereco" class="form-control"
                                               id="cidadeEnderecoID" required />
                                    </div>

                                    <label class="control-label col-sm-1" for="ufEnderecoID">UF</label>
                                    <div class="col-sm-2">
                                        <p class="form-control-static"></p>
                                        <input type="hidden" name="ufEndereco" class="form-control"
                                               id="ufEnderecoID" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-2">
                                        <div class="checkbox">
                                            <label for="desempregadoID">
                                                <input type="checkbox" value="1" name="desempregado" id="desempregadoID" />
                                                Sem Profissão?
                                            </label>
                                        </div>
                                    </div>

                                    <label class="control-label col-sm-1" for="profissaoID">Profissão</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="profissao" class="form-control"
                                               id="profissaoID" required />
                                    </div>

                                    <label class="control-label col-sm-2" for="rendaFamiliarID">Renda Familiar
                                        (média)</label>
                                    <div class="col-sm-3">
                                        <select name="rendaFamiliar" class="form-control" id="rendaFamiliarID" required>
                                            <option value>Selecione</option>
                                            <option value="1">Desejo não Responder</option>
                                            <option value="2">Menor que 1 Sálario</option>
                                            <option value="3">1 Sálario Mínimo</option>
                                            <option value="4">Até 2 Sálarios Mínimos</option>
                                            <option value="5">De 2 a 5 Sálarios Mínimos</option>
                                            <option value="6">Maior que 6 Sálarios Mínimos</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-1" for="escolaridadeID">Escolaridade</label>
                                    <div class="col-sm-4">
                                        <select name="escolaridade" class="form-control" id="escolaridadeID" required>
                                            <option value>Selecione</option>
                                            <option value="1">ENSINO FUNDAMENTAL</option>
                                            <option value="2">ENSINO MÉDIO</option>
                                            <option value="3">ENSINO PROFISSIONALIZANTE</option>
                                            <option value="4">ENSINO SUPERIOR INCOMPLETO</option>
                                            <option value="5">ENSINO SUPERIOR COMPLETO</option>
                                            <option value="6">ESPECIALIZAÇÃO</option>
                                            <option value="7">PÓS GRADUAÇÃO</option>
                                            <option value="8">MESTRADO</option>
                                            <option value="9">DOUTORADO</option>
                                        </select>
                                    </div>

                                    <label class="control-label col-sm-1 col-sm-offset-1" for="cursoEscolaridadeID">Curso</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="cursoEscolaridade" class="form-control"
                                               id="cursoEscolaridadeID" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-2">
                                        <div class="checkbox">
                                            <label for="carroID">
                                                <input type="checkbox" value="1" name="carro" id="carroID" /> Possui Carro?
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 col-sm-offset-2">
                                        <div class="checkbox">
                                            <label for="casaPropriaID">
                                                <input type="checkbox" value="1" name="casaPropria" id="casaPropriaID" />
                                                Possui Residência Propria?
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-2 col-sm-offset-2">
                                        <div class="checkbox">
                                            <label for="moraPaisID">
                                                <input type="checkbox" value="1" name="moraPais" id="moraPaisID" /> Mora com
                                                os Pais?
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3">
                                        <div class="checkbox">
                                            <label for="planoSaudeID">
                                                <input type="checkbox" value="1" name="planoSaude" id="planoSaudeID" /> Possui
                                                Plano de Saúde?
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 col-sm-offset-1">
                                        <div class="checkbox">
                                            <label for="doadorSangueID">
                                                <input type="checkbox" value="1" name="doadorSangue" id="doadorSangueID" />
                                                Doador de Sangue?
                                            </label>
                                        </div>
                                    </div>

                                    <label class="control-label col-sm-2" for="tipoSanguineoID">Tipo Sanguineo</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="tipoSanguineo" class="form-control"
                                               id="tipoSanguineoID" disabled />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3">
                                        <div class="checkbox">
                                            <label for="atendimentoEspecialID">
                                                <input type="checkbox" value="1" name="atendimentoEspecial" id="atendimentoEspecialID" />
                                                Possui algum problema de saúde que necessite de uma atenção especial?
                                            </label>
                                        </div>
                                    </div>

                                    <label class="control-label col-sm-3" for="descrisaoAtendimentoEspecialID">Descreva em poucas palavras</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="descrisaoAtendimentoEspecial" class="form-control"
                                               id="descrisaoAtendimentoEspecialID" disabled />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3">
                                        <div class="checkbox">
                                            <label for="remedioControladoID">
                                                <input type="checkbox" value="1" name="remedioControlado" id="remedioControladoID" />
                                                Toma algum remédio controlado?
                                            </label>
                                        </div>
                                    </div>

                                    <label class="control-label col-sm-2 col-sm-offset-1" for="descrisaoRemedioControladoID">Qual o medicamento?</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="descrisaoRemedioControlado" class="form-control"
                                               id="descrisaoRemedioControladoID" disabled />
                                        <div class="help-block">Use virgula ( , ) para separar</div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="checkbox">
                                            <label for="gruposWhatsappID">
                                                <input type="checkbox" value="1" name="gruposWhatsapp" id="gruposWhatsappID" />
                                                Deseja participar de grupos de whatsapp?
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2 text-left" for="necessidadeBasicaID">Hoje, qual a sua principal necessidade básica de sobrevivência?</label>
                                    <div class="col-sm-10">
                                        <textarea name="necessidadeBasica" class="form-control"
                                                  id="necessidadeBasicaID" required></textarea>
                                        <div class="help-block">Ex: alimento, vestimenta, saúde, emprego, saúde emocional, familiar...</div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Dados Eclesiásticos</legend>
                                <div class="form-group">
                                    <div class="col-sm-3">
                                        <div class="checkbox">
                                            <label for="celulaID">
                                                <input type="checkbox" value="1" name="celula" id="celulaID" />
                                                Está em Célula?
                                            </label>
                                        </div>
                                    </div>

                                    <label class="control-label col-sm-2 col-sm-offset-1" for="celulaIDID">Qual a sua Célula?</label>
                                    <div class="col-sm-6">
                                        <select name="celulaID" class="form-control" id="celulaIDID" disabled>
                                            <option value>Selecione</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3">
                                        <div class="checkbox">
                                            <label for="dizimistaID">
                                                <input type="checkbox" value="1" name="dizimista" id="dizimistaID" />
                                                És Dizimista?
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-2 col-sm-offset-2">
                                        <div class="checkbox">
                                            <label for="batismoID">
                                                <input type="checkbox" value="1" name="batismo" id="batismoID" />
                                                És Batizado?
                                            </label>
                                        </div>
                                    </div>

                                    <label class="control-label col-sm-2" for="dataBatismoID">Data do Batismo</label>
                                    <div class="col-sm-3">
                                        <input type="date" name="dataBatismo" class="form-control" id="dataBatismoID" disabled />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3">
                                        <div class="checkbox">
                                            <label for="filantropicoID">
                                                <input type="checkbox" value="1" name="filantropico" id="filantropicoID" />
                                                Participa de algum grupo de Filantropia?
                                            </label>
                                        </div>
                                    </div>

                                    <label class="control-label col-sm-3" for="grupoFilantropicoID">Qual grupo Filantrópico?</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="grupoFilantropico" class="form-control"
                                               id="grupoFilantropicoID" disabled />
                                        <div class="help-block">Use virgula ( , ) para separar</div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3">
                                        <div class="checkbox">
                                            <label for="encontroComDeusID">
                                                <input type="checkbox" value="1" name="encontroComDeus" id="encontroComDeusID" />
                                                Já participou do Encontro com Deus?
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="checkbox">
                                            <label for="conheceMinisteriosPauloID">
                                                <input type="checkbox" value="1" name="conheceMinisteriosPaulo" id="conheceMinisteriosPauloID" />
                                                Você conhece os Cinco ministérios descritos por Paulo em EF 4.11?
                                            </label>
                                        </div>
                                    </div>

                                    <label class="control-label col-sm-2" for="papelCorpoCristoID">Qual seu papel no corpo de cristo?</label>
                                    <div class="col-sm-2">
                                        <select name="papelCorpoCristo" class="form-control" id="papelCorpoCristoID" disabled>
                                            <option value>Selecione</option>
                                            <option value="1">Profeta</option>
                                            <option value="2">Mestre</option>
                                            <option value="3">Apóstolo</option>
                                            <option value="4">Evangelista</option>
                                            <option value="5">Pastor</option>
                                            <option value="6">Não Sei</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <div class="checkbox">
                                            <label for="saiuOutraIgrejaID">
                                                <input type="checkbox" value="1" name="saiuOutraIgreja" id="saiuOutraIgrejaID" />
                                                Já foi membro de outra igreja que não seja a IEQ - Catedral da Família?
                                            </label>
                                        </div>
                                    </div>

                                    <label class="control-label col-sm-2" for="descrisaoSaiuOutraIgrejaID">
                                        Qual o motivo de sua saída?
                                    </label>
                                    <div class="col-sm-6">
                                        <textarea name="descrisaoSaiuOutraIgreja" class="form-control"
                                                  id="descrisaoSaiuOutraIgrejaID" disabled></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="escolaDiscipulosID">Participa da Escola de Discipulos?</label>
                                    <div class="col-sm-2">
                                        <select name="escolaDiscipulos" class="form-control" id="escolaDiscipulosID" required>
                                            <option value>Selecione</option>
                                            <option value="1">Sim, estou cursando</option>
                                            <option value="2">Não curso</option>
                                            <option value="3">Já sou formado</option>
                                        </select>
                                    </div>

                                    <label class="control-label col-sm-3" for="descrisaoEscolaDiscipulosID">
                                        Deseja fazer algum comentário em relação a Escola de Discipulos?
                                    </label>
                                    <div class="col-sm-5">
                                        <textarea name="descrisaoEscolaDiscipulos" class="form-control"
                                                  id="descrisaoEscolaDiscipulosID"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <div class="checkbox">
                                            <label for="cristaoComPoliticaID">
                                                <input type="checkbox" value="1" name="cristaoComPolitica" id="cristaoComPoliticaID" />
                                                Você acha que cristão deve se envolver com política?
                                            </label>
                                        </div>
                                    </div>

                                    <label class="control-label col-sm-2" for="descrisaoCristaoComPoliticaID">
                                        Por quais Motivos?
                                    </label>
                                    <div class="col-sm-6">
                                        <textarea name="descrisaoCristaoComPolitica" class="form-control"
                                                  id="descrisaoCristaoComPoliticaID" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <div class="checkbox">
                                            <label for="vontadeServirEmDepartamentoID">
                                                <input type="checkbox" value="1" name="vontadeServirEmDepartamento" id="vontadeServirEmDepartamentoID" />
                                                Tem vontade de servir na igreja local em algum departamento?
                                            </label>
                                        </div>
                                    </div>

                                    <label class="control-label col-sm-2" for="descrisaoVontadeServirEmDepartamentoID">
                                        Qual departamento?
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="descrisaoVontadeServirEmDepartamento" class="form-control"
                                               id="descrisaoVontadeServirEmDepartamentoID" disabled />
                                        <div class="help-block">Use virgula ( , ) para separar</div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <div class="checkbox">
                                            <label for="tocaInstrumentosID">
                                                <input type="checkbox" value="1" name="tocaInstrumentos" id="tocaInstrumentosID" />
                                                Toca algum instrumento?
                                            </label>
                                        </div>
                                    </div>

                                    <label class="control-label col-sm-2" for="descrisaoTocaInstrumentosID">
                                        Qual instrumento?
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="descrisaoTocaInstrumentos" class="form-control"
                                               id="descrisaoTocaInstrumentosID" disabled />
                                        <div class="help-block">Use virgula ( , ) para separar</div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <div class="checkbox">
                                            <label for="formacaoProfissionalParteChamadoID">
                                                <input type="checkbox" value="1" name="formacaoProfissionalParteChamado" id="formacaoProfissionalParteChamadoID" />
                                                Tens consciência de que sua área de formação profissional é parte do chamado de Deus?
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="checkbox">
                                            <label for="formacaoAcademicaAliadoChamadoID">
                                                <input type="checkbox" value="1" name="formacaoAcademicaAliadoChamado" id="formacaoAcademicaAliadoChamadoID" />
                                                Tens interesse em utilizar sua formação acadêmica como um dom no reino de Deus?
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="checkbox">
                                            <label for="estouDispostoServirComMeuTalentoID">
                                                <input type="checkbox" value="1" name="estouDispostoServirComMeuTalento" id="estouDispostoServirComMeuTalentoID" />
                                                Está disposto a servir a Deus com seus Dons e Talentos?
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2 text-left" for="papelIgrejaSociedadeID">Qual o principal papel da igreja na sociedade?</label>
                                    <div class="col-sm-10">
                                        <textarea name="papelIgrejaSociedade" class="form-control"
                                                  id="papelIgrejaSociedadeID" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2 text-left" for="propositoDeVidaNaTerraID">Qual seu propósito de vida nesta Terra?</label>
                                    <div class="col-sm-10">
                                        <textarea name="propositoDeVidaNaTerra" class="form-control"
                                                  id="propositoDeVidaNaTerraID" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2 text-left" for="propositoMinisterialID">Qual seu propósito Ministerial?</label>
                                    <div class="col-sm-10">
                                        <textarea name="propositoMinisterial" class="form-control"
                                                  id="propositoMinisterialID" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2 text-left" for="motivacaoParaFazerOQueJaFazID">O que o motiva a fazer o que você faz?</label>
                                    <div class="col-sm-10">
                                        <textarea name="motivacaoParaFazerOQueJaFaz" class="form-control"
                                                  id="motivacaoParaFazerOQueJaFazID" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2 text-left" for="atividadesPreferidasParaTempoLivreID">O que você mais gosta de fazer quando tem tempo livre?</label>
                                    <div class="col-sm-10">
                                        <textarea name="atividadesPreferidasParaTempoLivre" class="form-control"
                                                  id="atividadesPreferidasParaTempoLivreID" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2 text-left" for="jesusParaVoceID">Descreva em poucas palavras quem é Jesus para você</label>
                                    <div class="col-sm-10">
                                        <textarea name="jesusParaVoce" class="form-control"
                                                  id="jesusParaVoceID" required></textarea>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <legend>Dados de Login</legend>
                                <div class="form-group">
                                    <label class="control-label col-sm-1" for="emailID">Email</label>
                                    <div class="col-sm-6">
                                        <input type="email" name="email" class="form-control" id="emailID" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-1" for="passwordID">Senha</label>
                                    <div class="col-sm-2">
                                        <input type="password" name="password" class="form-control" id="passwordID" minlength="8" required />
                                    </div>

                                    <label class="control-label col-sm-2" for="passwordConfirmeID">Confirme sua senha</label>
                                    <div class="col-sm-2">
                                        <input type="password" name="passwordConfirme" class="form-control" id="passwordConfirmeID" title="Digite a mesma senha" required />
                                    </div>
                                </div>
                            </fieldset>

                            <button type="submit" class="btn btn-success">
                                Cadastrar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br />
    </div>
@endsection
@section('script')
    <script src="/library/jquery-mask-plugin-dist/js/jquery.mask.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function (document_ready) {

            $("#cpfID").mask('000.000.000-00', {reverse: true});
            $("#celularID, #celularWhatsappID").mask('(00) 00000-0000');
            $("#cepEnderecoID").mask('00000-000');

            $("#filhosID").on("change", function (filhosID_change) {
                $('#numeroFilhosID').attr('disabled', $(this).is(":not(:checked)")).attr("required", $(this).is(":checked"));
            });

            $("#desempregadoID").on("change", function (filhosID_change) {
                $('#profissaoID').attr('disabled', $(this).is(":checked")).attr("required", $(this).is(":not(:checked)"));
            });

            $("#escolaridadeID").on("change", function (filhosID_change) {
                $('#cursoEscolaridadeID').attr('disabled', ['1', '2'].indexOf($(this).val()) != -1).attr("required", ['1', '2'].indexOf($(this).val()) == -1);
            });

            $("#doadorSangueID").on("change", function (filhosID_change) {
                $('#tipoSanguineoID').attr('disabled', $(this).is(":not(:checked)")).attr("required", $(this).is(":checked"));
            });

            $("#atendimentoEspecialID").on("change", function (filhosID_change) {
                $('#descrisaoAtendimentoEspecialID').attr('disabled', $(this).is(":not(:checked)")).attr("required", $(this).is(":checked"));
            });

            $("#remedioControladoID").on("change", function (filhosID_change) {
                $('#descrisaoRemedioControladoID').attr('disabled', $(this).is(":not(:checked)")).attr("required", $(this).is(":checked"));
            });

            $("#celulaID").on("change", function (filhosID_change) {
                $('#celulaIDID').attr('disabled', $(this).is(":not(:checked)")).attr("required", $(this).is(":checked"));
            });

            $("#batismoID").on("change", function (filhosID_change) {
                $('#dataBatismoID').attr('disabled', $(this).is(":not(:checked)")).attr("required", $(this).is(":checked"));
            });

            $("#filantropicoID").on("change", function (filhosID_change) {
                $('#grupoFilantropicoID').attr('disabled', $(this).is(":not(:checked)")).attr("required", $(this).is(":checked"));
            });

            $("#saiuOutraIgrejaID").on("change", function (filhosID_change) {
                $('#descrisaoSaiuOutraIgrejaID').attr('disabled', $(this).is(":not(:checked)")).attr("required", $(this).is(":checked"));
            });

            $("#conheceMinisteriosPauloID").on("change", function (filhosID_change) {
                $('#papelCorpoCristoID').attr('disabled', $(this).is(":not(:checked)")).attr("required", $(this).is(":checked"));
            });

            $("#vontadeServirEmDepartamentoID").on("change", function (filhosID_change) {
                $('#descrisaoVontadeServirEmDepartamentoID').attr('disabled', $(this).is(":not(:checked)")).attr("required", $(this).is(":checked"));
            });

            $("#tocaInstrumentosID").on("change", function (filhosID_change) {
                $('#descrisaoTocaInstrumentosID').attr('disabled', $(this).is(":not(:checked)")).attr("required", $(this).is(":checked"));
            });

            $("#passwordID").on("blur", function (filhosID_change) {
                $('#passwordConfirmeID').attr('pattern', $(this).val());
            });

            $("#cepEnderecoID").on("blur", function (cepEnderecoID_blur) {
                if (typeof changeHiddenType != 'function')
                    function changeHiddenType(type) {
                        $("#enderecoID").attr("type", type).val(null).prev("p").toggle(type == 'hidden');
                        $("#bairroEnderecoID").attr("type", type).val(null).prev("p").toggle(type == 'hidden');
                        $("#cidadeEnderecoID").attr("type", type).val(null).prev("p").toggle(type == 'hidden');
                        $("#ufEnderecoID").attr("type", type).val(null).prev("p").toggle(type == 'hidden');
                    }

                changeHiddenType("hidden");
                pHelpCepEnderecoID = $("#cepEnderecoID").next("p").hide();
                $.getJSON("http://correiosapi.apphb.com/cep/".concat($(this).val()))
                        .done(function (result) {
                            if (!$.isEmptyObject(result)) {
                                var endereco = result.tipoDeLogradouro.concat(result.logradouro);
                                $("#enderecoID").val(endereco).prev("p").html(endereco);

                                var bairro = result.bairro;
                                $("#bairroEnderecoID").val(bairro).prev("p").html(bairro);

                                var cidade = result.cidade;
                                $("#cidadeEnderecoID").val(cidade).prev("p").html(cidade);

                                var uf = result.estado;
                                $("#ufEnderecoID").val(uf).prev("p").html(uf);
                            } else {
                                pHelpCepEnderecoID.html("CEP não encontrado").show();
                                changeHiddenType("text");
                            }
                        })
                        .fail(function (error) {
                            pHelpCepEnderecoID.html("Erro ao buscar o CEP").show();
                            changeHiddenType("text");
                        });
            });
        });
    </script>
@endsection