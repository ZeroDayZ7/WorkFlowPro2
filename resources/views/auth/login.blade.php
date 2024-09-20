@extends('layouts.app')
@section('content')
    <div class="login-form">
        <h2>Logowanie</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <label>Email:</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label>Hasło:</label>
                <input type="password" name="password" required>
            </div>
            <div>
                <button type="submit">Zaloguj</button>
            </div>
            @if ($errors->any())
                <div>
                    <strong>{{ $errors->first() }}</strong>
                </div>
            @endif
        </form>
    </div>
@endsection
