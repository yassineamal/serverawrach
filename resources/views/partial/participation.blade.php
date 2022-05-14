<!-- Services-->


<section class="page-section" id="participation">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">شروط المشاركة</h2>
                </div>
                <div class="row text-center">
                @foreach($myParticipation as $participation)
                    <div>
                        {!! $participation->body !!}
                    </div>
                    
                   
                @endforeach
                </div>
            </div>
        </section>