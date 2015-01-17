@if ($signedIn)
    @if($user->isFollowedBy($currentUser))
        {{ Form::open(['method' => 'DELETE', 'route' => ['follow_path', $user->id]]) }}
            {{ Form::hidden('userIdToUnfollow', $user->id) }}
            <button class="btn btn-danger" type="submit">Unfollow {{ $user->username }}</button>
        {{ Form::close() }}
    @else
        {{ Form::open(['route' => 'follows_path']) }}
            {{ Form::hidden('userIdToFollow', $user->id) }}
            <button class="btn btn-primary" type="submit">Follow {{ $user->username }}</button>
        {{ Form::close() }}
    @endif
@endif
