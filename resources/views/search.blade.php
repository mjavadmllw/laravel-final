@extends('master')
@section('content')

<div>
    <h3>Results</h2>
    @foreach($data as $item)
        <div class="posts">
            <a href="posts/{{$item['id']}}">
                <h4>{{$item['name']}}</h4>
            </a>
            <p>{{$item['text']}}</p>
        </div>
    @endforeach
</div>

@endsection
