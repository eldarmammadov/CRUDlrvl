@extends('layout')

@section('content')
 {{ @card->title }}

<ul>
 @foreach ($card->notes as $note)
<li> {{ $note->body}} </li>
 @endforeach
</ul>

<h3>Add New Note</h3>

<form method="POST" action'/cards/{{ $card->id }}/notes'>

      <textarea name="body" rows="8" cols="40"></textarea>

      <div class="forum-group">
        <button type="submit" name="button">Add Note</button>
      </div>

</form>

@stop
