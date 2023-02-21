@extends('master')
@section('content')


<div class="posting_box">
    <form action="makepost" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="text" placeholder="your message ..."><br><br>
        <button type="submit">   Post   </button>
    </form>
</div>


@endsection