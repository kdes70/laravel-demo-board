@extends('layouts.app')

@section('content')
    @include('cabinet.adverts._nav')

    <p><a href="{{ route('cabinet.adverts.create') }}" class="btn btn-success">Add Advert</a></p>
@endsection