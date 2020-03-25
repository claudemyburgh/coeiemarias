@extends('layouts.app')

@section('title', 'Contact page')

@section('content')
<div class="wrapper margin">

    <div class="row">
        <div class="md-col-12">
            <h1>Contact Us</h1>

        </div>
    </div>
    <div class="row">
        <div class="md-col-8">
            @if (session('success'))
                <div class="form__group">
                    <div class="notify notify--success" role="alert">
                        {{ session('success') }}
                    </div>
                </div>
            @endif
            <div class="panel panel--default">
                <div class="panel__body">
                    <form method="post" action="{{ route('send') }}">
                        @csrf
                        <div class="form__group @error('name') has__danger @enderror">
                            <label for="name" class="form__label font--bold">Full name</label>
                            <input type="text" class="form__item" id="name" name="name"  value="{{ old('name') }}"></input>
                            @error('name')
                                <small class="form__helper"> {{ $errors->first('name') }} </small>
                            @enderror
                        </div>

                        <div class="form__group @error('email') has__danger @enderror">
                            <label for="email" class="form__label font--bold">Email</label>
                            <input type="text" class="form__item" id="email" name="email"  value="{{ old('email') }}"></input>
                            @error('email')
                                <small class="form__helper"> {{ $errors->first('email') }} </small>
                            @enderror
                        </div>

                        <div class="form__group @error('subject') has__danger @enderror">
                            <label for="subject" class="form__label font--bold">Subject</label>
                            <input type="text" class="form__item" id="subject" name="subject"  value="{{ old('subject') }}"></input>
                            @error('subject')
                                <small class="form__helper"> {{ $errors->first('subject') }} </small>
                            @enderror
                        </div>

                        <div class="form__group @error('phone') has__danger @enderror">
                            <label for="phone" class="form__label font--bold">Phone Number</label>
                            <input type="text" class="form__item" id="phone" name="phone" value="{{ old('phone') }}"></input>
                            @error('phone')
                                <small class="form__helper"> {{ $errors->first('phone') }} </small>
                            @enderror
                        </div>

                        <div class="form__group @error('message') has__danger @enderror">
                            <label for="message" class="form__label font--bold">Message</label>
                            <textarea class="form__item" id="message" name="message" rows="8"></textarea>
                            @error('message')
                                <small class="form__helper"> {{ $errors->first('message') }} </small>
                            @enderror
                        </div>

                        <div class="form__group">
                            <button class="btn btn--primary-gradient">SEND</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="md-col-4 sticky">
            <div class="panel panel--default">
                <div class="panel__header background--dark text--white">Coenie Marais</div>
            </div>
            <ul class="list">
                <li class="list__item"><a target="_blank" href="mailto:coenie@coeniemarais.co.za"><span>&#9993;</span> coenie@coeniemarais.co.za</a></li>
                <li class="list__item"><a target="_blank" href="tel:0822964611"><span>&phone;</span> 082 296 4611</a></li>
            </ul>
            <div class="panel panel--default">
                <div class="panel__header  background--dark text--white">Office Info</div>
            </div>
            <ul class="list">
                <li class="list__item"><a target="_blank" href="mailto:info@coeniemarais.co.za"><span>&#9993; </span>info@coeniemarais.co.za</a></li>
            </ul>

        </div>
    </div>

</div>

@endsection

@section('list')
    <script>
        let list = [
            {"parent": "#image-3", "first" : "deskandwall-2.jpg", "second": "deskandwall-1.jpg", "map": "map-wood-2.jpg"},
        ]
    </script>

@endsection
