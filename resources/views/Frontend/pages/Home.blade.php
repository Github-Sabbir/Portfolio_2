@extends('Frontend.Master')
@section('title')
Home
@endsection
@section('body')
<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">

    <img src="{{ asset('/') }}/Frontend/assets/img/hero-bg.jpg" alt="" data-aos="fade-out">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h2>MD ABDUL ALIM</h2>
      <p>I'm <span class="typed" data-typed-items="Frontend Designer, Backend Developer, Laravel Developer">Freelancer</span><span class="typed-cursor typed-cursor--blink"></span></p>
      <div class="social-links">
        <a href="https://api.whatsapp.com/send/?phone=%2B8801775881137&text&type=phone_number&app_absent="
        target="_blank"><i class="bi bi-whatsapp"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100013808594190" target="blank" class="facebook"><i
          class="bi bi-facebook"></i></a>
          <a href="https://github.com/Github-Sabbir" target="_blank"><i class="bi bi-github"></i></a>
      <a href="https://twitter.com/MdAbdulAlim000" target="blank" class="twitter"><i class="bi bi-twitter-x"></i></a>
      <a href="https://www.linkedin.com/in/md-abdul-alim-631b0b242/" target="blank" class="linkedin"><i
          class="bi bi-linkedin"></i></a>
      </div>
    </div>

  </section>
  <!-- /Hero Section -->

</main>
@endsection