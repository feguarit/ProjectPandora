@extends('template')

@section('conteudo')

    <h2>Usuário - Cadastro</h2>

    <br>

    {!! Form::open(['url'=>'auth/register']) !!}

        {!! csrf_field() !!}

        <div class="form-group">
            {!! Form::label('name', 'Nome:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>          

        <div class="form-group">
            {!! Form::label('email', 'E-mail:') !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
        </div>   

        <div class="form-group">
            {!! Form::label('password', 'Senha:') !!}
            {!! Form::password('password', null, ['class'=>'form-control']) !!}
        </div>    

        <div class="form-group">
            {!! Form::label('password_confirmation', 'Confirmação de Senha:') !!}
            {!! Form::password('password_confirmation', null, ['class'=>'form-control']) !!}
        </div>    

        <div class="form-group" align="center">
            {!! Form::submit('Criar Usuário', ['class'=>'btn btn-primary']) !!}
        </div>        

    {!! Form::close() !!}

@endsection
