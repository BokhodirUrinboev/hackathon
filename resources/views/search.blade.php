@extends('layouts.app')

@section('content')
<div class="container-fluid header search">
  <div class="row">
    <div class="col-md-4 offset-md-1">
      <div class="header-desc">
        <h2 style="width: 100%;">
        <span> Venice City </span>
        Overview
        </h2>
        <p>
          Artificial Intelligence data analysis recommends you to improve following aspects of your business:
        </p>
        <p>
          <ol>
            <li>Gain a better understanding of your audience</li>
            <li>You have to make your product higher quality</li>
            <li>Lorem ipsum dolor sit amen</li>
            <li>Situm dolor met whet</li>
          </ol>
        </p>
          <a class="btn btn-primary smooth" href="#search-section">Learn more</a>
      </div>
    </div>
    <div class="col-md-6">
      <img src="{{ asset('img/search-img.svg') }}" class="animated search-img" alt="">
    </div>
  </div>
</div>
  <!-- end header -->
  <div class="container-fluid section3 search-section" id="search-section">
    <div class="row">
      <div class="search-block">
        <h3>Overview</h3>
        <div class="row">
          <div class="col-md-3">
            <p class="search-number" style="color:#0079F4">
              200
            </p>
            <span>Total responds</span>
          </div>
          <div class="col-md-3">
            <p class="search-number" style="color:#424242">
              100
            </p>
            <span>Positive responds</span>
          </div>
          <div class="col-md-3">
            <p class="search-number" style="color:#424242">
              50
            </p>
            <span>Negative responds</span>
          </div>
          <div class="col-md-3">
            <p class="search-number" style="color:#424242">
              50
            </p>
            <span>Neutral responds</span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <div class="charts">
              <h4>Most user words</h4>
              <div>
                <canvas id="myChart" width="400" height="400"></canvas>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <img class="sec3-img" src="{{ asset('img/section3-img.svg')}}" alt="">
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
@endsection
