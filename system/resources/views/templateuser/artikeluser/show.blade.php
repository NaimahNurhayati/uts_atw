@extends('templateuser.base')

@section('content')

<!-- single -->
<div class="container">
  <div class="single-page-artical">
    <div class="artical-content">
      <h3>{{$artikel->judul}}</h3>
      <img class="img-responsive" src="{{url('public')}}/assets/images/banner.jpg" alt=" " />
      <p style="text-align: justify;">{!! nl2br($artikel->konten)!!}</p>
    </div>
    <div class="artical-links">
      <ul>
        <li><small> </small><span>{{$artikel->created_at}}</span></li>
        <li><a href="#"><small class="admin"> </small><span>Naimah</span></a></li>
        <li><a href="#"><small class="no"> </small><span>Tag: {{$artikel->tag}}</span></a></li>
        <li><a href="#"><small class="posts"> </small><span>View posts</span></a></li>
      </ul>
    </div>
    <div class="comment-grid-top">
      <h3>Responses</h3>
      <div class="comments-top-top">
        <div class="top-comment-left">
          <a href="#"><img class="img-responsive" src="{{url('public')}}/assets/images/co.png" alt=""></a>
        </div>
        <div class="top-comment-right">
          <ul>
            <li><span class="left-at"><a href="#">Afrilia</a></span></li>
            <li><span class="right-at">november 29, 2020 at 09.30am</span></li>
            <li><a class="reply" href="#">REPLY</a></li>
          </ul>
          <p>artikel yang sangat bermanfaat sekali mba</p>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="comments-top-top top-grid-comment">
        <div class="top-comment-left">
          <a href="#"><img class="img-responsive" src="{{url('public')}}/assets/images/co.png" alt=""></a>
        </div>
        <div class="top-comment-right">
          <ul>
            <li><span class="left-at"><a href="#">Hotma</a></li>
            <li><span class="right-at">november 29, 2020 at 10.30am</span></li>
            <li><a class="reply" href="#">REPLY</a></li>
          </ul>
          <p>terimaksih telah menulis artikel sekeren ini</p>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
    <div class="artical-commentbox">
      <h3>leave a comment</h3>
      <div class="table-form">
        <form action="{{url('detail')}}" method="post">
          @csrf
          <input type="text" class="textbox" name="nama" value="nama" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'nama';}">
          <textarea value="komentar:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'komentar';}">Komentar</textarea>
          <input type="submit" value="Send">
        </form>
      </div>
    </div>
  </div>
</div>
<!-- single -->

@endsection