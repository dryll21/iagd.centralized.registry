{{-- HEADER CONTAINS CSS LINKS --}}
@include('pages/users/template/section/header')

<body>

  <div class="wrapper">

    @include('pages/users/template/section/navbar')

    {{-- >>> MAIN --}}
    <div class="main" style="background-color: #161815; padding-bottom: 12rem;">
      <div class="main-content h-100">
        <div class="container-fluid" style="padding-top: 5rem;">

          <div class="row justify-content-center">
            <div class="col-12 col-md-7">
              <div class="row">
                <div class="col">
                  <input id="inp_search" class="form-control" type="text" placeholder="Search">

                  <div class="bg-light mt-3 p-3" style="border-radius: 0.25rem;">

                    <div class="row row-cols-6 text-center mx-4" style="border-bottom: 1px solid lightgray;">
                      <div class="col">
                        <label>Pets</label>
                      </div>
                      <div class="col">
                        <label>Breed</label>
                      </div>
                      <div class="col">
                        <label>Gender</label>
                      </div>
                      <div class="col">
                        <label>Category</label>
                      </div>
                      <div class="col">
                        <label>Location</label>
                      </div>
                      <div class="col">
                        <label>Price Range</label>
                      </div>
                    </div>

                    <div class="row px-5 pb-1 pt-4">
                      <div class="col">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            All
                          </label>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Dogs
                          </label>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Rabbits
                          </label>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Cats
                          </label>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Birds
                          </label>
                        </div>
                      </div>
                    </div>

                  </div>

                </div>
                <div class="col-auto">
                   <button class="btn" style="background-color: #09392b; color: #fff;">Filter <i class="mdi mdi-filter-variant"></i></button>
                </div>
                <div class="col-auto ps-0">
                   <button class="btn" style="background-color: #09392b; color: #fff;">Sort By <i class="mdi mdi-swap-vertical"></i></button>
                </div>
              </div>
            </div>
          </div>

          <section>
            <div class="row p-5">
              <div class="col-12 col-md-6 col-lg-4 ">
                  

                  @foreach($data as $item)
                  <div class="mx-5">
                    <img src="{{ $item->ImageURL}}" class="img-fluid " alt="...">
                  </div>
                  @endforeach
                  
                
              </div>
              <div class="col-12 col-md-6 col-lg-8">
                <div class="row">
                  
                  {{-- overview --}}
                  <div class="col-12">
                      <fieldset style="background:#E9EAEB;" class="mb-5 border rounded-3 p-3">
                        <legend style="background:#09392b;" class="text-white float-none w-auto border-none rounded-3 px-3">Overview</legend>
                        <div class="row px-3 p-lg-5">
                          @foreach($data as $item)
                            <div class="col-12 col-xl-6">
                              <div class="row my-3">
                                <div class="col-4 col-xl-6">
                                  <div class="d-flex gap-2 align-items-center">
                                    <div class="d-flex align-items-center" style="font-size: 1.15rem"><span class="iconify" data-icon="fa-solid:paw" style="color: #1e2530;"></span></div>
                                    <div style="font-size: 1.15rem; font-weight: 600;">Pet Name:</div>
                                  </div>
                                </div>
                                <div class="col-8 col-xl-6">
                                  @if($item->animal_name !='')
                                    {{ $item->animal_name}}
                                  @else
                                    <div>no data found</div>
                                  @endif
                                </div>
                              </div>
                              <div class="row my-3">
                                <div class="col-4 col-xl-6">
                                  <div class="d-flex gap-2 align-items-center">
                                    <div class="d-flex align-items-center" style="font-size: 1.15rem"><span class="iconify" data-icon="fluent:animal-dog-16-filled" style="color: #1e2530;"></span></div>
                                    <div style="font-size: 1.15rem; font-weight: 600;">Breed:</div>
                                  </div>
                                </div>
                                <div class="col-8 col-xl-6">
                                  @if($item->breed !='')
                                    {{ $item->breed}}
                                  @else
                                    <div>no data found</div>
                                  @endif
                                </div>
                              </div>
                              <div class="row my-3">
                                <div class="col-4 col-xl-6">
                                  <div class="d-flex gap-2 align-items-center">
                                    <div class="d-flex align-items-center" style="font-size: 1.15rem"><span class="iconify" data-icon="mdi:account" style="color: #1e2530;"></span></div>
                                    <div style="font-size: 1.15rem; font-weight: 600;">Owner:</div>
                                  </div>
                                </div>
                                <div class="col-8 col-xl-6">
                                  @if ($item->owner !='')
                                    {{ $item->owner}}
                                  @else
                                    <div>no data found</div>
                                  @endif
                                </div>
                              </div>
                              <div class="row my-3">
                                <div class="col-4 col-xl-6">
                                  <div class="d-flex gap-2 align-items-center">
                                    <div class="d-flex align-items-center" style="font-size: 1.15rem"><span class="iconify" data-icon="mdi:account" style="color: #1e2530;"></span></div>
                                    <div style="font-size: 1.15rem; font-weight: 600;">Co-Owner:</div>
                                  </div>
                                </div>
                                <div class="col-8 col-xl-6">
                                  @if ($item->coowner !='')
                                    {{ $item->coowner}}
                                  @else
                                    <div>no data found</div>
                                  @endif
                                </div>
                              </div>
                            </div>
                            
                            <div class="col-12 col-xl-6">
                              <div class="row my-3">
                                <div class="col-4 col-xl-6">
                                  <div class="d-flex gap-2 align-items-center">
                                    <div class="d-flex align-items-center" style="font-size: 1.15rem"><span class="iconify" data-icon="fa6-solid:location-dot" style="color: #1e2530;"></span></div>
                                    <div style="font-size: 1.15rem; font-weight: 600;">Location:</div>
                                  </div>
                                </div>
                                <div class="col-8 col-xl-6">
                                  @if ($item->locationdetails !='')
                                    {{ $item->locationdetails}}
                                  @else
                                    <div>no data found</div>
                                  @endif
                                </div>
                              </div>
                              <div class="row my-3">
                                <div class="col-4 col-xl-6">
                                  <div class="d-flex gap-2 align-items-center">
                                    <div class="d-flex align-items-center" style="font-size: 1.15rem"><span class="iconify" data-icon="ph:gender-intersex-fill" style="color: #1e2530;"></span></div>
                                    <div style="font-size: 1.15rem; font-weight: 600;">Gender:</div>
                                  </div>
                                </div>
                                <div class="col-8 col-xl-6">
                                  @if ($item->gender !='')
                                    {{ $item->gender}}
                                  @else
                                    <div>no data found</div>
                                  @endif
                                </div>
                              </div>
                              
                            </div>
                            
                          @endforeach
                        </div>
                      </fieldset>
                  </div>
                  {{-- overview end --}}
                  {{-- General Information --}}
                  <div class="col-12">
                      <fieldset style="background:#E9EAEB;" class="mb-5 border rounded-3 p-3">
                        <legend style="background:#09392b;" class="text-white float-none w-auto border-none rounded-3 px-3">General Information</legend>
                        <div class="row px-3 p-lg-5">
                          @foreach($data as $item)
                            <div class="col-12 col-xl-6">
                              <div class="row my-3">
                                <div class="col-4 col-xl-6">
                                  <div class="d-flex gap-2 align-items-center">
                                    <div class="d-flex align-items-center" style="font-size: 1.15rem"><span class="iconify" data-icon="fa-solid:paw" style="color: #1e2530;"></span></div>
                                    <div style="font-size: 1.15rem; font-weight: 600;">Markings:</div>
                                  </div>
                                </div>
                                <div class="col-8 col-xl-6">
                                  @if($item->markings !='')
                                    {{ $item->markings}}
                                  @else
                                    <div>no data found</div>
                                  @endif
                                </div>
                              </div>
                              <div class="row my-3">
                                <div class="col-4 col-xl-6">
                                  <div class="d-flex gap-2 align-items-center">
                                    <div class="d-flex align-items-center" style="font-size: 1.15rem"><span class="iconify" data-icon="fluent:animal-dog-16-filled" style="color: #1e2530;"></span></div>
                                    <div style="font-size: 1.15rem; font-weight: 600;">Date of birth:</div>
                                  </div>
                                </div>
                                <div class="col-8 col-xl-6">
                                  @if($item->dateofbirth !='')
                                    {{ $item->dateofbirth}}
                                  @else
                                    <div>no data found</div>
                                  @endif
                                </div>
                              </div>
                              <div class="row my-3">
                                <div class="col-4 col-xl-6">
                                  <div class="d-flex gap-2 align-items-center">
                                    <div class="d-flex align-items-center" style="font-size: 1.15rem"><span class="iconify" data-icon="mdi:account" style="color: #1e2530;"></span></div>
                                    <div style="font-size: 1.15rem; font-weight: 600;">Color/s:</div>
                                  </div>
                                </div>
                                <div class="col-8 col-xl-6">
                                  @if ($item->colors !='')
                                    {{ $item->colors}}
                                  @else
                                    <div>no data found</div>
                                  @endif
                                </div>
                              </div>
                              <div class="row my-3">
                                <div class="col-4 col-xl-6">
                                  <div class="d-flex gap-2 align-items-center">
                                    <div class="d-flex align-items-center" style="font-size: 1.15rem"><span class="iconify" data-icon="mdi:account" style="color: #1e2530;"></span></div>
                                    <div style="font-size: 1.15rem; font-weight: 600;">Kennel Name:</div>
                                  </div>
                                </div>
                                <div class="col-8 col-xl-6">
                                  @if ($item->Breeding_Institutions !='')
                                    {{ $item->Breeding_Institutions}}
                                  @else
                                    <div>no data found</div>
                                  @endif
                                </div>
                              </div>
                              <div class="row my-3">
                                <div class="col-4 col-xl-6">
                                  <div class="d-flex gap-2 align-items-center">
                                    <div class="d-flex align-items-center" style="font-size: 1.15rem"><span class="iconify" data-icon="mdi:account" style="color: #1e2530;"></span></div>
                                    <div style="font-size: 1.15rem; font-weight: 600;">Eye Color:</div>
                                  </div>
                                </div>
                                <div class="col-8 col-xl-6">
                                  @if ($item->eyecolor !='')
                                    {{ $item->eyecolor}}
                                  @else
                                    <div>no data found</div>
                                  @endif
                                </div>
                              </div>
                            </div>
                            
                            <div class="col-12 col-xl-6">
                              <div class="row my-3">
                                <div class="col-4 col-xl-6">
                                  <div class="d-flex gap-2 align-items-center">
                                    <div class="d-flex align-items-center" style="font-size: 1.15rem"><span class="iconify" data-icon="fa6-solid:location-dot" style="color: #1e2530;"></span></div>
                                    <div style="font-size: 1.15rem; font-weight: 600;">Height:</div>
                                  </div>
                                </div>
                                <div class="col-8 col-xl-6">
                                  @if ($item->height !='')
                                    {{ $item->height}}
                                  @else
                                    <div>no data found</div>
                                  @endif
                                </div>
                              </div>
                              <div class="row my-3">
                                <div class="col-4 col-xl-6">
                                  <div class="d-flex gap-2 align-items-center">
                                    <div class="d-flex align-items-center" style="font-size: 1.15rem"><span class="iconify" data-icon="ph:gender-intersex-fill" style="color: #1e2530;"></span></div>
                                    <div style="font-size: 1.15rem; font-weight: 600;">Weight:</div>
                                  </div>
                                </div>
                                <div class="col-8 col-xl-6">
                                  @if ($item->weight !='')
                                    {{ $item->weight}}
                                  @else
                                    <div>no data found</div>
                                  @endif
                                </div>
                              </div>
                              <div class="row my-3">
                                <div class="col-4 col-xl-6">
                                  <div class="d-flex gap-2 align-items-center">
                                    <div class="d-flex align-items-center" style="font-size: 1.15rem"><span class="iconify" data-icon="ph:gender-intersex-fill" style="color: #1e2530;"></span></div>
                                    <div style="font-size: 1.15rem; font-weight: 600;">Name of Sire:</div>
                                  </div>
                                </div>
                                <div class="col-8 col-xl-6">
                                  @if ($item->nameofsire !='')
                                    {{ $item->nameofsire}}
                                  @else
                                    <div>no data found</div>
                                  @endif
                                </div>
                              </div>
                              <div class="row my-3">
                                <div class="col-4 col-xl-6">
                                  <div class="d-flex gap-2 align-items-center">
                                    <div class="d-flex align-items-center" style="font-size: 1.15rem"><span class="iconify" data-icon="ph:gender-intersex-fill" style="color: #1e2530;"></span></div>
                                    <div style="font-size: 1.15rem; font-weight: 600;">Name of Dam:</div>
                                  </div>
                                </div>
                                <div class="col-8 col-xl-6">
                                  @if ($item->nameofdam !='')
                                    {{ $item->nameofdam}}
                                  @else
                                    <div>no data found</div>
                                  @endif
                                </div>
                              </div>
                              
                            </div>
                            
                          @endforeach
                        </div>
                      </fieldset>
                  </div>
                  {{-- General Information end--}}
                  <div class="col-12">
                      <fieldset style="background:#E9EAEB;" class="mb-5 border rounded-3 p-3">
                        <legend style="background:#09392b;" class="text-white float-none w-auto border-none rounded-3 px-3">Certifications</legend>
                        <div class="row px-3 p-lg-5">
                          @foreach($data as $item)
                            <div class="col-12 col-xl-6">
                              <div class="row my-3">
                                <div class="col-4 col-xl-6">
                                  <div class="d-flex gap-2 align-items-center">
                                    <div class="d-flex align-items-center" style="font-size: 1.15rem"><span class="iconify" data-icon="fa-solid:paw" style="color: #1e2530;"></span></div>
                                    <div style="font-size: 1.15rem; font-weight: 600;">Transfer of Ownership Number:</div>
                                  </div>
                                </div>
                                <div class="col-8 col-xl-6">
                                  @if($item->animal_name !='')
                                    {{ $item->animal_name}}
                                  @else
                                    <div>no data found</div>
                                  @endif
                                </div>
                              </div>
                              <div class="row my-3">
                                <div class="col-4 col-xl-6">
                                  <div class="d-flex gap-2 align-items-center">
                                    <div class="d-flex align-items-center" style="font-size: 1.15rem"><span class="iconify" data-icon="fluent:animal-dog-16-filled" style="color: #1e2530;"></span></div>
                                    <div style="font-size: 1.15rem; font-weight: 600;">Transfer of Ownership Certification:</div>
                                  </div>
                                </div>
                                <div class="col-8 col-xl-6">
                                  @if($item->breed !='')
                                    {{ $item->breed}}
                                  @else
                                    <div>no data found</div>
                                  @endif
                                </div>
                              </div>
                              <div class="row my-3">
                                <div class="col-4 col-xl-6">
                                  <div class="d-flex gap-2 align-items-center">
                                    <div class="d-flex align-items-center" style="font-size: 1.15rem"><span class="iconify" data-icon="mdi:account" style="color: #1e2530;"></span></div>
                                    <div style="font-size: 1.15rem; font-weight: 600;">Transfer Certification:</div>
                                  </div>
                                </div>
                                <div class="col-8 col-xl-6">
                                  @if ($item->owner !='')
                                    {{ $item->owner}}
                                  @else
                                    <div>no data found</div>
                                  @endif
                                </div>
                              </div>
                              <div class="row my-3">
                                <div class="col-4 col-xl-6">
                                  <div class="d-flex gap-2 align-items-center">
                                    <div class="d-flex align-items-center" style="font-size: 1.15rem"><span class="iconify" data-icon="mdi:account" style="color: #1e2530;"></span></div>
                                    <div style="font-size: 1.15rem; font-weight: 600;">Certificate Pedigree:</div>
                                  </div>
                                </div>
                                <div class="col-8 col-xl-6">
                                  @if ($item->coowner !='')
                                    {{ $item->coowner}}
                                  @else
                                    <div>no data found</div>
                                  @endif
                                </div>
                              </div>
                            </div>
                            
                            
                          @endforeach
                        </div>
                      </fieldset>
                  </div>
                  
                </div>
              </div>
            </div>
          </section>

        </div>
      </div>
    </div>
    {{-- <<< MAIN --}}

    @include('pages/users/template/section/footer')

  </div>
</body>

{{-- SCRIPTS --}}
@include('pages/users/template/section/scripts')



</html>
