@extends('layout.index')
@section('body')
    @include('partial.wideimage.wideimage')
    <div class="row justify-content-evenly">
        @include('partial.cards.minicardtype1')
        @include('partial.cards.minicardtype2')
        @include('partial.cards.minicardtype1')
    </div>
@endsection