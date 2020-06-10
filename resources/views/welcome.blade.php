@extends('layouts.main')

@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <img src="{{asset('img/logo-mattintosh.png')}}" alt="logo mattintosh">
                </div>

                <div class="links">
                    <a href="/shop">Shop</a>
                    <a href="/dashboard">Dashboard</a>
                </div>
            </div>
        </div>
@endsection
