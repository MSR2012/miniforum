@extends('layout.base')

@section('title')
    <title>Dashboard</title>
@endsection

@section('stylesheet')

@endsection

@section('content_body')
    <!-- STATISTIC-->
    <section class="statistic statistic2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--green">
                        <h2 class="number">10,368</h2>
                        <span class="desc">Total Test Given</span>
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--orange">
                        <h2 class="number">388,688</h2>
                        <span class="desc">Total Question Answered</span>
                        <div class="icon">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--blue">
                        <h2 class="number">1,086</h2>
                        <span class="desc">Total Correct Answer</span>
                        <div class="icon">
                            <i class="zmdi zmdi-calendar-note"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--red">
                        <h2 class="number">79%</h2>
                        <span class="desc">Correct Answer Percentage</span>
                        <div class="icon">
                            <i class="zmdi zmdi-money"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END STATISTIC-->

    <!-- DATA TABLE-->
    <section class="p-t-20">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <button class="au-btn au-btn--block au-btn--green au-btn-small"><a href="{{url('/practice_test/homework')}}" style="color:white">Homework</a></button>
                </div>
                <div class="col-md-3">
                    <button class="au-btn au-btn--block au-btn--green au-btn-small"><a href="{{url('/practice_test/drill')}}" style="color:white">Drill</a></button>
                </div>
                <div class="col-md-3">
                    <button class="au-btn au-btn--block au-btn--green au-btn-small"><a href="{{url('/practice_test/practice')}}" style="color:white">Practice</a></button>
                </div>
                <div class="col-md-3">
                    <button class="au-btn au-btn--block au-btn--green au-btn-small"><a href="{{url('/lesson')}}" style="color:white">Lesson</a></button>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')

@endsection