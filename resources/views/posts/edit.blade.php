@extends('app')

@section('content')
    <form action="{{ route('posts.update', $post->id ) }}" method="post" class="needs-validation" novalidate>
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">

            <form class="needs-validation" novalidate>
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Post Title:</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" id="title" placeholder="write post title" value="{{ $post->title }}" required>
                        <div class="invalid-feedback">
                            Please write Post title!
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="body" class="col-sm-2 col-form-label">Post Body: </label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="body" id="body" cols="10" rows="5" required>{{ $post->body }}</textarea>
                        <div class="invalid-feedback">
                            Please write Post Body!
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Edit Post</button>
            </form>

            <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.getElementsByClassName('needs-validation');
                        // Loop over them and prevent submission
                        var validation = Array.prototype.filter.call(forms, function(form) {
                            form.addEventListener('submit', function(event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add('was-validated');
                            }, false);
                        });
                    }, false);
                })();
            </script>
@stop