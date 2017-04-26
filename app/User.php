<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'celula_id', 'cpf', 'dataNascimento', 'telefone', 'celular', 'celularWhatsapp', 'estadoCivil', 'slug', 'numeroFilhos', 'rendaFamiliar', 'endereco', 'numeroEndereco', 'cepEndereco', 'bairroEndereco', 'cidadeEndereco', 'ufEndereco', 'escolaridade', 'cursoEscolaridade', 'profissao', 'carro', 'casaPropria', 'moraPais', 'desempregado', 'anosDesempregado', 'planoSaude', 'doadorSangue', 'tipoSanguineo', 'atendimentoEspecial', 'descrisaoAtendimentoEspecial', 'remedioControlado', 'descrisaoRemedioControlado', 'gruposWhatsapp', 'necessidadeBasica', 'dataBatismo', 'saiuOutraIgreja', 'descrisaoSaiuOutraIgreja', 'filantropico', 'grupoFilantropico', 'dizimista', 'encontroComDeus', 'escolaDiscipulos', 'descrisaoEscolaDiscipulos', 'conheceMinisteriosPaulo', 'papelCorpoCristo', 'cristaoComPolitica', 'descrisaoCristaoComPolitica', 'papelIgrejaSociedade', 'formacaoProfissionalParteChamado', 'formacaoAcademicaAliadoChamado', 'estouDispostoServirComMeuTalento', 'vontadeServirEmDepartamento', 'descrisaoVontadeServirEmDepartamento', 'tocaInstrumentos', 'descrisaoTocaInstrumentos', 'propositoDeVidaNaTerra', 'propositoMinisterial', 'motivacaoParaFazerOQueJaFaz', 'atividadesPreferidasParaTempoLivre', 'jesusParaVoce'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
