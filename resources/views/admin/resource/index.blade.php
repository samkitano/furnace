@extends('layouts.app')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header text-xl"><i class="{{ $icon }}"></i> {{ ucfirst($resource) }}
                <a href="{{ route("Admin::{$resource}.create") }}"
                   title="Create {{ $single }}"
                   class="btn btn-sm btn-primary float-right hasTooltip">
                    <i class="{{ \App\Util\Icons::_ICON_CREATE_ }}"></i>
                </a>
            </div>

            <div class="card-body">
                <table class="main_dt table-striped" style="width:100%">
                    <thead>
                        <tr>
                            @foreach($fields as $field)
                                @if($field['indexable'])
                                    <th>{{ $field['label'] }}</th>
                                @endif
                            @endforeach

                            <th data-class-name="bg-white pl-2"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $datum)
                            <tr>
                                @foreach($fields as $field => $prop)
                                    @if($prop['indexable'])
                                        <td>{{ $datum->{$field} }}</td>
                                    @endif
                                @endforeach

                                <td>
                                    <a href="{{ route("Admin::{$resource}.edit", $datum->id) }}"
                                       class="btn btn-edit btn-xs btn-primary hasTooltip"
                                       title="Edit {{ $single }}"
                                    ><i class="{{ \App\Util\Icons::_ICON_EDIT_ }}"></i></a>

                                    <button class="btn btn-delete btn-xs btn-danger hasTooltip"
                                            title="Delete {{ $single }}"
                                            data-id="{{ $datum->id }}"
                                    ><i class="{{ \App\Util\Icons::_ICON_TRASH_ }}"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('postScripts')
    <script src="{{ asset("js/{$resource}.js") }}"></script>
@endpush
