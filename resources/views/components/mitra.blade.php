<section class="tj-project-section-two pt-5 pb-5">
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

        <div class="row justify-content-center g-3">
            @foreach ($mitras as $item)
                <div class="col-md-3">
                    <div class="card text-start border-0 shadow-sm">
                        <a href="{{ $item->website_url }}" target="blank" class=" link-opacity-50-hover"><img class="card-img-top" src="{{ asset($item->image_url) }}" alt="Title" /></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div> 
</section>
