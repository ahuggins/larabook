@extends('layouts.default')

@section('content')
    <div class="jumbotron">
      <div class="container">
        <h1>Welcome to Larabook</h1>
        <p>The premier place to talk about laravel with others.</p>

        @if (! $currentUser)
            <p>
                {{ link_to_route('register_path', 'Sign Up', null, ['class' => 'btn btn-lg btn-primary']) }}
            </p>
        @endif
      </div>
    </div>
@stop