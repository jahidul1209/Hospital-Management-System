<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Single Page</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- <link rel="manifest" href="site.webmanifest"> -->
   <link rel="shortcut icon" type="image/x-icon" href="{{asset('/busicol/img/favicon.png')}}">
   <!-- Place favicon.ico in the root directory -->
<link href="{{asset('medical/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
   <!-- CSS here -->
   <link rel="stylesheet" href="{{asset('/busicol/css/bootstrap.min.css')}}">

   <link rel="stylesheet" href="{{asset('/busicol/css/style.css')}}">
   <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
   <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container navigation">
        
            <div class="navbar-header page-scroll">
                <a class="navbar-brand" href="{{ url('') }}">
                    <img src="{{URL::to('medical/img/logo.png')}}" alt="" width="150" height="40" />
                </a>

            <!-- Collect the nav links, forms, and other content for toggling -->
             
            <li style="list-style: none;
    float: right;padding: 15px;"><a href="{{ url('admin/dashboard') }}" class="text-sm text-gray-700 ">Dashboard</a></li>
            <li class="active" style="list-style: none;
    float: right;padding: 15px;"><a href="{{url('')}}">Home</a>
               </li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding" style=" padding-top: 10px;">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="{{asset('public/image/'.$posts->photo)}}"  style ="height:auto;width:100%"/>
                   
                  </div>
                  <div class="blog_details">
                     <h2>{{$posts->title}}
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> {{$posts->comments()->count()}} Comments</a></li>
                     </ul>
                     <p class="excert">
                        {{$posts->details}}
                     </p>
                  </div>
               </div>

               <div class="blog-author">
                  <div class="media align-items-center">
                     <img src="{{asset('busicol/img/blog/author.png')}}" alt="">
                     <div class="media-body">
                        <a href="#">
                           <h4> {{$posts->author}}</h4>
                        </a>
                        <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                           our dominion twon Second divided from</p>
                     </div>
                  </div>
               </div>
               <div class="comments-area">
                  <h4>{{$posts->comments()->count()}} Comments</h4>
                                    @if(session()->has('mess'))
                                    <p class="alert alert-success">
                                       {{session()->get('mess')}}
                                    </p>
                                    @endif
                  @foreach ($posts->comments as $comment)
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="img/comment/comment_1.png" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                 {{$comment->comment}}
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                 <h5>
                                 <a href="#"> {{$comment->user->name}}</a>
                                 </h5>
                                 <p class="date">{{$comment->created_at->diffForHumans()}} </p>
                                 </div>
                                 <div class="likeBtn">
                                    <a href="{{route('like',$comment->post_id)}}"><i class="fa fa-thumbs-up"></i> Like </a>
                                 </div>
<!--                                  <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                 </div> -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
                 </div> 
               <div class="comment-form">
                  <h4>Leave a Reply</h4>

                  @guest
                  <p>You need to login first  </p>
         <li><a href="{{ route('login') }}" class="text-sm text-gray-700 ">Login</a></li>
                  @else
                  <form class="form-contact comment_form" action="{{route('comment.store',$posts->id)}}" method="post">
                     @csrf
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                 placeholder="Write Comment"></textarea>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                     </div>
                  </form>
                  @endguest
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget">
                     <form action="#">
                        <div class="form-group">
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='Search Keyword'
                                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                              <div class="input-group-append">
                                 <button class="btn" type="button"><i class="ti-search"></i></button>
                              </div>
                           </div>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Search</button>
                     </form>
                  </aside>
                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Category</h4>
                     <ul class="list cat-list">
                        @foreach($allcategory as $cate)
                        <li>
                           <a href="#" class="d-flex">
                              <p>{{$cate->cat_name}}</p>
                           </a>
                        </li>
                        @endforeach
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Recent Post</h3>

                     @foreach($allpost as $post)
                     <div class="media post_item">
                        <img src="{{asset('public/image/'.$post->photo)}}"  style ="height:60px;width:60px"/>
                        <div class="media-body">
                           <a href="{{route('post.details',$post->id)}}">
                              <h3>{{$post->title}}</h3>
                           </a>
                           <p>{{$post->created_at->diffForHumans()}}</p>
                        </div>
                     </div> 
                     @endforeach                    
                  </aside>

                  <aside class="single_sidebar_widget tag_cloud_widget">
                     <h4 class="widget_title">Tag Clouds</h4>
                     <ul class="list">
                        <li>
                           <a href="#">project</a>
                        </li>
                        <li>
                           <a href="#">love</a>
                        </li>
                        <li>
                           <a href="#">technology</a>
                        </li>
                        <li>
                           <a href="#">travel</a>
                        </li>
                        <li>
                           <a href="#">restaurant</a>
                        </li>
                        <li>
                           <a href="#">life style</a>
                        </li>
                        <li>
                           <a href="#">design</a>
                        </li>
                        <li>
                           <a href="#">illustration</a>
                        </li>
                     </ul>
                  </aside>
<!--                   <aside class="single_sidebar_widget instagram_feeds">
                     <h4 class="widget_title">Instagram Feeds</h4>
                     <ul class="instagram_row flex-wrap">
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="img/post/post_5.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="img/post/post_6.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="img/post/post_7.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="img/post/post_8.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="img/post/post_9.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="img/post/post_10.png" alt="">
                           </a>
                        </li>
                     </ul>
                  </aside> -->
<!--                   <aside class="single_sidebar_widget newsletter_widget">
                     <h4 class="widget_title">Newsletter</h4>
                     <form action="#">
                        <div class="form-group">
                           <input type="email" class="form-control" onfocus="this.placeholder = ''"
                              onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Subscribe</button>
                     </form>
                  </aside> -->
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->

   <script src="{{asset('busicol/js/bootstrap.min.js')}}"></script>
   
</body>

</html>