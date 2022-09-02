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


          <section class="p-5">
                <div id="pagingBox" class="row">

                  @foreach ($allanimal as $item)
                    <div class="col-12 col-md-3 px-4 text-center">
                      <a href="/pets-profile/{{ $item->iagd_no}}">  

                      
                        <div class="row py-3">
                        <img src="{{ $item->ImageURL}}" class="w-100 mx-auto" style="height: 300px;">
                         </div>
                     
                        <div class="row">
                            <div class="py-2 card" style="background: #09392b; color:#fff;" >
                                  <div><span class="iconify" data-icon="fa-solid:paw" style="color: white;"></span>{{ $item->animal_name}}</div>
                                  <div><span class="iconify" data-icon="bi:qr-code-scan" style="color: white;"></span>{{ $item->iagd_no}}</div>
                                  <div><span class="iconify" data-icon="file-icons:dna" style="color: white;"></span>{{ $item->breed}}</div>
                                  <div><span class="iconify" data-icon="uiw:date" style="color: white;"></span>{{ $item->dateofbirth}}</div>


                              </div>


                        </div>
                      </a>
                    </div>
                  @endforeach
                </div>
                {{-- <div id='page_navigation'></div> --}}
                {{ $allanimal->links('layouts.paginationlinks') }}
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
