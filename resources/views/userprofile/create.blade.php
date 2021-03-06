@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body row">
                    <div class="col-4 bg-info">
                        <h2 class="h-6 text-center my-4">MENU</h2>
                        <ul class="list-group mb-5">
                            <li class="list-group-item"><a href="/home">Dashboard</a></li>
                            <li class="list-group-item"><a href="/profile">Profile</a></li>
                            <li class="list-group-item"><a href="#">Settings</a></li>
                        </ul>
                    </div>
                    <div class="col-8">
                        <h3>Profile Image Upload form</h3>
                        <user-profile></user-profile>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
