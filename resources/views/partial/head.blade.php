<!-- Masthead-->
<header class="masthead" id="head">
@foreach($myHeads as $head)
           
            <div class="container">
                <div class="masthead-subheading">{{ $head->title }}</div>
                <div class="masthead-heading text-uppercase">{{ $head->excerpt }}</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="https://awrach.precreatif.com/%d8%a7%d9%85%d9%84%d8%a3-%d8%a7%d9%84%d9%86%d9%85%d9%88%d8%b0%d8%ac/">لتسجيل اضغط هنا</a>
            </div>
@endforeach
 </header>