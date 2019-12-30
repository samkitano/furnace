@extends('layouts.app')

@section('content')
    <div class="col-12">
        <div class="card">
            <form method="POST" action="{{ route("Admin::{$resource}.store") }}">
                <div class="card-header text-xl">
                    <i class="{{ $icon }}"></i> New {{ ucfirst($single) }}

                    <a href="{{ route("Admin::{$resource}.index") }}"
                       title="Go back to «{{ ucfirst($resource) }}» List"
                       class="btn btn-sm btn-primary float-right hasTooltip">
                        <i class="{{ \App\Util\Icons::_ICON_TABLE_ }}"></i>
                    </a>
                </div>

                <div class="card-body">
                    @csrf
                    @method('POST')

                    @foreach($fields as $field => $prop)
                        @if($prop['editable'])
                            <div class="form-group row">
                            <label class="col-md-4 col-form-label"
                                   for="{{ $field }}"
                            >{{ $prop['label'] }} @if($prop['required']) <sup>*</sup>@endif</label>

                            <input id="{{ $field }}"
                                   name="{{ $field }}"
                                   type="{{ $prop['label'] }}"
                                   value="{{ old($field) }}"
                                   class="form-control @error($field) is-invalid @enderror">

                            @error($field)
                                <div class="error text-danger text-sm">{{ $message }}</div>
                            @enderror
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="card-footer">
                    <div class="form-group row mb-0">
                        <div class="col-12">
                            <button type="submit"
                                    title="Click to create resource"
                                    class="hasTooltip btn btn-submit btn-primary float-right">Create</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
