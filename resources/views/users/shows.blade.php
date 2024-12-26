@extends('layouts.app')

@section('title', 'Mostrando usuário ' . $user->name)


@section('content')
<h1>Mostrar Usuário {{ $user->name}} </h1>

@php
    $isAdmin = true;
@endphp

@if ($user->id === 1)
    <div>Sou Admin</div>
@else
    <div>Não sou Admin</div>
@endif

@endsection

