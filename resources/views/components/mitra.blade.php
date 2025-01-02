<section class="tj-project-section-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-sec-heading-three text-center">
                    <span class="sub-title">Mitra Terpercaya Kami</span>
                    <h2 class="title">
                        Bersama Menuju Masa Depan Berkelanjutan 
                    </h2>
                </div>
            </div> 
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="row justify-content-center"> 
            @foreach ($mitras as $item)
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="tj-project-item-two">
                        <div class="project-images">
                            <a href="{{ $item->website_url }}">
                                <img src="{{ asset($item->image_url) }}" alt="Image">
                            </a>
                            <div class="project-content">
                                <h3 class="title"><a href="{{ $item->website_url }}" target="blank">{{ $item->name }}</a></h3>
                                {{-- <span>{{ $item->description }}</span> --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach 
        </div>
    </div>
</section>
