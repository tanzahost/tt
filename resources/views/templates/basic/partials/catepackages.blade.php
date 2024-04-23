@php
    $serviceContent = @getContent('service.content', true);
    $categories = App\Models\ServiceCategory::active()->get();
@endphp
<div class="section__content">
    <div class="row row--eq-height row--lg justify-content-center features features--web-hosting">
        @foreach ($categories->take(3) as $category)
        <div class="col-xl-3 col-md-6 col-sm-12">
            <div class="feature text-sm-left">
                <div class="feature__icon">
                    {!! $category->svg !!}
                </div>
                <div class="feature__body">
                    <h3 class="feature__title h5">
                        {{ __($category->name) }}
                    </h3>
                    <p class="feature__desc p-4">
                        {{ strLimit(__($category->short_description), 150) }}
                    </p>
                </div>
                <div class="feature__pricing pricing">
                    <span class="pricing__title">Starting at</span>
                    <div class="pricing__price">
                        <span class="pricing__amount h3">{{ $general->cur_sym }} {{ $category->price }}</span>
                        <div class="pricing__period p-4"> /mo</div>
                    </div>
                </div>
                <div class="feature__actions">
                    <a href="{{ route('service.category', $category->slug) }}" class="btn btn--link has-arrow">
                        <div class="btn__text p-3">Learn More <svg width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12H19" stroke="black" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M12 5L19 12L12 19" stroke="black" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></div>
                    </a>
                </div>
            </div>
        </div>
        @endforeach



    </div>
</div>
