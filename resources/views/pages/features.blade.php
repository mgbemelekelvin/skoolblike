@extends('master')
@section('script0')
    <meta name="description" content="SkoolBlike Portal features. Skoolblike (School Portal) is borne out of a passion to provide schools in Africa especially in Nigeria the reliable IT based tools and knowledge needed for smooth, efficient and effective academic system / school management, which would improve the services to the school's students, staffs, parents and management." />
    <meta property="og:image" content="http://skoolblike.com/images/Aiexpt4.png">
@endsection

@section('script1')
@endsection

@section('content')
        <section class="main__middle__container" style="margin-top: 50px;">
            <div class="row nothing title__block">
                <div class="container text-center">
                    <h2 class="page__title">Features of Skoolblike</h2>
                    <span class="sep"></span>
                    <p class="smaller">Empowering ICT in great African Students.</p>
                </div>
            </div>
            <div class="container">
                <p style="color:black;">
                    Skoolblike School Portal is loaded with lots functions that could interest our users all day long. For the school owners the portal is embedded with functions that would help keep accurate and timely information for faster and wiser decision making. The functions for the parents would help them monitor the activities of their child(ren)/ward in the school. We shall briefly discuss its functions.
                </p>
                @foreach($portalFunctions as $key=>$portalFunction)
                <div class="col-md-6">
                    <h5>{{ $key+1 }}) {{ $portalFunction->name }}</h5>
                    <p>{{ $portalFunction->description }}</p>
                </div>
                @endforeach
            </div>
        </section>
@endsection

@section('script2')
@endsection

@section('script3')
@endsection
