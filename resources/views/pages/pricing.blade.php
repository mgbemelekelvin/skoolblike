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
                <div class="row nothing title__block">
                    <div class="container text-center">
                        <h2 class="page__title">Our Pricing </h2>
                        <span class="sep"></span>
                        <p class="smaller">A GOOD NAME IS BETTER THAN SILVER AND GOLD</p>
                    </div>
                </div>
                <div class="container" style="color:#333;">
                    <div class="row no_padding title__block nothing no-margin">
                        <p>We are not focused on the profit making the portal can give to us, but we are more spectacle about the usage and the positive impact it would give to the school, students, parents and the community as a whole. </p>
                        {{--<p>We have 2 basic way you can pay for SkoolBlike Portal, (1) Per School, (2) Per Child</p>--}}
                        <p>Because we want all schools to benefit from this awesome innovation and offer, we place the minimum price any portal in Nigeria can give, thou we give the best functions, products, quality and services, and discounts according to the number of student a school has. <br><br></p>
                        <div class="col-md-12">
                            <h2>Per Child</h2>
                            <p>A total sum of <span style="text-decoration: line-through;">N</span>1000.00 per child is given to each student in a school. i.e. if a school has a total number of 10 students, the school is to pay 1000 x 10, which is <span style="text-decoration: line-through;">N</span>10,000.00 (then thousand naira only) per term. Thou because we know some schools that have more students than the others, we came up with a discount system that can satisfy everyone demand, or else if not satisfactory could use the per child fee method.</p>
                            <h5>The table below would give you a description of the various discount given according to the number of students in a school. </h5>
                            <table class="dc_table_s9" summary="Sample Table" style="width:100%;">
                                <thead>
                                <tr>
                                    <th scope="col">NUMBER OF STUDENTS</th>
                                    <th scope="col">DISCOUNT(%)</th>
                                    <th scope="col">PRICE PER CHILD</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr >
                                    <th scope="row">1-100</th>
                                    <td>0%</td>
                                    <td><span style="text-decoration: line-through;">N</span>1000</td>
                                </tr>
                                <tr class="odd">
                                    <th scope="row">101-149</th>
                                    <td>5%</td>
                                    <td><span style="text-decoration: line-through;">N</span>1000</td>
                                </tr>
                                <tr >
                                    <th scope="row">150-199</th>
                                    <td>5%</td>
                                    <td><span style="text-decoration: line-through;">N</span>1000</td>
                                </tr>
                                <tr class="odd">
                                    <th scope="row">200-249</th>
                                    <td>10%</td>
                                    <td><span style="text-decoration: line-through;">N</span>1000</td>
                                </tr>
                                <tr >
                                    <th scope="row">250-349</th>
                                    <td>15%</td>
                                    <td><span style="text-decoration: line-through;">N</span>1000</td>
                                </tr>
                                <tr class="odd">
                                    <th scope="row">350-499</th>
                                    <td>20%</td>
                                    <td><span style="text-decoration: line-through;">N</span>1000</td>
                                </tr>
                                <tr >
                                    <th scope="row">500-749</th>
                                    <td>25%</td>
                                    <td><span style="text-decoration: line-through;">N</span>1000</td>
                                </tr>
                                <tr class="odd">
                                    <th scope="row">750-999</th>
                                    <td>30%</td>
                                    <td><span style="text-decoration: line-through;">N</span>1000</td>
                                </tr>
                                <tr >
                                    <th scope="row">1000-1449</th>
                                    <td>35%</td>
                                    <td><span style="text-decoration: line-through;">N</span>1000</td>
                                </tr>
                                <tr class="odd">
                                    <th scope="row">1500-Above</th>
                                    <td>40%</td>
                                    <td><span style="text-decoration: line-through;">N</span>1000</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="js_hide_gadget js_minimized">
                            </div>
                        </div>
                        {{--<div class="col-md-12">--}}
                            {{--<h2>Per School</h2>--}}
                            {{--<p>This Pricing method is fixed with no discount.</p>--}}
                            {{--<table class="dc_table_s9" summary="Sample Table" style="width:100%; font-size: 24px;">--}}
                                {{--<thead>--}}
                                {{--<tr>--}}
                                    {{--<th scope="col">PRICE PER TERM</th>--}}
                                    {{--<th scope="col">PRICE PER ANNUM</th>--}}
                                {{--</tr>--}}
                                {{--</thead>--}}

                                {{--<tbody>--}}
                                {{--<tr >--}}
                                    {{--<td><span style="text-decoration: line-through;">N</span>160,500.00</td>--}}
                                    {{--<td><span style="text-decoration: line-through;">N</span>450,500.00</td>--}}
                                {{--</tr>--}}
                                {{--</tbody>--}}
                            {{--</table>--}}
                            {{--<div class="js_hide_gadget js_minimized">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div style="margin-top: 40px;" class="col-md-12">
                            <p><strong>NOTE:</strong> A onetime installation payment of N10,000.00 would be paid after the School uses the system free of charge for a term, and subsequently pay the termly portal fee with applied discount.</p>
                        </div>
                    </div>
                </div>
            </section>
@endsection

@section('script2')
@endsection

@section('script3')
@endsection
