@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="flex-center position-ref full-height">

        <div class="top-right links">
            <a href="">Login</a>
            <a href="">Register</a>
        </div>

        <div class="content">
            <div class="title m-b-md">
                Speleo Expedition Register
            </div>

            <div class="links">
                <a href="">Maps</a>
                <a href="">Expeditions</a>
                <a href="">Teams</a>
                <a href="">Reports</a>
                <a href="">Equipment</a>
            </div>
        </div>
    </div>
@endsection