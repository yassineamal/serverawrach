 <!-- Team-->
 <section class="page-section bg-light" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">من نحن</h2>
                </div>  
@foreach($myAbouts as $about)
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circlelogo" src="{{asset('storage/'.$about->image)}}" alt="..." />
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="team-member">
                            <p class="text-muted">
                            {!! $about->body !!}
                            </p>
                            
                        </div>
                    </div>
                </div>
@endforeach
            </div>
        </section>