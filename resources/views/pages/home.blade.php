@extends('layout.main')

@section('title', '| Home')

@section('content')

<div class="container" style="width: 100%; padding: 0">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        {{--<ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>--}}

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{ url('img/slide/slide1.jpg') }}" class="img-responsive" alt="...">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img src="{{ url('img/slide/slide2.jpg') }}" class="img-responsive" alt="...">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img src="{{ url('img/slide/slide1.jpg') }}" class="img-responsive" alt="...">
                <div class="carousel-caption">

                </div>
            </div>

        </div>

        {{--<!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>--}}
    </div>
</div>

<div class="container text-center">
    <h1 class="h1-welcome">Welcome to mediamall.ng</h1>
    <img src="img/welcome.jpg" class="img-welcome img-responsive" alt="">
</div>

<div class="container biz" style="width: 100%; padding: 0">
    <div class="container">
        <div class="blog">
            <div class="row blog-row">
                <h1 class="text-center" style="padding-bottom: 30px;">Latest News</h1>
                <div class="col-sm-4 fadeInLeftBig">
                    <small>{{ date('M d, Y') }}</small>
                    <p><b>Latest Trending Gadgets</b></p>
                    <p>attribute to the control element, containing the id of the collapsible element.
                        Modern screen readers and similar assistive technologies make use of this
                        attribute to provide users with additional shortcuts to navigate
                        directly to the collapsible element itself.</p>
                </div>
                <div class="col-sm-4 fadeInLeftBig">
                    <small>{{ date('M d, Y') }}</small>
                    <p><b>Hottest Profession in Tech</b></p>
                    <p>attribute to the control element, containing the id of the collapsible element.
                        Modern screen readers and similar assistive technologies make use of this
                        attribute to provide users with additional shortcuts to navigate
                        directly to the collapsible element itself.</p>
                </div>
                <div class="col-sm-4 fadeInLeftBig">
                    <small>{{ date('M d, Y') }}</small>
                    <p><b>5 Things to know in Photography</b></p>
                    <p>attribute to the control element, containing the id of the collapsible element.
                        Modern screen readers and similar assistive technologies make use of this
                        attribute to provide users with additional shortcuts to navigate
                        directly to the collapsible element itself.</p>
                </div>
                <div class="text-center" style="margin-top: 30px !important;"><a href="#" class="btn btn-default btn-lg" style="border-radius: 0;">READ MORE</a></div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="width: 100%; padding: 0">
    <h1 class="text-center" style="padding-top: 20px; padding-bottom: 30px;">Our Business</h1>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        {{--<ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>--}}

                <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{ url('img/slide/s1.jpg') }}" class="img-responsive" alt="...">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img src="{{ url('img/slide/s2.jpg') }}" class="img-responsive" alt="...">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img src="{{ url('img/slide/s3.jpg') }}" class="img-responsive" alt="...">
                <div class="carousel-caption">

                </div>
            </div>

        </div>
    </div>
</div>{{-- media biz ends here --}}

<div class="container mm-icon" style="width: 100%; padding: 0">
    <div class="container">
        <div class="row what-we-do">
            <h1 class="text-center" style="padding-bottom: 20px; padding-top: 20px;">What We Do</h1>
            <div class="col-sm-2 fadeInRight">
                <div class="mm-fa">
                    <span class="glyphicon glyphicon-camera" style="background: #fff; font-size: 80px; border-radius: 50%; padding: 25px"></span>
                </div>
                <h3>Photograpy</h3>
            </div>
            <div class="col-sm-2 fadeInRight">
                <div class="mm-fa">
                    <span class="glyphicon glyphicon-globe" style="background: #fff; font-size: 80px; border-radius: 50%; padding: 25px"></span>
                </div>
                <h3>Web Development</h3>
            </div>
            <div class="col-sm-2 fadeInRight">
                <div class="mm-fa">
                    <span class="glyphicon glyphicon-print" style="background: #fff; font-size: 80px; border-radius: 50%; padding: 25px"></span>
                </div>
                <h3>Large Format <br/> Printing</h3>
            </div>
            <div class="col-sm-2 fadeInRight">
                <div class="mm-fa">
                    <span class="glyphicon glyphicon-facetime-video" style="background: #fff; font-size: 80px; border-radius: 50%; padding: 25px"></span>
                </div>
                <h3>Video Coverage</h3>
            </div>
            <div class="col-sm-2 fadeInRight">
                <div class="mm-fa">
                    <span class="glyphicon glyphicon-edit" style="background: #fff; font-size: 80px; border-radius: 50%; padding: 25px"></span>
                </div>
                <h3>Graphics</h3>
            </div>
            <div class="col-sm-2 fadeInRight">
                <div class="mm-fa">
                    <span class="glyphicon glyphicon-education" style="background: #fff; font-size: 80px; border-radius: 50%; padding: 25px"></span>
                </div>
                <h3>MediaMall Academy</h3>
            </div>
        </div>
    </div>
</div> {{-- icon section ends here--}}

<div class="container" style="width: 100%; padding: 0; overflow-x: hidden">
        <div class="row" style="background: #cecece">
            <div class="col-sm-8 bounceIn animated animated">
                <img src="img/product.jpg" alt="" class="img-responsive">
            </div>
            <div class="col-sm-4">
                <div class="middle">
                    <div class="h-m">
                        <h3 style="padding-top: 190px">For Service Information <span class="glyphicon glyphicon-menu-right"></span></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="background: #cecece">
            <div class="col-sm-8 pull-right">
                <img src="img/info.jpg" alt="" class="img-responsive">
            </div>
            <div class="col-sm-4">
                <div class="middle">
                    <div class="h-m">
                        <h3 style="padding-left: 20px; padding-top: 190px">How Can We Be Of Help? <span class="glyphicon glyphicon-menu-right"></span></h3>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
