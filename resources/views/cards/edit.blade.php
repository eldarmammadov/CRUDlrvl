@extends('layout')
@section('content')
<h2>Edit Note</h2>


<form method="POST" action="/notes/{{ $note->id }}" >
{{ method_field('PATCH') }};
      <textarea name="body" rows="8" cols="40"> {{ $note->body }}</textarea>

      <div class="forum-group">
        <button type="submit" name="button">Update Note</button>
      </div>

</form>
@stop
