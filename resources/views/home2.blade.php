@extends('layouts.app')

{{-- @section('navbar')
    @include('layouts\navbar')
    
@endsection --}}

@section('content')
    <div class="container-fluid" style="padding: 30px 0 0 0; margin-right: 0; margin-left: 0">
        <div class="card bg-dark text-white col-md-12" style="border-radius: 0px; margin: 0;">
            <img class="card-img" src="{{ asset('assets/img/computerbg.webp') }}" alt="Card image">
            <div class="card-img-overlay" style="background-color: rgba(0, 0, 0, 0.600)">
              <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="row ">
                            <h3>Shadow Wizard Money Gang</h3>
                            <h6>We love casting spells</h6>
                            <div class="d-grid">
                                <button type="button" class="btn-secondary">Click me</button>
                            </div>
                            
                        </div>
                        <div class="h-50">

                        </div>
                        <div class="row " style="">
                            <h3>Get Started With</h3>
                            <div class="d-grid">
                                <button type="button" class="btn-primary" style="">Get Ahead!</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-9">
                        <img src="{{ asset('assets/img/cool.png') }}" class="card-img-top" alt="...">
                    </div>
                </div>
                {{-- @for($i = 0; $i < 8; $i++)
                        <p>Test</p>
                @endfor --}}
              </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: rgba(0, 0, 0, 0.600)">
        <div class="row justify-content-center">
            <div class="col">
                <h4 style="text-align: end">What we do</h4>
                <h2 style="text-align: end">Providing tech enthusiasts and those curious to an environment where one can indulge their time fully immersed in assembling PC hardware. Our services currently range from PC building requests from clients and assigning it to any of our registered users, as well as a rental workshop venue where anyone can experiment and learn building their dream PC under the supervision of our entrusted experts and with the guarantee of all tools provided, courtesy by us.</h2>
            </div>
            <div class="col" style="padding-top: 2.4rem">
                <h3>Product design & Strategy</h3>
                <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. TBH idk what to write for a sentence but I just want to figure out how it would look like if its longer. Maybe I should copy paste lorem ipsum instead to be faster, but idk why at least for this sentence I want to write it out on my own. I think this took me like 20 seconds total? 1 2 3 4</p>
                <div class="row justify-content-start">
                    <div class="col-md-2">
                        <p>Tell me more</p>
                    </div>
                    <div class="col-md-1">
                        <i class="bi bi-github"></i>
                    </div>
                </div>
                <div class="row">
                    <hr>
                </div>
                <h3>Product design & Strategy</h3>
                <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. TBH idk what to write for a sentence but I just want to figure out how it would look like if its longer. Maybe I should copy paste lorem ipsum instead to be faster, but idk why at least for this sentence I want to write it out on my own. I think this took me like 20 seconds total? 1 2 3 4</p>
                <div class="row justify-content-start">
                    <div class="col-md-2">
                        <p>Show me how</p>
                    </div>
                    <div class="col-md-1">
                        <i class="bi bi-github"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <h2>News</h2>
        <div class="container">
            <div class="row">
                <div class="col-7">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ asset('assets/img/cool.png') }}" alt="..." style="width: 18rem">
                            </div>
                            <div class="col-9">
                                <div class="row">
                                    <h2>Article Title</h2>
                                </div>
                                <div class="row">
                                    <h5>Subtitle Subtitle Subtitle Subtitle</h5>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="col-5">
                    <div class="row">

                    </div>
                    @for ($i = 0; $i < 2; $i++)
                        <div class="container">
                            <div class="row">
                                <div class="col-8">
                                    <h2>Article Title</h2>
                                </div>
                                <div class="col-2">
                                    <h5>Writer</h5>
                                </div>
                                <div class="col-2">
                                    <h5>Date</h5>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc semper nunc quis massa consequat, non blandit lacus vestibulum. Aliquam rhoncus malesuada sem nec rhoncus. Etiam molestie mattis arcu at ullamcorper. Donec vitae imperdiet eros. Praesent egestas arcu ac tincidunt scelerisque. Aenean eu dapibus urna. Suspendisse placerat sagittis elit at sodales. Donec pulvinar tempus odio, id porttitor sapien faucibus nec.</p>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="background-color: cadetblue; padding: 20px 20px 20px 20px">
        <div class="row justify-content-start" style="background-color: brown; padding: 20px 20px 20px 20px">
            <div class="col-6" style="background-color: coral">
                <div class="col">
                    <h1>Home</h1>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/img/cool.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6" style="background-color: coral">
                <div class="row">
                    <h1>Home</h1>
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/img/cool.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

{{-- Documentation --}}

{{-- <h3 class="card-title" style="text-align: center; font-size: 66px">Welcome to Tech-Alchemy</h3>
              <p class="card-text" style="text-align: center">Shadow Wizard Money Gang, we love assembling parts!!</p>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. TBH idk what to write for a sentence but I just want to figure out how it would look like if its longer. Maybe I should copy paste lorem ipsum instead to be faster, but idk why at least for this sentence I want to write it out on my own. I think this took me like 20 seconds total? 1 2 3 4</p>
              <div class="container">
                @for($i = 0; $i < 2; $i++)
                        <div class="row">
                            @for($i = 0; $i < 8; $i++)
                            <div class="col">
                                <img src="{{ asset('assets/img/cool.png') }}" class="card-img-top" alt="..." style="width: 18rem">
                            </div>
                            @endfor
                        </div>
                @endfor
              <p class="card-text">Last updated 3 mins ago</p>
              @for($i = 0; $i < 1; $i++)
                        <div class="row">
                            @for($i = 0; $i < 4; $i++)
                            <div class="col">
                                <img src="{{ asset('assets/img/cool.png') }}" class="card-img-top" alt="..." style="width: 18rem">
                            </div>
                            @endfor
                        </div>
                @endfor
              </div> --}}