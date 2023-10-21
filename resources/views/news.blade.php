@extends('layouts.app')

@section('content')
<div>
    <h1>Ini halaman news</h1>
    @if (Session::has('judul'))
    <h1>Ini Judul Berita {{ $judul }}</h1>
    @endif
    
</div>
    
@endsection