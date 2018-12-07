@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                              <th>Sr No.</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Web Address</th>
                              <th>Cover Letter</th>
                              <th>Do you like working?</th>
                              <th>Ip</th>
                              <th>Location</th>
                              <th>Created</th>
                              <th>Action</th>
                            </tr>
                            @forelse($users as $k=> $user)
                             <tr>
                              <td>{{ $k+1 }}</td>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                              <td>{{ $user->web_address }}</td>
                              <td>{{ $user->cover_letter }}</td>
                              <td>{{ (($user->is_working == 1)? 'Yes' : 'No') }}</td>
                              <td>{{ $user->ip }}</td>
                              <td>{{ $user->location }}</td>
                              <td>{{ date('d M, Y @ i:g a', strtotime($user->created_at)) }}</td>
                              <td><a href="{{route('view.profile', $user->id)}}">View</a></td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="10" align="center">No profiles found</td>
                            </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
