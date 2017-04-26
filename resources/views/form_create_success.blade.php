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
                                        Parabéns!
                                    </h2>
                                    <p>
                                        Muito obrigado por ter se cadastrado, Deus seja com você por onde fores! Amém.
                                    </p>
                                    <p>
                                        <a class="btn btn-primary btn-large" href="{{ url('/') }}">Novo Cadastro</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection