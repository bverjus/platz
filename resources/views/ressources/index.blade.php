@extends('templates.index')

@section('css', 'css/style.css')

@section('content')
<!-- NAVBAR -->

@include('templates.partials._nav')

<div id="wrapper-container">
    <div class="container object">
      <div id="main-container-image">
        <a
          href="{{route('ressources.create')}}"
          class="btn btn-primary"
          style="display: inline-block; margin: 1em"
          >Add a resource</a
        >
        <section class="work">
        @include('ressources.list')
        </section>

      </div>
    </div>

    <div id="wrapper-oldnew">
      <div class="oldnew">
        <div class="wrapper-oldnew-prev">
          <div id="oldnew-prev"></div>
        </div>
      </div>
    </div>

    <div id="wrapper-thank">
      <div class="thank">
        <div class="thank-text">
          pl<span style="letter-spacing: -5px">a</span>tz
        </div>
      </div>
    </div>

    @include('templates.partials._footer')
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/older-ressources.js"></script>
    @stop