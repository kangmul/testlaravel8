@extends('layouts.main')
@section('content')
    <h3>Post page</h3>
    <p>Data yang akan ditampilkan adalah :</p>
    <ul>
        <li><?= $title ?></li>
        <li><?= $desc ?></li>
        <li><?= $date ?></li>
    </ul>
    <p>Dengan menggunakan kurung kurawal blade template</p>
    <ul>
        <li>{{ $title }}</li>
        <li>{{ $desc }}</li>
        <li>{{ $date }}</li>
    </ul>
@endsection