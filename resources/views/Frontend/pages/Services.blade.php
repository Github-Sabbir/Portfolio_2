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
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-code"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Frontend</h3>
              </a>
              <p>Dedicated frontend solutions for crafting captivating designs and seamless user experiences tailored to your unique requirements</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
              <i class="bi bi-shuffle"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Responsive Design</h3>
              </a>
              <p>Responsive design strategies that enhance website accessibility, providing a consistent and engaging experience for users on desktops, tablets, and smartphones.</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-journal-code"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Backend</h3>
              </a>
              <p>Expert backend services for optimizing systems, ensuring efficiency, and safeguarding your business operations with tailored solutions</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="800">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-bug"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Problem Solving</h3>
              </a>
              <p>Tailored backend problem-solving solutions for seamless operations and optimized performance in your unique business environment</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-fingerprint"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Security</h3>
              </a>
              <p>Specialized backend security solutions ensuring robust protection for your business operations and sensitive data.</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-plus-lg"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Custom</h3>
              </a>
              <p>Custom backend security solutions safeguarding systems for your unique needs and business protection.</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div>
          <!-- End Service Item -->

        </div>

      </div>
    </section>
    <!-- /Services Section -->
@include('Frontend.includes.testimonials')
  </main>

@include('Frontend.includes.footer')
@endsection