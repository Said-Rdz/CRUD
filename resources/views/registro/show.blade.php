@extends('layouts.app')

@section('template_title')
    {{ $registro->name ?? 'Show Registro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Registro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('registros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Var 1:</strong>
                            {{ $registro->var_1 }}
                        </div>
                        <div class="form-group">
                            <strong>Var 2:</strong>
                            {{ $registro->var_2 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
