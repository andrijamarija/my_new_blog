@extends('layout')
@section('head')
<script src="https://cdn.ckeditor.com/4.24.0-lts/standard/ckeditor.js"></script>
@endsection
@section('main')
<main class="container" style="background-color: #fff">
    <section id="contact-us">
        <h1 style="padding-top: 50px;">Create New Post!</h1>
        @if (session('status'))
            <p style="background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; padding: 10px; border-radius: 5px; margin-bottom: 10px;">{{session('status')}}</p>
        @endif

<!-- Contact Form -->
          <div class="contact-form">
            <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                @csrf
              <!-- Title -->
              <label for="title"><span>Title</span></label>
              <input type="text" id="title" name="title" value="{{old('title')}}"/>
                @error('title')
                {{-- the $attributeValue field is/must be $validationRule --}}
                    <p style="color: red; margin-bottom:25px;">{{$message}}</p>
                @enderror

              <!-- Image -->
              <label for="email"><span>Image</span></label>
              <input type="file" id="image" name="image" />
                @error('image')
                {{-- the $attributeValue field is/must be $validationRule --}}
                    <p style="color: red; margin-bottom:25px;">{{$message}}</p>
                @enderror

              <!-- Body -->
              <label for="body"><span>Body</span></label>
              <textarea id="body" name="body">{{old('body')}}</textarea>
              @error('body')
                {{-- the $attributeValue field is/must be $validationRule --}}
                    <p style="color: red; margin-bottom:25px;">{{$message}}</p>
                @enderror

               <!-- Button -->
              <input type="submit" value="Submit" />
            </form>
        </div>

    </section>
</main>
@endsection

@section('script')
<script>
    CKEDITOR.replace( 'body' );
</script>
@endsection

