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
            <div class="col-md-2"></div>
            <div class="col-md-8">
                    <h4 class="number">{{$topic->category->category_name}}</h4>
                    <h2>{{$topic->title}}</h2>
                    <h5>Posted By {{$topic->createdBy->username}} on {{$topic->created_at}}</h5>
                    <br><br>
                    <div>{!! $topic->content !!}</div>
                    <br><br>
                    <h2>Comment</h2>
                    <br>
                    @foreach($replies as $reply)
                    <p>{{$reply->commentedBy->username}}: <span style="font-style: italic; font-weight: bold">{{$reply->reply}}</span></p><br>
                    @endforeach
                    <br>
                    <form action="{{url('/topics/view/'.$topic->id)}}" method="post">
                        @csrf
                        <input type="text" name="reply" class="form-control" placeholder="reply here" style="font-style: italic; font-weight: bold">
                    </form>
                    <br><br>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
<!-- END STATISTIC-->

@endsection

@section('script')

@endsection