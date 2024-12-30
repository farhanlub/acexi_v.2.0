<div class="row">
    @foreach($expertScopes as $scope)
        <div class="col-lg-4 col-md-6">
            <a href="{{ route('tentang-kami.lingkup-kepakaran.detai', $scope->slug) }}">
                <div class="tj-process-item">
                    <img src="{{ asset($scope->image) }}" alt="Image" />
                    <div class="process-content flex-nowrap">
                        <div class="process-icon">
                            <i class="{{ $scope->icon }}"></i>
                        </div>
                        <div class="process-title">
                            <h5 class="title">{{ $scope->title }}</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>  