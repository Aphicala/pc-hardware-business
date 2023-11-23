@extends('layouts.app')

@section('content')

    {{-- New Section || Remake --}}
    <div class="container-fluid text-light" style="padding-top: 4rem ">
        <div class="row">
            <div class="col-4">
                <img src="{{ asset('assets/img/cool.png') }}" class=" img-fluid rounded-circle" alt="" style="padding-bottom: 1rem">
                @guest
                    @if (Route::has('login'))
                        <p style="font-size: 24px">Guest Account</p>
                    @endif
                    @if (Route::has('Register'))
                        <p style="font-size: 24px">Guest Account</p>
                    @endif
                @else
                    <p style="font-size: 24px">{{ Auth::user()->name }}</p>
                @endguest
                <div style="padding: 1 0">
                    <button>Edit Profile</button>
                </div>
                <div>
                    <form action="">
                        {{-- Form content here --}}
                    </form>
                </div>
            </div>
            <div class="col-8"></div>
        </div>
    </div>


    <div class="container-fluid text-light" style="padding: 4rem 2rem 2rem; background-color: rgba(0, 0, 0, 0.880) ">
        <div class="row">
            <div class="col-3">
                <img src="{{ asset('assets/img/cool.png') }}" class=" img-fluid rounded-circle" alt="">
                @guest
                    @if (Route::has('login'))
                        <p>Guest Account</p>
                    @endif
                    @if (Route::has('Register'))
                        <p>Guest Account</p>
                    @endif
                @else
                    <p>{{ Auth::user()->name }}</p>
                @endguest
                <div class="d-grid">
                    <button type="button" class="btn btn-outline-primary">Edit Profile</button>
                </div>
                <p style="padding-top: 1rem">Joined {{ Date('l F Y') }}</p>   
            </div>
            <div class="col-9">
                <div class="container-fluid" style="background-color: rgb(223, 194, 120)">
                    <div class="input-group">
                        <textarea name="bio" id="bio" class="form-control" placeholder="If you want to make a post to showcase your builds, do it here. Textarea is just placeholder"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-11">
                            <i class="bi bi-pin-map"></i>
                            <i class="bi bi-camera"></i>
                            <i class="bi bi-camera-reels"></i>
                            <i class="bi bi-mic"></i>
                        </div>
                        <div class="col-1">
                            <button type="submit" class="btn btn-primary">Post</button>
                        </div>
                    </div>
                    <div class="container-fluid" style="background-color: slateblue">
                        <div class="row">
                            <div class="col-12">
                                <h2>Bio Graph</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>Name: </p>
                                <p>City: </p>
                                <p>Occupation: </p>
                                <p>Mobile: </p>
                            </div>
                            <div class="col-6">
                                <p>Birthday: </p>
                                <p>Email: </p>
                                <p>Education: </p>
                                <p>WA no.: </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h5>x contributions in y time</h5>
                        </div>
                        <div class="col-6">
                            <p>Dropdown Placeholder</p>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row border border-dark rounded-top">
                            {{-- const cal = new CalHeatmap();
                            cal.paint({});
                            render(<div id="cal-heatmap"></div>); --}}
                            This here is supposed to be a github contribution heatmap clone
                            <p>I tried putting a cal-heatmap plugin using javascript, but nothing's working</p>
                        </div>
                        <div class="row border border-dark rounded-bottom border-top-0">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum malesuada nunc eget dignissim. Sed iaculis sollicitudin leo id ultricies. Proin interdum justo tincidunt arcu pulvinar, ac luctus dolor venenatis. Sed imperdiet ante sed quam tristique bibendum. Proin pellentesque vestibulum ante sed sodales. Vivamus sed scelerisque nisl, ut mollis tellus. Vestibulum ut vehicula mi. Vestibulum facilisis magna eu felis facilisis pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <h1>Profile</h1>
    @foreach ($users as $user)
        <h2>{{ $user['name'] }}</h2>
        <h3>{{ $user['age'] }}</h3>
        @if ($user['age'] < 18)
            <p>User is underage</p>
        @endif
        <hr>
    @endforeach

    @copyright {{ date('l jS \of F Y h:i:s A') }}
    <hr>
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('assets/img/cool.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
@endsection
