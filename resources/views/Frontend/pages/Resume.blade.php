@extends('Frontend.Master')
@section('title')
Resume
@endsection
@section('body')
@include('Frontend.includes.topBarTitle')

<main class="main">
    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Sumary</h3>

            <div class="resume-item pb-0">
              <h4>MD ABDUL ALIM</h4>
              <p><em>Innovative and deadline-driven Web Developer with 1+ years of experience designing and building user-centered digital solutions from initial concept to final deployment. Proficient in front-end and back-end technologies, ensuring seamless functionality and a responsive user experience.</em></p>
              <ul>
                <li>Dorikhorbona, Rajshahi</li>
                <li>+880&nbsp;1775&nbsp;881137</li>
                <li>mdabdulalimsabbir000@gmail.com</li>
              </ul>
            </div><!-- Edn Resume Item -->

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Diploma in Engineering</h4>
              <h5>2019 - 2020</h5>
              <p><em>Rajshahi Polytechnic Institute</em></p>
              <p>Driven Computer Science student skilled in programming and software development. Passionate about solving real-world problems and eager to apply my knowledge to innovative projects while gaining hands-on experience.</p>
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>Secondary School Certificate</h4>
              <h5>2019</h5>
              <p><em>Rajshahi Muslim High School</em></p>
              <p>Motivated Science student with a keen interest in understanding scientific principles and their applications. Enthusiastic about conducting experiments and exploring new ideas. Committed to learning and excelling in the field while making meaningful contributions.</p>
            </div><!-- Edn Resume Item -->

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Professional Experience</h3>

            <div class="resume-item">
              <h4>Web Designer</h4>
              <h5>2024</h5>
              <p><em>Rajshahi MP-Corporation</em></p>
              <ul>
                <li>Design and develop user-friendly web and mobile interfaces.</li>
                <li>Assign tasks to a team of 7 designers, offering mentorship and guidance throughout the design process.</li>
                <li>Oversee the quality control of all frontend assets to guarantee visual accuracy and adherence to brand standards. Review designs to ensure they are accurate and high-quality</li>
                <li>Manage and optimize production budgets for design initiatives, ensuring effective allocation of resources between $2,000 and $15,000</li>
              </ul>
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>Graphic Designer (Web)</h4>
              <h5>2023</h5>
              <p><em>Remote Job</em></p>
              <ul>
                  <li>Created attractive graphics for websites and online ads to grab user attention and improve engagement.</li>
                  <li>Worked with web developers to make sure designs looked great and worked well on different devices.</li>
                  <li>Designed simple infographics and visuals to help explain information clearly on web pages.</li>
                  <li>Made mockups for client projects and gathered their feedback to improve designs based on their needs.</li>
              </ul>
            </div><!-- End Resume Item -->

          </div>

        </div>

      </div>

      <div class="col-md-12 text-center contact" data-aos="fade-up" data-aos-delay="600">
        <div class="php-email-form">
          <a href="{{ asset('/')}}assets/Frontend/pdf/mdAbdulAlimCv.pdf" download>
              <button type="submit">Download CV</button>
          </a>
        </div>
      </div>
    </section><!-- /Resume Section -->

  </main>

@include('Frontend.includes.footer')
@endsection