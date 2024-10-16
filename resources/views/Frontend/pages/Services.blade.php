@extends('Frontend.Master')
@section('title')
Service
@endsection
@section('body')
@include('Frontend.includes.topBarTitle')

<main class="main">
    <!-- Services Section -->
    <section id="services" class="services section">
      <div class="container">
@include('Frontend.includes.services')
      </div>
    </section>
    <!-- /Services Section -->
@include('Frontend.includes.testimonials')
  </main>

@include('Frontend.includes.footer')
@endsection