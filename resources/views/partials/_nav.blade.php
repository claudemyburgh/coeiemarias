<nav class="nav nav--fixed">
    <div class="nav__wrapper">
        <div class="nav__brand">
            <a href="{{ url('/') }}">{{ config('app.name') }} </a>
            <span class="nav__brand__slogan">Inhouse Finishing</span>
        </div>
        <div class="nav__navicon"></div>
        <div class="nav__links__wrapper nav__links--right">
            <ul class="nav__links">
                <li class="nav__links__item {{ set_active('/') }}"><a href="{{ url('/') }}">{{ __('Welcome') }}</a></li>
                <li class="nav__links__item {{ set_active('services') }}"><a href="{{ route('services') }}">{{ __('Services') }}</a></li>
                <li class="nav__links__item {{ set_active('gallery') }}"><a href="{{ route('gallery') }}">{{ __('Gallery') }}</a></li>
                {{-- <li class="nav__links__item {{ set_active('about') }}"><a href="{{ route('about') }}">{{ __('About Us') }}</a></li> --}}
                <li class="nav__links__item {{ set_active('contact') }}"><a href="{{ route('contact') }}">{{ __('Contact Us') }}</a></li>
            </ul>
        </div>
    </div>
</nav>
