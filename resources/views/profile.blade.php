@extends ('master')

@section('title', 'Profile')
@section('content')

<h1> {{ $name }} </h1>

<form action="/products" method="POST">
   {{ csrf_field() }}
   <div class="form-group">
     <label for="commenter">Commenter</label>
     <input type="text" name="commenter" placeholder="Name" class="form-control">
   </div>
   <div class="form-group">
     <label for="comment">Comment</label>
     <textarea name="comment" rows="8" cols="80" class="form-control" placeholder="Insert comment here"></textarea>
   </div>
   <div class="form-group">
     <label for="votes"></label>
     <input type="text" name="votes" placeholder="Votes" class="form-control">
   </div>
   <button type="submit" name="button" class="btn btn-success">Submit</button>
</form>
@endsection
