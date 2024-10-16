@extends('Frontend.Master')
@section('title')
About
@endsection
@section('body')
@include('Frontend.includes.topBarTitle')

<main class="main">
    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="{{ asset('/') }}assets/Frontend/img/profile-img.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2>Frontend &amp; Backend Developer</h2>
            <p class="fst-italic py-3">
            Offering frontend and backend services, crafting seamless user experiences and optimizing systems for your project's success
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.abdulalim.000.pe</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+8801775881137</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Gmail:</strong> <span>mdabdulalim000@gmail.com</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>CSE Diploma</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>College:</strong> <span>Rajshahi Polytechnic Institute</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Dorikhorbona Rajshahi</span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
            Experience a comprehensive blend of frontend and backend services leveraging HTML, CSS, Bootstrap, Tailwind CSS, JavaScript, jQuery, PHP, and Laravel.<br><br>From crafting captivating user interfaces with HTML, CSS, and Bootstrap to implementing dynamic functionality using JavaScript and jQuery.<br><br>Backend expertise with PHP and Laravel enables robust server-side development, database management.
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-emoji-smile"></i>
            <div class="stats-item">
              <span data-purecounter-start="9999" data-purecounter-end="2" data-purecounter-duration="0.5" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-journal-richtext"></i>
            <div class="stats-item">
              <span data-purecounter-start="9999" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-headset"></i>
            <div class="stats-item">
              <span data-purecounter-start="9999" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-people"></i>
            <div class="stats-item">
              <span data-purecounter-start="9999" data-purecounter-end="1" data-purecounter-duration="0.5" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section>
    <!-- /Stats Section -->
@include('Frontend.includes.skills')
    
    <!-- Testimonials Section -->
@include('Frontend.includes.testimonials')
    <!-- /Testimonials Section -->

  </main>

@include('Frontend.includes.footer')
@endsection