@extends('layouts.manage')
@section('content')
<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">{{$role->name}}</h1>
        </div> <!-- end of column -->
        <div class="column">
            <a href="   {{route('roles.edit', $role->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-edit m-r-10"></i> Edit Role</a>
        </div>
    </div>
    <hr class="m-t-0">
    <div class="columns">
        <div class="column">
            <div class="box">
                <article class="media">
                    <div class="media-content">
                        <div class="content">
                          @if(Session::has('success'))
                                <article class="message is-success">
                                    <div class="message-header">
                                        <p>{{ Session::get('success') }}</p>
                                    </div>
                                </article>
                              @endif
                            <h1 class="title">{{$role->display_name}}</h1>
                            <h4 class="subtitle"><em>{{$role->name}}</em></h4>
                            <p>{{$role->description}}</p>
                            <hr>
                            <h2>Permissions</h2>
                            <ul>
                                @foreach  ($role->permissions as $key => $permission)
                                <li>{{$permission->display_name}} <em class="m-l-15">{{$permission->description}}</em></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
@endsection
