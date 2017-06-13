@extends('admin.layouts.layout-basic')

@section('styles')
    <style>

    </style>
@stop

@section('scripts')
    <script src="{{asset('assets/admin/js/demo/gallery.js')}}"></script>
@stop

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Gallery Masonry Grid</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Gallery</a></li>
                <li class="breadcrumb-item active">Gallery Masonry Grid</li>
            </ol>
        </div>
        <div class="card">
            <div class="card-header">
                <h6>Masonry Image Gallery</h6>
            </div>
            <div class="card-block">
                <div class="my-gallery" itemscope>
                    <div class="my-gallery-container">
                        <div class="item" data-order="0">
                            <figure itemprop="associatedMedia" itemscope>
                                <a href="{{asset('assets/admin/img/gallery/11.jpg')}}"
                                   itemprop="contentUrl"
                                   data-size="1024x1024">
                                    <img src="{{asset('assets/admin/img/gallery/1.jpg')}}" itemprop="thumbnail"
                                         alt="Image description"/>
                                </a>
                            </figure>
                        </div>
                        <div class="item" data-order="1">
                            <figure itemprop="associatedMedia" itemscope>
                                <a href="{{asset('assets/admin/img/gallery/22.jpg')}}" itemprop="contentUrl"
                                   data-size="1024x1024">
                                    <img src="{{asset('assets/admin/img/gallery/22.jpg')}}"
                                         itemprop="thumbnail" alt="Image description"/>
                                </a>
                            </figure>
                        </div>
                        <div class="item" data-order="2">
                            <figure itemprop="associatedMedia" itemscope>
                                <a href="{{asset('assets/admin/img/gallery/33.jpg')}}" itemprop="contentUrl"
                                   data-size="1024x1024">
                                    <img src="{{asset('assets/admin/img/gallery/3.jpg')}}"
                                         itemprop="thumbnail" alt="Image description"/>
                                </a>
                            </figure>
                        </div>
                        <div class="item" data-order="3">
                            <figure itemprop="associatedMedia" itemscope>
                                <a href="{{asset('assets/admin/img/gallery/44.jpg')}}" itemprop="contentUrl"
                                   data-size="1024x768">
                                    <img src="{{asset('assets/admin/img/gallery/44.jpg')}}"
                                         itemprop="thumbnail" alt="Image description"/>
                                </a>
                            </figure>
                        </div>
                        <div class="item" data-order="4">
                            <figure itemprop="associatedMedia" itemscope>
                                <a href="{{asset('assets/admin/img/gallery/55.jpg')}}" itemprop="contentUrl"
                                   data-size="1024x1024">
                                    <img src="{{asset('assets/admin/img/gallery/55.jpg')}}"
                                         itemprop="thumbnail" alt="Image description"/>
                                </a>
                            </figure>
                        </div>
                        <div class="item" data-order="5">
                            <figure itemprop="associatedMedia" itemscope>
                                <a href="{{asset('assets/admin/img/gallery/66.jpg')}}" itemprop="contentUrl"
                                   data-size="1024x1024">
                                    <img src="{{asset('assets/admin/img/gallery/66.jpg')}}"
                                         itemprop="thumbnail" alt="Image description"/>
                                </a>
                            </figure>
                        </div>
                        <div class="item" data-order="6">
                            <figure itemprop="associatedMedia" itemscope>
                                <a href="{{asset('assets/admin/img/gallery/77.jpg')}}" itemprop="contentUrl"
                                   data-size="1024x1024">
                                    <img src="{{asset('assets/admin/img/gallery/7.jpg')}}"
                                         itemprop="thumbnail" alt="Image description"/>
                                </a>
                            </figure>
                        </div>
                        <div class="item" data-order="7">
                            <figure itemprop="associatedMedia" itemscope>
                                <a href="{{asset('assets/admin/img/gallery/88.jpg')}}" itemprop="contentUrl"
                                   data-size="1024x768">
                                    <img src="{{asset('assets/admin/img/gallery/88.jpg')}}"
                                         itemprop="thumbnail" alt="Image description"/>
                                </a>
                            </figure>
                        </div>
                        <div class="item" data-order="8">
                            <figure itemprop="associatedMedia" itemscope>
                                <a href="{{asset('assets/admin/img/gallery/99.jpg')}}" itemprop="contentUrl"
                                   data-size="1024x1024">
                                    <img src="{{asset('assets/admin/img/gallery/99.jpg')}}"
                                         itemprop="thumbnail" alt="Image description"/>
                                </a>
                            </figure>
                        </div>
                        <div class="item" data-order="9">
                            <figure itemprop="associatedMedia" itemscope>
                                <a href="{{asset('assets/admin/img/gallery/1010.jpg')}}" itemprop="contentUrl"
                                   data-size="1024x1024">
                                    <img src="{{asset('assets/admin/img/gallery/10.jpg')}}"
                                         itemprop="thumbnail" alt="Image description"/>
                                </a>
                            </figure>
                        </div>
                        <div class="item" data-order="10">
                            <figure itemprop="associatedMedia" itemscope>
                                <a href="{{asset('assets/admin/img/gallery/1111.jpg')}}" itemprop="contentUrl"
                                   data-size="1024x1024">
                                    <img src="{{asset('assets/admin/img/gallery/1111.jpg')}}"
                                         itemprop="thumbnail" alt="Image description"/>
                                </a>
                            </figure>
                        </div>
                        <div class="item" data-order="11">
                            <figure itemprop="associatedMedia" itemscope>
                                <a href="{{asset('assets/admin/img/gallery/1212.jpg')}}" itemprop="contentUrl"
                                   data-size="1024x768">
                                    <img src="{{asset('assets/admin/img/gallery/121.jpg')}}"
                                         itemprop="thumbnail" alt="Image description"/>
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
                <!-- Root element of PhotoSwipe. Must have class pswp. -->
                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                    <!-- Background of PhotoSwipe.
                         It's a separate element, as animating opacity is faster than rgba(). -->
                    <div class="pswp__bg"></div>

                    <!-- Slides wrapper with overflow:hidden. -->
                    <div class="pswp__scroll-wrap">

                        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                        <div class="pswp__container">
                            <div class="pswp__item"></div>
                            <div class="pswp__item"></div>
                            <div class="pswp__item"></div>
                        </div>

                        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                        <div class="pswp__ui pswp__ui--hidden">

                            <div class="pswp__top-bar">

                                <!--  Controls are self-explanatory. Order can be changed. -->

                                <div class="pswp__counter"></div>

                                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                                <button class="pswp__button pswp__button--share" title="Share"></button>

                                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                                <!-- element will get class pswp__preloader--active when preloader is running -->
                                <div class="pswp__preloader">
                                    <div class="pswp__preloader__icn">
                                        <div class="pswp__preloader__cut">
                                            <div class="pswp__preloader__donut"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                <div class="pswp__share-tooltip"></div>
                            </div>

                            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                            </button>

                            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                            </button>

                            <div class="pswp__caption">
                                <div class="pswp__caption__center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h6>YouTube Video Gallery</h6>
            </div>
            <div class="card-block">
                <div class="youtube-video-gallery">
                    <div class="my-gallery-container">
                        <div class="item" data-order="0">
                            <div class="demo" data-youtube="https://www.youtube.com/watch?v=3pn2SI4KGJc"></div>
                        </div>
                        <div class="item" data-order="1">
                            <div class="demo" data-youtube="https://www.youtube.com/watch?v=6v2L2UGZJAM"></div>
                        </div>
                        <div class="item" data-order="2">
                            <div class="demo" data-youtube="https://www.youtube.com/watch?v=ZN2SwwfeCRc"></div>
                        </div>
                        <div class="item" data-order="3">
                            <div class="demo" data-youtube="https://www.youtube.com/watch?v=DjxEhLTRtPY"></div>
                        </div>
                        <div class="item" data-order="4">
                            <div class="demo" data-youtube="https://www.youtube.com/watch?v=Ce4tYw6IE70"></div>
                        </div>
                        <div class="item" data-order="5">
                            <div class="demo" data-youtube="https://www.youtube.com/watch?v=3rHXrA80NH4"></div>
                        </div>
                        <div class="item" data-order="6">
                            <div class="demo" data-youtube="https://www.youtube.com/watch?v=ftEJIZA7z-I"></div>
                        </div>
                        <div class="item" data-order="7">
                            <div class="demo" data-youtube="https://www.youtube.com/watch?v=k_GM1JA608Y"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop