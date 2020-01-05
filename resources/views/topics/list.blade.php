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
            @foreach($topics as $topic)
            <div class="col-md-2"></div>
            <div class="col-md-8">
                    <h4 class="number">{{$topic->category->category_name}}</h4>
                    <h2>{{$topic->title}}</h2>
                    <h5>Posted By {{$topic->createdBy->username}} on {{$topic->created_at}}</h5>
                    <a href="{{url('topics/view/'.$topic->id)}}">view details</a>
                    <br><br>
            </div>
            <div class="col-md-2"></div>
             
            @endforeach
            <div class="col-md-4">
                {{$topics->links()}}
            </div>
        </div>
    </div>
</section>
<!-- END STATISTIC-->

@endsection

@section('script')

@endsection