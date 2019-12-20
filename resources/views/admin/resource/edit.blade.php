@extends('layouts.app')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header text-xl"><i class="{{--{{ $icons['index'] }}--}}"></i> {{ ucfirst($resource) }}
                Edit
            </div>

            <div class="card-body">
                Edit {{ $id }}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
