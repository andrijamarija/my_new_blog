@extends('layout')

@section('main')
    <!-- main -->
    <main class="container">
      <section class="single-blog-post">
        <h1>About Us</h1>
        <div class="single-blog-post-ContentImage" data-aos="fade-left">
          <img src="{{asset('images/mes.jpeg.jpg')}}" alt="" />
        </div>

        <div>
          <p class="about-text">
           Welcome to our recipe website, where culinary inspiration meets delicious creations! Whether youre a
            seasoned chef or a passionate home cook, we are here to ignite your taste buds and guide you on a
            delightful culinary journey. Our extensive collection of recipes covers a wide range of cuisines,
            from comforting classics to innovative fusion dishes. Each recipe is thoughtfully crafted, tested,
            and presented with step-by-step instructions, ensuring that even the novice cook can create
            extraordinary meals. We believe that cooking is an art form that brings people together, and our
            goal is to empower you to explore your culinary creativity and make every meal a masterpiece. So
            come on in, explore our diverse recipe collection, and lets embark on a delightful gastronomic
            adventure together!
          </p>
        </div>
      </section>
    </main>
@endsection
