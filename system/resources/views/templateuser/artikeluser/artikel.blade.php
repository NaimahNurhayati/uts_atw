@extends('templateuser.base')

@section('content')
<div class="banner-bottom">

  <div class="" style="display: flex; justify-content: space-evenly; flex-wrap:wrap;">
    @foreach($list_artikel as $artikel)
    <div class="banner-bottom-grid" style="width: 30%; margin-bottom:20px;">
      <img src="{{url('public')}}/assets/images/66.jpg" alt=" " class="img-responsive" />
      <h5>{{$artikel->judul}}</h5>
      <p>{{$artikel->created_at}}</p>
      <div class="rd-mre">
        <a href="{{url('detail', $artikel->id)}}" class="hvr-bounce-to-bottom quod">Read More</a>
      </div>
    </div>
    @endforeach
  </div>



  <script type="text/javascript">
    $(window).load(function() {
      $("#flexiselDemo1").flexisel({
        visibleItems: 3,
        animationSpeed: 1000,
        autoPlay: false,
        autoPlaySpeed: 3000,
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
          portrait: {
            changePoint: 480,
            visibleItems: 1
          },
          landscape: {
            changePoint: 640,
            visibleItems: 2
          },
          tablet: {
            changePoint: 768,
            visibleItems: 3
          }
        }
      });

    });
  </script>
  <script type="text/javascript" src="{{url('public')}}/assets/js/jquery.flexisel.js"></script>
</div>
<!-- //banner-bottom -->
<!-- blog -->
<div class="blog">
  <div class="blog-left">
    <div class="blog-left-grid">
      <div class="blog-left-grid-left">
        <h3><a href="single.html">{{$artikel->judul}}</a></h3>
        <p>by <span>Naimah</span> | {{$artikel->created_at}} | <span>Sint</span></p>
      </div>
      <div class="blog-left-grid-right">
        <a href="#" class="hvr-bounce-to-bottom non">20 Comments</a>
      </div>
      <div class="clearfix"> </div>
      <a href="{{url('detail', $artikel->id)}}"><img src="{{url('public')}}/assets/images/44.jpg" alt=" " class="img-responsive" /></a>
      <p class="para"> Perlu kita ketahui kita sebaga orang mukmin sebagai orang muslimin,
        tentunya kita selalu diingatkan oleh Allah Swt.
        untuk meningkatkan ketakwaan kita, sebagai mana Allah sudah telah berfirman
        “ Ya ayyuhallazina amanuttakullaha hakkatukatihi wala tamutunna illa anta waantum muslimun”
        dituntut untuk mempertegas dalam ketakwaan kita kepada Allah Swt. “ hakka tuqotihi”...........</p>
      <div class="rd-mre">
        <a href="{{url('detail', $artikel)}}" class="hvr-bounce-to-bottom quod">Read More</a>
      </div>
    </div>
    <div class="blog-left-grid">
      <div class="blog-left-grid-left">
        <h3><a href="{{url('detail', $artikel->id)}}">{{$artikel->judul}}</a></h3>
        <p>by <span>Naimah</span> | {{$artikel->created_at}} | <span>Sint</span></p>
      </div>
      <div class="blog-left-grid-right">
        <a href="#" class="hvr-bounce-to-bottom non">40 Comments</a>
      </div>
      <div class="clearfix"> </div>
      <a href="{{url('detail', $artikel->id)}}"><img src="{{url('public')}}/assets/images/66.jpg" alt=" " class="img-responsive" /></a>
      <p class="para"> Perlu kita ketahui kita sebaga orang mukmin sebagai orang muslimin,
        tentunya kita selalu diingatkan oleh Allah Swt.
        untuk meningkatkan ketakwaan kita, sebagai mana Allah sudah telah berfirman
        “ Ya ayyuhallazina amanuttakullaha hakkatukatihi wala tamutunna illa anta waantum muslimun”
        dituntut untuk mempertegas dalam ketakwaan kita kepada Allah Swt. “ hakka tuqotihi”...........</p>
      <div class="rd-mre">
        <a href="{{url('detail', $artikel)}}" class="hvr-bounce-to-bottom quod">Read More</a>
      </div>
    </div>
  </div>
  <div class="blog-right">
    <h3 style="padding-left: 5px; padding-right: 10px;">Filter</h3>
    <form action="{{url('template.produk/filter')}}" method="post">
      @csrf
      <div class="left-side">
        <h4 class="shopf-sear-headits-sear-head">
          Judul</h4>
        <input type="text" class="form-control form-control-sm" name="judul" value="{{$judul ?? ""}}" required>
      </div>
      <!-- // preference -->
      <!-- price range -->
      <div class="range">
        <h4 class="shopf-sear-headits-sear-head">
          <span>Tanggal</span></h4>
        <div class="col-md-6 mb-3">
          <label for="validationDefault01">Min</label>
          <input type="text" class="form-control" name="tanggal_min" placeholder="12-11-2020" value="{{$tanggal_min ?? ""}}" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="validationDefault02">Max</label>
          <input type="text" class="form-control" name="tanggal_max" placeholder="28-11-2020" value="{{$tanggal_max ?? ""}}" required>
        </div>
      </div>
      <!-- //price range -->
      <br> <br>
      <div class="left-side">
        <h4 class="shopf-sear-headits-sear-head">Tag</h4>
        <input type="text" class="form-control form-control-sm" name="tag" value="{{$tag ?? ""}}">
      </div><br>
      <button class="btn btn-primary float-right"><i class="fa fa-search"></i>Cari Data</button>
    </form><br>
    <div class="sap_tabs">
      <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
        <ul class="resp-tabs-list">
          <li class="resp-tab-item grid1" aria-controls="tab_item-0" role="tab"><span>Popular</span></li>
          <li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab"><span>Recent</span></li>
          <li class="resp-tab-item grid3" aria-controls="tab_item-2" role="tab"><span>Comments</span></li>
          <div class="clear"></div>
        </ul>
        <div class="resp-tabs-container">
          <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
            <div class="facts">
              <div class="tab_list">
                <a href="{{url('public')}}/assets/images/7-.jpg" class="b-link-stripe b-animate-go   swipebox" title="">
                  <img src="{{url('public')}}/assets/images/7.jpg" alt=" " class="img-responsive" />
                </a>
              </div>
              <div class="tab_list1">
                <a href="#">excepturi sint occaecati</a>
                <p>June 30,2015 <span>Nam libero tempore, cum soluta nobis.</span></p>
              </div>
              <div class="clearfix"> </div>
            </div>
            <div class="facts">
              <div class="tab_list">
                <a href="{{url('public')}}/assets/images/8-.jpg" class="b-link-stripe b-animate-go   swipebox" title="">
                  <img src="{{url('public')}}/assets/images/8.jpg" alt=" " class="img-responsive" />
                </a>
              </div>
              <div class="tab_list1">
                <a href="#">excepturi sint occaecati</a>
                <p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>
          <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
            <div class="facts">
              <div class="tab_list">
                <a href="images/8-.jpg" class="b-link-stripe b-animate-go   swipebox" title="">
                  <img src="{{url('public')}}/assets/images/8.jpg" alt=" " class="img-responsive" />
                </a>
              </div>
              <div class="tab_list1">
                <a href="#">excepturi sint occaecati</a>
                <p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
              </div>
              <div class="clearfix"> </div>
            </div>
            <div class="facts">
              <div class="tab_list">
                <a href="{{url('public')}}/assets/images/9-.jpg" class="b-link-stripe b-animate-go   swipebox" title="">
                  <img src="{{url('public')}}/assets/images/9.jpg" alt=" " class="img-responsive" />
                </a>
              </div>
              <div class="tab_list1">
                <a href="#">excepturi sint occaecati</a>
                <p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>
          <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
            <div class="facts">
              <div class="tab_list">
                <a href="{{url('public')}}/assets/images/9-.jpg" class="b-link-stripe b-animate-go   swipebox" title="">
                  <img src="{{url('public')}}/assets/images/9.jpg" alt=" " class="img-responsive" />
                </a>
              </div>
              <div class="tab_list1">
                <a href="#">excepturi sint occaecati</a>
                <p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
              </div>
              <div class="clearfix"> </div>
            </div>
            <div class="facts">
              <div class="tab_list">
                <a href="{{url('public')}}/assets/images/10-.jpg" class="b-link-stripe b-animate-go   swipebox" title="">
                  <img src="{{url('public')}}/assets/images/10.jpg" alt=" " class="img-responsive" />
                </a>
              </div>
              <div class="tab_list1">
                <a href="#">excepturi sint occaecati</a>
                <p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>
        </div>
        <script src="{{url('public')}}/assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
        <script type="text/javascript">
          $(document).ready(function() {
            $('#horizontalTab').easyResponsiveTabs({
              type: 'default', //Types: default, vertical, accordion           
              width: 'auto', //auto or any width like 600px
              fit: true // 100% fit in a container
            });
          });
        </script>
        <link rel="stylesheet" href="{{url('public')}}/assets/css/swipebox.css">
        <script src="{{url('public')}}/assets/js/jquery.swipebox.min.js"></script>
        <script type="text/javascript">
          jQuery(function($) {
            $(".swipebox").swipebox();
          });
        </script>
      </div>
    </div>
    <div class="pgs">
      <h3>Pages</h3>
      <ul>
        <li><a href="#">doloribus asperiores repellat</a></li>
        <li><a href="#">Itaque earum rerum hic tenetur</a></li>
        <li><a href="#">deserunt mollitia laborum et dolorum</a></li>
        <li><a href="#">facilis est et expedita distinctio</a></li>
        <li><a href="#">occaecati cupiditate non provident</a></li>
        <li><a href="#">deserunt mollitia laborum et dolorum</a></li>
      </ul>
    </div>
  </div>
  <div class="clearfix"> </div>
</div>
<!-- //blog -->
@endsection