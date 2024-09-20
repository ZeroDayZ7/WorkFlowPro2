@extends('layouts.app')
@section('content')
<h2>Witaj w Dashboardzie!</h2>
<form action="{{ route('logout') }}" method="POST" style="display: inline;">
    @csrf <!-- Token CSRF dla bezpieczeństwa -->
    <button type="submit">Wyloguj się</button>
</form>

@endsection