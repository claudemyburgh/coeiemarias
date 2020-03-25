@extends('layouts.app')

@section('title', 'About page')

@section('content')
<div class="wrapper">
    <div class="row margin trigger">
        <div class="md-col-6">
          <h1 class="heading trigger--element" data-text="Gallery">Gallery</h1>

            <p class="lead">Browse through our stack of project images and see what we can do for your home and business.</p>
        </div>
    </div>
    <div class="row margin">
        <div class="md-col-12 md-offset-0 ">
            @foreach($galleries as $gallery)

                @if ($gallery->media->count())
                <div class="row margin trigger">

                    <div class="md-col-6 @if($loop->odd) md-float-right @endif ">
                          <h1 class="heading trigger--element  @if($loop->odd) md-float-right @endif " data-text="{{ $gallery->name }}">{{ $gallery->name }}</h1>
                          <br>
                          <br>
                          <div class="clearfix"></div>
                          <p class="lead">{{ $gallery->description }}</p>
                          <br>
                    </div>
                    <div class="md-col-6 gallery__perspective">
                        <div class="gallery__card trigger--element @if($loop->odd) gallery__card--alt @endif">
                            <img class="gallery__card__img"  src="{{ $gallery->image('card') }}">
                            <div class="gallery__card__footer">
                                {{ $gallery->name }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col margin trigger">
                        <!-- Slider main container -->
                        <div class="swiper-container trigger--element @if($loop->odd)  gallery--skew  @else gallery--skew-alt @endif">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->

                                @foreach($gallery->media as $image)
                                    <div class="swiper-slide">
                                        <div class="swiper-zoom-container" data-swiper-zoom="5">
                                            <a data-fslightbox="{{ $gallery->name }}" href="{{ $image->getFullUrl() }}">
                                                <img class="swiper-img" src="{{ $image->getFullUrl('thumbnail') }}">
                                            </a>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                            <!-- If we need scrollbar -->
                            {{-- <div class="swiper-scrollbar"></div> --}}
                        </div>

                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
@endsection
