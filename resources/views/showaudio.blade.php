@extends('layout.app1')
@section('content') 

<style>
 
</style>
  <div class="container-fluid mb-5">
      <div class="row">
        @include('partials.navbar')
      </div>
  </div>
  <!-- partial:index.partial.html -->
<div class="container ">
  <div class="player my-5 col-12 col-md-6 ">
    <div class="like waves-effect waves-light">
      <i class="icon-heart"></i>
    </div>
    <div class="mask"></div>
    <ul class="player-info info-one">
      <li>Le mariage du Roi</li>
      <li>Chantal Nlend</li>
      <li>5:34</li>
    </ul>
    <ul class="player-info info-two">
      <li>Le mariage du Roi</li>
      <li>Chantal Nlend</li>
      <li><span id="duration"></span><i> / </i>5:34</li>
    </ul>
    <div id="play-button" class="unchecked">
      <i class="icon icon-play"></i>
    </div>
    <div class="control-row">
      <div class="waves-animation-one"></div>
      <div class="waves-animation-two"></div>
      <div id="pause-button">
        <i class="icon"></i>
      </div>
      <div class="seek-field">
        <input id="audioSeekBar" min="0" max="334" step="1" value="0" type="range" oninput="audioSeekBar()" onchange="this.oninput()">
      </div>
      <div class="volume-icon">
        <i class="icon-volume-up"></i>
      </div>
      <div class="volume-field">
        <input type="range" min="0" max="100" value="100" step="1" oninput="audio.volume = this.value/100" onchange="this.oninput()">
      </div>
    </div>
  </div>
</div>
<audio id="audio-player" ontimeupdate="SeekBar()" ondurationchange="CreateSeekBar()" preload="auto" loop>
 
  <source src="{{asset('videos/audio1.mp3')}}" type="audio/mpeg">
</audio>
<!-- partial -->




@endsection