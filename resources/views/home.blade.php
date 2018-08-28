@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card m-t-50">
                <div class="card-header">
                  <p class="card-header-title">
                      Dashboard
                    </p>
                    <a href="#" class="card-header-icon" aria-label="more options">
                      <span class="icon"><i class="fa fa-angle-down"></i></span>
                    </a>
                </div>
                <div class="card-content">
                  <div class="content">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! <strong><a href="{{route('manage.dashboard')}}">Take me to the dashboard!</a></strong> 
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
