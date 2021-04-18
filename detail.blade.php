@extends('layouts.app')
@section('title','Detail')
@section('content')
    <div >
        <h3>{{ $post -> title }}</h3>
        <br>
        <div>{{ $post -> body }}</div>
    </div>
@endsection
