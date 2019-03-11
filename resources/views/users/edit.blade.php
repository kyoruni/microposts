@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $user->name }}</h3>
                </div>
                <div class="card-body">
                    <img class="rounded img-fluid" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                </div>
                <div class="card-footer">
                    @if ( $user->profile )
                        <p class="card-text">{{ $user->profile }}</p>
                    @else
                        <p class="card-text">プロフィールが登録されていません。</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}

                <div class="form-group mt-2">
                    {!! Form::label('name', 'ユーザ名', ['class' => 'col-form-label']) !!}
                    {!! Form::text ('name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group mt-2">
                    {!! Form::label('profile', 'プロフィール', ['class' => 'col-form-label']) !!}
                    {!! Form::textarea('profile', null, ['class' => 'form-control']) !!}
                </div>
                    {!! Form::submit('更新', ['class' => 'btn btn-primary mb-2']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection