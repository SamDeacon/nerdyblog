@extends('layouts.manage')
@section('content')
<div class="flex-container">
  <div class="columns m-t-10">
    <div class="column">
      <h1 class="title">Edit User</h1>
    </div>
  </div>
  <div class="columns m-t-10">
    <div class="column">
      <form class="" action="{{route('users.update', $user->id)}}" method="post">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <div class="field">
          <label for="name" class="label">Name</label>
          <p class="control">
            <input type="text" class="input" name="name" id="name" value="{{$user->name}}">
          </p>
        </div>
        <div class="field">
          <label for="email" class="label">Email</label>
          <p class="control">
            <input type="text" class="input" name="email" id="email" value="{{$user->email}}">
          </p>
        </div>
        <div class="field">
          <label for="password" class="label">Password</label>
          <div class="control">
            <label class="radio">
              <input onclick="document.getElementById('password').disabled = true;" type="radio" name="password_options" value="keep" checked>&nbsp;Keep the same password<br>
            </label><br/>
            <label class="radio">
              <input onclick="document.getElementById('password').disabled = true;" type="radio" name="password_options" value="auto">&nbsp;Auto Generate Random Password<br>
            </label><br/>
            <label class="radio">
            <input onclick="document.getElementById('password').disabled = false;" type="radio" name="password_options" value="manual">&nbsp;Override Manual Password
              <p class="control">
                <input type="text" class="input m-t-5 m-b-10" name="password" id="password" v-if="password_options == 'manual'" placeholder="Manually give a password to this user" disabled="disabled">
              </p>
            </label>
          </div>
          </div>
        <button class="button is-primary">Update User</button>
      </form>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
  var app = new Vue({
    el: '#app',
    data: {
      password_options: 'manual'
    }
  });
</script>
@endsection
