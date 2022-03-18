@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Profile') }}</div>
              
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Photo Selfie : <img src="{{ url('storage/photo_selfie/'. Auth::user()->id .'/'. Auth::user()->photo_selfie) }}" alt="" title="" /></p>
                    <p>Name : {{ Auth::user()->name }}</p>
                    <p>Email : {{ Auth::user()->email }}</p>

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
