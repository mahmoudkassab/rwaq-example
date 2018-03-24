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
                <a href="{{ route('posts.destroy', $post->id) }}"><button type="button" class="btn btn-danger">Delete</button></a>
            </td>
        </tr>    
      @endforeach
      
    </tbody>
  </table>
@stop