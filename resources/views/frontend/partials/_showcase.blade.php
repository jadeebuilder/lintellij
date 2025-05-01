{{-- Showcase Section --}}
<div class="trigger-showcase position-relative z-1">
    <!-- Hero Section Shapes -->
    <div class="hero-1-shapes">
      <img src="{{ asset('assets/img/hero-shape-left.webp') }}" alt="image" class="img-fluid hero-1-shapes__img hero-1-shapes__img--1">
      <img src="{{ asset('assets/img/hero-shape-right.webp') }}" alt="image" class="img-fluid hero-1-shapes__img hero-1-shapes__img--2">
      <img src="{{ asset('assets/img/hero-shape-ring-1.png') }}" alt="image" class="img-fluid hero-1-shapes__img hero-1-shapes__img--3">
      <img src="{{ asset('assets/img/hero-shape-ring-2.png') }}" alt="image" class="img-fluid hero-1-shapes__img hero-1-shapes__img--4">
    </div>
    <!-- /Hero Section Shapes -->
    <!-- Hero 1 -->
    <section class="hero-1">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-10 col-lg-9 col-xxl-10 text-center">
            <h1 class="clr-white fw-extrabold mb-6 animate-line-3d"> Best AI Content Platform <span class="clr-grad-1">Image Generate</span>
            </h1>
            <p class="fs-18 fw-bold clr-neutral-80 max-text-50 mx-auto mb-10 animate-text-from-bottom"> Your One-Stop Solution for Content Creation,Audio Generation, Image Crafting, & AI Chatbot Development. </p>
            <div class="newsletter-1 d-inline-block w-100 max-text-60 mx-auto mb-4 position-relative z-1 overflow-hidden rounded fadeIn_bottom">
              <div class="d-flex p-3 bg-neutral-10 rounded ">
                <input type="text" class="form-control newsletter-1__input bg-transparent clr-neutral-60" placeholder="An Astronaut riding a horse on mars, hd">
                <button type="button" class="newsletter-1__btn d-inline-block py-3 px-5 rounded fw-bold clr-white bg-grad-1"> Generate </button>
              </div>
            </div>
            <ul class="hero-1__tag-list list list-row align-items-center justify-content-center gap-3 flex-wrap">
              <li class="animate-fadeInBottom">
                <span class="d-block fs-14 clr-white"> Popular Tags: </span>
              </li>
              <li class="animate-fadeInBottom">
                <a href="#" class="link d-inline-block text-center py-1 px-2 rounded bg-neutral-10 clr-neutral-80 fs-14 fw-medium"> Creative </a>
              </li>
              <li class="animate-fadeInBottom">
                <a href="#" class="link d-inline-block text-center py-1 px-2 rounded bg-neutral-10 clr-neutral-80 fs-14 fw-medium"> Sport </a>
              </li>
              <li class="animate-fadeInBottom">
                <a href="#" class="link d-inline-block text-center py-1 px-2 rounded bg-neutral-10 clr-neutral-80 fs-14 fw-medium"> Animation </a>
              </li>
              <li class="animate-fadeInBottom">
                <a href="#" class="link d-inline-block text-center py-1 px-2 rounded bg-neutral-10 clr-neutral-80 fs-14 fw-medium"> Fantasy </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <img src="{{ asset('assets/img/hero-shape-img-1.webp') }}" alt="image" class="img-fluid hero-1-shapes__img hero-1-shapes__img--5">
      <img src="{{ asset('assets/img/hero-shape-img-2.webp') }}" alt="image" class="img-fluid hero-1-shapes__img hero-1-shapes__img--6">
    </section>
    <!-- /Hero 1 -->
    <!-- Generated Image Showcase -->
    <div class="container">
      <div class="row g-4">
        <div class="col-md-6">
          <div class="row g-4">
            <div class="col-12">
              <img src="{{ asset('assets/img/generated-img-1.jpg') }}" alt="image" class="img-fluid rounded-1 img-fadeIn-1">
            </div>
            <div class="col-12">
              <h6 class="clr-neutral-80 mb-10 animate-line-3d"> We're passionate about empowering creatives with the tools they need to <span class="clr-grad-1">bring their vision to</span> life that's why we've developed </h6>
              <div class="d-flex flex-wrap align-items-center gap-10 reveal-from-bottom">
                <a href="{{ route('register') }}" class="gradient-btn-1 position-relative link d-inline-flex justify-content-center align-items-center gap-2 px-6 py-4 rounded fw-bold text-center">
                  <span class="d-inline-block"> Join Community </span>
                  <span class="d-inline-block">
                    <i class="bi bi-arrow-right"></i>
                  </span>
                </a>
                <div class="d-inline-flex align-items-center gap-2">
                  <h4 class="mb-0 fw-extrabold clr-neutral-90"> 80k+ </h4>
                  <span class="d-inline-block clr-neutral-90"> Happy Customer ðŸ˜Š </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row g-4">
            <div class="col-md-6">
              <img src="{{ asset('assets/img/generated-img-2.jpg') }}" alt="image" class="img-fluid rounded-1 w-100 img-fadeIn-2">
            </div>
            <div class="col-md-6">
              <img src="{{ asset('assets/img/generated-img-3.jpg') }}" alt="image" class="img-fluid rounded-1 w-100 img-fadeIn-3">
            </div>
            <div class="col-12">
              <img src="{{ asset('assets/img/generated-img-4.jpg') }}" alt="image" class="img-fluid rounded-1 img-fadeIn-4">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Generated Image Showcase -->
  </div>