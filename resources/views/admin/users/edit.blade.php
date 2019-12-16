@extends('layouts.app')

@section('content')
Edit {{ $id }}
@endsection

@section('scripts')
    <script src="{{ asset('js/users.js') }}"></script>
@endsection
