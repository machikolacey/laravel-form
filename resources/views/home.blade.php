@extends('master')

@section('title', 'Homepage')

@section('content')
<h1>Recent Messages</h1>

<h2>Post a message</h2>
<form action="/create" method="post">
<input type="text" name="title" placeholder="title">
<input type="text" name="content" placeholder="content">
{{ csrf_field() }}
<input type="submit">
</form>

<ul>
  @foreach($messages as $message)
  <li>{{ $message->title }}
  {{ $message->content }}
  <br />
  {{ $message->created_at->diffForHumans() }}
  <a href="/message/{{ $message->id }}">View</a>
   </li>
  @endforeach
</ul>
@endsection



