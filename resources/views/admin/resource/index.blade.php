@extends('layouts.app')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header text-xl"><i class="{{ $icons['index'] }}"></i> {{ ucfirst($resource) }}
                <a href="{{ route("Admin::{$resource}.create") }}"
                   title="Create {{ $single }}"
                   class="btn btn-sm btn-primary float-right hasTooltip">
                    <i class="{{ $icons['create'] }}"></i>
                </a>
            </div>

            <div class="card-body">
                <table class="main_dt table-striped" style="width:100%">
                    <thead>
                        <tr>
                            @foreach($fields as $field => $key)
                                <th>{{ $key }}</th>
                            @endforeach

                            <th data-class-name="bg-white pl-2"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $datum)
                            <tr>
                                @foreach($fields as $field => $key)
                                    <td>{{ $datum->{$field} }}</td>
                                @endforeach

                                <td><a href="{{ route("Admin::{$resource}.edit", $datum->id) }}"
                                       class="btn btn-xs btn-primary hasTooltip"
                                       title="Edit {{ $single }}"
                                    ><i class="mdi mdi-circle-edit-outline"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset("js/{$resource}.js") }}"></script>
@endsection
