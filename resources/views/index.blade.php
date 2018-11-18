@extends('layouts.app')

@section('content')
<div class="container header">
    <div class="row">
      <div class="col-md-5">
        <div class="header-desc">
          <h2>
          Take your <span> business </span>
          to the next step with our 
          <span> Machine Learning Tools </span>
          </h2>
          <p>
          Data is the foundation of the Digital Age.  In this ever-changing 
          world, online data analysis tools will be great allies to help you 
          manage and visualise the key metrics for your business.
          </p>
          <form action="search">
            <input type="text" class="form-control" placeholder="ENTER CITY...">
            <button class="btn btn-primary">Start analysing</button>
          </form>
        </div>
      </div>
      <div class="col-md-7">
        <img src="{{ asset('img/analysi-min.jpg') }}" class="animated" alt="">
      </div>
    </div>
    <div class="row">
      <div class="scroll-down">
        <a class="smooth" href="#section2">
        <img src="{{ asset('img/scroll.svg')}}" alt="">
        </a>
      </div>
    </div>
  </div>
  <!-- end header -->
  <div class="container-fluid section2" id="section2">
    <div class="row">
      <div class="section-inner">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="section2-text">
                <h3>
                  How we make your company 
                  to grow steadily
                </h3>
                <p>
                  As data analytics are now an integral part of business life, 
                  more and more companies elaborate strategies to manage it effectively 
                  and make the most out of it.  Analysing Social Media we help 
                  you to improve your business
                </p>
                <ul>
                  <li><img src="{{ asset('img/check-box.svg')}}" alt=""><span> Gain a better understanding of your audience</span></li>
                  <li><img src="{{ asset('img/check-box.svg')}}" alt=""><span> Learn on your weaknesses</span></li>
                  <li><img src="{{ asset('img/check-box.svg')}}" alt=""><span> Keep your company ahead of the game</span></li>
                  <li><img src="{{ asset('img/check-box.svg')}}" alt=""><span> Benchmark against competitors</span></li>
                </ul>
              </div>
              <a class="learn smooth" href="#section3">Learn more</a>
              <div class="section3" id="section3" style="height: 50px;background: none;"></div>
            </div>
            <div class="col-md-6">
              <img class="animatedh" src="{{ asset('img/second2-img.svg')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid section3" >
    <div class="row">
      <div class="faq-block">
        <h3>FAQ</h3>
        <div class="container">
          <div class="row">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseTwo">
                      How do you analyse social data?
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      What technologies do you use to do this?
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      What is the benefit of machine learning technology?
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                      How much data do you analyse to make a report?
                    </a>
                  </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                  <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                </div>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <p>
                *Another benefit that comes with big data analytics on social media is the direct and instant response you are able to get from your customers. On an individual basis, it’s hard to go through all of the available commentary based on a per-post basis. Nevertheless, the engagement of your audience as available data is a highly useful tool you can take advantage of in multiple ways.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <img class="sec3-img" src="{{ asset('img/section3-img.svg')}}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
@endsection