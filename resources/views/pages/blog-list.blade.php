@extends('layout.master')
@section('title', 'Blog List - Quadque Digital')
@push('styles')
<style>
       .paragraph{
            max-height: 100px;
        overflow: hidden;
    }

    svg.h-5{
        height:20px !important;
    }
    .blog-list > nav > span {
        display:none !important;
    }
    nav > div.flex{
        display:none;
    }
</style>
@endpush

@section('content')


    <!-- page header - start -->
    <div class="container page-header">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="page-title">Read from recent blog writings.</h1>
            </div>
        </div>
    </div>
    <!-- page header - end -->

    <!-- page content - start -->
    <div class="container sidebar-page">
        <div class="row ">
            <div class="col-lg-8">
                <div class="content-column right-sidebar">
                    <div class="page-content-wrapper">
                        <div class="blog-list">
                            <div class="container">
                                <!-- blog list container - start -->
                                <div class="row blog-list-container blog-list-container-65624c4 blog-list-container-list-1">

                                @isset($blogs)
                                    @foreach($blogs as $blog)
 <!-- single blog - start -->
                                    <div 
                                    class="list-1 blog-list-item-7bddf04 company col-lg-12">
                                        <div class="blog-list-single">
                                            <!-- thumbnail - start -->
                                            <div class="blog-list-single--thumbnail">
                                                <a href="{{ url('/blog-detailed') }}">
                                                    <img src="{{ asset('assets/images/blog_images/'.$blog->photo) }}" alt="blog-1">

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
                                                    <h6>{{$blog->created_at}}</h6>
                                                    <span>|</span>
                                                    <h6>{{ $blog->category->name }}</h6>
                                                </div>
                                                <a href="{{ route('blog.show',$blog->id) }}">
                                                    <h2>{{$blog->title}}</h2>
                                                </a>
                                                <div class="paragraph excerpt">
                                                    <p>@php echo $blog->description @endphp</p>
                                                </div>
                                                <a href="{{ route('blog.show',$blog->id)}}" class="button">
                                                    <span>Read More</span>
                                                </a>
                                            </div>
                                            <!-- blog content - end -->
                                        </div>
                                    </div>
                                    <!-- single blog - end -->
                                    @endforeach
                                 
                                @endisset
                                
                                </div>
                                <!-- blog list container - end -->
                    
                                <!-- blog pagination - start -->
                                <div class="row">
                                    <div class="col">  
                                        <div class="pagination-container">
                                            <ul class="page-numbers">
                                               {{ $blogs->links() }}
                                              {{--   <li>
                                                    <span aria-current="page" class="page-numbers current">1</span>
                                                </li>
                                                <li>
                                                    <a class="page-numbers" href="#">2</a>
                                                </li>
                                                <li>
                                                    <a class="page-numbers" href="#">3</a>
                                                </li> --}}
                                            </ul>
                                        </div>              
                                    </div>
                                </div>
                                <!-- blog pagination - end -->
                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                                 <span>{{$category->name}}</span>
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
                                    @foreach($latest_blogs as $blog)
                                         <!-- single - start -->
                                <li class="recent-posts-single"> 
                                    <div class="recent-posts-single--thumbnail">
                                        <a href="{{ route('blog.show', $blog->id) }}">
                                            <img 
                                            width="150" 
                                            height="150" 
                                            src="{{asset('assets/images/blog_images/'.$blog->photo)}}" alt="blog-wid-1">
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
                                            <p>23 Sep. 2020</p>
                                            <span>|</span>
                                            <p>{{$blog->category->name}}</p>
                                        </div>
                                        <h6>
                                            <a href="{{ route('blog.show', $blog->id) }}">
                                               {{$blog->title}}
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
                                <a href="#" class="tag-cloud-link">agency</a>
                                <a href="#" class="tag-cloud-link">company</a>
                                <a href="#" class="tag-cloud-link">development</a>
                                <a href="#" class="tag-cloud-link">technology</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>                  
        </div>
    </div>
    <!-- page content - end -->

@endsection