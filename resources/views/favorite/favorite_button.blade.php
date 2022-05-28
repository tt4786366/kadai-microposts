@if (Auth::user()->is_favorite($micropost->id))
    {{-- すでにお気に入りされていれば削除ボタンのフォーム --}}
    {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => 'btn btn-success btn-sm']) !!}
    {!! Form::close() !!}
@else
    {{-- お気に入りに追加されていなければお気に入り追加ボタンのフォーム --}}
    {!! Form::open(['route' => ['favorites.favorite', $micropost->id], 'method' => 'post']) !!}
        {!! Form::submit('Favorite', ['class' => 'btn btn-light btn-sm']) !!}
    {!! Form::close() !!}
@endif