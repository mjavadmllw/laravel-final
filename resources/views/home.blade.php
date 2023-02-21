@extends('master')
@section('content')

@foreach($posts as $post)
    <div class="posts">
            <a href="posts/{{$post['id']}}">
                <h4>{{$post['name']}}</h4>
            </a>
            <p>{{$post['text']}}</p>

            <p style="color:dimgray; margin:10px;">{{$post['created_at']}}</p>
    </div>
@endforeach

@endsection