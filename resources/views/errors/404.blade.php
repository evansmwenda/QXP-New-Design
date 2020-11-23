@extends('layouts.home')

@section('main')
{{-- custome code for errors --}}


<div class="container text-center error-404">
    <h1 style="">Whoops, the page you are trying to look for is not found.</h1>
    <hr>
    <a href="/"><button>Go Back</button></a>
</div>


@endsection