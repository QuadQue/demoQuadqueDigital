@extends('layout.master')
@section('title', 'Blog Detailed - Quadque Digital')
@push('styles')
   <style>
       .paragraph{
               max-height: 70px !important;
                overflow: hidden !important;
       }
   </style>
@endpush
@section('content')

    <!-- blog single header - start -->
    <div class="blog-single-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-single-header--heading">
                        <h1>{{ $blog->title }}</h1>
                    </div>
                    <div class="blog-single-header--detail">
                        <div class="author">
                            <div class="author-image">
                                <img alt="author" src="{{ asset('assets/images/author.png') }}" height="64" width="64">

                            </div>
                            <div class="author-name">
                                <h6>Author</h6>
                                <h5>{{ $blog->author }}</h5>
                            </div>
                        </div>
                        <div class="category">
                            <h6>Category</h6>
                            <h5><span>{{ $blog->category->name}}</span></h5>
                        </div>
                        <div class="date">
                            <h6>Date</h6>
                            <h5>{{ $blog->created_at }}</h5>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-thumbnail">
            <img width="1844" height="819" src="{{ asset('assets/images/blog_images/'.$blog->photo) }}" alt="blog-thumbnail">
        </div>
    </div>
    <!-- blog single header - end -->

    <!-- blog single content - start -->
    <div class="container sidebar-page blog-single-page">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-single-page-wrapper blog-single-page-wrapper-right">
                    <!-- post - start -->
                    <div class="blog-single-content-wrapper">
                         @php echo $blog->description @endphp


                    </div>
                    <!-- post - end -->

                    
                    <!-- post tags - start -->
                    <div class="post-tags">
                        <h6>Tags: </h6>
                        <ul>
                            @isset($tags)
                                @foreach($tags as $tag)
                                    <li>
                                        <a href="#" rel="tag">{{ $tag->name }}</a>
                                    </li>
                                @endforeach
                            @endisset

                        </ul>
                    </div>
                    <!-- post tags - end -->
                
                        
                    <!-- comments - start -->
                    <div class="comment-list ">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <h3 class="comment-list--heading">
                                        3 replies.		
                                    </h3>
                                    
                                    <div class="comment even thread-even depth-1 has-reply comment">
                                        <div class="parent--comment">
                                            <div class="comment--avatar">
                                                <img alt="commenter-1" src="{{ asset('assets/images/testimonial-img-2.png') }}" height="64" width="64">

                                            </div>
                                            <div class="comment--content">
                                                <div class="comment-inner-wrapper">
                                                    <a href="#">
                                                        <h4 class="name">Mark Stewart</h4>
                                                    </a>
                                                    <h5 class="date">Dec 8, 2020</h5>
                                                </div>
                                                <p>Were make night hath thing you’ll you night beast moving seasons over you’re face is said also to light first multiply that their wherein deep, green under there darkness you.</p>
                                    
                                                <div class="reply-button">
                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="comment odd alt depth-2  comment">
                                            <div class="parent--comment">
                                                <div class="comment--avatar">
                                                    <img alt="commenter-1" src="{{ asset('assets/images/testimonial-img-3.png') }}" height="64" width="64">

                                                </div>          
                                                <div class="comment--content">

                                                    <div class="comment-inner-wrapper">
                                                        <a href="#">
                                                            <h4 class="name">Michaelle Dawn</h4>
                                                        </a>
                                                        <h5 class="date">Dec 8, 2020</h5>
                                                    </div>
                                                    <p>Good signs, thing that beginning which fish a second under above set waters heaven fifth that fly.</p>
                                                        
                                                    <div class="reply-button">
                                                        <a class="comment-reply-link" href="#">Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="comment even thread-odd thread-alt depth-1 comment">
                                        <div class="parent--comment">
                                            <div class="comment--avatar">
                                                <img alt="commenter-1" src="{{ asset('assets/images/comment_placeholder.png') }}" height="64" width="64">

                                            </div>
                                        
                                            <div class="comment--content">

                                                <div class="comment-inner-wrapper">
                                                    <a href="#">
                                                        <h4 class="name">Mark Stewart</h4>
                                                    </a>
                                                    <h5 class="date">Dec 8, 2020</h5>
                                                </div>

                                                <p>Were make night hath thing you’ll you night beast moving seasons over you’re face is said also to light first multiply that their wherein deep, green under there.</p>
                                    
                                
                                                <div class="reply-button">
                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- comments - end -->

                    <!--
                    comment form - start
                    -->
                    <div class="comment-form--wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="comment-respond">
                                        <h3 id="reply-title" class="comment-reply-title">
                                            Write Reply. 
                                        </h3>
                                        <form class="comment-form">
                                            <div class="comment-form">
                                                <div class="comment-form--inner row">
                                                    <div class="col-lg-6">
                                                        <div class="field-group">
                                                            <input required="" type="text" id="author" name="author" placeholder="Name *" class="input-field">
                                                            <input required="" type="text" id="email" name="email" placeholder="Email *" class="input-field">
                                                            <input type="text" placeholder="Website" class="input-field">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="textarea-group">
                                                            <textarea required="" placeholder="Your reply *" id="comment" name="comment" class="input-field"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="cookies-consent"> 
                                                            <label for="wp-comment-cookies-consent" class="paragraph">Save my name, email, and website in this browser for the next time I comment.
                                                                <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row form-submit-row">
                                                <div class="col-lg-6">
                                                    <p class="form-submit button">
                                                        <input name="submit" type="submit" class="submit" value="Post Reply">
                                                    </p>
                                                </div>
                                            </div>

                                        </form>	
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--
                    comment form - end
                    -->                        
                    
                    <!--
                    comments - end
                    -->
                </div>
            </div>
                <!--
                right sidebar - start
                -->
                <div class="col-lg-4 sidebar-column">
                    <div class="sidebar-column-wrapper">
                        <ul class="widget widget-container">
                            <li id="search-2" class="widget widget_search">
                                <div class="search">
                                <form>
                                    <input type="text" placeholder="Search" id="search" name="s" class="input-field" value="" required="">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                </div>
                            </li>
                            <li class="widget widget_categories">
                                <h2 class="widgettitle">Categories</h2>
                                <ul>
                                @isset($categories)

                                        @foreach($categories as $category)
                                             <li class="cat-item">
                                                 <a href="#">
                                                     <span>{{ $category->name }}</span>
                                                 </a>
                                             </li>

                                        @endforeach
                                    
                                @endisset
                                   
                                   
                                </ul>
                            </li>
                            <li class="widget widget_slope_recent_posts">
                                <h2 class="widgettitle">Recent Posts</h2>
                                <ul class="recent-posts">

                                   @isset($latest_blogs)

                                        
                                        @foreach($latest_blogs as $latest_blog)


                                                    <!-- single - start -->
                                                    <li class="recent-posts-single">
                                                        <div class="recent-posts-single--thumbnail">
                                                            <a href="{{ route('blog.show', $latest_blog->id) }}">


                                                                <img width="150" height="150" src="{{ asset('assets/images/blog_images/'.$latest_blog->photo) }}" alt="blog-wid-1">

                                                                <div class="hover">
                                                                    <div class="circle">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43.75 43.564">
                                                                            <title>arrow</title>
                                                                            <path d="M1027.744,1417.179l20.61,20.61a1.172,1.172,0,0,1,0,1.658l-20.61,20.611a1.174,1.174,0,0,1-1.658,0l-.69-.692a1.171,1.171,0,0,1,0-1.657l17.431-17.431h-36.708a1.172,1.172,0,0,1-1.172-1.172v-.976a1.172,1.172,0,0,1,1.172-1.172h36.708l-17.431-17.431a1.171,1.171,0,0,1,0-1.657l.69-.691A1.174,1.174,0,0,1,1027.744,1417.179Z" transform="translate(-1004.947 -1416.836)"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="recent-posts-single--content">
                                                            <div>
                                                                <p>{{ $latest_blog->created_at }}</p>

                                                                <span>|</span>
                                                                <p>{{ $latest_blog->category->name }}</p>

                                                            </div>
                                                            <h6>
                                                                <a href="{{ route('blog.show', $latest_blog->id) }}">

                                                                   {{ $latest_blog->title }}
                                                                </a>
                                                            </h6>
                                                        </div>
                                                    </li>
                                                    <!-- single - end -->

                                            
                                        @endforeach
                                   @endisset
                                </ul>
                            </li>
                            <li class="widget widget_tag_cloud">
                                <h2 class="widgettitle">Popular Tags</h2>
                                <div class="tagcloud">
                                    @isset($tags)
                                        @foreach($tags as $tag)

                                           <a href="#" class="tag-cloud-link">{{ $tag->name }}</a>

                                        @endforeach
                                    @endisset
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>  
                <!--
                right sidebar - end
                -->
        </div>
    </div>
    <!-- blog single content - end -->

    <!-- related posts - start -->
    <div class="related-posts">
        <div class="container">
                <!-- related posts heading - start -->
                <div class="related-posts--heading">
                    <h2>Related Reads.</h2>
                </div>
                <!-- related posts heading - end -->
            
            <div class="row">
               

                <!-- single blog - start -->
                @isset($related_posts)
                    @foreach($related_posts as $related_post)
                        <div class="grid-1 blog-list-item-7bddf04 related-post col-lg-6">
                                <div class="blog-list-single">
                                    <!-- thumbnail - start -->
                                    <div class="blog-list-single--thumbnail">
                                        <a href="{{ route('blog.show', $related_post->id) }}">
                                            <img src="{{ asset('assets/images/blog_images/'.$related_post->photo) }}" alt="blog-2">
                                            <div class="hover">
                                                <div class="circle">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43.75 43.564">
                                                        <title>arrow</title>
                                                        <path d="M1027.744,1417.179l20.61,20.61a1.172,1.172,0,0,1,0,1.658l-20.61,20.611a1.174,1.174,0,0,1-1.658,0l-.69-.692a1.171,1.171,0,0,1,0-1.657l17.431-17.431h-36.708a1.172,1.172,0,0,1-1.172-1.172v-.976a1.172,1.172,0,0,1,1.172-1.172h36.708l-17.431-17.431a1.171,1.171,0,0,1,0-1.657l.69-.691A1.174,1.174,0,0,1,1027.744,1417.179Z" transform="translate(-1004.947 -1416.836)"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- thumbnail - end -->
                                    <!-- blog content - start -->
                                    <div class="blog-list-single--content">
                                        <div class="details">
                                            <h6>{{$related_post->created_at}}</h6>
                                            <span>|</span>
                                            <h6>{{$related_post->category->name}}</h6>
                                        </div>
                                        <a href="{{ route('blog.show', $related_post->id) }}">
                                            <h2>{{$related_post->title}}</h2>
                                        </a>
                                        <div class="paragraph excerpt">
                                            <div>@php echo $related_post->description @endphp</div>
                                        </div>
                                        <a href="{{ route('blog.show', $related_post->id) }}" class="button">
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                    <!-- blog content - end -->
                                </div>
                            </div>
                  @endforeach
                @endisset
             
                <!-- single blog - end -->
            </div>
        </div>
    </div>
    <!-- related posts - end -->

@endsection