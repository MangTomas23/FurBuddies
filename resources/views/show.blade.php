<h1>Show</h1>












@foreach($comments as $i => $comment)
  <p>{{ $comment->commenter }}</p>
  <p>{{ $comment->text }}</p>
  <p>{{ $comment->votes }}</p>
@endforeach
