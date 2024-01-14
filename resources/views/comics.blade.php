@extends('layouts.app')

@section('content')
<div class="bottom-content">
<div class="container">
    <div class="content">
      <div class="_row">
        @foreach ($comics as $comic)
        <div class="_col">
          {{-- <AppCard :imageName="comic.thumb" :title="comic.series" /> --}}
          <div class="card">
            <img src="{{$comic['thumb']}}" alt="" />
            <h4 class="title">{{ $comic['series'] }}</h4>
          </div>
        </div>
        @endforeach
      </div>
      <div class="_btn">
        <a class="blue" href="">LOAD MORE</a>
      </div>
    </div>
  </div>
</div>
@endsection