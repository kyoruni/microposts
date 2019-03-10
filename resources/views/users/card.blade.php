<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $user->name }}</h3>
    </div>
    <div class="card-body">
        <img class="rounded img-fluid" src="{{ Gravatar::src($user->email, 500) }}" alt="">
    </div>
    <div class="card-footer">
        @if ( $user->profile )
            <p class="card-text">{{ $user->profile }}</p>
        @else
            <p class="card-text">プロフィールが登録されていません。</p>
        @endif
        @if (Auth::id() == $user->id)
            {!! link_to_route('users.edit', 'プロフィール編集', ['id' => $user->id], ['class' => 'btn btn-primary']) !!}
        @endif
    </div>
</div>
@include('user_follow.follow_button', ['user' => $user])
