@extends('layouts.main')

@section('main')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1>Welcome to <span>Codigo</span>
        </h1>
        <h2>We are team of talanted designers making websites with Bootstrap</h2>
        <div class="d-flex">
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
          <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
        </div>
      </div>
    </section><!-- End Hero -->

  
      <!-- ======= Services Section ======= -->
    <section id="pelajaran" class="services">
      <div class="container" data-aos="fade-up">
  
        <div class="section-title">
          <h2>Pelajaran</h2>
          <h3>Daftar <span>Pelajaran</span></h3>
            <p>Berikut adalah daftar pelajaran yang saat ini tersedia.</p>
        </div>

        <div class="row">  
          @foreach ($pelajaran as $p)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon">
                @if($p->image)
                  <img src="{{ url('/image/'.$p->image) }}"style="width: 100%; border-radius:10px;" />
                @else
                  <img src="{{ asset('img/default-06.png')}}"style="width: 100%; border-radius:10px;" />
                @endif
                {{-- <img src="{{ url('/image/'.$p->image) }}" style="width: 100%; border-radius:10px;" alt=""> --}}
              </div>
              <h4><a href="{{ route('pelajaranDetail',$p->id) }}">{{ $p->name }}</a></h4>
                <p>{{ $p->detail }}</p>
            </div>
          </div>
          @endforeach
        </div>
  
      </div>
    </section><!-- End Services Section -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>About</h2>
            <h3>Find Out More <span>About Us</span></h3>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
          </div>
  
          <div class="row">
            <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
              <img src="assets-frontend/img/about.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
              <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
              <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li>
                  <i class="bx bx-store-alt"></i>
                  <div>
                    <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                    <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                  </div>
                </li>
                <li>
                  <i class="bx bx-images"></i>
                  <div>
                    <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                    <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                  </div>
                </li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
            </div>
          </div>
  
        </div>
    </section><!-- End About Section -->
  
      <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
  
            <div class="col-lg-3 col-md-6">
              <div class="count-box">
                <i class="icofont-simple-smile"></i>
                <span data-toggle="counter-up">232</span>
                <p>Happy Clients</p>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
              <div class="count-box">
                <i class="icofont-document-folder"></i>
                <span data-toggle="counter-up">521</span>
                <p>Projects</p>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <i class="icofont-live-support"></i>
                <span data-toggle="counter-up">1,463</span>
                <p>Hours Of Support</p>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <i class="icofont-users-alt-5"></i>
                <span data-toggle="counter-up">15</span>
                <p>Hard Workers</p>
              </div>
            </div>
  
          </div>
  
        </div>
    </section><!-- End Counts Section -->
@endsection