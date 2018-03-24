@extends('app')

@section('content')
<table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>Post Title</th>
        <th>Post Body</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($posts as $post)
        <tr>    
            <td>{{ $post->id }}</td>
            <td>
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
            </td>
            <td>{{ $post->body }}</td>
            <td>
                <a href="{{ route('posts.edit', $post->id) }}"><button type="button" class="btn btn-success">Edit</button></a>
            </td>
            <td>
                <form method="post" action="{{ route('posts.destroy',$post->id) }}">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="DELETE">
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </td>
        </tr>    
      @endforeach
      
    </tbody>
  </table>
@stop