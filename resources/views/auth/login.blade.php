@extends('layouts.app')

@section('content')
  <div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
      <div class="card">
        <div class="card-content">
          <form class="" action="{{route('login')}}" method="post" role="form">
            {{csrf_field()}}
            <h1 class="title">Log in</h1>
            <div class="field">
              <label for="email" class="label">Email Address</label>
              <p class="control">
                <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="email" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}">
              </p>
              @if ($errors->has('email'))
                <p class="help is-danger">{{$errors->first('email')}}</p>
              @endif
            </div>
            <div class="field">
              <label for="password" class="label">Password</label>
              <p class="control">
                <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password">
              </p>
              @if ($errors->has('password'))
                <p class="help is-danger">{{$errors->first('password')}}</p>
              @endif
            </div>
            <b-checkbox name="remember" class="m-t-20">Remember Me</b-checkbox>
            <button class="button is-primary is-outlined is-fullwidth m-t-30">Log in</button>
            <h5 class="has-text-centered m-t-10"><a href="{{route('password.request')}}" class="is-muted">Forgotten Password? click here to reset.</a></h5>

          </form>
        </div><!-- end of .card-content -->
      </div><!-- end of .card -->
      <h5 class="has-text-centered m-t-5"><a href="{{route('register')}}">Click here to creat an account.</a></h5>
    </div>
  </div>
@endsection
@section('scripts')
<script>
var app = new Vue({
     el: '#app',
     data: {
     }
});
</script>
@endsection
