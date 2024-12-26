@extends('layouts.app')
@section('title', 'Listagem de Usuários')

@section('content')
    <h1 class="title"> {{ $greeting }} </h1>
    @foreach ($users as $user)
        <div>{{ $user->name }}</div>
    @endforeach
@endsection

