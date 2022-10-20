
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
  {{-- Logo Header --}}
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="align-items-center d-flex m-0 navbar-brand text-wrap" href="{{ route('dashboard') }}">
      <svg width="53" height="53" viewBox="0 0 195 241" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g filter="url(#filter0_d_309_4194)">
          <rect x="5.65685" y="95.1779" width="126.769" height="26.6699" rx="13.3349" transform="rotate(-44.9245 5.65685 95.1779)" fill="white" stroke="url(#paint0_linear_309_4194)" stroke-width="8"/>
          <rect x="52.327" y="141.328" width="93.443" height="26.6699" rx="13.3349" transform="rotate(-44.9245 52.327 141.328)" fill="white" stroke="url(#paint1_linear_309_4194)" stroke-width="8"/>
          <rect x="76.2946" y="211.902" width="127.385" height="26.6699" rx="13.3349" transform="rotate(-44.9245 76.2946 211.902)" fill="white" stroke="url(#paint2_linear_309_4194)" stroke-width="8"/>
          <circle cx="24.6702" cy="141.288" r="14" fill="white" stroke="url(#paint3_linear_309_4194)" stroke-width="8"/>
          <circle cx="165.67" cy="94.2885" r="14" fill="white" stroke="url(#paint4_linear_309_4194)" stroke-width="8"/>
        </g>
        <defs>
          <filter id="filter0_d_309_4194" x="1.67017" y="2.1803" width="193.128" height="238.081" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feOffset dx="3" dy="3"/>
            <feGaussianBlur stdDeviation="4"/>
            <feComposite in2="hardAlpha" operator="out"/>
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_309_4194"/>
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_309_4194" result="shape"/>
          </filter>
          <linearGradient id="paint0_linear_309_4194" x1="67.3845" y1="95.1704" x2="67.3845" y2="129.84" gradientUnits="userSpaceOnUse">
            <stop stop-color="#77DEFF"/>
            <stop offset="1" stop-color="#3190FF"/>
          </linearGradient>
          <linearGradient id="paint1_linear_309_4194" x1="97.3916" y1="141.321" x2="97.3916" y2="175.991" gradientUnits="userSpaceOnUse">
            <stop stop-color="#77DEFF"/>
            <stop offset="1" stop-color="#3190FF"/>
          </linearGradient>
          <linearGradient id="paint2_linear_309_4194" x1="138.33" y1="211.894" x2="138.33" y2="246.564" gradientUnits="userSpaceOnUse">
            <stop stop-color="#77DEFF"/>
            <stop offset="1" stop-color="#3190FF"/>
          </linearGradient>
          <linearGradient id="paint3_linear_309_4194" x1="24.6702" y1="123.288" x2="24.6702" y2="159.288" gradientUnits="userSpaceOnUse">
            <stop stop-color="#77DEFF"/>
            <stop offset="1" stop-color="#3190FF"/>
          </linearGradient>
          <linearGradient id="paint4_linear_309_4194" x1="165.67" y1="76.2885" x2="165.67" y2="112.288" gradientUnits="userSpaceOnUse">
            <stop stop-color="#77DEFF"/>
            <stop offset="1" stop-color="#3190FF"/>
          </linearGradient>
        </defs>
      </svg>  
        <span class="ms-3 font-weight-bold">SIMANTAN</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  {{-- Admin --}}
  <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      {{-- Dashboard Admin --}}
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('dashboard') ? 'active' : '') }}" href="{{ url('dashboard') }}">
          <div class="icon icon-shapxe icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(0.000000, 148.000000)">
                      <path class="color-background opacity-6" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                      <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      {{-- Comparation Admin --}}
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('comparation') ? 'active' : '') }}" href="{{ url('comparation') }}">
          <div class="icon icon-shapxe icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(0.000000, 148.000000)">
                      <path class="color-background opacity-6" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                      <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <span class="nav-link-text ms-1">Comparation</span>
        </a>
      </li>

      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Monitoring</h6>
      </li>
      {{-- Tv Digital Admin --}}
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('tv-digital') ? 'active' : '') }} " href="{{ url('tv-digital') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                {{-- <path d="M6.25 33.75C6.25 33.4185 6.3817 33.1005 6.61612 32.8661C6.85054 32.6317 7.16848 32.5 7.5 32.5H32.5C32.8315 32.5 33.1495 32.6317 33.3839 32.8661C33.6183 33.1005 33.75 33.4185 33.75 33.75C33.75 34.0815 33.6183 34.3995 33.3839 34.6339C33.1495 34.8683 32.8315 35 32.5 35H7.5C7.16848 35 6.85054 34.8683 6.61612 34.6339C6.3817 34.3995 6.25 34.0815 6.25 33.75ZM34.9775 7.5L35.0375 7.5025C35.5046 7.5343 35.9612 7.65567 36.3825 7.86C36.6859 8.0012 36.9464 8.22031 37.1375 8.495C37.305 8.745 37.5 9.1875 37.5 10V24.9775L37.4975 25.0375C37.4655 25.5046 37.3441 25.9612 37.14 26.3825C36.9987 26.6858 36.7796 26.9463 36.505 27.1375C36.255 27.305 35.8125 27.5 35 27.5H5.0225L4.9625 27.4975C4.49543 27.4655 4.03884 27.3441 3.6175 27.14C3.31418 26.9987 3.05369 26.7796 2.8625 26.505C2.695 26.255 2.5 25.8125 2.5 25V10.0225L2.5025 9.9625C2.5343 9.49539 2.65567 9.03876 2.86 8.6175C3.0013 8.31418 3.22039 8.05369 3.495 7.8625C3.745 7.695 4.1875 7.5 5 7.5H34.9775ZM35 5H5C0 5 0 10 0 10V25C0 30 5 30 5 30H35C40 30 40 25 40 25V10C40 5 35 5 35 5Z" fill="black"/> --}}
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(0.000000, 148.000000)">
                        <path class="color-background" d="M6.25 33.75C6.25 33.4185 6.3817 33.1005 6.61612 32.8661C6.85054 32.6317 7.16848 32.5 7.5 32.5H32.5C32.8315 32.5 33.1495 32.6317 33.3839 32.8661C33.6183 33.1005 33.75 33.4185 33.75 33.75C33.75 34.0815 33.6183 34.3995 33.3839 34.6339C33.1495 34.8683 32.8315 35 32.5 35H7.5C7.16848 35 6.85054 34.8683 6.61612 34.6339C6.3817 34.3995 6.25 34.0815 6.25 33.75ZM34.9775 7.5L35.0375 7.5025C35.5046 7.5343 35.9612 7.65567 36.3825 7.86C36.6859 8.0012 36.9464 8.22031 37.1375 8.495C37.305 8.745 37.5 9.1875 37.5 10V24.9775L37.4975 25.0375C37.4655 25.5046 37.3441 25.9612 37.14 26.3825C36.9987 26.6858 36.7796 26.9463 36.505 27.1375C36.255 27.305 35.8125 27.5 35 27.5H5.0225L4.9625 27.4975C4.49543 27.4655 4.03884 27.3441 3.6175 27.14C3.31418 26.9987 3.05369 26.7796 2.8625 26.505C2.695 26.255 2.5 25.8125 2.5 25V10.0225L2.5025 9.9625C2.5343 9.49539 2.65567 9.03876 2.86 8.6175C3.0013 8.31418 3.22039 8.05369 3.495 7.8625C3.745 7.695 4.1875 7.5 5 7.5H34.9775ZM35 5H5C0 5 0 10 0 10V25C0 30 5 30 5 30H35C40 30 40 25 40 25V10C40 5 35 5 35 5Z" fill="black"/>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Tv Digital</span>
        </a>
      </li>
      {{-- Tv Analog Admin --}}
      <li class="nav-item pb-1">
        <a class="nav-link {{ (Request::is('tv-analog') ? 'active' : '') }}" href="{{ url('tv-analog') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="25 0 215 230">
                <g fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16">
                  <path d="M 191.99999,208 H 64 C 46.272,208 32,193.728 32,176 V 96 C 32,78.272 46.272,64 64,64 h 128 c 17.728,0 32,14.272 32,32 v 80 c 0,17.728 -14.272,32 -32,32"/>
                  <path d="m 96,240 h 64"/>
                  <path d="M 128,64 176,16"/>
                  <path d="M 128,64 80,16"/>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Tv Analog</span>
        </a>
      </li>
      {{-- Radio Fm Admin --}}
      <li class="nav-item pb-1">
        <a class="nav-link {{ (Request::is('radio-fm') ? 'active' : '') }}" href="{{ url('radio-fm') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                <path fill="#000000" d="M3 7v10h2v-4h3v-2H5V9h4V7H3m10 0a2 2 0 0 0-2 2v8h2V9h2v7h2V9h2v8h2V9a2 2 0 0 0-2-2h-6Z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Radio FM</span>
        </a>
      </li>
      {{-- Radio Am Admin --}}
      <li class="nav-item pb-1">
        <a class="nav-link {{ (Request::is('radio-am') ? 'active' : '') }}" href="{{ url('radio-am') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                <path fill="#000000" d="M5 7a2 2 0 0 0-2 2v8h2v-4h2v4h2V9a2 2 0 0 0-2-2H5m0 2h2v2H5V9m8-2a2 2 0 0 0-2 2v8h2V9h2v7h2V9h2v8h2V9a2 2 0 0 0-2-2h-6Z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Radio AM</span>
        </a>
      </li>
      {{-- Microwave Link Admin --}}
      <li class="nav-item pb-1">
        <a class="nav-link {{ (Request::is('microwave-link-admin') ? 'active' : '') }}" href="{{ url('microwave-link-admin') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                <path fill="#000000" d="M574 665.4a8.03 8.03 0 0 0-11.3 0L446.5 781.6c-53.8 53.8-144.6 59.5-204 0c-59.5-59.5-53.8-150.2 0-204l116.2-116.2c3.1-3.1 3.1-8.2 0-11.3l-39.8-39.8a8.03 8.03 0 0 0-11.3 0L191.4 526.5c-84.6 84.6-84.6 221.5 0 306s221.5 84.6 306 0l116.2-116.2c3.1-3.1 3.1-8.2 0-11.3L574 665.4zm258.6-474c-84.6-84.6-221.5-84.6-306 0L410.3 307.6a8.03 8.03 0 0 0 0 11.3l39.7 39.7c3.1 3.1 8.2 3.1 11.3 0l116.2-116.2c53.8-53.8 144.6-59.5 204 0c59.5 59.5 53.8 150.2 0 204L665.3 562.6a8.03 8.03 0 0 0 0 11.3l39.8 39.8c3.1 3.1 8.2 3.1 11.3 0l116.2-116.2c84.5-84.6 84.5-221.5 0-306.1zM610.1 372.3a8.03 8.03 0 0 0-11.3 0L372.3 598.7a8.03 8.03 0 0 0 0 11.3l39.6 39.6c3.1 3.1 8.2 3.1 11.3 0l226.4-226.4c3.1-3.1 3.1-8.2 0-11.3l-39.5-39.6z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Microwave Link</span>
        </a>
      </li>
      <li class="nav-item mt-2">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Penertiban & Penanganan Gangguan</h6>
      </li>
      {{-- Penertiban & Tindak Lanjut Admin --}}
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('penertiban') ? 'active' : '') }}" href="{{ url('penertiban') }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36">
              <path fill="#000000" d="M10.16 31.71a4.4 4.4 0 0 1-4.64-1a4.34 4.34 0 0 1-1.29-3.11a4.41 4.41 0 0 1 .18-1.2a11.61 11.61 0 0 1-1-2.56a6.4 6.4 0 0 0 9.33 8.63a11.55 11.55 0 0 1-2.58-.76Zm8.25-4.03a7.61 7.61 0 0 1-9.08-1.26a7.58 7.58 0 0 1-1.27-9.06a14.26 14.26 0 0 1-.37-2.85a9.58 9.58 0 0 0 .22 13.33a9.63 9.63 0 0 0 13.35.22a14.46 14.46 0 0 1-2.85-.38Z"/>
              <path fill="#000000" d="M21.66 26.21a12.1 12.1 0 1 1 8.57-3.54a12.11 12.11 0 0 1-8.57 3.54Zm0-22.21a10.11 10.11 0 0 0-10.12 10.11a10 10 0 0 0 3 7.14a10.12 10.12 0 0 0 14.31 0A10.11 10.11 0 0 0 21.66 4Zm7.86 18Z"/>
            </svg>
          </div>
          <span class="nav-link-text ms-1">Penertiban & Tindak Lanjut</span>
        </a>
      </li>
      {{-- Penanganan Gangguan Admin --}}
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('penanganan-gangguan') ? 'active' : '') }}" href="{{ url('penanganan-gangguan') }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
              <path fill="#000000" fill-rule="evenodd" d="M12 2.5c-3.81 0-6.5 2.743-6.5 6.119c0 1.536.632 2.572 1.425 3.56c.172.215.347.422.527.635l.096.112c.21.25.427.508.63.774c.404.531.783 1.128.995 1.834a.75.75 0 0 1-1.436.432c-.138-.46-.397-.89-.753-1.357a18.354 18.354 0 0 0-.582-.714l-.092-.11c-.18-.212-.37-.436-.555-.667C4.87 12.016 4 10.651 4 8.618C4 4.363 7.415 1 12 1s8 3.362 8 7.619c0 2.032-.87 3.397-1.755 4.5c-.185.23-.375.454-.555.667l-.092.109c-.21.248-.405.481-.582.714c-.356.467-.615.898-.753 1.357a.75.75 0 0 1-1.437-.432c.213-.706.592-1.303.997-1.834c.202-.266.419-.524.63-.774l.095-.112c.18-.213.355-.42.527-.634c.793-.99 1.425-2.025 1.425-3.561C18.5 5.243 15.81 2.5 12 2.5zM9.5 21.75a.75.75 0 0 1 .75-.75h3.5a.75.75 0 0 1 0 1.5h-3.5a.75.75 0 0 1-.75-.75zM8.75 18a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5z"/>
            </svg>
          </div>
          <span class="nav-link-text ms-1">Penanganan Gangguan</span>
        </a>
      </li>

      <li class="nav-item mt-2">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Izin Kelas</h6>
      </li>
      {{-- 2,4 Admin --}}
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('2-4ghz') ? 'active' : '') }}" href="{{ url('2-4ghz') }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
              <path fill="#000000" fill-rule="evenodd" d="M12 2.5c-3.81 0-6.5 2.743-6.5 6.119c0 1.536.632 2.572 1.425 3.56c.172.215.347.422.527.635l.096.112c.21.25.427.508.63.774c.404.531.783 1.128.995 1.834a.75.75 0 0 1-1.436.432c-.138-.46-.397-.89-.753-1.357a18.354 18.354 0 0 0-.582-.714l-.092-.11c-.18-.212-.37-.436-.555-.667C4.87 12.016 4 10.651 4 8.618C4 4.363 7.415 1 12 1s8 3.362 8 7.619c0 2.032-.87 3.397-1.755 4.5c-.185.23-.375.454-.555.667l-.092.109c-.21.248-.405.481-.582.714c-.356.467-.615.898-.753 1.357a.75.75 0 0 1-1.437-.432c.213-.706.592-1.303.997-1.834c.202-.266.419-.524.63-.774l.095-.112c.18-.213.355-.42.527-.634c.793-.99 1.425-2.025 1.425-3.561C18.5 5.243 15.81 2.5 12 2.5zM9.5 21.75a.75.75 0 0 1 .75-.75h3.5a.75.75 0 0 1 0 1.5h-3.5a.75.75 0 0 1-.75-.75zM8.75 18a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5z"/>
            </svg>
          </div>
          <span class="nav-link-text ms-1">2,4 GHZ</span>
        </a>
      </li>
      {{-- 5,8 Admin --}}
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('pap5ghz') ? 'active' : '') }}" href="{{ url('pap5ghz') }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
              <path fill="#000000" d="M16 30h-2v-5a3.003 3.003 0 0 0-3-3H7a3.003 3.003 0 0 0-3 3v5H2v-5a5.006 5.006 0 0 1 5-5h4a5.006 5.006 0 0 1 5 5zM9 10a3 3 0 1 1-3 3a3 3 0 0 1 3-3m0-2a5 5 0 1 0 5 5a5 5 0 0 0-5-5zm21 4a1.992 1.992 0 0 0-.512.074l-1.055-1.055a3.879 3.879 0 0 0 0-4.038l1.055-1.055a2.034 2.034 0 1 0-1.414-1.414L27.02 5.567a3.879 3.879 0 0 0-4.038 0l-1.055-1.055a2.034 2.034 0 1 0-1.414 1.414l1.055 1.055a3.879 3.879 0 0 0 0 4.038l-1.055 1.055a2.034 2.034 0 1 0 1.414 1.414l1.055-1.055a3.879 3.879 0 0 0 4.038 0l1.055 1.055A1.996 1.996 0 1 0 30 12zm-7-3a2 2 0 1 1 2 2a2.002 2.002 0 0 1-2-2z"/>
            </svg>
          </div>
          <span class="nav-link-text ms-1">5,8 GHZ</span>
        </a>
      </li>

      <li class="nav-item mt-2">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Data SIMS</h6>
      </li>

      {{-- SIMS Admin --}}
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('penyelenggara') ? 'active' : '') }}" href="{{ url('penyelenggara') }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 30">
              <path fill="#000000" d="M18.42 16.31a5.7 5.7 0 1 1 5.76-5.7a5.74 5.74 0 0 1-5.76 5.7Zm0-9.4a3.7 3.7 0 1 0 3.76 3.7a3.74 3.74 0 0 0-3.76-3.7Z"/>
              <path fill="#000000" d="M18.42 16.31a5.7 5.7 0 1 1 5.76-5.7a5.74 5.74 0 0 1-5.76 5.7Zm0-9.4a3.7 3.7 0 1 0 3.76 3.7a3.74 3.74 0 0 0-3.76-3.7Zm3.49 10.74a20.6 20.6 0 0 0-13 2a1.77 1.77 0 0 0-.91 1.6v3.56a1 1 0 0 0 2 0v-3.43a18.92 18.92 0 0 1 12-1.68Z"/>
              <path fill="#000000" d="M33 22h-6.7v-1.48a1 1 0 0 0-2 0V22H17a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V23a1 1 0 0 0-1-1Zm-1 10H18v-8h6.3v.41a1 1 0 0 0 2 0V24H32Z"/>
              <path fill="#000000" d="M21.81 27.42h5.96v1.4h-5.96zM10.84 12.24a18 18 0 0 0-7.95 2A1.67 1.67 0 0 0 2 15.71v3.1a1 1 0 0 0 2 0v-2.9a16 16 0 0 1 7.58-1.67a7.28 7.28 0 0 1-.74-2Zm22.27 1.99a17.8 17.8 0 0 0-7.12-2a7.46 7.46 0 0 1-.73 2A15.89 15.89 0 0 1 32 15.91v2.9a1 1 0 1 0 2 0v-3.1a1.67 1.67 0 0 0-.89-1.48Zm-22.45-3.62v-.67a3.07 3.07 0 0 1 .54-6.11a3.15 3.15 0 0 1 2.2.89a8.16 8.16 0 0 1 1.7-1.08a5.13 5.13 0 0 0-9 3.27a5.1 5.1 0 0 0 4.7 5a7.42 7.42 0 0 1-.14-1.3Zm14.11-8.78a5.17 5.17 0 0 0-3.69 1.55a7.87 7.87 0 0 1 1.9 1a3.14 3.14 0 0 1 4.93 2.52a3.09 3.09 0 0 1-1.79 2.77a7.14 7.14 0 0 1 .06.93a7.88 7.88 0 0 1-.1 1.2a5.1 5.1 0 0 0 3.83-4.9a5.12 5.12 0 0 0-5.14-5.07Z"/>
            </svg>
          </div>
          <span class="nav-link-text ms-1">SIMS</span>
        </a>
      </li>
      {{-- <li class="nav-item mt-4">
        <a class="nav-link {{ (Request::is('employee') ? 'active' : '') }}" href="{{ url('employee') }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36">
              <path fill="#000000" d="M16.43 16.69a7 7 0 1 1 7-7a7 7 0 0 1-7 7Zm0-11.92a5 5 0 1 0 5 5a5 5 0 0 0-5-5ZM22 17.9a25.41 25.41 0 0 0-16.12 1.67a4.06 4.06 0 0 0-2.31 3.68v5.95a1 1 0 1 0 2 0v-5.95a2 2 0 0 1 1.16-1.86a22.91 22.91 0 0 1 9.7-2.11a23.58 23.58 0 0 1 5.57.66Zm.14 9.51h6.14v1.4h-6.14z"/>
              <path fill="#000000" d="M33.17 21.47H28v2h4.17v8.37H18v-8.37h6.3v.42a1 1 0 0 0 2 0V20a1 1 0 0 0-2 0v1.47H17a1 1 0 0 0-1 1v10.37a1 1 0 0 0 1 1h16.17a1 1 0 0 0 1-1V22.47a1 1 0 0 0-1-1Z"/>
            </svg>
          </div>
          <span class="nav-link-text ms-1">Employee</span>
        </a>
      </li> --}}
    </ul>
  </div>
</aside>