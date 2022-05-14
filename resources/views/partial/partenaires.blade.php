<!-- Services-->
<section class="page-section" id="partenaires">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">شركاء الورش</h2>
                </div>
                <div class="row text-center">

                @foreach($myPartenaire as $partenaire)
                    <div class="col-md-4">
                    <div class="team-partenaire">
                         <img class="mx-auto rounded-circlelogo" src="{{asset('storage/'.$partenaire->image)}}" alt="">
                         </div>
                        <h4 class="my-3">{!! $partenaire->body !!}</h4>
                    </div>
                    @endforeach

                   
                    
                </div>
            </div>
        </section>