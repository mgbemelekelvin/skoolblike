@extends('master')
@section('script0')
    <meta name="description" content="SkoolBlike Pricing. Skoolblike (School Portal) is borne out of a passion to provide schools in Africa especially in Nigeria the reliable IT based tools and knowledge needed for smooth, efficient and effective academic system / school management, which would improve the services to the school's students, staffs, parents and management." />
    <meta property="og:image" content="http://skoolblike.com/images/Aiexpt4.png">
@endsection

@section('script1')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/shortcodes.css') }}">
@endsection

@section('content')
        <section class="main__middle__container" style="margin-top: 50px;">
        <div class="row title__block">
            <div class="container text-center">
                <h2 class="page__title">Download SkoolBlike Application</h2>
                <span class="sep"></span>
            </div>
        </div>
        <section class="contact-us">
            <div class="container">
                <!--     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.5266897787387!2d3.378224317730022!3d6.581253324315108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b9289c743b95d%3A0x9b626e6fbd7c2a40!2sQUEEN-MARY+SCHOOLS!5e0!3m2!1sen!2sng!4v1476119165815" style="width:100%;" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                <div class="row">
                        <a href="http://skoolblike.com/School_Portal.apk" download><buttom class="btn btn-lg btn-info">Click here to start Download</buttom></a>
                </div>
            </div>
        </section>
    </section>
@endsection

@section('script2')
@endsection

@section('script3')
    <script type="text/javascript">
        function send_special_order() {
            document.getElementById('submit-button').innerHTML=show;
            var data1 = $('#name').val();
            var data2 = $('#subject').val();
            var data3 = $('#email').val();
            var data4 = $('#message').val();
            document.getElementById("show").innerHTML = 'Sending...';
            $.ajax({
                type: "get",
                url: "contact",
                dataType : "json",
                data: ( {"name" : data1, "subject" : data2, "email" : data3,"message" : data4} ) ,
                success: function() {

                },
                complete: function(){
                    document.getElementById("show").innerHTML = '';
                    $('#feedback').append('<p>Thank you for sending us a message. We will get back to you as soon as possible.</p><p>Your message details are:</p>\n\
                                <ul>\n\
                                    <li>Name: <b>' + data1 + '</b></li>\n\
                                    <li>Email: <b>' + data3 + '</b></li>\n\
                                    <li>Subject: <b>' + data2 + '</b></li>\n\
                                    <li>Message: <b>' + data4 + '</b></li>\n\
                                </ul>\n\
                                <p>If you want to change your information press the button:\n\
                                <p><a href="#" id="send-more" class="btn btn-lg btn-info">edit info</a></p>');
                    $('#contact-form').slideUp();
                    $('#send-more').click(function(e){
                        e.preventDefault()
                        $('#contact-form').slideDown();
                        $('#feedback').html('');
                    });
                }
            });
        }
        $('#contact-form').submit(function() {
            send_special_order();
            return false;
        });
    </script>
@endsection
