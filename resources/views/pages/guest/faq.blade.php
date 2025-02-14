@extends('layouts.guest')

@section('content')
    <section class="breadcrumb-wrapper bg-success pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content-area">
                        <div class="breadcrumb-heading">
                            <h1 class="breadcrumb-title text-center mb-5">FAQ</h1>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=========== Faq Section Start =========-->
    <section class="tj-faq-section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-sec-heading-four text-center"> 
                        <h2 class="sec-title">Pertanyaan yang Sering<span> Diajukan</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @php
                    $half = ceil($data->count() / 2);
                    $leftFaqs = $data->take($half);
                    $rightFaqs = $data->skip($half);
                @endphp

                <div class="col-lg-6">
                    <div class="accordion" id="ItemOne">
                        @foreach($leftFaqs as $index => $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{ $index }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                            data-bs-target="#collapse{{ $index }}" aria-expanded="false" 
                                            aria-controls="collapse{{ $index }}">
                                        {{ $faq->pertanyaan }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $index }}" class="accordion-collapse collapse" 
                                     aria-labelledby="heading{{ $index }}" data-bs-parent="#ItemOne">
                                    <div class="accordion-body">
                                        <strong>{{ $faq->jawaban }}</strong>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="accordion" id="ItemTwo">
                        @foreach($rightFaqs as $index => $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingRight{{ $index }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                            data-bs-target="#collapseRight{{ $index }}" aria-expanded="false" 
                                            aria-controls="collapseRight{{ $index }}">
                                        {{ $faq->pertanyaan }}
                                    </button>
                                </h2>
                                <div id="collapseRight{{ $index }}" class="accordion-collapse collapse" 
                                     aria-labelledby="headingRight{{ $index }}" data-bs-parent="#ItemTwo">
                                    <div class="accordion-body">
                                        <strong>{{ $faq->jawaban }}</strong>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection