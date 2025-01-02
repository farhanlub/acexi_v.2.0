<div class="tj-blog-item-two">
    <div class="blog-image">
        <a href="{{ route('program-kegiatan.detail', $data->slug) }}"><img style="height: 200px;" src="{{ asset($data->image) }}" class="object-fit-cover" alt="Image"></a>
    </div>
    <div class="blog-content">
        <div class="blog-meta">
            <ul>
                <li><i class="flaticon-calendar"></i> {{ date('h:i:s d-m-y', strtotime($data->created_at)) }}</li>
            </ul>
        </div>
        <h5 class="title">
            <a href="{{ route('program-kegiatan.detail', $data->slug) }}">{{ $data->title }}</a>
        </h5>
        <div class="tj-blog-button d-flex">
            <a class="tj-secondary-btn btn" href="{{ route('program-kegiatan.detail', $data->slug) }}">Lihat Selengkapnya <i class="flaticon-right-arrow"></i></a>
        </div>
    </div>
</div>