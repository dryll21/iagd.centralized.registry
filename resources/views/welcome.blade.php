{{-- HEADER CONTAINS CSS LINKS --}}
@include('pages/users/template/section/header')

<body>

  <div class="wrapper">

    @include('pages/users/template/section/navbar')

    {{-- >>> MAIN --}}
    <div class="main" style="background-color: #161815; padding-bottom: 12rem;">
      <div class="main-content h-100">
        <div class="container-fluid">

          <div class="row">
            <div class="col-12 px-0" style="position: relative;">

              <div id="carouselExampleControls" class="carousel slide p-0" data-bs-ride="carousel">
                <div class="carousel-inner" style="height: 612px;">
                  <div class="carousel-item active" style="position: relative; height:100%;">
                    <img src="{{ url('/images/pexels-johann-1254140.jpg' )}}" class="w-100" style="position: absolute; top: 50%; transform: translateY(-50%);">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ url('/images/pexels-alex-bargain-1472999.jpg' )}}" class="w-100" style="position: absolute; top: 80%; transform: translateY(-20%);">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ url('/images/pexels-fabio-scaletta-2115984.jpg' )}}" class="w-100" style="position: absolute; top: 52%; transform: translateY(-48%);">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ url('/images/rabbit.jpg' )}}" class="w-100" style="position: absolute; top: 80%; transform: translateY(-20%);">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

              <div style="position: absolute; right: 8%; bottom: 2%; color: white;">
                <i class="mx-3 mdi mdi-instagram mdi-36px"></i>
                <i class="mx-3 mdi mdi-facebook mdi-36px"></i>
                <i class="mx-3 mdi mdi-twitter mdi-36px"></i>
                <img class="mx-3 " src="{{ url('/svg/tiktok.svg' )}}" style="position: relative; top: -10px; height: 26px;">
                <i class="mx-3 mdi mdi-youtube mdi-36px"></i>
              </div>

            </div>
          </div>

          {{-- THE BEST BREEDS --}}
          <div class="row justify-content-center" style="margin-top: 6rem;">
            <div class="col-12 col-md-10 px-5 text-light pt-5 pb-3">
              <h1>The <span class="text-warning">BEST</span> breeds are here!</h1>
              <p>Visit our healthy pets and give them extra love.</p>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-12 col-md-10">
              <div class="row">

                <div class="col-12 col-md-3 px-5">
                  <a href="#">
                    <div style="display: inline-block; position: relative;">
                      <div style="position: absolute; left: -50px; text-align: center; background-color: #09392b; color: #fff; width: 50px; border-radius: 15px 0 0 15px; padding: 10px 0;">
                        <img src="{{ url('/svg/ICGD-LOGO-SOLO---SILVER 2.svg' )}}" class="w-75">
                        <span class="fw-bold pt-1" style="text-orientation: upright; writing-mode: vertical-lr;">ICGD</span>
                      </div>
                      <img src="{{ url('/images/pexels-johann-1254140.jpg' )}}" class="w-100" style="object-fit: cover; height: 470px;">
                    </div>
                  </a>
                </div>

                <div class="col-12 col-md-3 px-5">
                  <a href="#">
                    <div style="display: inline-block; position: relative;">
                      <div style="position: absolute; left: -50px; text-align: center; background-color: #09392b; color: #fff; width: 50px; border-radius: 15px 0 0 15px; padding: 10px 0;">
                        <img src="{{ url('/svg/IFGD-logo-silver 2.svg' )}}" class="w-75">
                        <span class="fw-bold pt-1" style="text-orientation: upright; writing-mode: vertical-lr;">IFGD</span>
                      </div>
                      <img src="{{ url('/images/pexels-kelvin-valerio-617278.jpg' )}}" class="w-100" style="object-fit: cover; height: 470px;">
                    </div>
                  </a>
                </div>

                <div class="col-12 col-md-3 px-5">
                  <a href="#">
                    <div style="display: inline-block; position: relative;">
                      <div style="position: absolute; left: -50px; text-align: center; background-color: #09392b; color: #fff; width: 50px; border-radius: 15px 0 0 15px; padding: 10px 0;">
                        <img src="{{ url('/svg/IBGD-FINAL-silver 2.svg' )}}" class="w-75">
                        <span class="fw-bold pt-1" style="text-orientation: upright; writing-mode: vertical-lr;">IBGD</span>
                      </div>
                      <img src="{{ url('/images/pexels-fabio-scaletta-2115984.jpg' )}}" class="w-100" style="object-fit: cover; height: 470px;">
                    </div>
                  </a>
                </div>

                <div class="col-12 col-md-3 px-5">
                  <a href="#">
                    <div style="display: inline-block; position: relative;">
                      <div style="position: absolute; left: -50px; text-align: center; background-color: #09392b; color: #fff; width: 50px; border-radius: 15px 0 0 15px; padding: 10px 0;">
                        <img src="{{ url('/svg/IRGD-LOGO---SILVER 2.svg' )}}" class="w-75">
                        <span class="fw-bold pt-1" style="text-orientation: upright; writing-mode: vertical-lr;">IRGD</span>
                      </div>
                      <img src="{{ url('/images/jhh.jpg' )}}" class="w-100" style="object-fit: cover; height: 470px;">
                    </div>
                  </a>
                </div>

              </div>
            </div>
          </div>

          {{-- JOIN OUR COMMUNITY --}}
          {{-- <div class="row justify-content-center" style="margin-top: 8rem;">
            <div class="col-12 col-md-10 px-5 text-light pt-5 pb-3">
              <h1><span class="text-warning">JOIN</span> our Community!</h1>
              <p>We will embrace you and your babies healthy and happy.</p>
            </div>
          </div>

          <div class="row justify-content-center pb-5">
            <div class="col-12 col-md-10">
              <div class="row">

                <div class="col-12 col-md-3 px-5 text-center">
                  <div class="row py-3">
                    <img src="{{ url('/svg/ICGD-LOGO-SOLO---SILVER 2.svg' )}}" class="w-75 mx-auto">
                  </div>
                  <div class="row">
                    <button class="btn" style="background-color: #09392b; color: #fff;">ICGD MEMBERSHIP <i class="mdi mdi-arrow-right"></i></button>
                  </div>
                </div>

                <div class="col-12 col-md-3 px-5 text-center">
                  <div class="row py-3">
                    <img src="{{ url('/svg/IFGD-logo-silver 2.svg' )}}" class="w-75 mx-auto">
                  </div>
                  <div class="row">
                    <button class="btn" style="background-color: #09392b; color: #fff;">IFGD MEMBERSHIP <i class="mdi mdi-arrow-right"></i></button>
                  </div>
                </div>

                <div class="col-12 col-md-3 px-5 text-center">
                  <div class="row py-3">
                    <img src="{{ url('/svg/IBGD-FINAL-silver 2.svg' )}}" class="w-75 mx-auto">
                  </div>
                  <div class="row">
                    <button class="btn" style="background-color: #09392b; color: #fff;">IBGD MEMBERSHIP <i class="mdi mdi-arrow-right"></i></button>
                  </div>
                </div>

                <div class="col-12 col-md-3 px-5 text-center">
                  <div class="row py-3">
                    <img src="{{ url('/svg/IRGD-LOGO---SILVER 2.svg' )}}" class="w-75 mx-auto">
                  </div>
                  <div class="row">
                    <button class="btn" style="background-color: #09392b; color: #fff;">IRGD MEMBERSHIP <i class="mdi mdi-arrow-right"></i></button>
                  </div>
                </div>

              </div>
            </div>
          </div> --}}

          {{-- SAY HELLO --}}
          <div class="row justify-content-center" style="margin-top: 6rem;">
            <div class="col-12 col-md-10 px-5 text-light pt-5 pb-3">
              <h1>Say hello to our <span class="text-warning">BABIES!</span></h1>
              <p>Visit our healthy pets and give them extra love.</p>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-12 col-md-10">
              <div class="row pt-5">

                <div class="col-12 col-md-3 px-5">
                  <a href="#">
                    <div style="display: inline-block; position: relative;">
                      <div style="position: absolute; top: -50px; text-align: center; background-color: #09392b; color: #fff; height: 50px; border-radius: 15px 15px 0 0; padding: 10px 0;">
                        <span class="fw-bold pt-1 px-3">Visit our puppies <i class="mdi mdi-arrow-right"></i></span>
                      </div>
                      <img src="{{ url('/images/pexels-helena-lopes-1938123.jpg' )}}" class="w-100" style="object-fit: cover; height: 470px;">
                    </div>
                  </a>
                </div>

                <div class="col-12 col-md-3 px-5">
                  <a href="#">
                    <div style="display: inline-block; position: relative;">
                      <div style="position: absolute; top: -50px; text-align: center; background-color: #09392b; color: #fff; height: 50px; border-radius: 15px 15px 0 0; padding: 10px 0;">
                        <span class="fw-bold pt-1 px-3">Visit our kittens <i class="mdi mdi-arrow-right"></i></span>
                      </div>
                      <img src="{{ url('/images/pexels-alex-bargain-1472999.jpg' )}}" class="w-100" style="object-fit: cover; height: 470px;">
                    </div>
                  </a>
                </div>

                <div class="col-12 col-md-3 px-5">
                  <a href="#">
                    <div style="display: inline-block; position: relative;">
                      <div style="position: absolute; top: -50px; text-align: center; background-color: #09392b; color: #fff; height: 50px; border-radius: 15px 15px 0 0; padding: 10px 0;">
                        <span class="fw-bold pt-1 px-3">Visit our birds <i class="mdi mdi-arrow-right"></i></span>
                      </div>
                      <img src="{{ url('/images/pexels-kristi-evans-1024500.jpg' )}}" class="w-100" style="object-fit: cover; height: 470px;">
                    </div>
                  </a>
                </div>

                <div class="col-12 col-md-3 px-5">
                  <a href="#">
                    <div style="display: inline-block; position: relative;">
                      <div style="position: absolute; top: -50px; text-align: center; background-color: #09392b; color: #fff; height: 50px; border-radius: 15px 15px 0 0; padding: 10px 0;">
                        <span class="fw-bold pt-1 px-3">Visit our rabbits <i class="mdi mdi-arrow-right"></i></span>
                      </div>
                      <img src="{{ url('/images/rabbit2.jpg' )}}" class="w-100" style="object-fit: cover; height: 470px;">
                    </div>
                  </a>
                </div>

              </div>
            </div>
          </div>

          {{-- SAY HELLO --}}
          <div class="row justify-content-center" style="margin-top: 9rem;">
            <div class="col-12 col-md-10">
              <div class="row pt-5">

                <div class="col-12 col-md-6 px-5 text-light pb-3">
                  <h1><span class="text-warning">FEATURED</span> Pet!</h1>
                  <p>Meet Chopper!</p>

                  <p class="my-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam ligula eu tellus cursus, id aliquam purus accumsan. Maecenas finibus finibus augue, nec rutrum nibh euismod eget. Maecenas nibh mi, accumsan vel cursus quis, commodo at justo. Curabitur consectetur risus eget erat porttitor laoreet. Aliquam pretium nulla nisl, non lobortis ligula pretium non. Mauris tristique, odio at malesuada malesuada, lacus diam ullamcorper lacus, sed egestas est est ac neque. Sed mauris justo, mattis et rutrum non, interdum sit amet nulla. Nulla semper justo id pellentesque molestie. Praesent dolor tortor, rhoncus ut malesuada egestas, porttitor non quam. Proin dignissim ac elit at vestibulum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                  <div class="row py-4">
                    <h6><i class="mx-3 mdi mdi-check-circle mdi-36px text-warning"></i> Donec vel ligula hendrerit</h6>
                    <h6><i class="mx-3 mdi mdi-check-circle mdi-36px text-warning"></i> Class aptent taciti sociosqu ad litora torquent per conubia nostra</h6>
                    <h6><i class="mx-3 mdi mdi-check-circle mdi-36px text-warning"></i> Aliquam pharetra ligula eget feugiat aliquam</h6>
                  </div>

                  <button class="btn btn-lg" style="background-color: #09392b; color: #fff;">Visit Profile <i class="mdi mdi-arrow-right"></i></button>
                </div>

                <div class="col-12 col-md-6 pt-5 pb-3">
                  <a href="#">
                    <div style="display: inline-block; position: relative;">
                      <div style="position: absolute; top: -50px; text-align: center; background-color: #09392b; color: #fff; height: 50px; border-radius: 15px 15px 0 0; padding: 10px 0;">
                        <span class="fw-bold pt-1 px-3">CHOPPER</span>
                      </div>
                      <img src="{{ url('/images/pexels-helena-lopes-2253275.jpg' )}}" class="w-100" style="object-fit: cover; height: 470px;">
                    </div>
                  </a>
                </div>

              </div>
            </div>
          </div>

          {{-- REGISTER YOUR PETS --}}
          {{-- <div class="row justify-content-center" style="margin-top: 8rem;">
            <div class="col-12 col-md-10 px-5 text-light pt-5 pb-3">
              <h1><span class="text-warning">REGISTER</span> your pets now!</h1>
              <p>Cras pharetra maximus urna eu sodales. In sed tortor a urna interdum ornare.</p>
            </div>
          </div>

          <div class="row justify-content-center pb-5">
            <div class="col-12 col-md-10">
              <div class="row">

                <div class="col-12 col-md-3 px-5 text-center">
                  <div class="row py-3 justify-content-center">
                    <img src="{{ url('/images/pexels-johann-1254140.jpg' )}}" style="padding: 0; object-fit: cover; border-radius: 100%; height: 250px; width: 250px;">
                  </div>
                  <div class="row">
                    <button class="btn" style="background-color: #09392b; color: #fff;">ICGD MEMBERSHIP <i class="mdi mdi-arrow-right"></i></button>
                  </div>
                </div>

                <div class="col-12 col-md-3 px-5 text-center">
                  <div class="row py-3 justify-content-center">
                    <img src="{{ url('/images/pexels-kelvin-valerio-617278.jpg' )}}" style="padding: 0; object-fit: cover; border-radius: 100%; height: 250px; width: 250px;">
                  </div>
                  <div class="row">
                    <button class="btn" style="background-color: #09392b; color: #fff;">IFGD MEMBERSHIP <i class="mdi mdi-arrow-right"></i></button>
                  </div>
                </div>

                <div class="col-12 col-md-3 px-5 text-center">
                  <div class="row py-3 justify-content-center">
                    <img src="{{ url('/images/pexels-fabio-scaletta-2115984.jpg' )}}" style="padding: 0; object-fit: cover; border-radius: 100%; height: 250px; width: 250px;">
                  </div>
                  <div class="row">
                    <button class="btn" style="background-color: #09392b; color: #fff;">IBGD MEMBERSHIP <i class="mdi mdi-arrow-right"></i></button>
                  </div>
                </div>

                <div class="col-12 col-md-3 px-5 text-center">
                  <div class="row py-3 justify-content-center">
                    <img src="{{ url('/images/jhh.jpg' )}}" style="padding: 0; object-fit: cover; border-radius: 100%; height: 250px; width: 250px;">
                  </div>
                  <div class="row">
                    <button class="btn" style="background-color: #09392b; color: #fff;">IRGD MEMBERSHIP <i class="mdi mdi-arrow-right"></i></button>
                  </div>
                </div>

              </div>
            </div>
          </div> --}}

          {{-- STATISTICS --}}
          <div class="row justify-content-center" style="margin-top: 8rem;">
            <div class="col-12 col-md-10 px-5 text-light pt-5 pb-3">

              {{-- 1ST ROW --}}

              <div class="row">
                <div class="col-12 col-md-3 px-5 text-center">
                  <div class="row py-2">
                    <img src="{{ url('/svg/fluent_animal-dog-16-regular.svg' )}}" class="w-25 mx-auto">
                  </div>
                  <div class="row">
                    <h4 class="fw-bold">3,796</h4>
                    <small>ICGD Cats</small>
                  </div>
                </div>

                <div class="col-12 col-md-3 px-5 text-center">
                  <div class="row py-2">
                    <img src="{{ url('/svg/fluent_animal-cat-16-regular.svg' )}}" class="w-25 mx-auto">
                  </div>
                  <div class="row">
                    <h4 class="fw-bold">144</h4>
                    <small>IFGD Cats</small>
                  </div>
                </div>

                <div class="col-12 col-md-3 px-5 text-center">
                  <div class="row py-2">
                    <img src="{{ url('/svg/emojione-monotone_bird.svg' )}}" class="w-25 mx-auto">
                  </div>
                  <div class="row">
                    <h4 class="fw-bold">3,796</h4>
                    <small>IBGD Birds</small>
                  </div>
                </div>

                <div class="col-12 col-md-3 px-5 text-center">
                  <div class="row py-2">
                    <img src="{{ url('/svg/mdi_rabbit-variant-outline.svg' )}}" class="w-25 mx-auto">
                  </div>
                  <div class="row">
                    <h4 class="fw-bold">3,796</h4>
                    <small>IRGD Rabbits</small>
                  </div>
                </div>
              </div>

              {{-- 2ND ROW --}}

              <div class="row" style="margin-top: 100px;">
                <div class="col-12 col-md-3 px-5 text-center">
                  <div class="row py-2">
                    <img src="{{ url('/svg/ph_house.svg' )}}" class="w-25 mx-auto">
                  </div>
                  <div class="row">
                    <h4 class="fw-bold">321</h4>
                    <small>Kennels</small>
                  </div>
                </div>

                <div class="col-12 col-md-3 px-5 text-center">
                  <div class="row py-2">
                    <img src="{{ url('/svg/icon-park_cat.svg' )}}" class="w-25 mx-auto">
                  </div>
                  <div class="row">
                    <h4 class="fw-bold">28</h4>
                    <small>Cattery</small>
                  </div>
                </div>

                <div class="col-12 col-md-3 px-5 text-center">
                  <div class="row py-2">
                    <img src="{{ url('/svg/emojione-monotone_chicken.svg' )}}" class="w-25 mx-auto">
                  </div>
                  <div class="row">
                    <h4 class="fw-bold">318</h4>
                    <small>Coop</small>
                  </div>
                </div>

                <div class="col-12 col-md-3 px-5 text-center">
                  <div class="row py-2">
                    <img src="{{ url('/svg/ph_house.svg' )}}" class="w-25 mx-auto">
                  </div>
                  <div class="row">
                    <h4 class="fw-bold">8</h4>
                    <small>Rabbitry</small>
                  </div>
                </div>

              </div>
            </div>
          </div>


          {{-- SOMEBODY FAMOUS --}}
          <div class="row justify-content-center" style="margin-top: 8rem;">
            <div class="col-12 col-md-10 px-5 text-light pt-5 pb-3">

              <div class="row">
                <div class="col-12 text-center">
                  <img src="{{ url('/images/pexels-helena-lopes-2253275.jpg' )}}" style="padding: 0; object-fit: cover; border-radius: 100%; height: 250px; width: 250px;">
                </div>
              </div>

              <div class="row mt-3 justify-content-center">
                <div class="col-8 text-start">
                  <i class="mdi mdi-format-quote-open mdi-48px"></i>
                </div>

                <div class="col-12 col-md-8 text-center px-5">
                  <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam ligula eu tellus cursus, id aliquam purus accumsan. Maecenas finibus finibus augue, nec rutrum nibh euismod eget. Maecenas nibh mi, accumsan vel cursus quis, commodo at justo. Curabitur consectetur risus eget erat porttitor laoreet. Aliquam pretium nulla nisl, non lobortis ligula pretium non.</i>
                </div>

                <div class="col-8 text-end">
                  <i class="mdi mdi-format-quote-close mdi-48px"></i>
                </div>

                <div class="col-12 text-center text-secondary">
                  <i>-Somebody Famous</i>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
    {{-- <<< MAIN --}}


    @include('pages/users/template/section/footer')

  </div>
</body>

{{-- SCRIPTS --}}
@include('pages/users/template/section/scripts')

<script type="text/javascript">
  $(document).ready(function() {

  });
</script>

</html>
