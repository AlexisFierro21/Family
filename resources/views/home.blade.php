
@extends('layouts.app')
@section('nav')
@include('partials.nav',['role_id'=>$role_id])
@endsection

@section('content')
<div class="container contaner">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <select>
                        <option></option>
                    @foreach ($roles as $role)
                    
                        <option value="{{$role->id}}">{{$role->name}}</option>
                    
                    @endforeach
                    </select>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
