@extends('master')
@section('script0')
    <meta name="description" content="Welcome to SkoolBlike. The school portal is basically for the Crèche to the college schools. It was designed to run most of the school’s activities (educational and non-educational) effectively. It’s a cloud based portal which provides the schools with fast, accurate and reliable on-demand services such high data integrity digital record keeping / retrieval, digital learning tools, school social platform and various modern information circulation systems." />
    <meta property="og:image" content="http://skoolblike.com/images/Aiexpt4.png">
@endsection

@section('script1')
@endsection

@section('content')
    <section class="slider boxess" style="margin-top: -90px;">
        <div class="container" style="width:100%; margin:0px; padding:0px;">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner hidden-xs">

                    <div class="item active"> <img data-src="images/slider/image_1920x850.jpg" alt="First slide" src="images/slider/image1.jpg" class="addHeight">
                    </div>

                    <div class="item"> <img data-src="images/slider/image2.jpg" alt="Second slide" src="images/slider/image2.jpg">
                    </div>

                    <div class="item"> <img data-src="images/slider/image3.jpg" alt="Third slide" src="images/slider/image3.jpg">
                    </div>

                    <div class="item"> <img data-src="images/slider/image4.jpg" alt="Third slide" src="images/slider/image4.jpg">
                    </div>

                    <div class="item"> <img data-src="images/slider/image5.jpg" alt="Third slide" src="images/slider/image5.jpg">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="slider boxess visible-xs" style="margin-top: 100px;">
        <div class="container" style="width:100%; margin:0px; padding:0px;">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active"> <img data-src="images/slider/image_1920x850.jpg" alt="First slide" src="images/slider/image1.jpg" style="height: 200px;">
                    </div>

                    <div class="item"> <img data-src="images/slider/image2.jpg" alt="Second slide" src="images/slider/image2.jpg" style="height: 200px;">
                    </div>

                    <div class="item"> <img data-src="images/slider/image3.jpg" alt="Third slide" src="images/slider/image3.jpg" style="height: 200px;">
                    </div>

                    <div class="item"> <img data-src="images/slider/image4.jpg" alt="Third slide" src="images/slider/image4.jpg" style="height: 200px;">
                    </div>

                    <div class="item"> <img data-src="images/slider/image5.jpg" alt="Third slide" src="images/slider/image5.jpg" style="height: 200px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="col-md-12" style="margin: 10px; border-radius: 8px; margin: auto; background-color: darkslategray; box-shadow: 0 0 15px -6px black; padding:10px; margin-top: 30px; text-align: center;">
                <div class="col-md-12">
                    <p style="text-transform: none; color: white;">
                        <b>
                            Welcome to SkoolBlike! The best school management system. Skoolblike (School Portal) is borne out of a passion to provide schools in Africa especially in Nigeria the reliable IT based tools and knowledge needed for smooth, efficient and effective academic system / school management, which would improve the services to the school's students, staffs, parents and management.
                        </b>
                    </p>
                </div>
                <div class="col-md-6">
                    <h3 style="text-transform: none; color: white;">
                        ENJOY SKOOLBLIKE FREE!!! FOR A TERM.
                    </h3>
                    <p>
                        See what we can offer you at <a href="features">SkoolBlike Features</a>
                    </p>
                </div>
                <div class="col-md-6">
                    <a href="http://portal.skoolblike.com/schoolRegistration?NewRegCode={{ $code_generate }}" target="_blank"><button class="btn btn-warning" style="font-size: 18px;">Click here to <br> Start Enjoying SkoolBlike <br> for Free!</button></a>
                </div>
            </div>
        </div>
    </section>

    <section class="main__middle__container">
        <div class="row text-center no-margin nothing">
            <div class="container headings">
                <h1 style="color:rgba(0,153,255,1);">OUR <span style="color:rgba(255,0,102,1);">MISSION</span></h1>
                <p style="font-size:20px; color:#333;">With the current global digital revolution, there is need for schools in Africa to take full advantage of modern technology to increase their effectiveness, efficiency, productivity, growth and impact. Skoolblike (School Portal) is borne out of a passion to provide schools in Africa especially in Nigeria the reliable IT based tools and knowledge needed for smooth, efficient and effective academic system / school management in both public and private schools.</p>
            </div>
        </div>

        {{--<div class="row">--}}
            {{--<div class="container">--}}
                {{--<h1 style="color:rgba(0,153,255,1); text-align: center;">TAKE A <span style="color:rgba(255,0,102,1);">QUICK LOOK</span></h1>--}}
                {{--<div class="row">--}}
                    {{--<div class="column">--}}
                        {{--<img src="{{ asset('images/bg (1).jpg') }}" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">--}}
                    {{--</div>--}}
                    {{--<div class="column">--}}
                        {{--<img src="{{ asset('images/bg (2).jpg') }}" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">--}}
                    {{--</div>--}}
                    {{--<div class="column">--}}
                        {{--<img src="{{ asset('images/bg (3).jpg') }}" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">--}}
                    {{--</div>--}}
                    {{--<div class="column">--}}
                        {{--<img src="{{ asset('images/bg (4).jpg') }}" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div id="myModal" class="modal" style="margin-top: 80px; z-index: 1000;">--}}
                    {{--<span class="close cursor" onclick="closeModal()"><p style="color: white;">&times;</p></span>--}}
                    {{--<div class="modal-content">--}}
                        {{--<div class="mySlides">--}}
                            {{--<div class="numbertext">1 / 4</div>--}}
                            {{--<img src="{{ asset('images/bg (1).png') }}" style="width:100%">--}}
                        {{--</div>--}}

                        {{--<div class="mySlides">--}}
                            {{--<div class="numbertext">2 / 4</div>--}}
                            {{--<img src="{{ asset('images/bg (2).png') }}" style="width:100%">--}}
                        {{--</div>--}}

                        {{--<div class="mySlides">--}}
                            {{--<div class="numbertext">3 / 4</div>--}}
                            {{--<img src="{{ asset('images/bg (3).png') }}" style="width:100%">--}}
                        {{--</div>--}}

                        {{--<div class="mySlides">--}}
                            {{--<div class="numbertext">4 / 4</div>--}}
                            {{--<img src="{{ asset('images/bg (4).png') }}" style="width:100%">--}}
                        {{--</div>--}}

                        {{--<a class="prev" onclick="plusSlides(-1)">&#10094;</a>--}}
                        {{--<a class="next" onclick="plusSlides(1)">&#10095;</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        <div class="row text-center nothing line__bg testimonials">
            <div class="container headings">
                <h2 class="page_title" style=" color:black; text-shadow:0 0 10px #666666;">TESTIMONIALS</h2>
                <p class="small-paragrapher" style="color:#000; text-shadow:0 0 15px #FFFFFF; font-size:25px; line-height: 35px;">We have recieved great testimonies of our portal from different users, owners of schools, parents adn even students, below are some of the testimonials recieved.</p>
                <div id="myCarousel2" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                        <!--<li data-target="#myCarousel2" data-slide-to="1"></li> -->
                    </ol>
                    <div class="carousel-inner">

                        <div class="item active">
                            <p>"Since i started using the skoolblike portal, it has really transformed my school drastically, staffs, parents and students of my school really enjoyed using the application, as it made things easy for them and for me. Its a great work. Keep it up!"</p>
                            <p class="small-paragraph"><small>- Mrs. Mary Mgbemele, Proprietress Queen-Mary Schools.</small></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="row three__blocks text-center no_padding no-margin">
            <div class="container">
                <h2 class="page__title">services</h2>
                <p class="small-paragraph" style="color:#999;">Our servcies are offered to every schools and individuals (Parents and students) in making the eudaction system more flexible, interesting and beneficial through the use of ICT. We also offer services for partnership to other companies. Below are 3 core services we provided in skoolblike.</p>

                <div class="col-md-4">
                    <h3><a href="#">Modern Design</a></h3>
                    <img src="images/content__images/design.jpg" alt="image" class="img-responsive img-rounded">
                    <p>Skoolblike has a stylish and modern design to fit into any devices and screen to enable a stress free access to the application at anytime and anywhere. </p>
                    <p><a class="btn btn-primary" href="{{ url('/features') }}" role="button">Learn more</a>
                </div>
                <div class="col-md-4 middle">
                    <h3><a href="#">High Quality</a></h3>
                    <img src="images/content__images/quality.jpg" alt="image" class="img-responsive img-rounded">
                    <p>We made sure our system provides you with the accurate and quality result of whatever function requested of it. It was structured to give result as fast as possible within seconds, thereby saving time and data.</p>
                    <p><a class="btn btn-primary btn-md" href="{{ url('/features') }}" role="button">Learn more</a>
                </div>
                <div class="col-md-4">
                    <h3><a href="#">Quick Support</a></h3>
                    <img src="images/content__images/quick_support.jpg" alt="image" class="img-responsive img-rounded">
                    <p>Our quick support is always there to answer to needs whenever you need help or want to render complains/feedbacks. </p>
                    <p><a class="btn btn-primary btn-md" href="{{ url('/features') }}" role="button">Learn more</a>
                </div>
            </div>
        </div>
        <div class="row no_padding no-margin nothing nice__title text-center">
            <div class="container">
                <h2 style="color:#000;text-shadow:0 0 10px #666666;">ABOUT THE COMPANY.</h2>
                <img src="images/content__images/image_940x210.jpg" alt="big image" class="img-rounded img-responsive">
                <p style="color:#333; font-size:20px;">Skoolblike (School Portal) is a product of the Aixept-Edu Technologies which is the educational department of a fast growing ICT company in Nigeria.</p>
            </div>
        </div>
    </section>
@endsection

@section('script2')
    <script>
        function openModal() {
            document.getElementById('myModal').style.display = "block";
        }

        function closeModal() {
            document.getElementById('myModal').style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>
@endsection

@section('script3')
@endsection
