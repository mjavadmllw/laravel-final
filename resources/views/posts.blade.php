@extends('master')
@section('content')


<div class="posts">
    <h3>{{$post_data['name']}}</h3>
    <p>{{$post_data['text']}}</p>
    @if(Session::get('user')['email']=='admin@app.com')
        <a style="margin-left: 10px;" href="/delete/{{$post_data['id']}}">delete</a>
    @endif
</div>


@endsection