@extends('Frontend.Master')
@section('title')
Contact
@endsection
@section('body')

<main class="main">
<!-- Page Title -->
@include('Frontend.includes.topBarTitle')
<!-- End Page Title -->
<!-- Contact Section -->
<section id="contact" class="contact section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">
      <div class="col-md-6">
        <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
          <i class="icon bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h3>Address</h3>
            <p>Dorikhorbona, Rajshahi</p>
          </div>
        </div>
      </div>
      <!-- End Info Item -->
      <div class="col-md-6">
        <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
          <i class="icon bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>Call Me</h3>
            <p>+880 1775 881137</p>
          </div>
        </div>
      </div>
      <!-- End Info Item -->
      <div class="col-md-6">
        <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
          <i class="icon bi bi-envelope flex-shrink-0"></i>
          <div>
            <h3>Email Us</h3>
            <p>mdabdulalimsabbir111@gmail.com</p>
          </div>
        </div>
      </div>
      <!-- End Info Item -->
      <div class="col-md-6">
        <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
          <i class="icon bi bi-share flex-shrink-0"></i>
          <div>
            <h3>Social Profiles</h3>
            <div class="social-links fade-up">
              <a href="https://api.whatsapp.com/send/?phone=%2B8801775881137&text&type=phone_number&app_absent="target="_blank"><i class="bi bi-whatsapp"></i></a>
              <a href="https://www.facebook.com/profile.php?id=100013808594190" target="blank" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://twitter.com/MdAbdulAlim000" target="blank" class="twitter"><i class="bi bi-twitter-x"></i></a>
              <a href="https://www.instagram.com/mdabdulalim000/" target="blank" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://github.com/Github-Sabbir" target="_blank"><i class="bi bi-github"></i></a>
              <a href="https://www.linkedin.com/in/md-abdul-alim-631b0b242/" target="blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!-- End Info Item -->
    </div>
@include('Frontend.includes.contactForm')
  </div>
</section>
<!-- /Contact Section -->
</main>
@include('Frontend.includes.footer')
@endsection