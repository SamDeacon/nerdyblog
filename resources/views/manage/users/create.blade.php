@extends('layouts.manage')
@section('content')
<div class="flex-container">
  <div class="columns m-t-10">
    <div class="column">
      <h1 class="title">Create New User</h1>
    </div>
  </div>
  <div class="columns m-t-10">
    <div class="column">
      <form class="" action="{{route('users.store')}}" method="post">
        {{ csrf_field() }}
        <div class="field">
          <label for="name" class="label">Name</label>
          <p class="control">
            <input type="text" class="input" name="name" id="name">
          </p>
        </div>
        <div class="field">
          <label for="email" class="label">Email</label>
          <p class="control">
            <input type="text" class="input" name="email" id="email">
          </p>
        </div>
        <div class="field">
          <label for="password" class="label">Password</label>
          <p class="control">
            <input type="text" class="input" name="password" id="password" v-if="!auto_password" placeholder="Manually give a password to this user">
            <b-checkbox class="m-t-15" name="auto_generate" :checked="true" v-model="auto_password">Auto Generate Password</b-checkbox>
          </p>
        </div>
        <button class="button is-success">Create User</button>
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
      auto_password: true,
      rolesSelected: [{!! old('roles') ? old('roles') : '' !!}]
    }
  });
</script>
@endsection
