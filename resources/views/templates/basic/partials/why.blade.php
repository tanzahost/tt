<section class="section">
    <span class="anchor-target" id="why-choose-shared-hosting-from-Tanzahost?"></span>
    <div class="container">
        <h2 class="section__title">
            Looking for reasons to choose Tanzahost's {{ __($serviceCategory->name) }}?
        </h2>


        <div class="section__content">
            <div class="tabs" data-content-slider data-options="goToClickedSlide: true;">
                <ul class="nav nav--tabs nav--h content-slider__wrapper justify-content-center justify-content-initial-sm-down">
                    @foreach ($serviceCategory->reasons as $index => $reason)
                    @php $index = $loop->index @endphp
                        <li class="nav__item content-slider__item {{ $index == 0 ? 'is-active' : '' }}">
                            <a class="nav__link p-1" href="#tab_{{ $index }}" data-toggle="lu-tab" data-animation-init>
                                {{ $reason->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="tab-content">
                @foreach ($serviceCategory->reasons as $index => $reason)
                @php $index = $loop->index @endphp
                    <div class="tab-pane {{ $index == 0 ? 'is-active' : '' }}" id="tab_{{ $index }}">
                        <div class="section__body">
                            <div class="section__sidebar">
                                <h3 class="section__title section__title--left h4">
                                    {{ $reason->title }}
                                </h3>
                                <p class="section__desc p-4">
                                    {{ $reason->description }}
                                </p>
                                @if ($reason->sub_title_1)
                                    <h4 class="section__subtitle h6">
                                        {{ $reason->sub_title_1 }}
                                    </h4>
                                    <span class="section__desc p-4">
                                        {{ $reason->sub_desc_1 }}
                                    </span>
                                @endif
                                @if ($reason->sub_title_2)
                                    <h4 class="section__subtitle h6">
                                        {{ $reason->sub_title_2 }}
                                    </h4>
                                    <span class="section__desc p-4">
                                        {{ $reason->sub_desc_2 }}
                                    </span>
                                @endif
                                @if ($reason->sub_title_3)
                                    <h4 class="section__subtitle h6">
                                        {{ $reason->sub_title_3 }}
                                    </h4>
                                    <span class="section__desc p-4">
                                        {{ $reason->sub_desc_3 }}
                                    </span>
                                @endif
                                @if ($reason->url)
                                    <div class="section__actions section__actions--tabs">
                                        <a href="{{ $reason->url }}" class="btn btn--primary btn--link has-arrow">
                                            <div class="btn__text">
                                                Learn More
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5 12H19" stroke="black" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M12 5L19 12L12 19" stroke="black" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg> </div>
                                        </a>
                                    </div>
                                @endif
                            </div>


                                {!! $reason->svg !!}

                                
                        </div>
                    </div>
                @endforeach
                {{-- Rates --}}
                @include('templates.basic.partials.rate')
            </div>
        </div>

    </div>
</section>
