<div class="card shadow-sm border-0 h-100">
    <a href="{{ route('program-kegiatan.detail', $data->slug) }}"><img style="height: 200px;" src="{{ asset($data->image) }}" class="object-fit-cover w-100" alt="Image"></a>
    <div class="card-body">
        <div class="d-flex justify-content-between flex-column h-100 gap-2">
            <div class=""> 
                <div class="d-flex justify-content-between p-0 mb-2"> 
                    <span><i class="flaticon-calendar"></i> {{ date('h:i d-M-y', strtotime($data->created_at)) }}</span>
                    <span class="badge rounded bg-light border text-dark"><a href="{{ route('program-kegiatan-kategori',$data->program_kegiatan->slug) }}">{{ $data->program_kegiatan->title }}</a></span>
                </div>

                <h5 class="title">
                    <a href="{{ route('program-kegiatan.detail', $data->slug) }}">{{ $data->title }}</a>
                </h5>
            </div>
            <div class="tj-blog-button d-flex">
                <a class="tj-secondary-btn btn" href="{{ route('program-kegiatan.detail', $data->slug) }}">Lihat Selengkapnya <i class="flaticon-right-arrow"></i></a>
            </div>
        </div>
    </div>
</div>
