<!-- Header -->
<header class="header header--1 header--fixed">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="menu d-lg-flex justify-content-lg-between align-items-lg-center py-3 py-lg-0">
            <div class="d-flex align-items-center justify-content-between">
              <a href="{{ route('home') }}" class="logo link d-inline-flex align-items-center flex-shrink-0">
                <img src="{{ asset('assets/img/logo-light.png') }}" alt="logo" class="img-fluid object-fit-contain">
              </a>
              <button class="menu-toggle w-10 h-10 p-0 border-0 lh-1 bg-primary-50 clr-neutral-100 :clr-neutral-100 transition :bg-primary-300 rounded flex-shrink-0 d-lg-none order-sm-3 fs-24">
                <i class="bi bi-list"></i>
              </button>
            </div>
            <div class="menu-nav d-flex align-items-lg-center flex-column flex-lg-row flex-grow-1 gap-4 pb-4 pb-lg-0 rounded">
              <ul class="list list-lg-row mx-lg-auto">
                <li class="menu-list">
                  <a href="#" class="link menu-link has-sub"> Home </a>
                  <ul class="list menu-sub">
                    <li class="menu-sub-list">
                      <a href="{{ route('home') }}" class="link menu-sub-link gap-4">
                        <span class="d-none d-lg-inline-block">
                          <img src="{{ asset('assets/img/ai-image-icon.png') }}" alt="image" class="img-fluid">
                        </span> AI Image Generate </a>
                    </li>
                    <li class="menu-sub-list">
                      <a href="{{ route('home2') }}" class="link menu-sub-link gap-3">
                        <span class="d-none d-lg-inline-block">
                          <img src="{{ asset('assets/img/ai-saas-icon.png') }}" alt="image" class="img-fluid">
                        </span> AI SaaS </a>
                    </li>
                    <li class="menu-sub-list">
                      <a href="{{ route('home3') }}" class="link menu-sub-link gap-3">
                        <span class="d-none d-lg-inline-block">
                          <img src="{{ asset('assets/img/ai-chatbot-icon.png') }}" alt="image" class="img-fluid">
                        </span> AI Chatbot </a>
                    </li>
                    <li class="menu-sub-list">
                      <a href="{{ route('home4') }}" class="link menu-sub-link gap-3">
                        <span class="d-none d-lg-inline-block">
                          <img src="{{ asset('assets/img/ai-content-icon.png') }}" alt="image" class="img-fluid">
                        </span> AI Content Creator </a>
                    </li>
                    <li class="menu-sub-list">
                      <a href="{{ route('home5') }}" class="link menu-sub-link gap-3">
                        <span class="d-none d-lg-inline-block">
                          <img src="{{ asset('assets/img/ai-voice-icon.png') }}" alt="image" class="img-fluid">
                        </span> AI Voice Generate </a>
                    </li>
                    <li class="menu-sub-list">
                      <a href="{{ route('home6') }}" class="link menu-sub-link gap-3">
                        <span class="d-none d-lg-inline-block">
                          <img src="{{ asset('assets/img/ai-video-icon.png') }}" alt="image" class="img-fluid">
                        </span> AI Video Generator </a>
                    </li>
                    <li class="menu-sub-list">
                      <a href="{{ route('home7') }}" class="link menu-sub-link gap-3">
                        <span class="d-none d-lg-inline-block">
                          <img src="{{ asset('assets/img/ai-saas-icon-2.png') }}" alt="image" class="img-fluid">
                        </span> AI Writebot </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-list">
                  <a href="{{ route('pricing') }}" class="link menu-link"> Pricing </a>
                </li>
                <li class="menu-list">
                  <a href="#" class="link menu-link has-sub"> Blog </a>
                  <ul class="list menu-sub">
                    <li class="menu-sub-list">
                      <a href="{{ route('blog1') }}" class="link menu-sub-link"> Blog Listing 1 </a>
                    </li>
                    <li class="menu-sub-list">
                      <a href="{{ route('blog2') }}" class="link menu-sub-link"> Blog Listing 2 </a>
                    </li>
                    <li class="menu-sub-list">
                      <a href="{{ route('blog.details') }}" class="link menu-sub-link"> Blog Details </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-list">
                  <a href="#" class="link menu-link has-sub"> Pages </a>
                  <ul class="list menu-sub">
                    <li class="menu-sub-list">
                      <a href="{{ route('featured') }}" class="link menu-sub-link"> Featured </a>
                    </li>
                    <li class="menu-sub-list">
                      <a href="{{ route('about') }}" class="link menu-sub-link"> About Us </a>
                    </li>
                    <li class="menu-sub-list">
                      <a href="{{ route('use.cases') }}" class="link menu-sub-link"> Use Cases </a>
                    </li>
                    <li class="menu-sub-list">
                      <a href="{{ route('copywrite') }}" class="link menu-sub-link"> Copywrite </a>
                    </li>
                    <li class="menu-sub-list">
                      <a href="{{ route('faq') }}" class="link menu-sub-link"> Faq </a>
                    </li>
                  </ul>
                </li>
              </ul>
              <ul class="list list-lg-row gap-4 gap-lg-6">
                <li class="menu-list mx-4 mx-lg-0">
                  <a href="{{ route('login') }}" class="animated-border-btn link d-inline-flex justify-content-center rounded overflow-hidden position-relative z-1">
                    <span class="d-inline-block transition bg-neutral-10 :bg-primary-key clr-white px-6 py-2 fw-bold text-center rounded"> Login </span>
                  </a>
                </li>
                <li class="menu-list mx-4 mx-lg-0">
                  <a href="{{ route('register') }}" class="gradient-btn-1 position-relative z-1 link d-inline-flex justify-content-center px-4 py-2 rounded fw-bold text-center"> Get Started </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- /Header -->