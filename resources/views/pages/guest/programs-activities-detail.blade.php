@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper pb-0 bg-success" style=" padding-top: 155px; background-size: auto;">

        <div class="contact-bottom-shape">
            <img src="{{ asset('storage/assets/images/shape/footer-lg-shape.svg') }}" alt="Shape">
        </div>
    </section>

    <section class="tj-blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="sidebar-wrapper">
                        <div class="details-item details-item-two">
                            <div class="blog-thumb-image">
                                <a href="blog-details.html"><img src="{{ asset($data->image) }}" alt="Image"></a>
                            </div>
                            <div class="blog-meta-two">
                                <ul>
                                    <li><i class="flaticon-calendar"></i> {{ date('h:i:s d-m-Y', strtotime($data->created_at)) }}</li>
                                    <li><i class="fa-light fa-eye"></i> {{ number_format($data->views) }}</li>
                                    {{-- <li><i class="fa-regular fa-message"></i> Comment</li> --}}
                                </ul>
                            </div>
                            <div class="details-title">
                                <h2 class="title">{{ $data->title }}</h2>
                            </div>
                            <p>
                               @php
                                      echo $data->content;
                               @endphp
                            </p>
                            {{-- <p>
                                Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                                minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.
                            </p>
                            <blockquote>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered alteration in some form, by injected humour, or
                                </p>
                                <cite>Johon Smit</cite>
                            </blockquote>
                            <p>
                                There are many variations or randomised words which don't look even slightly
                                believable. If you are going to use a passage of Lorem Ipsum.
                            </p>
                            <div class="details-wrapper">
                                <div class="row wrapper-image">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="details-image">
                                            <img src="assets/images/blog/blog-11.jpg" alt="Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="details-image">
                                            <img src="assets/images/blog/blog-12.jpg" alt="Image">
                                        </div>
                                    </div>
                                </div>
                                <h3 class="title">Nature’s Partner For Sustainable</h3>
                                <p>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                    molestias excepturi sint cupiditate non provident, similique sunt indeserunt
                                    mollitia animi, distinctio.
                                </p>
                                <p>
                                    Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
                                    quo minus id quod maxime placeat facere possimus
                                </p>
                            </div> --}}
                        </div>
                        <div class="tj-tags-post">
                            <div class="tagcloud">
                                <span>Tags:</span>
                                <a href="#">Engineering</a>
                                <a href="#">Renewal</a>
                                <a href="#">Solar</a>
                            </div>
                            <div class="post-share">
                                <ul class="dot-style">
                                    <li>
                                        <span>Share:</span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tj-main-sidebar">
                        <div class="tj-blog-widget">
                            <div class="sidebar-search">
                                <form action="#">
                                    <input type="text" name="search" id="searchTwo" placeholder="Search Here">
                                    <button type="submit" value="search">
                                        <i class="fa-light fa-magnifying-glass"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="tj-blog-widget">
                            <h3 class="side-title">Categories</h3>
                            <div class="sidebar-catagory">
                                <ul>
                                    @foreach ($category as $item)
                                        <li>
                                            <a href="#">{{ $item->title }}
                                                <span> <i class="fa-light fa-angle-right"></i></span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="tj-blog-widget">
                            <h3 class="side-title">Recent Post</h3>
                            <div class="sidebar-recent-post">
                                @foreach ($recent5 as $item)
                                    <div class="single-post d-flex align-items-center">
                                        <div class="post-image">
                                            <a href="blog-details.html">
                                                <img src="{{ asset($item->image) }}" alt="Blog"></a>
                                        </div>
                                        <div class="post-content">
                                            <div class="blog-meta">
                                                <ul>
                                                    <li><i class="flaticon-calendar"></i> {{ date('h:i:s d-m-Y', strtotime($item->created_at)) }}</li> 
                                                </ul>
                                            </div>
                                            <h5 class="title-link">
                                                <a href="{{ route('program-kegiatan.detail', $item->slug) }}">{{ $item->title }}</a>
                                            </h5>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tj-blog-widget">
                            <h3 class="side-title">Popular Tag</h3>
                            <div class="sidebar-tags">
                                <div class="tagcloud">
                                    <a href="#">Engineering</a>
                                    <a href="#">Renewal</a>
                                    <a href="#">Solar</a>
                                    <a href="#">Solar Plans</a>
                                    <a href="#">Gosolar</a>
                                    <a href="#">Wheepup</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
