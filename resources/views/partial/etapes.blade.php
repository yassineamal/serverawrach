<!-- About-->
<section class="page-section" id="etapes">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">مراحل انجاز ورش الدعم التربوي</h2>
                </div>
                <ul class="timeline">
@foreach($myEtape as $etape)
                    <li class="{{ $etape->seo_title}}">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('storage/'.$etape->image)}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>{{ $etape->slug}}</h4>
                                <h4 class="subheading">{{ $etape->excerpt}}</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">{!! $etape->body !!}</p></div>
                        </div>
                    </li>
@endforeach              
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                ارسل
                                <br />
                                طلبك
                                <br />
                               من هنا
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>