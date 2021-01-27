@extends('master')
@section('script0')
    <meta name="description" content="Our Partnered Schools. Skoolblike (School Portal) is borne out of a passion to provide schools in Africa especially in Nigeria the reliable IT based tools and knowledge needed for smooth, efficient and effective academic system / school management, which would improve the services to the school's students, staffs, parents and management." />
    <meta property="og:image" content="http://skoolblike.com/images/Aiexpt4.png">
@endsection

@section('script1')
@endsection

@section('content')
    <section class="main__middle__container" style="margin-top: 50px;">
        <div class="row nothing title__block">
            <div class="container text-center">
                <h2 class="page__title">Partnered Schools</h2>
                <span class="sep"></span>
                <p class="smaller">We strive not to be a success, but rather to be of VALUE.</p>
            </div>
        </div>

        <div class="container" style="color:#333;">

            <h2>Our Partnership</h2>
            <p>At skoolblike, we do not strive to be a success, but rather to be valuable, to our customers, endusers and coummunity at large, because we know that value brings great successs. Our company Values guide how we work with our customers, each other and are the foundation for shaping our company culture.</p>
            <p> <span style="color:#000; font-weight:800;">Accountability:</span> We take up our responsibilities as we ought, to satisfy our partners (schools) to the maximum level of whatever services that might be demanded from us.</p>
            <p> <span style="color:#000; font-weight:800;">Integrity:</span> We do not make promises that we cannot keep. We strive to make sure that every request/project requested by our partners (schools) are duely attended to and finish on or before deadline.</p>
            <p> <span style="color:#000; font-weight:800;">Relationship Building:</span> We just don't want to do business with our partners (schools), but we want to build a relationship.</p>
            <p> Below is list of our valued partners.</p>
            <div class="dc_clear"></div>
            <br />
            <br />

            <ul class="gallery">
                @foreach($schools as $school)
                    <li class="mix webdesign col-sm-2" style="padding: 10px;">
                        <img alt="" src="{{ url('https://portal.skoolblike.com/img/'.$school->schoollogo) }}" class="img-responsive" style="width: 100%;">
                        <a class="link" href="{{ $school->school_websites }}" style="font-size: 12px;">
                            {{ $school->schoolname }}<br>
                            <small>Website: {{ $school->school_websites }}</small>
                        </a>
                    </li>
                @endforeach
            </ul>

            <br />
        </div>
    </section>
@endsection

@section('script2')

@endsection

@section('script3')
    <script src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
// Start work gallery
            $('#Grid').mixitup();
        });
    </script>
@endsection
