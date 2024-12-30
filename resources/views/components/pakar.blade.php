<div class="row">
    @foreach ($pakars as $item)
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="{{ route('tentang-kami.profil-pengurus',$item->slug) }}">
                <div class="tj-team-item">
                    <div class="team-image">
                        <img src="{{ asset($item->image) }}" alt="Image" />
                    </div>
                    <div class="team-content">
                        <div class="team-auother">
                            <h5 class="title">{{ $item->name }}, {{ $item->title }}</h5>
                            <span class="sub-title">{{ $item->expertScope->title ?? '' }}</span>
                        </div> 
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>