@extends('layouts.app')

@section('content')
    <h1>Movies</h1>
    <ul>
        @foreach ($Movies as $Movie)
            <li>
                <span>{{ $Movie->title }}</span>
                <span>{{ $Movie->original_title }}</span>
                <span>{{ $Movie->nationality }}</span>
                <span>{{ $Movie->date }}</span>
                <span>{{ $Movie->vote }}</span>
            </li>
        @endforeach
    </ul>
    <p>This is my paragraph content.</p>
@endsection
