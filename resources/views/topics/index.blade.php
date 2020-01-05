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
        <h1>My Topics</h1>
        <div class="row">
            @foreach($topics as $topic)
            <div class="col-md-2"></div>
            <div class="col-md-8">
                    <h4 class="number">{{$topic->category->category_name}}</h4>
                    <h2>{{$topic->title}}</h2>
                    <h5>Posted By {{$topic->createdBy->username}} on {{$topic->created_at}}</h5>
                    <a href="{{url('my_topics/'.$topic->id.'/edit/')}}">Edit</a>
                    <br><br>
            </div>
            <div class="col-md-2"></div>
            <br><br>
            @endforeach
        </div>
    </div>
</section>
<!-- END STATISTIC-->

@endsection

@section('script')

@endsection