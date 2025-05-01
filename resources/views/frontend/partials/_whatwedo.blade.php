<!-- What We Do  -->
<div class="what-todo-section section-space-sm-y">
    <div class="section-space-sm-bottom">
      <div class="container">
        <div class="row g-4 justify-content-between">
          <div class="col-md-5">
            <div class="d-flex align-items-center gap-4 flex-wrap">
              <div class="w-30 subtitle-flush-x subtitle_line_1"></div>
              <h6 class="mb-0 fs-18 clr-neutral-90 fw-extrabold animate-text-from-right"> What We Do </h6>
            </div>
          </div>
          <div class="col-md-7 col-xl-5">
            <h5 class="mb-0 clr-neutral-90 fw-extrabold animate-line-3d"> Explore the power of AI <span class="clr-grad-1">Development</span> tools Crafted with Brilliance, Style Quality and Creativity. </h5>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row g-4">
        <div class="col-md-5 order-xl-2">
          <nav class="todo-nav" id="toDoScrollspy">
            <ul class="list gap-5 todo-nav__menu">
              <li>
                <a href="#imageGenerator" class="nav-link link todo-nav__link"> AI Image Generator </a>
              </li>
              <li>
                <a href="#imageCustomization" class="nav-link link todo-nav__link"> Customizable Image Styles </a>
              </li>
              <li>
                <a href="#generateVideos" class="nav-link link todo-nav__link"> Generate Videos </a>
              </li>
              <li>
                <a href="#removedBg" class="nav-link link todo-nav__link"> Removed any Background </a>
              </li>
              <li>
                <a href="#trainCustom" class="nav-link link todo-nav__link"> Train Custom </a>
              </li>
              <li>
                <a href="#imgCreation" class="nav-link link todo-nav__link"> Image Clean </a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="col-md-7">
          <div data-bs-spy="scroll" data-bs-target="#toDoScrollspy" data-bs-smooth-scroll="true">
            <div class="section-space-bottom" id="imageGenerator">
              <div class="todo-box position-relative z-1 bg-black py-10 pe-10">
                <h4 class="clr-neutral-90 animate-line-3d"> Generate Images </h4>
                <p class="mb-6 clr-neutral-80 animate-text-from-right"> We are constantly rethinking the future by creating the next generation of products, brands and services from a hybrid perspective. </p>
                <div class="fadein_bottom_2">
                  <a href="{{ route('login') }}" class="gradient-btn-1 position-relative link d-inline-flex justify-content-center align-items-center gap-2 p-4 rounded fw-bold text-center z-1">
                    <span class="d-inline-block"> Try Text to Image </span>
                    <span class="d-inline-block">
                      <i class="bi bi-arrow-up-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="todo-img">
                <img src="{{ asset('assets/img/todo-img.jpg') }}" alt="image" class="img-fluid rounded-1 parallax-image">
                <img src="{{ asset('assets/img/todo-img-1.png') }}" alt="image" class="img-fluid todo-img__1">
                <img src="{{ asset('assets/img/todo-img-2.png') }}" alt="image" class="img-fluid todo-img__2">
              </div>
            </div>
            <div class="section-space-y" id="imageCustomization">
              <div class="todo-box position-relative z-1 bg-black py-10 pe-10">
                <h4 class="clr-neutral-90 animate-line-3d"> Reimagine Any Image </h4>
                <p class="mb-6 clr-neutral-80 animate-text-from-right"> We are constantly rethinking the future by creating the next generation of products, brands and services from a hybrid perspective. </p>
                <div class="fadein_bottom_3">
                  <a href="{{ route('login') }}" class="gradient-btn-1 position-relative link d-inline-flex justify-content-center align-items-center gap-2 p-4 rounded fw-bold text-center z-1">
                    <span class="d-inline-block"> Try Image to Image </span>
                    <span class="d-inline-block">
                      <i class="bi bi-arrow-up-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="todo-img">
                <img src="{{ asset('assets/img/todo-img-3.jpg') }}" alt="image" class="img-fluid rounded-1 parallax-image">
                <img src="{{ asset('assets/img/todo-img-1.png') }}" alt="image" class="img-fluid todo-img__1">
                <img src="{{ asset('assets/img/todo-img-4.png') }}" alt="image" class="img-fluid todo-img__2">
              </div>
            </div>
            <div class="section-space-y" id="generateVideos">
              <div class="todo-box position-relative z-1 bg-black py-10 pe-10">
                <h4 class="clr-neutral-90 animate-line-3d"> Generate Videos </h4>
                <p class="mb-6 clr-neutral-80 animate-text-from-right"> We are constantly rethinking the future by creating the next generation of products, brands and services from a hybrid perspective. </p>
                <div class="fadein_bottom_4">
                  <a href="{{ route('login') }}" class="gradient-btn-1 position-relative link d-inline-flex justify-content-center align-items-center gap-2 p-4 rounded fw-bold text-center z-1">
                    <span class="d-inline-block"> Try Text to Image </span>
                    <span class="d-inline-block">
                      <i class="bi bi-arrow-up-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="todo-img">
                <video autoplay loop class="ratio ratio-16x9">
                  <source src="{{ asset('assets/img/todo-video.mp4') }}" type="video/mp4">
                </video>
                <img src="{{ asset('assets/img/todo-img-1.png') }}" alt="image" class="img-fluid todo-img__1">
                <img src="{{ asset('assets/img/todo-img-2.png') }}" alt="image" class="img-fluid todo-img__2">
              </div>
            </div>
            <div class="section-space-y" id="removedBg">
              <div class="todo-box position-relative z-1 bg-black py-10 pe-10">
                <h4 class="clr-neutral-90 animate-line-3d"> Remove Image Background </h4>
                <p class="mb-6 clr-neutral-80 animate-text-from-right"> We are constantly rethinking the future by creating the next generation of products, brands and services from a hybrid perspective. </p>
                <div class="fadein_bottom_5">
                  <a href="{{ route('login') }}" class="gradient-btn-1 position-relative link d-inline-flex justify-content-center align-items-center gap-2 p-4 rounded fw-bold text-center z-1">
                    <span class="d-inline-block"> Try Text to Image </span>
                    <span class="d-inline-block">
                      <i class="bi bi-arrow-up-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="todo-img">
                <img src="{{ asset('assets/img/todo-img-5.jpg') }}" alt="image" class="img-fluid rounded-1 parallax-image">
                <img src="{{ asset('assets/img/todo-img-1.png') }}" alt="image" class="img-fluid todo-img__1">
                <img src="{{ asset('assets/img/todo-img-6.png') }}" alt="image" class="img-fluid todo-img__2">
              </div>
            </div>
            <div class="section-space-y" id="trainCustom">
              <div class="todo-box position-relative z-1 bg-black py-10 pe-10">
                <h4 class="clr-neutral-90 animate-line-3d"> Image Cleaning </h4>
                <p class="mb-6 clr-neutral-80 animate-text-from-right"> We are constantly rethinking the future by creating the next generation of products, brands and services from a hybrid perspective. </p>
                <div class="fadein_bottom_6">
                  <a href="{{ route('login') }}" class="gradient-btn-1 position-relative link d-inline-flex justify-content-center align-items-center gap-2 p-4 rounded fw-bold text-center z-1">
                    <span class="d-inline-block"> Try Text to Image </span>
                    <span class="d-inline-block">
                      <i class="bi bi-arrow-up-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="todo-img">
                <img src="{{ asset('assets/img/todo-img-7.jpg') }}" alt="image" class="img-fluid rounded-1 parallax-image">
                <img src="{{ asset('assets/img/todo-img-1.png') }}" alt="image" class="img-fluid todo-img__1">
                <img src="{{ asset('assets/img/todo-img-8.png') }}" alt="image" class="img-fluid todo-img__2">
              </div>
            </div>
            <div class="section-space-y" id="imgCreation">
              <div class="todo-box position-relative z-1 bg-black py-10 pe-10">
                <h4 class="clr-neutral-90 animate-line-3d"> Generate Images </h4>
                <p class="mb-6 clr-neutral-80 animate-text-from-right"> We are constantly rethinking the future by creating the next generation of products, brands and services from a hybrid perspective. </p>
                <div class="fadein_bottom_7">
                  <a href="{{ route('login') }}" class="gradient-btn-1 position-relative link d-inline-flex justify-content-center align-items-center gap-2 p-4 rounded fw-bold text-center z-1">
                    <span class="d-inline-block"> Try Text to Image </span>
                    <span class="d-inline-block">
                      <i class="bi bi-arrow-up-right"></i>
                    </span>
                  </a>
                </div>
              </div>
              <div class="todo-img">
                <img src="{{ asset('assets/img/todo-img-9.jpg') }}" alt="image" class="img-fluid rounded-1 parallax-image">
                <img src="{{ asset('assets/img/todo-img-1.png') }}" alt="image" class="img-fluid todo-img__1">
                <img src="{{ asset('assets/img/todo-img-2.png') }}" alt="image" class="img-fluid todo-img__2">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /What We Do  -->