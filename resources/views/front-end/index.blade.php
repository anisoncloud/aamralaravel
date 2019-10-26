@extends('front-layouts.front-app')
@section('content')
<!-- First Container -->
  <div id="slideshow" class="uh_blue_style_with_gradient" >
          
      <div class="bgback"></div>
      <div data-images="https://www.aamra.com.bd/wp-content/themes/aamra/images/" id="sparkles"></div>
      
            
      <div class = "iosSlider   zn_slideshow">
      
        <div class="slider">
          @foreach($banners as $banner)
        <div class = "item">
          <img src="{{route('/')}}/{{$banner->banner_featured_image}}" title="home-page-banner-resized-1" />
          <div class="caption style1 zn_def_anim_pos"></div>
        </div>
        @endforeach
        <!-- end item -->

        <div class = "item">
          <img src="{{route('/')}}/front-end/image/web-Silde3.jpg"  />
          <div class="caption style1 zn_def_anim_pos"></div>
        </div>
        <!-- end item -->

          <div class = "item">
            <img src="{{route('/')}}/front-end/image/very.jpg"  />
            <div class="caption style1 zn_def_anim_pos"></div>
          </div>
          <!-- end item -->
          <div class = "item">
            <img src="{{route('/')}}/front-end/image/Microsoft-Partner.jpg" title="Microsoft-Partner" />
            <div class="caption style1 zn_def_anim_pos"></div>
          </div>
          <!-- end item -->
          <div class = "item">
            <img src="{{route('/')}}/front-end/image/Oracle-Country-Partner-of-The-Year.jpg" title="Oracle-Country-Partner-of-The-Year" />
            <div class="caption style1 zn_def_anim_pos"></div>
          </div>
          <!-- end item -->
          <div class = "item">
            <a class="zn_slide_image_link" href="http://we.net.bd/" target="_blank">
              <img src="{{route('/')}}/front-end/image/WE.png" title="WE" />
            </a>
            <div class="caption style1 fromright">
              <a class="more" href="http://we.net.bd/" target="_blank">
                <img width="10" height="16" src="{{route('/')}}/front-end/iosslider/arr01.png" alt="">
              </a>
                <a class="zn_slide_image_link" href="http://we.net.bd/" target="_blank"></a>
              </div>
            </div>
            <!-- end item -->

            <div class = "item">
              <img src="{{route('/')}}/front-end/image/Professional-Development.jpg" title="Professional-Development" />
              <div class="caption style1 zn_def_anim_pos">
                <h3 class="title_big">Finest Training Facility</h3>
                <a class="more" href="#" target="_self">
                  <img width="10" height="16" src="{{route('/')}}/front-end/iosslider/arr01.png" alt="">
                </a>
                <h4 class="title_small">Committed to professional development</h4>
              </div>
            </div>
            <!-- end item -->

            <div class = "item">
              <img src="{{route('/')}}/front-end/image/Textile-Apparels.jpg" title="Textile-&-Apparels" />
              <div class="caption style1 fromright">
                <h3 class="title_big">Top Brands of Garments Machineries</h3>
                <a class="more" href="#" target="_self">
                  <img width="10" height="16" src="{{route('/')}}/front-end/iosslider/arr01.png" alt="">
                </a>
                <h4 class="title_small">State of the art technology</h4>
              </div>
            </div>
              <!-- end item -->

              <div class = "item">
                <img src="{{route('/')}}/front-end/image/Information-Technology.jpg" title="Information-Technology" />
                <div class="caption style1 zn_def_anim_pos">
                  <h3 class="title_big">Leader in E-Banking</h3>
                  <a class="more" href="#" target="_self">
                    <img width="10" height="16" src="{{route('/')}}/front-end/iosslider/arr01.png" alt="">
                  </a>
                  <h4 class="title_small">Widest IT infrastructure in the country</h4>
                </div>
              </div>
              <!-- end item -->

            </div>
            <div class="prev">
              <div class="btn-label">PREV</div>
            </div>
            <div class="next">
              <div class="btn-label">NEXT</div>
            </div>

            <div class="selectorsBlock thumbs">

                    <a href="#" class="thumbTrayButton">
                      <span class="icon-minus icon-white"></span>
                    </a>
                    <div class="selectors">
                      
                      <div class="item first selected">
                        <img src="{{route('/')}}/front-end/image/home-page-banner-resized-1-150x60.png" width="150" height="60" title="home-page-banner-resized-1"  />
                      </div>

                        <div class="item ">
                          <img src="{{route('/')}}/front-end/image/web-Silde3-150x60.jpg" width="150" height="60"   />
                        </div>

                        <div class="item ">
                          <img src="{{route('/')}}/front-end/image/very-150x60.jpg" width="150" height="60"   />
                        </div>
                        
                        <div class="item ">
                          <img src="{{route('/')}}/front-end/image/Microsoft-Partner-150x60.jpg" width="150" height="60" title="Microsoft-Partner"  />
                        </div>
                        
                        <div class="item ">
                          <img src="{{route('/')}}/front-end/image/Oracle-Country-Partner-of-The-Year-150x60.jpg" width="150" height="60" title="Oracle-Country-Partner-of-The-Year"  />
                        </div>
                        
                        <div class="item ">
                          <img src="{{route('/')}}/front-end/image/WE-150x60.png" width="150" height="60" title="WE"  />
                        </div>
                        
                        <div class="item ">
                          <img src="{{route('/')}}/front-end/image/Professional-Development-150x60.jpg" width="150" height="60" title="Professional-Development"  />
                        </div>
                        
                        <div class="item ">
                          <img src="{{route('/')}}/front-end/image/Textile-Apparels-150x60.jpg" width="150" height="60" title="Textile-&-Apparels"  />
                        </div>
                        
                        <div class="item ">
                          <img src="{{route('/')}}/front-end/image/Information-Technology-150x60.jpg" width="150" height="60" title="Information-Technology"  />
                        </div>  

                      </div>
                  </div>
                </div><!-- end iosSlider -->
            <!-- <div class="scrollbarContainer"></div> -->
      
    <!--   <div class="zn_header_bottom_style"></div> --><!-- header bottom style -->      
            
        </div><!-- end slideshow -->
    
    <!-- <div class="zn_fixed_slider_fill"></div> -->

    <div class="" id="action" data-arrowpos="center">
        <div class="container">
          <div class="row">
            
            
          </div>
        </div>
      </div><!-- end action box -->




<!-- Third Container (Grid) -->
<div class="container pad_50">    
  <div class="row">

    <div class="col-md-4 box"> 
      <a href="information-technology.php" class="borderH"> 
      <span class="borderHWrapper"> 
        <img src="https://www.aamra.com.bd/wp-content/uploads/2013/01/INFORMATION-TECHNOLOGY.png" class="img-responsive " alt="Image">
        <span class="borderHover"> </span>
      </span>
      <h6>Read More +</h6>
      </a>
      <h3>INFORMATION TECHNOLOGY</h3>
      <p>aamra is a pioneer in the Information and Communication Technology industry of Bangladesh, having launched their computer and network services back in 1987.</p>
    </div>


    <div class="col-md-4 box"> 
      <a href="textile-apparels.php" class="borderH"> 
      <span class="borderHWrapper"> 
        <img src="https://www.aamra.com.bd/wp-content/uploads/2013/01/TEXTILE-APPARELS.png" class="img-responsive " alt="Image">
        <span class="borderHover"> </span>
      </span>
      <h6>Read More +</h6>
      </a>
      <h3>TEXTILE & APPARELS</h3>
      <p>aamra started business in the booming Textile & Apparels sector & deals with a varied range of State-of-the-Art products and services to meet the demands in local and international markets.</p>
    </div>



    <div class="col-md-4 box"> 
      <a href="professional-development.php" class="borderH"> 
      <span class="borderHWrapper"> 
        <img src="https://www.aamra.com.bd/wp-content/uploads/2013/01/PROFESSIONAL-DEVELOPMENT.png" class="img-responsive " alt="Image">
        <span class="borderHover"> </span>
      </span>
      <h6>Read More +</h6>
      </a>
      <h3>PROFESSIONAL DEVELOPMENT</h3>
      <p>aamra has come forward to explore the rising business prospects of the Lifestyle Services sector. Our world-class fitness centre is equipped with State-of-the-Art equipment.</p>
    </div>



  </div>
</div>



<!-- Second Container -->
<div class="container-fluid pad_50 greyBG">
  <div class="container">
  <div class="row">

    <div class="col-md-8">
      <div class="row verticalTab">
        
        <div class="col-md-3 vtButton">
          <ul class="nav nav-pills nav-stacked">
            <li class="active">
              <a data-toggle="pill" href="#home">           
              <i class="fa fa-check-square-o" aria-hidden="true"></i>
              COMMITMENT</a>
            </li>
          </ul>
        </div>
        
        <div class="col-md-9">
          <div class="tab-content verticalTabPad">
            <div id="home" class="tab-pane fade in active">
              <h4>COMMITMENT</h4>
              <p>aamra has always functioned with a keen interest and dedication to preserve the welfare of the communities it serves.Our executives have the experience and knowledge to get your company the most qualified and....<a href="#">Read More</a></p>
            </div>            
          </div>
        </div>

      </div>
    </div>

    <div class="col-md-4 box press" style="padding: 0 30px;">

      <h3 style="margin-top: 0;">PRESS RELEASE</h3>
      <a class="viewAll" href="news.php">VIEW ALL -</a>

      <ul>
        <li>
            <h4><a href="newsDetails.php">INFORMATION TECHNOLOGY</a></h4>
            <p>{{ $posts->post_title }}</p>

        </li>
      </ul>

    </div>

  </div>
</div>
</div>

@endsection
