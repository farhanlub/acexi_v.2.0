<a href="{{ route('tentang-kami.profil-pengurus', $data->team->slug) }}">
    <div class="tj-team-item">
        <div class="team-image">
           @if ($data->team->image)
               <img src="{{ asset($data->team->image) }}" alt="Image" />
           @endif 
        </div>
        <div class="team-content">
            <div class="team-auother">
                <h5 class="title">{{ $data->team->name }}</h5>
                {{-- <span class="sub-title">{{ $data->team->expertScope->title ?? '' }}</span> --}}
            </div>
        </div>
    </div>
</a>