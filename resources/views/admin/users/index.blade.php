@extends('layouts.app')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header text-xl"><i class="mdi mdi-account"></i> Users
                <a href="{{ route('Admin::users.create') }}"
                   title="Create User"
                   data-toggle="tooltip"
                   class="btn btn-sm btn-primary float-right">
                    <i class="mdi mdi-account-plus"></i>
                </a>
            </div>

            <div class="card-body">


                <table class="user_dt table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Since</th>
                            <th data-class-name="bg-white pl-2"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td><a href="{{ route('Admin::users.edit', $user->id) }}"
                                       class="btn btn-xs btn-primary"
                                       title="Edit User"
                                       data-toggle="tooltip"
                                    ><i class="mdi mdi-account-search"></i></a>
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
    <script src="{{ asset('js/users.js') }}"></script>
@endsection
