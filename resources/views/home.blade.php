@extends('bootstrap')
@section('title', 'Homepage')
@section('content')
@extends('navbar')

<div class="container">
    <h1>Welcome, {{ Auth::user()->name }} {{ Auth::user()->email }}</h1>
</div>
<form action="{{ route('logout') }}" method="POST">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">logout</button>
</form>
@endsection