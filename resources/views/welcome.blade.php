@extends('layouts.app')

@section('title', 'Home page')

@section('content')
@include('components._hero')
<section class="section trigger ">
    <div class="wrapper">
        <div class="row flex--row">
{{--             <div class="md-col-2 pinner">
                <div class="line-verticel">
                    <a href="#" class="line-verticel--social trigger--element"><i class="lunacon lunacon-facebook"></i></a>
                    <a href="#" class="line-verticel--social trigger--element"><i class="lunacon lunacon-facebook"></i></a>
                    <a href="#" class="line-verticel--social trigger--element"><i class="lunacon lunacon-facebook"></i></a>
                </div>
            </div> --}}
            <div class="md-col-10 md-offset-2">
                <div class="row">
                    <div class="md-col-12">
                        <h1 class="heading trigger--element" data-text="Welcome">Introducing Coenie Marais <br> <span class="tab"></span> Inhouse Finishing</h1>
                    </div>
                    <div class="md-col-10 ">
                        <p class="lead trigger--element leadline">For most people the biggest investment they will ever make is buying a home. But to make a home as you envisioned it in your dreams isn’t as easy as you might think.</p>
                        <p class="lead trigger--element leadline">That is why we here at Coenie Marais In House Finishing specializing in weaving dreams into reality.</p>
                        <p class="lead trigger--element leadline">From something as simple as a door, a cupboard, skirtings or that dreamy outdoor patio you were thinking about. Yes, all that you mind can conjure up, we can make it into reality with that extra wow factor included to make your home unique to you. All our work is fully guaranteed to give you that extra peace of mind.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="parallax trigger">
{{--     <h1 class="parallax--text trigger--element heading--small" data-text="Outdoors">Beautify <br> <span class="tab"></span> your homes backyard</h1> --}}
    <div id="image-1" class="parallax--image"></div>
</div>
<section class="section trigger">
    <div class="wrapper">
        <div class="row">
            <div class="md-col-10 md-offset-2">
                <h1 class="heading trigger--element" data-text="Store Fronts">Business, Offices and <br>  <span class="tab"></span> Store Fronts</h1>
            </div>
            <div class="md-col-8 md-offset-2">
                <p class="lead trigger--element leadline">Unlike other company’s out there we can accommodate you with a diverse variety of services. That basically makes us your one stop shop for all your home, business or office needs. This will help you to reduce to number of contractors on site that you need to hire and communicate with. While at the same time giving you a constant theme throughout your project and in turn also bring cost down.</p>
                <p class="lead trigger--element leadline">
                    See our Services page to learn more about what we can do for u or browse through our gallery to see our work for yourself.
                </p>
            </div>
        </div>
    </div>
</section>
<div class="parallax trigger">
    <div class="wrapper">
        <div class="row">
            <div class="md-col-6 md-offset-3">
                <h1 class="parallax--text trigger--element heading--small" data-text="Modern Design">Dare <br>  <span class="tab"></span>to be different</h1>
{{--                 <p class="lead parallax--text trigger--element leadline">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non ex autem magnam id officiis, iusto nesciunt nisi vero explicabo suscipit eaque illum impedit pariatur ut, consequatur excepturi voluptas in nam!</p> --}}
            </div>
        </div>
    </div>
    <div id="image-2" class="parallax--image"></div>
</div>

<section class="section trigger">
    <div class="wrapper">
        <div class="row">
            <div class="md-col-10 md-offset-2">
                <h1 class="heading trigger--element" data-text="Contact Us">Contact<br> <span class="tab"></span> Coenie Marais</h1>
            </div>
            <div class="md-col-8 md-offset-2">
                <p class="lead trigger--element leadline">
                    Feel free to contact us.
                </p>
                <p>
                    <a href="{{ route('contact') }}" class="cta--button trigger--element">CONTACT US</a>
                </p>
            </div>
        </div>
    </div>
</section>

@endsection


@section('list')
    <script>
        let list = [
            {"parent": "#parallax", "first" : "kithen.jpg", "second": "kithen-2.jpg", "map": "map-wood-1.jpg"},
            {"parent": "#image-1", "first" : "deskandwall-2.jpg", "second": "deskandwall-1.jpg", "map": "map-wood-2.jpg"},
            {"parent": "#image-2", "first" : "modern-house-1.jpg", "second": "modern-house-2.jpg", "map": "map-wood-1.jpg"},
            {"parent": "#image-3", "first" : "outback-1.jpg", "second": "outback-1.jpg", "map": "map-wood-2.jpg"},
        ]
    </script>

@endsection
