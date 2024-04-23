<section class="section section--faq section-m-w-lg">
    <span class="anchor-target" id="frequently-asked-questions"></span>
    <div class="container">
        <h2 class="section__title">
            Frequently Asked Questions
        </h2>
        <div class="section__content">
            <div class="list-group list-group--collapse" id="faq-collapse-1">
                @foreach ( $serviceCategory->faqs as $index => $faq )


                <div class="list-group__item" data-toggle="lu-collapse" data-target="#faq_{{ $index }}"
                    aria-expanded="false">
                    <div class="list-group__top top">
                        <h3 class="top__title h6">{{ $faq->qn }}</h3> <i class="list-group__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3Z"
                                    stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path class="collapse-open" d="M12 8V16" stroke="black" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M8 12H16" stroke="black" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg> </i>
                    </div>
                    <div class="list-group__content collapse" id="faq_{{ $index }}" data-parent="#faq-collapse-1">
                        <div class="list-group__content-inner">
                            <p class="p-3">{{ $faq->answer }} </p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    </div>
</section>
