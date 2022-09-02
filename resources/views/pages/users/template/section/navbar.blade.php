{{-- >>> NAVBAR --}}
<nav class="navbar navbar-expand-lg navbar-dark pt-5 pb-4" style="background-color: #09392b; color: #fff;">
  <div class="container-fluid justify-content-end">
<!--     <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0 flex-wrap justify-content-center">
        {{-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="#">
              Dropdown
            </a>
        </li> --}}
        <li class="nav-item mx-3">
          <a class="nav-link text-light d-flex align-items-center px-4" href="{{ route('user.home') }}">
            <img class="me-3" src="{{ url('/svg/ant-design_home-filled.svg' )}}" style="height: 25px;"> <span style="font-size: 15px;"> HOME</span>
          </a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link text-light d-flex align-items-center px-4" href="{{ route('user.pets') }}">
            <img class="me-3" src="{{ url('/svg/fa-solid_paw.svg' )}}" style="height: 25px;"> <span style="font-size: 15px;"> PETS</span>
          </a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link text-light d-flex align-items-center px-4" href="#">
            <img class="me-3" src="{{ url('/svg/healthicons_guide-dog.svg' )}}" style="height: 25px;"> <span style="font-size: 15px;"> ADOPT-A-PET</span>
          </a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link text-light d-flex align-items-center px-4" href="#">
            <img class="me-3" src="{{ url('/svg/eva_question-mark-circle-fill.svg' )}}" style="height: 25px;"> <span style="font-size: 15px;"> LOST AND FOUND</span>
          </a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link text-light d-flex align-items-center px-4" href="#">
            <img class="me-3" src="{{ url('/svg/emojione-monotone_lion-face.svg' )}}" style="height: 25px;"> <span style="font-size: 15px;"> META ANIMALS SITE</span>
          </a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link text-light d-flex align-items-center px-4" href="#">
            <img class="me-3" src="{{ url('/svg/file-icons_dna.svg' )}}" style="height: 25px;"> <span style="font-size: 15px;"> BREED STANDARDS</span>
          </a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link text-light d-flex align-items-center px-4" href="{{ route('obituary.pets') }}">
            <img class="me-3" src="{{ url('/svg/emojione-monotone_dove.svg' )}}" style="height: 25px;"> <span style="font-size: 15px;"> OBITUARY</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
{{-- <div class="navbar navbar-expand-lg pt-5 pb-4" >
  <div class="container-fluid">
    <div class="navbar-collapse justify-content-md-center">
      <ul class="navbar-nav flex-wrap justify-content-center">



      </ul>
    </div>
  </div>
</div> --}}
{{-- <<< NAVBAR --}}