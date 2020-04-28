@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                   <!--  @can('edit-post')
                        Hello You can  edit the post.
                   @endcan
                   @can('add-post')
                        Hello You can add the post.
                   @endcan -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
