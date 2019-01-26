<footer id="footer" class="style14">
    <!-- socialize holder -->
    <div class="socialize-holder">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <strong class="title">{{trans('lang.besocialize')}}</strong>
                    <!-- footer-social -->
                    <ul class="list-inline footer-social">
                        <li><a href="{{$main->fb}}"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{$main->tw}}"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{$main->ins}}"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="{{$main->gp}}"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="{{$main->pin}}"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="{{$main->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                         <li><a href="{{$main->tumbler}}"><i class="fa fa-tumblr"></i></a></li>
                                <li><a href="{{$main->stumble}}"><i class="fa fa-stumbleupon"></i></a></li>
 				<li><a href="{{$main->be}}"><i class="fa fa-behance"></i></a></li>
 				
 				 				<li><a href="{{$main->yt}}"><i class="fa fa-youtube"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- parallax-holder -->
        <div class="parallax-holder">
            <div class="parallax-frame"><img src="{{asset('adminstyle/assets/images/gallery/'.$main->socialphoto)}}" height="800px" width="1920px" alt="image description"></div>
        </div>
    </div>
    <!-- footer cent -->
    <div class="footer-cent bg-shark">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 info-box column1">
                    <!-- f contact info2 -->
                    <div class="f-contact-info2">
                        <h5>{{trans('lang.contactinfo')}}</h5>
                        <address><i class="fa fa-map-marker"></i> {{$main->address}}</address>
                        <address><i class="fa fa-map-marker"></i> {{$main->address2}}</address>
                        <address><i class="fa fa-map-marker"></i> {{$main->address3}}</address>


                        <div class="mail-box2">
                            <span class="mail-box"><i class="fa fa-envelope-o"></i> <a href="mailto:{{$main->email}}" class="email">{{$main->email}}</a></span>
                        </div>
                        <div class="tel-holder">
                            <span class="tel-box"><i class="fa fa-phone"></i> <a href="tel:{{$main->phone}}" class="tel">{{$main->phone}}</a></span>
                        </div>
                        <div class="mail-box2">
                            <span class="mail-box"><i class="fa fa-link"></i> <a href="{{url('/')}}" class="email">{{print url('/')}}</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 column2">
                    <!-- f video box -->
                    <div class="f-video-box">
                        <h5>{{trans('lang.companypresentation')}}</h5>
                        <div class="video-area">
                            <iframe src="{{$main->video_url}}" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 column3 clearfix-sm">
                    <!-- f mailing form2 -->
                    <div class="f-mailing-form2">
                        <h5> {{trans('lang.mailinglist')}}</h5>
                        <div class="mailing-form2">
                            <label>Please enter your email address for our mailing list to keep your self our lastest updated.</label>
                            <div class="form-col">
                                <!-- Begin MailChimp Signup Form -->
                                <div id="mc_embed_signup">
                                        {!! Form::open(array('method' => 'POST','action' => ['AjaxController@subscribe'],'files'=>true,'class' => 'ajax-form-request' )) !!}
                                        <div id="mc_embed_signup_scroll">
                                            <div class="mc-field-group">
                                                <label for="mce-EMAIL">Email Address </label>
                                                <input type="email" value="" name="email" class="required email" id="mce-EMAIL" placeholder="Email Address">
                                                <div class="message">

                                                </div>
                                            </div>
                                            <div id="mce-responses" class="clear">
                                                <div class="response" id="mce-error-response" style="display:none"></div>
                                                <div class="response" id="mce-success-response" style="display:none"></div>
                                            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div style="position: absolute; left: -5000px;"><input type="text" name="b_cb2d5a07fdf0d86c96f260674_1103b14a3b" tabindex="-1" value=""></div>
                                            <div class="clear">
                                                {!! Form::submit('<i> class="fa fa-paper-plane"> </i> ' ,array('class'=>'btn  btn-submit')) !!}

                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                                <!--End mc_embed_signup-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 column4">
                    <!-- latest news -->
                    <div class="f-lastest-news">
                        <h5>{{trans('lang.latestnews')}}</h5>
                        <!-- footer-news-box -->
                        @foreach($recent_blogs as $blog)
                        <div class="footer-news-box">
                            <div class="img-box">
                                <a href="#"><img style="width: 70px; height: 70px;" src="{{asset('admin-assets/images/blogs/'.$blog->photo)}}" alt="  @if (Session::get('local') == 'ar') {{ $blog->ar_photo_alt }} @else {{ $blog->photo_alt }} @endif"></a>
                            </div>
                            <div class="txt">
                                <p><a  @if (Session::get('local') == 'ar') href='{{url('blog/'.$blog->ar_custom_url)}}' @else href=' {{url('blog/'.$blog->custom_url)}}' @endif>  @if (Session::get('local') == 'ar') {{ $blog->ar_title }} @else {{ $blog->title }} @endif</a></p>
                                <time datetime="2015-02-02">{{ date('d M,Y',strtotime($blog->created_at)) }}</time>
                            </div>
                        </div>
                        <!-- footer-news-box -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer bottom -->
    <div class="footer-bottom bg-dark-jungle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bottom-box1">
                        <!-- footer nav -->
                        <ul class="list-inline footer-nav">
                            <li> <a href="{{url('/')}}">{{trans('lang.home')}}</a></li>
                            <li>
                                <a href="{{url('/aboutus')}}">{{trans('lang.aboutus')}}</a>
                            </li>
                            <li><a href="{{url('careers')}}">{{trans('lang.career')}}</a></li>
                            <li>
                                <a href="{{url('blogs')}}">{{trans('lang.blogs')}}</a>
                            </li>
                            
                            <li>
                                <a href="{{url('contactus')}}">{{trans('lang.contactus')}}</a>
                            </li>


                        </ul>
                        <span class="copyright">&copy; 2017 Banan Corporation -<a href="#"> Developed by MultiMega</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<div class="fa fa-chevron-up" id="gotoTop" style="display: none;"></div>
</div>
<!-- include jQuery library -->
<script type="text/javascript" src="{{url('assets-site/js/jquery-1.11.3.min.js')}}"></script>
<!-- include custom JavaScript -->
<script type="text/javascript" src="{{url('assets-site/js/jquery.main.js')}}"></script>
<!-- include JavaScript Plugins -->
<script type="text/javascript" src="{{url('assets-site/js/plugins.js')}}"></script>
<script src="{{asset('admin-assets/assets/js/')}}/ajax.js"></script>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=194948590840515";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    
   <script>
   document.addEventListener('contextmenu', event => event.preventDefault());

   
   
   </script>


</body>
</html>