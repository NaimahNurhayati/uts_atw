@extends('templateuser.base')

@section('content')
<div class="header-bottom">
  <div class="header-bottom-top">
    <ul>
      <li><a href="#" class="g"> </a></li>
      <li><a href="#" class="p"> </a></li>
      <li><a href="#" class="facebook"> </a></li>
      <li><a href="#" class="twitter"> </a></li>
    </ul>
  </div>
  <div class="clearfix"> </div>
  <!-- banner -->
  <div class="banner">
    <!-- Slider-starts-Here -->
    <script src="{{url('public')}}/assets/js/responsiveslides.min.js"></script>
    <script>
      // You can also use "$(window).load(function() {"
      $(function() {
        // Slideshow 4
        $("#slider3").responsiveSlides({
          auto: true,
          pager: false,
          nav: true,
          speed: 500,
          namespace: "callbacks",
          before: function() {
            $('.events').append("<li>before event fired.</li>");
          },
          after: function() {
            $('.events').append("<li>after event fired.</li>");
          }
        });

      });
    </script>
    <!--//End-slider-script -->
    <div id="top" class="callbacks_container wow fadeInUp" data-wow-delay="0.5s">
      <ul class="rslides" id="slider3">
        <li>
          <div class="banner-inf">
            <h3>Kemuliaan Wanita</h3>
            <p>Allah subhanahu wa ta’ala sudah menakdirkan para wanita di seluruh dunia dengan komposisi sama.
              Allah juga memberikan kemampuan atau potensinya sama dengan manusia lainnnya. Ada kesamaan naluri keibuan,
              karakter lemah lembut,.....</p>
            <a href="#">See More</a>
          </div>
        </li>
        <li>
          <div class="banner-inf">
            <h3>Bersyukur Yes, Insecure NO!</h3>
            <p>Bersyukur adalah menerima segala sesuatu yang dikaruniakan Allah kepada kita sebagai manusia.
              Bersyukur tidak cukup dengan mengucapkan hamdalah atau alhamdulillah. Namun bersyukur adalah ......</p>
            <a href="#">See More</a>
          </div>
        </li>
        <li>
          <div class="banner-inf">
            <h3>Fiqh Pernikahan</h3>
            <p>Di mulai dari memaknai pernikahan,pernikahan itu adalah anjuran Allah SWT bagi setiap manusia,untuk mempertahankan
              keberadaan dapat mengendalikan atau mengembang biak kan menurut syariat agama kita islam,laki laki dan perempuan
              memiliki fitrah yang sama sama membutuhkan karena pernikahan dilangsungkan untuk.......</p>
            <a href="#">See More</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <!-- //banner -->
  <!-- banner-bottom -->
  <div class="banner-bottom">
    <div class="" style="display: flex; justify-content: space-evenly; flex-wrap:wrap;">
      @foreach($list_artikel as $artikel)
      <div class="banner-bottom-grid" style="width: 30%; margin-bottom:20px;">
        <img src="{{url('public')}}/assets/images/44.jpg" alt=" " class="img-responsive" />
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
          <h3><a href="{{url('detail', $artikel->id)}}"> {{$artikel->judul}}</a></h3>
          <p>by <span>Naimah</span> | {{$artikel->created_at}} | <span>Sint</span></p>
        </div>
        <div class="blog-left-grid-right">
          <a href="#" class="hvr-bounce-to-bottom non">20 Comments</a>
        </div>
        <div class="clearfix"> </div>
        <a href="{{url('detail', $artikel->id)}}"><img src="{{url('public')}}/assets/images/55.jpg" alt=" " class="img-responsive" /></a>
        <p class="para"> Perlu kita ketahui kita sebaga orang mukmin sebagai orang muslimin,
          tentunya kita selalu diingatkan oleh Allah Swt.
          untuk meningkatkan ketakwaan kita, sebagai mana Allah sudah telah berfirman
          “ Ya ayyuhallazina amanuttakullaha hakkatukatihi wala tamutunna illa anta waantum muslimun”
          dituntut untuk mempertegas dalam ketakwaan kita kepada Allah Swt. “ hakka tuqotihi”...........</p>
        <div class="rd-mre">
          <a href="{{url('detail', $artikel->id)}}" class="hvr-bounce-to-bottom quod">Read More</a>
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
        <a href="single.html"><img src="{{url('public')}}/assets/images/66.jpg" alt=" " class="img-responsive" /></a>
        <p class="para"> Perlu kita ketahui kita sebaga orang mukmin sebagai orang muslimin,
          tentunya kita selalu diingatkan oleh Allah Swt.
          untuk meningkatkan ketakwaan kita, sebagai mana Allah sudah telah berfirman
          “ Ya ayyuhallazina amanuttakullaha hakkatukatihi wala tamutunna illa anta waantum muslimun”
          dituntut untuk mempertegas dalam ketakwaan kita kepada Allah Swt. “ hakka tuqotihi”...........</p>
        <div class="rd-mre">
          <a href="single.html" class="hvr-bounce-to-bottom quod">Read More</a>
        </div>
      </div>
    </div>
    <div class="blog-right">
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
      <div class="four-fig">
        <div class="four-fig1">
          <a href="{{url('public')}}/assets/images/11-.jpg" class="b-link-stripe b-animate-go   swipebox" title="">
            <img src="{{url('public')}}/assets/images/11.jpg" class="img-responsive" alt=" " />
          </a>
        </div>
        <div class="four-fig1">
          <a href="{{url('public')}}/assets/images/14-.jpg" class="b-link-stripe b-animate-go   swipebox" title="">
            <img src="{{url('public')}}/assets/images/14.jpg" class="img-responsive" alt=" " />
          </a>
        </div>
        <div class="four-fig1">
          <a href="{{url('public')}}/assets/images/10-.jpg" class="b-link-stripe b-animate-go   swipebox" title="">
            <img src="{{url('public')}}/assets/images/21.jpg" class="img-responsive" alt=" " />
          </a>
        </div>
        <div class="four-fig1">
          <a href="{{url('public')}}/assets/images/8-.jpg" class="b-link-stripe b-animate-go   swipebox" title="">
            <img src="{{url('public')}}/assets/images/22.jpg" class="img-responsive" alt=" " />
          </a>
        </div>
        <div class="clearfix"> </div>
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
</div>

@endsection