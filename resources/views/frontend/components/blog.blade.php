<style type="text/css">
  .note-video-clip {
    width: 100% !important;
  }

  .MsoNormal a {
    color: red !important;
  }

  .MsoNormal a font {
    color: red !important;
  }

  .MsoNormal a font:hover {
    color: #b56308 !important;
  }

  .MsoNormal a:hover {
    color: #b56308 !important;
  }

  .article-details-content-main a {
    color: red !important;
  }

  .article-details-content-main a:hover {
    color: #b56308 !important;
  }

  .article-details-content-main .fa_icon {
    color: #fff !important;
  }

  .d-block.rounded {
    color: #fff !important;
  }


  /* comment section start */
  .comment-section {
    background: #fff !important;
    padding: 30px 0px;
  }

  .comments-section-main {
    max-width: 600px;
    margin: 0 auto;
  }

  .comment {
    background-color: #fff;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    border-radius: 8px;
    padding: 12px;
    margin-top: 16px;

  }

  .comment:first-child {
    margin-top: 0px;
  }

  .user {
    font-weight: bold;
    color: #1877f2;
    /* Facebook blue color */
  }

  .comment-content-main {
    max-height: 600px;
    overflow: auto;
    margin-top: 5px;
    padding: 15px;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    border-radius: 5px;
  }

  .content {
    margin-top: 6px;
    margin-bottom: 6px;
  }

  .actions {
    margin-top: 10px;
  }

  .actions a {
    margin-right: 10px;
    text-decoration: none;
    color: #65676b;
    /* Facebook gray color */
  }

  .actions a:hover {
    color: #1877f2;
    /* Facebook blue color on hover */
  }

  .replies {
    margin-top: 10px;
    margin-left: 20px;
  }

  .reply {
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    border-radius: 8px;
    padding: 8px;
    margin-top: 10px;
  }

  .reply .user {
    font-weight: bold;
    color: #1877f2;
    /* Facebook blue color */
  }

  .reply .content {
    margin-top: 6px;
  }

  .comment-form {
    position: relative;
    margin-bottom: 20px;
  }

  .comment-textarea {
    overflow: auto;
    resize: none;
    width: 100%;
    border: 1px solid lightgray;
    resize: none;
    padding: 10px 40px 15px 15px;
    border-radius: 5px;
    outline: none;
    box-shadow: none;
  }

  /* .send-comment-btn {
    border: none;
    box-shadow: none !important;
    outline: none !important;
    background: transparent;
    height: 35px;
    width: 35px;
    position: absolute;
    right: 5px;
    top: 5px;
    cursor: pointer;
  } */
  .send-comment-btn {
    border: none;
    box-shadow: none !important;
    outline: none !important;
    padding: 7px 15px;
    cursor: pointer;
    border-radius: 5px;
    background: #0B6D76;
    color: #fff !important;
    max-width: max-content;
    margin-top: 10px;
    margin-bottom: 20px;
  }

  .send-icon {
    height: 100%;
    width: 100%;
    object-fit: contain;
  }

  .comment-header {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
  }

  .comment-user-name {
    font-size: 18px;
    font-weight: 600;
    color: #0B6D76;
  }

  .somment-user-profile-main {
    font-size: 20px;
    font-weight: 400;
    color: #0B6D76;
    text-transform: capitalize;
    height: 40px;
    width: 40px;
    border-radius: 50%;
    margin-right: 8px;
  }

  .profile-image {
    height: 100%;
    width: 100%;
    object-fit: cover;
  }

  .action-button {
    font-weight: 300;
    color: black;
    display: inline-block;
    padding: 3px 8px;
    border: none !important;
    outline: none !important;
    box-shadow: none !important;
    font-size: 14px;
    border-radius: 5px;
    background: #f8f9fa;
    cursor: pointer;
  }

  .action-button:hover {
    background: #0B6D76;
    color: #fff !important;
  }

  .reply-form {
    position: relative;
  }

  .reply-textarea {
    overflow: auto;
    resize: none;
    width: 100%;
    border: 1px solid lightgray;
    resize: none;
    padding: 10px 40px 15px 15px;
    border-radius: 5px;
    outline: none;
    box-shadow: none;
  }

  .send-reply-btn {
    border: none;
    box-shadow: none !important;
    outline: none !important;
    background: transparent;
    height: 35px;
    width: 35px;
    position: absolute;
    right: 5px;
    top: 5px;
    cursor: pointer;
  }
  
  .artical-image-container{
      padding:15px 10px;
      margin-top: 5px;
  }
.artical-image{
    object-fit: contain;
}
.pagination-main{
    overflow:auto;
}

@media (min-width: 300px) and (max-width: 575px) {
.relavent-blog-main-category{
  padding-left: 0px !important;
  max-width: 100%;
} 
  .blog-detail-righ-section{
      max-width:100% !important;
      padding-left:0px !important;
  }
}
</style>

{{-- free-consultation-model --}}



@if(!in_array(request()->path(), pluckBlog()))

<div class="text-center firstsection">
  <h1>Search Here Blogs Articles</h1>
  <p>Browse, explore, Request Information from Articles.</p>
  <div class="universities-form-main">
    <form class="mb-1" action="{{ route('blog.search') }}" method="GET">
      <div class="universities-form-block">
        <input type="text" name="keyword" class="form-control uni-search searchform2" placeholder="Search..." autocomplete="Off">
        <button type="submit" class="Searchbtn2"><i class="fa fa-search"></i></button>
      </div>
    </form>
    <div style="position: absolute;" class="is-dropdown w-100 u-maxw-680px bg-white u-boxShadow-light d-none search-uni scroll2"></div>
  </div>
</div>
<div class="po_un_col1 my-5 left-heading-container">
  <div class="section-left-heading-block">
    <h3 class="section-heading ">latest
      <span class="section-heading-span">articles</span>
    </h3>
    <!-- <p class="section-paragraph section-heading-paragraph">Stay updated on universities and courses with our insightful articles. Explore academic trends, institution profiles, and career advice to guide your educational journey.</p> -->
  </div>
</div>
<div class="container" style="border: 1px solid grey; padding: 15px; background: #0B6D76; border-radius: 5px; margin-bottom:20px;">
  <ul class="list-group list-group-horizontal mt-0" style="display: table;">
    @foreach(getBlogCategories() as $cate)
    <li class="list-group-item" style="display: inline; background: #0B6D76;"><a style="color: white !important;" href="{{(url($cate->slug))??''}}">{{$cate->name}}</a></li>
    @endforeach
  </ul>
</div>
<div class="container">
  <!-- <div class="text-center firstsection">
    <h1>Search Here Blogs Articles</h1>
    <p>Browse, explore, Request Information from Articles.</p>
    <div class="universities-form-main">
      <form class="mb-1" action="{{ route('blog.search') }}" method="GET">
        <div class="universities-form-block">
          <input type="text" name="keyword" class="form-control uni-search searchform2" placeholder="Search..." autocomplete="Off">
          <button type="submit" class="Searchbtn2"><i class="fa fa-search"></i></button>
        </div>
      </form>
      <div style="position: absolute;" class="is-dropdown w-100 u-maxw-680px bg-white u-boxShadow-light d-none search-uni scroll2"></div>
    </div>
  </div> -->

  <div class="row blog-main-row pb-5">
    @php
    $paginate = (isset($meta['paginate']))?$meta['paginate']:0;
    $category = (isset($blog->id))?$blog->id:null;
    @endphp
    @if(count(getBlogs(0,$category))>0)
    @foreach(popularBlog() as $blog)
    <div class="article-card-main col-sm-6">
      <a href="{{url(($blog->slug)??'#')}}" class="slug-link">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pl-0 pr-0">
            <div class="imgcol artical-image-container">
              <img class="card-img-top artical-image" width="100%" height="100%" alt="<?php echo $blog->title; ?>" src="{{url(($blog->image)??'#')}}" >
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
            <div class="colmd12 textcol">
              <div class="blog-content-main article-main-content-container">
                <h3>{{($blog->title)??''}}</h3>
                <p>{!!($blog->short_description)??''!!}</p>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
    @endforeach



    <?php $check_count = 0; ?>
    {{-- @foreach(getBlogs($paginate,$category) as $blog) --}}
    @foreach(getBlogs(9,$category) as $blog)
    @if($blog->is_featured == 0)
    <?php if ($check_count == 0) { ?>
      <div class="article-card-main  col-sm-6">
        <a href="{{url(($blog->slug)??'#')}}">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pl-0 pr-0">
              <div class="imgcol artical-image-container">
                <img class="card-img-top artical-image" width="100%" height="100%" alt="<?php echo $blog->title; ?>" src="{{url(($blog->image)??'#')}}">
              </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
              <div class="colmd12 textcol">
                <div class="blog-content-main article-main-content-container">
                  <h3>{{($blog->title)??''}}</h3>
                  <p>{!!($blog->short_description)??''!!}</p>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    <?php $check_count = 1;
    } else { ?>
      <div class="article-card-main  col-sm-6 ">
        <a href="{{url(($blog->slug)??'#')}}">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pl-0 pr-0">
              <div class="imgcol artical-image-container">
                <img class="card-img-top artical-image" width="100%" height="100%" alt="<?php echo $blog->title; ?>" src="{{url(($blog->image)??'#')}}">
              </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
              <div class="colmd12 textcol">
                <div class="blog-content-main article-main-content-container">
                  <h3>{{($blog->title)??''}} </h3>
                  <p>{!!($blog->short_description)??''!!}</p>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
  
    

     
    <?php  } ?>

    

@endif
    @endforeach


    <div class="col-sm-12 mt-5" style="display: inline-block; margin:40px auto 40px; max-width:max-content;">
      {{-- @if(count(getBlogs($paginate,$category))>0 && $paginate !== 0 && count(getBlogs($paginate,$category))<count(getBlogs(0,$category))) <nav class="Page navigation pagination-main" aria-label="Page navigation">
        <ul class="pagination small blogs-pagination">
          @php
          $result = getBlogs($paginate,$category);
          $count=$result->lastPage()+1;
          @endphp
          @if($result->currentPage()!=1)<li class="page-item active"><a class="page-link" href="{{$result->url(1)}}"><i class="fa fa-chevron-left"></i></a></a></li>@endif
          @for($i=1; $i<$count; $i++) <li class={{($result->currentPage()==$i)?'active page-item':'page-item'}}>
            <a class="page-link " href="{{$result->url($i)}}">{{$i}}
              {!!($result->currentPage()==$i)?'<span class="sr-only">(current)</span>':''!!}
            </a>
            </li>
            @endfor
            @if($result->currentPage()!=$result->lastPage())<li class="page-item active"><a class="page-link" href="{{$result->url($result->lastPage())}}"><i class="fa fa-chevron-right"></i></a></a></li>@endif
        </ul>
        </nav>
        @endif --}}

        
      <div class="mx-auto  pagination-container mt-4">
        {{getBlogs(9,$category)->links('pagination::bootstrap-4')}}
      </div>
    </div>
    @else
    <p style="margin-top: 50px;text-align: center;color: #919191;font-size: 22px;">No Blog Posted</p>
    @endif
  </div>
</div>
@else
@php $categoryId = $blog->category_id ; $blogId = $blog->id; @endphp


<style>
  
  
  
  .blog-detail-righ-section{
    width:100% !important;
    max-width:30%;
    height: max-content;
    position: sticky;
    top: 0;
    padding-left: 30px
  }
  

  .blog-detail-righ-section .relavent-blog-main-category{
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    margin: 15px 0 auto;
  }

  .relavents-blog-card-body{
    text-align: left !important;
    border: none !important;
  }

  

  .relavents-blog-card-body .card-title{
    font-size: 18px;
    line-height: 20px !important;

  }

  

  .relavents-blog-card-body .card-text{
    font-size: 14px !important;
    text-align: left;
    line-height: 18px !important;
    text-transform: capitalize;
  font-weight: lighter;

  }



  .relavents-blog-card-body .relavent-card-button{
    color: white !important;
    font-size:  12px;
  }

  a.relavent-card-button:hover{
    color: white !important;
    font-size:  12px;
    background-color:black !important;
  }

  .blog-detail-left-main-container{
    max-width: 100%
  }

  
@media (min-width: 300px) and (max-width: 575px) {
.relavent-blog-main-category{
  padding-left: 30px;
  max-width: 100%;
} 

  </style>



<div class="o-2colLayout container">
  <main class="o-2colLayout-content blog-detail-left-main-container mr-md-5">
    <header class="pt-5 pb-3 articles-details-header">
      <h1 class="m-0 article-details-heading">{{$blog->title}}</h1>
      <p class="text-muted article-details-header-paragraph">
        By <strong>{{getAuthorName($blog->user_id)}}</strong> |
        Last modified {{date('dS M Y', strtotime($blog->updated_at))}}
      </p>
    </header>


    <!--<section class="mb-4">-->
    <!--  <div class="d-lg-none">-->
    <!--    <div class="js-share u-pointer u-small95">-->

    <!--      <strong class="text-primary">Share this page with friends</strong>-->
    <!--    </div>-->
    <!--    <aside class="c-share">-->
    <!--      <div class="c-share-body is-onTrigger bg-light rounded u-boxShadow-light h4 p-2">-->
    <!--        <a href="http://www.facebook.com/sharer.php?u={{Request::url()}}"><i class="fa fa-facebook-official u-text-facebook"></i></a>-->
    <!--        <a href="https://twitter.com/intent/tweet?text={{str_replace(" ", "+", $blog->title)}}&amp;url={{Request::url()}}"><i class="fa fa-twitter u-text-twitter"></i></a>-->
    <!--        <a href="https://plus.google.com/share?url={{Request::url()}}&amp;name={{str_replace(" ", "+", $blog->title)}}"><i class="fa fa-google-plus u-text-google-plus"></i></a>-->
    <!--      </div>-->
    <!--    </aside>-->
    <!--  </div>-->
    <!--  <div class="d-none d-lg-flex flex-wrap"> -->
    <!--      <a href="http://www.facebook.com/sharer.php?u={{Request::url()}}" class="d-block text-white rounded p-2 mx-1 mb-2 u-bg-facebook">-->
    <!--        <i class="fa fa-lg fa-facebook-official"></i> Share on Facebook-->
    <!--      </a>-->
    <!--      <a href="https://twitter.com/intent/tweet?text={{str_replace(" ", "+", $blog->title)}}&amp;url={{Request::url()}}" class="d-block text-white rounded p-2 mx-1 mb-2 u-bg-twitter" ><i class="fa fa-lg fa-twitter"></i> Twitter</a>-->
    <!--      <a href="https://plus.google.com/share?url={{Request::url()}}&amp;name={{str_replace(" ", "+", $blog->title)}}" class="d-block text-white rounded p-2 mx-1 mb-2 u-bg-google-plus" style="background: #e60303;"><i class="fa fa-lg fa-google-plus"></i> Google</a>-->
    <!--  </div>-->
    <!--</section>-->
    <style>
      .socilaMediaIconSize {
        font-size: 2rem;
      }
    </style>

    <section class="container mb-3">
      <div class="d-lg-none">
        <div class="js-share u-pointer u-small95">
          <a href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}/"><i class="fa fa-facebook-official u-text-facebook socilaMediaIconSize"></i></a>
          <a href="https://twitter.com/home?status={{Request::url()}}/"><i class="fa fa-twitter u-text-twitter socilaMediaIconSize"></i></a>
          <a href="https://wa.me/?text={{Request::url()}}"><i class="fa fa-whatsapp u-text-whatsapp socilaMediaIconSize"></i></a>
          <a href="https://plus.google.com/share?url={{Request::url()}}&amp;name={{str_replace(" ", "+", $blog->title)}}"><i class="fa fa-google-plus u-text-google-plus socilaMediaIconSize"></i></a>
          <strong class="text-primary">Share this page with friends</strong>
        </div>
        <aside class="c-share">
          <div class="c-share-body is-onTrigger bg-light rounded u-boxShadow-light h4 p-2">
            <a class="fa-stack u-text-facebook" href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}/">
              <i class="fa fa-square fa-stack-2x"></i>
              <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
            </a>
            <a class="fa-stack u-text-twitter" href="https://twitter.com/home?status={{Request::url()}}/">
              <i class="fa fa-square fa-stack-2x"></i>
              <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
            </a>
            <a class="fa-stack u-text-whatsapp" href="https://wa.me/?text={{Request::url()}}">
              <i class="fa fa-square fa-stack-2x"></i>
              <i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
            </a>
          </div>
        </aside>
      </div>
      <div class="d-none d-lg-flex flex-wrap">
        <a class="d-block text-white rounded p-2 mx-1 mb-2 u-bg-facebook" href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}/">
          <i class="fa fa-lg fa-facebook-official"></i> Share on Facebook
        </a>
        <a class="d-block text-white rounded p-2 mx-1 mb-2 u-bg-twitter" href="https://twitter.com/home?status={{Request::url()}}/">
          <i class="fa fa-lg fa-twitter"></i> Twitter
        </a>
        <a class="d-block text-white rounded p-2 mx-1 mb-2 u-bg-whatsapp" href="https://wa.me/?text={{Request::url()}}">
          <i class="fa fa-lg fa-whatsapp"></i> WhatsApp
        </a>
        <a href="https://plus.google.com/share?url={{Request::url()}}&amp;name={{str_replace(" ", "+", $blog->title)}}" class="d-block text-white rounded p-2 mx-1 mb-2 u-bg-google-plus" style="background: #e60303;"><i class="fa fa-lg fa-google-plus"></i> Google</a>
      </div>
    </section>
    <section class="s-content clearfix mb-4">
      <div class="article-details-content-main">
        {!! $blog->description !!}
      </div>
    </section>

    <section class="small text-muted mb-4">
      <div>
        <i class="fa fa-calendar"></i>
        Posted on {{date('dS M Y', strtotime($blog->created_at))}}
      </div>
      <div>
        <i class="fa fa-tag"></i>
        <a href="{{url(($blog->category->slug)??'#')}}">{{$blog->category->name}}</a>
      </div>
    </section>
    @section('schemaMarkup')

    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
          <?php
          $question = json_decode($blog->sm_question);
          $answer = json_decode($blog->sm_answer);
          $count =  count($question);
          if ($count > 0) {
            for ($i = 0; $i < $count;) { ?> {
                "@type": "Question",
                "name": "{{ $question[$i] }}",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "{{ $answer[$i] }}"
                }

              <?php echo ($i === ($count - 1)) ? '}' : '},';
              $i++;
            }
          }
              ?>

              ]
        }
    </script>

    @endsection

    <section class="mb-4">
      <div id="fb-root"></div>
      <div class="fb-comments" data-href="https://www.easyuni.com/advice/8_Lessons_from_Failure-2442/" data-num-posts="2" data-width="100%"></div>
    </section>

    <!-- added by sadam start --->
    <section class="mb-5">
      <h4 class="mb-3">You might be interested in...</h4>
      <div class="row">
        <?php
        $randomArticle = DB::table('blogs')->select('title', 'slug')->inRandomOrder()->limit(8)->get();
        ?>
        @if(count($randomArticle)>0)
        @foreach($randomArticle as $key=> $article)
        @php
        $c='primary';
        $r=rand(1,3);
        if($r==1){$c='primary';}elseif($r==2){$c='success';}
        elseif($r==3){$c='info';}
        @endphp
        <!--<article class="col-md-6 border-top border-bottom u-mb-n1px px-3">-->
        <article class="col-md-6 border-top  u-mb-n1px px-3">
          <a class="row" href="{{url($article->slug)}}">
            <div class="col-2 h2 o-flex-center rounded text-white bg-{{$c}} py-1 my-3">
              {{$key+1}}
            </div>
            <div class="col my-3">{{$article->title}} </div>
          </a>
        </article>
        @endforeach
        @endif


      </div>
    </section>
    <!-- end add by sadam -->
    <input type="hidden" id="blog-id" value="{{$blog->id}}">
    <!-- comment section start here -->
    <section class="comment-section mb-5">
      <div class="container">
        <div class="comments-section-main">
          <!-- Comment Form -->
          <div class="comment-form">
            @if (session('success'))
            <div class="alert alert-success" role="alert">
              {{ session('success') }}
            </div>
            @endif

            <h4 class="for-heading" id="form-heading" style="color: #65676b;; margin-bottom:20px; padding-bottom:12px; border-bottom:1px solid rgba(0,0,0,.15);">Add Your Comment</h4>
            <form id="comment_form" method="POST" action="{{ route('comment-store') }}">
              {{ csrf_field() }}
              <input type="hidden" name="article_id" value="{{$blog->id}}" class="form-blog-id">
              <input type="hidden" name="article_url" class="article_url" id="article_url" value="">
              <input type="hidden" value="">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="name">First Name</label>
                    <input type="text" class="form-control" name="first_name" required aria-describedby="emailHelp" placeholder="Enter Your First Name" value="{{ old('first_name') }}">
                    @if ($errors->has('first_name'))
                    <div class="invalid-feedback">{{ $errors->first('first_name') }}</div>
                    @endif
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" aria-describedby="emailHelp" placeholder="Enter Your Last Name">
                    @if ($errors->has('last_name'))
                    <div class="invalid-feedback">{{ $errors->first('last_name') }}</div> <!-- Error: Missing closing parenthesis -->
                    @endif
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Your Email">
                    @if ($errors->has('email'))
                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                    @endif
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="number" class="form-control" id="phone_number" name="phone_number" aria-describedby="emailHelp" placeholder="Enter Your Phone Number">
                    @if ($errors->has('phone_number'))
                    <div class="invalid-feedback">{{ $errors->first('phone_number') }}</div>
                    @endif
                  </div>
                </div>
                <div class="col-sm-12">
                  <textarea class="comment-textarea" name="comment" cols="12" rows="5" placeholder="Write a comment...">{{ old('comment') }}</textarea>
                  @if ($errors->has('comment'))
                  <div class="invalid-feedback">{{ $errors->first('comment') }}</div>
                  @endif
                  <!-- <button class="send-comment-btn">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet" class="send-icon">
                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#0B6D76" stroke="none">
                        <path d="M4755 5113 c-41 -11 -4522 -1454 -4562 -1469 -57 -21 -129 -87 -161
                    -148 -36 -70 -38 -188 -4 -257 25 -52 82 -113 127 -137 17 -8 433 -149 925
                    -314 l894 -298 56 39 c349 243 1598 1109 1609 1116 20 12 54 62 -559 -815
                    -306 -437 -564 -807 -574 -822 -18 -27 -18 -28 279 -920 164 -491 306 -909
                    315 -928 25 -49 84 -105 139 -132 69 -34 187 -32 257 4 61 32 127 104 148 161
                    9 23 343 1057 743 2297 692 2148 727 2259 727 2330 1 122 -55 214 -160 266
                    -53 26 -153 40 -199 27z" />
                    </g>
                </svg>
            </button> -->
                  <button type="submit" class="send-comment-btn">Comment</button>
                </div>
              </div>
            </form>
            <form id="reply_form" method="POST" action="{{route('comment-reply')}}" style="display: none;">
              {{ csrf_field() }}
              <input type="hidden" name="parent_comment_id" value="">
              <input type="hidden" name="article_id" value="{{$blog->id}}" class="form-blog-id">
              <input type="hidden" name="article_url" class="article_url" id="article_url" value="">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="name">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="first_name" required aria-describedby="emailHelp" placeholder="Enter Your First Name" value="{{ old('first_name') }}">
                    @if ($errors->has('first_name'))
                    <div class="invalid-feedback">{{ $errors->first('first_name') }}</div>
                    @endif
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="name">Last Name</label>
                    <input type="text" class="form-control" id="lasttName" name="last_name" aria-describedby="emailHelp" placeholder="Enter Your Last Name">
                    @if ($errors->has('last_name'))
                    <div class="invalid-feedback">{{ $errors->first('last_name') }}</div> <!-- Error: Missing closing parenthesis -->
                    @endif
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Your Email">
                    @if ($errors->has('email'))
                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                    @endif
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="number" class="form-control" id="phone_number" name="phone_number" aria-describedby="emailHelp" placeholder="Enter Your Phone Number">
                    @if ($errors->has('phone_number'))
                    <div class="invalid-feedback">{{ $errors->first('phone_number') }}</div>
                    @endif
                  </div>
                </div>
                <div class="col-sm-12">
                  <textarea class="comment-textarea" name="comment" cols="12" rows="5" placeholder="Write a comment...">{{ old('comment') }}</textarea>
                  @if ($errors->has('comment'))
                  <div class="invalid-feedback">{{ $errors->first('comment') }}</div>
                  @endif
                  <!-- <button class="send-comment-btn">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet" class="send-icon">
                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#0B6D76" stroke="none">
                        <path d="M4755 5113 c-41 -11 -4522 -1454 -4562 -1469 -57 -21 -129 -87 -161
                    -148 -36 -70 -38 -188 -4 -257 25 -52 82 -113 127 -137 17 -8 433 -149 925
                    -314 l894 -298 56 39 c349 243 1598 1109 1609 1116 20 12 54 62 -559 -815
                    -306 -437 -564 -807 -574 -822 -18 -27 -18 -28 279 -920 164 -491 306 -909
                    315 -928 25 -49 84 -105 139 -132 69 -34 187 -32 257 4 61 32 127 104 148 161
                    9 23 343 1057 743 2297 692 2148 727 2259 727 2330 1 122 -55 214 -160 266
                    -53 26 -153 40 -199 27z" />
                    </g>
                </svg>
            </button> -->
                  <button type="submit" class="send-comment-btn">Reply</button>
                </div>
              </div>
            </form>
          </div>

          <div class="comment-content-main">
           

            <div id="alert_container"></div>

            <div id="comments_container" class="comments-main">


              @if ($comments->isNotEmpty())
              @foreach ($comments as $comment)
              <div class="comment">
                <div class="comment-header">
                  <span class="somment-user-profile-main">
                    <img src="{{asset('assets_frontend/images/new-images/placeholder.png')}}" alt="" srcset="" class="profile-image">
                  </span>
                  <span class="comment-user-name">
                    {{ $comment->first_name }} {{ $comment->last_name }}
                  </span>
                </div>
                <div class="content">{{ $comment->comment }}</div>
                <div class="actions comments-main">
                  <a href="#" class="reply-button action-button" data-comment-id="{{$comment->comment_id}}">Reply</a>
                </div>
                @foreach ($comment->replies as $reply)
                <div class="replies comments-main" style="margin-top: 30px;">
                  <div class="reply">
                    <div class="comment-header">
                      <span class="somment-user-profile-main">
                        <img src="{{asset('assets_frontend/images/new-images/placeholder.png')}}" alt="" srcset="" class="profile-image">
                      </span>
                      <span class="comment-user-name">
                        {{ $reply->first_name }} {{ $reply->last_name }}
                      </span>
                    </div>
                    <div class="content">{{ $reply->comment }}</div>
                    <div class="actions">
                      <a href="#" class="reply-button action-button" data-comment-id="{{$reply->parent_comment_id}}">Reply</a>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
              @endforeach
              @else
              <p>No comments found.</p>
              @endif
            </div>


            <!-- <div class="comment">
              <div class="comment-header">
                <span class="somment-user-profile-main">
                  <img src="{{asset('assets_frontend/images/new-images/placeholder.png')}}" alt="" srcset="" class="profile-image">
                </span>
                <span class="comment-user-name">
                  John Doe
                </span>
              </div>
              <div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
              <div class="actions">
                <a href="#" class="reply-button action-button">Reply</a>
              </div>
              <div class="replies" style="margin-top: 30px;">
                <div class="reply">
                  <div class="comment-header">
                    <span class="somment-user-profile-main">
                      <img src="{{asset('assets_frontend/images/new-images/placeholder.png')}}" alt="" srcset="" class="profile-image">
                    </span>
                    <span class="comment-user-name">
                      John Doe
                    </span>
                  </div>
                  <div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                  <div class="actions">
                    <a href="#" class="reply-button action-button">Reply</a>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- More comments can go here -->

          </div>
        </div>
      </div>
    </section>
    <!-- comment section end here -->

  </main>

<aside class="o-2colLayout-sidebar blog-detail-righ-section">
  
  <!--<div class="row">-->
  <!--  <div class="col-lg-12">-->
  <!--    <a href="{{ url('blog') }}" class="btn btn-dark" style="float: right ; margin-right: 50px ; color:white !important"> Go Back</a>-->
  <!--  </div>-->
  <!--</div>-->
    <section class="mb-4">
      <h5 class="mb-3">Related Articles</h5>
      @php $releventBlogs = getBlogWithCategory($categoryId , $blogId) @endphp
      @if(count($releventBlogs) > 0)
      @foreach($releventBlogs as $blogData)
      <div class="card relavent-blog-main-category">
        <img class="card-img-top artical-image" width="100%" height="100%" alt="<?php echo $blog->title; ?>" src="{{url(($blogData->image)??'#')}}">
        <div class="card-body relavents-blog-card-body">
          <h5 class="card-title"> {{ $blogData['title'] }}</h5>
          <p class="card-text"> {{ \Illuminate\Support\Str::limit($blogData['short_description'], 100 ,  '...') }} </p> 
          <a href="{{url(($blogData['slug'])??'#')}}" class="btn btn-primary relavent-card-button"> View Details</a>
        </div>
      </div>
      @endforeach
      @else
      @php $releventBlogs = getFirstBlogWithCategory($categoryId) @endphp
      @foreach($releventBlogs as $blogData)
      <div class="card relavent-blog-main-category">
        <img class="card-img-top artical-image" width="100%" height="100%" alt="<?php echo $blog->title; ?>" src="{{url(($blogData->image)??'#')}}">
        <div class="card-body relavents-blog-card-body">
          <h5 class="card-title"> {{ $blogData['title'] }}</h5>
          <p class="card-text"> {{ \Illuminate\Support\Str::limit($blogData['short_description'], 100 , '...') }} </p>
          <a href="{{url(($blogData['slug'])??'#')}}" class="btn btn-primary relavent-card-button"> View Details</a>
        </div>
      </div>
      @endforeach
     
      @endif
    </section>

    {{-- <section class="o-flex-colCenter mb-5">
        <div class="o-ad-heading invisible">Advertisement</div>
        <div id="dfpAd--300x250--1" class="is-initCollapsed"></div>
      </section> --}}

  </aside>
</div>

<div style="clear: both;"></div>
<script>


  $(document).ready(function(){
    
        
//   function showModal() {
//               $('#modal-property-languages').fadeIn(); // Show the modal
//               $('#modal-property-languages').modal('show'); // Bootstrap method to show the modal
//           }
  
//           const articleModelStatus = 'articleFlag';  // Correctly spelled key
//   // const articleFlag = 'false';  // This is the value to be stored
  
//   if (localStorage.getItem(articleModelStatus) === null) {
//     // If the value does not exist, set it to 'false'
//     const articleFlag = 'false';  // Initial value
//     localStorage.setItem(articleModelStatus, articleFlag);
// }



//   // Save to local storage
//   // localStorage.setItem(articleModelStatus, articleFlag);
//       // Step 2: Retrieve the value
//       const articleFlagStatus = localStorage.getItem(articleModelStatus);
//       // Step 3: Use the retrieved value
//       if (articleFlagStatus === 'false') {
//       setInterval(function() {
//         showModal();
//         }, 20000); // 20000 milliseconds = 20 seconds
//     } 
  
  
    $('#student-free-consultation-form').on('submit' , function(e){
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
                      url: '{{ route('submit-consultation-form') }}', // Set this to your backend route
                      method: 'POST',
                      data: formData,
                      contentType: false, // Needed for FormData
                      processData: false, // Prevent jQuery from processing data
                      headers: {
              'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
                      success: function(response) {
                            // Handle success - show a message, etc.
                          $('#student-free-consultation-form')[0].reset(); // Reset the form

                          // Set the local storage flag to true upon success
                          const articleModelStatus = 'articleFlag';  // Key for local storage
                          const articleFlag = 'true';  // New value to be stored (true)
                          localStorage.setItem(articleModelStatus, articleFlag);

                          $('#modal-property-languages').modal('hide'); 
                        //   alert('Free Consultation Request has been send successfully');
                          location.reload()              

                          // Show a success message or perform other actions
                            
                      },
                      error: function(xhr, status, error) {
  
                          console.log(error)
                          var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : error;
                          alert('An error occurred: ' + errorMessage);
                          
                      }
                  });
    })
  
  });
  
  
      
        </script>
@endif


<div class="modal " id="apply_now_form" data-toggle="modal">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <strong class="modal-title"> <span class="font-weight-light">Apply Now</span></strong>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <style>
        .input {
          margin-bottom: 10px;
        }

        .btn {
          background-color: #0A74B9;
          color: white;
        }
      </style>
      <form id="apply_now_form_data">
        {{csrf_field()}}
        <div class="modal-body">
          <div class="row input">
            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
            </div>
            <div class="col-md-6">
              <input type="text" name="phone_number" class="form-control" placeholder="Enter Your Phone Number ">
            </div>
          </div>
          <div class="row input">
            <div class="col-md-6">
              <input type="text" name="city" class="form-control" placeholder="Enter Your City">
            </div>
            <div class="col-md-6">
              <input type="text" name="last_education" class="form-control" placeholder="Enter Your Last Education">
            </div>
          </div>
          <div class="row input">
            <div class="col-md-12">
              <input type="text" name="intrested_country" class="form-control" placeholder="Intrested Country">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" onclick="apply_now_submit(this)">Submit</button>
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
  <script>
    // $(document).ready(function() {
    //   $('#comment_form').submit(function(event) {
    //     event.preventDefault();

    //     // Serialize form data
    //     var formData = new FormData(this);

    //     $.ajax({
    //       type: "POST",
    //       url: "{{ route('comment-store') }}",
    //       processData: false,
    //       contentType: false,
    //       data: formData,
    //       headers: {
    //         'X-CSRF-TOKEN': "{{ csrf_token() }}"
    //       },
    //       success: function(response) {
    //         if (response.success) {
    //           var commentHtml = `

    //                 <div class="comment">
    //           <div class="comment-header">
    //             <span class="somment-user-profile-main">
    //               <img src="{{asset('assets_frontend/images/new-images/placeholder.png')}}" alt="" srcset="" class="profile-image">
    //             </span>
    //             <span class="comment-user-name">
    //              ${response.comment.first_name} ${response.comment.last_name}
    //             </span>
    //           </div>
    //           <div class="content">${response.comment.comment}</div>
    //           <div class="actions">
    //             <a href="#" class="reply-button action-button">Reply</a>
    //           </div>
    //           <div class="reply-container" id="reply-container"></div>
    //         </div>

    //                 `;

    //           $('#comments_container').append(commentHtml);
    //         } else {
    //           console.log('Failed to add comment');
    //         }
    //       },
    //       error: function(xhr, status, error) {
    //         console.error('Error:', error);
    //       }
    //     });
    //   });
    // });
    $(document).ready(function() {
      setInterval(function() {
        $('.form-blog-id').val($('#blog-id').val());
        var pageURL = $(location).attr("href");
        $('.article_url').val(pageURL);
      }, 500);
      $('.comments-main').on('click', '.reply-button', function(event) {
        event.preventDefault();

        // Retrieve comment_id from the clicked button's data attribute
        var commentId = $(this).data('comment-id');

        // Retrieve article_id from wherever it's available in your context
        var articleId = "{{ $blog->id }}"; // Assuming $blog->id holds the article_id

        // Set the comment_id and article_id values in the hidden input fields
        $('#reply_form input[name="parent_comment_id"]').val(commentId);
        $('#reply_form input[name="article_id"]').val(articleId);

        // Hide the comment form
        $('#comment_form').hide();

        // Display the reply form
        $('#reply_form').show();
        $("#form-heading").html("Add Your Reply")
        // Smooth scroll towards the reply form
        $('html, body').animate({
          scrollTop: $('#reply_form').offset().top
        }, 800); // Adjust the duration (in milliseconds) as needed
      });
      $('#comment_form').submit(function(event) {
        event.preventDefault();
        // Serialize form data
        var formData = new FormData(this);;

        $.ajax({
          type: "POST",
          url: "{{ route('comment-store') }}",
          processData: false,
          contentType: false,
          data: formData,
          headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
          },
          beforeSend: function() {
            // Show loading indicator or initial message
            $('#comments_container').html('');
          },
          success: function(response) {
            $('#comment_form')[0].reset();
            if (response.Comments && response.Comments.length > 0) {
              var commentsHtml = '';
              response.Comments.forEach(function(comment) {
                // Start building HTML for the comment
                commentsHtml += `
                <div class="comment">
                    <div class="comment-header">
                        <span class="somment-user-profile-main">
                            <img src="{{asset('assets_frontend/images/new-images/placeholder.png')}}" alt="" srcset="" class="profile-image">
                        </span>
                        <span class="comment-user-name">${comment.first_name} ${comment.last_name}</span>
                    </div>
                    <div class="content">${comment.comment}</div>
                    <div class="actions">
                        <a href="#" class="reply-button action-button" data-comment-id="${comment.comment_id}">Reply</a>
                    </div>
                    <div class="reply-container" id="reply-container-${comment.comment_id}">`; // Unique ID for reply container
                // Append HTML for each reply
                comment.replies.forEach(function(reply) {
                  commentsHtml += `
                    <div class="reply">
                        <div class="comment-header">
                            <span class="somment-user-profile-main">
                                <img src="{{asset('assets_frontend/images/new-images/placeholder.png')}}" alt="" srcset="" class="profile-image">
                            </span>
                            <span class="comment-user-name">${reply.first_name} ${reply.last_name}</span>
                        </div>
                        <div class="content">${reply.comment}</div>
                        <div class="actions">
                            <a href="#" class="reply-button action-button" data-comment-id="${reply.parent_comment_id}">Reply</a>
                        </div>
                    </div>`;
                });
                // Close comment div
                commentsHtml += `</div></div>`;
              });
              // Append comments HTML to the container
              $('#comments_container').html(commentsHtml);
              // Set the value of #form-blog-id to #bold-id value
              $('#form-blog-id').val($('#bold-id').val());
              var alertHtml = `
                    <div class="comment mb-3">
                        <div class="comment-header">
                            <span class="somment-user-profile-main">
                                <img src="{{asset('assets_frontend/images/new-images/placeholder.png')}}" alt="" srcset="" class="profile-image">
                            </span>
                            <span class="comment-user-name">Hi! Dear User</span>
                        </div>
                        <div class="content">Your comment will  display here soon...</div>
                    </div>`;

              $('#alert_container').html(alertHtml);
              
            } else {
              var alertHtml = `
                    <div class="comment mb-3">
                        <div class="comment-header">
                            <span class="somment-user-profile-main">
                                <img src="{{asset('assets_frontend/images/new-images/placeholder.png')}}" alt="" srcset="" class="profile-image">
                            </span>
                            <span class="comment-user-name">Hi! Dear User</span>
                        </div>
                        <div class="content">After Moderateion Your comment will  display here soon...</div>
                    </div>`;

              $('#alert_container').html(alertHtml);

              // sendEmail();
            }
          },

          error: function(xhr, status, error) {
            console.error('Error:', error);
            // Optionally, you can handle error response here
          }
        });
      });
      ///////////////////////////////////////////////////////////////////////  reply form start
      $('#reply_form').submit(function(event) {
        event.preventDefault();

        // Serialize form data
        var formData = new FormData(this);

        $.ajax({
          type: "POST",
          url: "{{ route('comment-reply') }}",
          processData: false,
          contentType: false,
          data: formData,
          headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
          },
          beforeSend: function() {
            // Show loading indicator or initial message
            $('#comments_container').html('');
          },
          success: function(response) {
            if (response.success) {

              // Extract the newly added reply along with its associated comment
              var replyWithComment = response.ReplyWithComment;

              // Check if comments exist and if they have replies
              if (response.Comments && response.Comments.length > 0) {
                // Clear existing content in comments container
                $('#comments_container').html('');

                // Iterate over each comment
                response.Comments.forEach(function(comment) {
                  // Create HTML for the comment
                  var commentHtml = `
                    <div class="comment">
                        <div class="comment-header">
                            <span class="somment-user-profile-main">
                                <img src="{{asset('assets_frontend/images/new-images/placeholder.png')}}" alt="" srcset="" class="profile-image">
                            </span>
                            <span class="comment-user-name">${comment.first_name} ${comment.last_name}</span>
                        </div>
                        <div class="content">${comment.comment}</div>
                        <div class="actions comments-main">
                            <a href="#" class="reply-button action-button" data-comment-id="${comment.comment_id}">Reply</a>
                        </div>
                        <div class="replies comments-main" style="margin-top: 30px;">
                `;

                  // Check if this comment has any associated replies
                  if (comment.replies && comment.replies.length > 0) {
                    // Iterate over each reply
                    comment.replies.forEach(function(reply) {
                      // Create HTML for the reply
                      var replyHtml = `
                            <div class="reply">
                                <div class="comment-header">
                                    <span class="somment-user-profile-main">
                                        <img src="{{asset('assets_frontend/images/new-images/placeholder.png')}}" alt="" srcset="" class="profile-image">
                                    </span>
                                    <span class="comment-user-name">${reply.first_name} ${reply.last_name}</span>
                                </div>
                                <div class="content">${reply.comment}</div>
                                <div class="actions">
                                    <a href="#" class="reply-button action-button" data-comment-id="${reply.parent_comment_id}">Reply</a>
                                </div>
                            </div>
                        `;
                      // Append the reply HTML to the comment HTML
                      commentHtml += replyHtml;
                    });
                  }

                  // Close the comment HTML
                  commentHtml += `</div></div>`;

                  // Append the comment HTML to the comments container
                  $('#comments_container').append(commentHtml);
                  var alertHtml = `
                    <div class="comment mb-3">
                        <div class="comment-header">
                            <span class="somment-user-profile-main">
                                <img src="{{asset('assets_frontend/images/new-images/placeholder.png')}}" alt="" srcset="" class="profile-image">
                            </span>
                            <span class="comment-user-name">Hi! Dear User</span>
                        </div>
                        <div class="content">After Moderateion Your Reply will  display here soon...</div>
                    </div>`;

              $('#alert_container').html(alertHtml);
                });
              }

              // Reset reply form and show/hide forms as needed
              $('#reply_form')[0].reset();
              $('#reply_form').hide();
              $('#comment_form').show();

              // Optionally, you can display a success message or perform any other action
              // based on your application's requirements.
            } else {
              var alertHtml = `
                    <div class="comment mb-3">
                        <div class="comment-header">
                            <span class="somment-user-profile-main">
                                <img src="{{asset('assets_frontend/images/new-images/placeholder.png')}}" alt="" srcset="" class="profile-image">
                            </span>
                            <span class="comment-user-name">Hi! Dear User</span>
                        </div>
                        <div class="content">After Moderateion Your Reply will  display here soon...</div>
                    </div>`;

              $('#alert_container').html(alertHtml);
            }
          },

          error: function(xhr, status, error) {
            console.error('Error:', error);
            // Optionally, you can handle error response here
          }
        });
      });
      
//     function sendEmail() {
      
//       $.ajax({
//         type: "POST",
//         url: "{{ route('send-email') }}",
//         data: {
//           _token: "{{ csrf_token() }}",
//           message: "Your comment added successfully" // Message to include in the email content
//         },
//         success: function(response) {
//           alert("Sending email...");
//             if (response.success) {
//                 alert("Email sent successfully.");
//             } else {
//                 console.error("Failed to send email.");
//             }
//         },
//         error: function(xhr, status, error) {
//             console.error("AJAX request failed: " + error);
//         }
//     });
// }

    });
  </script>
  <script>
    $(document).ready(function() {
      
      
//  // Define a key and a value
// const articleId = 'articleFlag';  // Correctly spelled key
// const articleContent = 'false';  // This is the value to be stored

// // Save to local storage
// localStorage.setItem(articleId, articleContent);


     
 // Define a key and a value
 


  // function FormSubmit(input){
  //       $(':input').removeClass('has-error');
  //       $('.error-span').remove();
  //       axios.post('/free-consulation',$('#ratingForm').serialize()).then(function (response) {
  //           if (response.data.status == 'success'){
  //             localStorage.setItem(articleModelStatus, 'true');

  //               swal({
  //                   title: response.data.msg,
  //                   icon: "success",
  //               }).then(data =>{
  //                   window.location.reload()
  //               });
  //           }else if(response.data.status == 'error'){
  //               $(input).attr('disabled',false);
  //               $('.alert-danger').text(response.data.msg);
  //               $('.alert-danger').show();
  //           }
  //       }).catch(function (error){
  //           $(input).attr('disabled',false);
  //           $.each(error.response.data.errors, function (k, v) {
  //               $('input[name="' + k + '"]').addClass("has-error");
  //               $('input[name="' + k + '"]').after("<span class='error-span'>" + v[0] + "</span>");
  //           });
  //       });
  //   }

      //  ==========================================================

      $(".reply-button").click(function(event) {
        event.preventDefault();
        console.log("Reply button clicked"); // Debugging

        // Hide all reply forms except the one corresponding to the clicked "Reply" button
        $(".reply-form").not($(this).parent().next(".reply-form")).hide();
        console.log("All reply forms hidden except current"); // Debugging

        var replyForm = $(this).parent().next(".reply-form");

        if (replyForm.css("display") === "none" || replyForm.css("display") === "") {
          replyForm.css("display", "block");
        } else {
          replyForm.css("display", "none");
        }
      });



    });



  </script>

{{--   
<script>
  function FormSubmit(input){
      $(':input').removeClass('has-error');
      $('.error-span').remove();
      axios.post('/free-consulation',$('#ratingForm').serialize()).then(function (response) {
          if (response.data.status == 'success'){
              swal({
                  title: response.data.msg,
                  icon: "success",
              }).then(data =>{
                  window.location.reload()
              });
          }else if(response.data.status == 'error'){
              $(input).attr('disabled',false);
              $('.alert-danger').text(response.data.msg);
              $('.alert-danger').show();
          }
      }).catch(function (error){
          $(input).attr('disabled',false);
          $.each(error.response.data.errors, function (k, v) {
              $('input[name="' + k + '"]').addClass("has-error");
              $('input[name="' + k + '"]').after("<span class='error-span'>" + v[0] + "</span>");
          });
      });
  }
</script>

 --}}


  <script>
    function apply_now_submit(input) {
      $(':input').removeClass('has-error');
      $('.error-span').remove();
      axios.post('/apply-now-form', $('#apply_now_form_data').serialize()).then(function(response) {
        if (response.data.status == 'success') {
          swal({
            title: response.data.msg,
            icon: "success",
          }).then(data => {
            window.location.reload()
          });
        } else if (response.data.status == 'error') {
          $(input).attr('disabled', false);
          $('.alert-danger').text(response.data.msg);
          $('.alert-danger').show();
        }
      }).catch(function(error) {
        $(input).attr('disabled', false);
        $.each(error.response.data.errors, function(k, v) {
          $('input[name="' + k + '"]').addClass("has-error");
          $('input[name="' + k + '"]').after("<span class='error-span'>" + v[0] + "</span>");
        });
      });
    }
  </script>


  
<script>

        var config = {
    cUrl: 'https://api.countrystatecity.in/v1/countries',
    ckey: 'NHhvOEcyWk50N2Vna3VFTE00bFp3MjFKR0ZEOUhkZlg4RTk1MlJlaA=='
}
  var countrySelect = document.querySelector('.country'),
    stateSelect = document.querySelector('.state'),
    citySelect = document.querySelector('.city')
    function loadCountries() {
        let apiEndPoint = config.cUrl;
        // Create a search input element
        const searchInput = document.createElement('input');
        searchInput.setAttribute('type', 'text');
        searchInput.setAttribute('placeholder', 'Search country...');
        searchInput.classList.add('hidden');
        searchInput.classList.add('form-control');
        searchInput.addEventListener('input', filterCountries); // Attach event listener
        // Append the search input before the country select element
        document.querySelector('.country').parentNode.insertBefore(searchInput, document.querySelector('.country'));

        // Fetch countries from API
        fetch(apiEndPoint, {headers: {"X-CSCAPI-KEY": config.ckey}})
            .then(response => response.json())
            .then(data => {
                // console.log(data);
                const countrySelect = document.querySelector('.country');

                data.forEach(country => {
                    const option = document.createElement('option');
                    option.value = country.iso2;
                    option.textContent = country.name;
                    countrySelect.appendChild(option);
                });
                // Enable the state and city selects
                stateSelect.disabled = true;
                citySelect.disabled = true;
                stateSelect.style.pointerEvents = 'none';
                citySelect.style.pointerEvents = 'none';

                // Initialize Select2 after appending options
                $('.country').select2();
                
            })
            .catch(error => console.error('Error loading countries:', error));
    }
    // Function to filter countries based on search input
    function filterCountries() {
        const searchText = this.value.toLowerCase();
        const options = document.querySelectorAll('.country option');

        options.forEach(option => {
            const optionText = option.textContent.toLowerCase();
            const showOption = optionText.includes(searchText);
            option.style.display = showOption ? 'block' : 'none';
        });
    }
    function loadStates() {
        stateSelect.disabled = false;
        citySelect.disabled = true;
        stateSelect.style.pointerEvents = 'auto';
        citySelect.style.pointerEvents = 'none';

        const selectedCountryCode = countrySelect.value;
        stateSelect.innerHTML = ''; // Clear existing options

        // Initialize Select2 on the state select element
        $(stateSelect).empty().select2({
            placeholder: 'Search or select state...',
            allowClear: true // Add an option to clear the selection
        });

        // Fetch states from the API
        fetch(`${config.cUrl}/${selectedCountryCode}/states`, { headers: { "X-CSCAPI-KEY": config.ckey } })
            .then(response => response.json())
            .then(data => {
                // Map states data to Select2 compatible format
                const statesData = data.map(state => ({ id: state.iso2, text: state.name }));

                // Add the states data to the Select2 dropdown
                $(stateSelect).select2({
                    data: statesData
                });
            })
            .catch(error => console.error('Error loading states:', error));
    }
    function loadCities() {
        citySelect.disabled = false;
        citySelect.style.pointerEvents = 'auto';

        const selectedCountryCode = countrySelect.value;
        const selectedStateCode = stateSelect.value;
        // console.log(selectedCountryCode, selectedStateCode);

        citySelect.innerHTML = ''; // Clear existing options

        // Initialize Select2 on the city select element
        $(citySelect).empty().select2({
            placeholder: 'Search or select city...',
            allowClear: true // Add an option to clear the selection
        });

        // Fetch cities from the API
        fetch(`${config.cUrl}/${selectedCountryCode}/states/${selectedStateCode}/cities`, { headers: { "X-CSCAPI-KEY": config.ckey } })
            .then(response => response.json())
            .then(data => {
                // Map cities data to Select2 compatible format
                const citiesData = data.map(city => ({ id: city.name, text: city.name }));

                // Add the cities data to the Select2 dropdown
                $(citySelect).select2({
                    data: citiesData
                });
            })
            .catch(error => console.error('Error loading cities:', error));
    }
    window.onload = loadCountries



        $('.country').change(function() {
        // Get the selected option's text
        var selectedOptionText = $(this).find('option:selected').text();
        $('#hidden_country_name').val(selectedOptionText);
    });

    $('.state').change(function() {
        // Get the selected option's text
        var selectedOptionText = $(this).find('option:selected').text();
        
        // Set the value of the hidden input field to the selected option's text
        $('#hidden_state_name').val(selectedOptionText);
    });
</script>