@extends('layouts.manage')
@section('content')
<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">Create New Role</h1>
        </div>
    </div>
    <hr class="m-t-0">
    <div class="columns">
        <div class="column">
            <form action="{{route('roles.store')}}" method="POST">
                {{csrf_field()}}
                <div class="columns">
                    <div class="column">
                        <div class="box">
                            <article class="media">
                                <div class="media-content">
                                    <div class="content">
                                        <h2>Role Details: </h2>
                                        <div class="field">
                                            <p class="control">
                                                <label for="display_name" class="label">Name (Human Readable)</label>
                                                <input type="text" class="input" name="display_name" value="{{old('display_name')}}"  id="display_name" v-model="the_name" >
                                            </p>
                                        </div>
                                        <div class="field">
                                            <p class="control">
                                                <label for="name" class="label">Slug (Can not be edited)</label>
                                                <input type="text" class="input" name="name" value="{{old('name')}}" id="name">
                                                <label for=""><p class="faux-textbox">(Suggested): <em>@{{ the_name.split(" ").join("-").toLowerCase() }}</em></p></label>
                                            </p>
                                        </div>
                                        <div class="field">
                                            <p class="control">
                                                <label for="description" class="label">Description</label>
                                                <input type="text" class="input" name="description" value="{{old('display_name')}}" id="description">
                                            </p>
                                        </div>
                                        <input type="hidden" name="permissions" :value="permissionsSelected">
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <div class="box">
                            <article class="media">
                                <div class="media-content">
                                    <div class="content">
                                        <h2>Permissions: </h2>
                                        @foreach  ($permissions as $key => $permission)
                                        <div class="field">
                                            <b-checkbox  v-model="permissionsSelected" native-value="{{$permission->id}}">{{$permission->display_name}} (<em>{{$permission->description}}</em>)</b-checkbox>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <button class="button is-success">Create Role</button>
            </form>
        </div>
    </div>
</div> <!-- end of .flex-container -->
@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        the_name: '',
        permissionsSelected: [],
      }
    })
  </script>
@endsection
