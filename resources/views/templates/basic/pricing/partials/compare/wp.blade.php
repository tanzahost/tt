<div class="plan plan--main-header js-plan" data-js-plan-container>
    <div class="plan__nav-wrapper" data-js-plan>
        <div class="plan__nav is-hidden-xl-up" data-js-plan-nav>
            <a class="btn btn--link js-previous-plan" data-js-plan-prev>
                <span class="btn__icon btn__icon--left">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 12H5" stroke="black" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 19L5 12L12 5" stroke="black" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
                <span class="btn__text">Previous</span>
            </a>
            <a class="btn btn--link js-next-plan" data-js-plan-next>
                <span class="btn__text">Next</span>
                <span class="btn__icon btn__icon--right">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12H19" stroke="black" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 5L19 12L12 19" stroke="black" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
            </a>
        </div>
    </div>
    <div class="plan__container" data-js-plan>
        <div class="plan__header plan__header--empty">
            <p data-plan-header-text-top>Did you know that you get a <a href="{{ route('pricing') }}#"
                    data-toggle="lu-modal" data-target="#modal-discount-domain"
                    class="text-bold">free domain</a> with any of these plans?</p>
            <p data-plan-header-text-bottom>Not convinced yet? <br /><a
                    style="cursor: pointer;" onclick="tidioChatApi.open()">Chat with an
                    expert!</a></p>
        </div>
        <div class="mobile-slider swiper-container" data-js-plan-slider>
            <div class="plan__wrapper swiper-wrapper plan-wrapper"
                data-slide-width='[353,353,353,200,200]'>
                <div class="plan__header  swiper-slide">
                    <h3 class="plan__title h5">WordPress Starter</h3>
                    <div class="pricing">
                        <div class="pricing__price">
                            <h3 class="pricing__amount">$1.50</h3>
                            <div class="pricing__period p-4">/mo</div>
                        </div>
                        <div class="pricing__discount" data-toggle='lu-modal'
                            data-target="#modal-discount">
                            {{-- <div class="pricing__old p-4">Tsh 18,010.34</div> --}}
                            <div class="pricing__save p-4">Now 78% Off!</div>
                            <div class="pricing__help-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_helpicon123)">
                                        <path
                                            d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                            stroke="#B6B6B6" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                            stroke="#B6B6B6" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                            fill="#B6B6B6" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_helpicon123">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg> </div>
                        </div>
                    </div>
                    <a href="/wordpress-hosting/wordpress-starter/6"
                        class="btn btn--secondary btn--min-width-md">
                        <span class="btn__text">Get Started Now</span>
                    </a>
                </div>
                <div class="plan__header  swiper-slide">
                    <h3 class="plan__title h5">WordPress Business</h3>
                    <div class="pricing">
                        <div class="pricing__price">
                            <h3 class="pricing__amount">$2.50</h3>
                            <div class="pricing__period p-4">/mo</div>
                        </div>
                        <div class="pricing__discount" data-toggle='lu-modal'
                            data-target="#modal-discount">
                            {{-- <div class="pricing__old p-4">Tsh 20,586.93</div> --}}
                            <div class="pricing__save p-4">Now 81% Off!</div>
                            <div class="pricing__help-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_helpicon123)">
                                        <path
                                            d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                            stroke="#B6B6B6" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                            stroke="#B6B6B6" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                            fill="#B6B6B6" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_helpicon123">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg> </div>
                        </div>
                    </div>
                    <a href="/wordpress-hosting/wordpress-business/7"
                        class="btn btn--secondary btn--min-width-md">
                        <span class="btn__text">Get Started Now</span>
                    </a>
                </div>
                <div class="plan__header  swiper-slide">
                    <h3 class="plan__title h5">WordPress Pro</h3>
                    <div class="pricing">
                        <div class="pricing__price">
                            <h3 class="pricing__amount">$3.99</h3>
                            <div class="pricing__period p-4">/mo</div>
                        </div>
                        <div class="pricing__discount" data-toggle='lu-modal'
                            data-target="#modal-discount">
                            {{-- <div class="pricing__old p-4">Tsh 28,316.69</div> --}}
                            <div class="pricing__save p-4">Now 65% Off!</div>
                            <div class="pricing__help-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_helpicon123)">
                                        <path
                                            d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                            stroke="#B6B6B6" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                            stroke="#B6B6B6" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                            fill="#B6B6B6" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_helpicon123">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg> </div>
                        </div>
                    </div>
                    <a href="/wordpress-hosting/wordpress-pro/8"
                        class="btn btn--secondary btn--min-width-md">
                        <span class="btn__text">Get Started Now</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section__main-wrapper" data-js-plan-container>
    <div class="section__main-plan" data-js-plan>
        <div class="plan plan--pricing js-plan has-shadow" id="plan1">
            <div class="plan__column plan__column--empty">
                <div class="plan__body">
                    <div class="plan__cell">Websites Hosted</div>
                    <div class="plan__cell">NVME Disk Space<label class="label label--tooltip">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_helpicon123)">
                                    <path
                                        d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                        stroke="#B6B6B6" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                        stroke="#B6B6B6" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                        fill="#B6B6B6" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_helpicon123">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <div class="tooltip tooltip--big tooltip--big-right">
                                <span>All your files are stored exclusively on high-performance
                                    NVME drives. This gives you up to 300% better performance
                                    than traditional hard drives.</span>
                            </div>
                        </label>
                    </div>
                    <div class="plan__cell">Bandwidth</div>
                    <div class="plan__cell">Inodes <label class="label label--tooltip">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_helpicon123)">
                                    <path
                                        d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                        stroke="#B6B6B6" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                        stroke="#B6B6B6" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                        fill="#B6B6B6" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_helpicon123">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <div class="tooltip tooltip--big tooltip--big-right">
                                <span>Each inode usually equals one file, folder, email or any
                                    other Unix object in a
                                    file system. The number of inodes on your account equals
                                    the number of files and
                                    folders you have on it.</span>
                            </div>
                        </label>
                    </div>
                    <div class="plan__cell">Free domain registration<label
                            class="label label--tooltip">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_helpicon123)">
                                    <path
                                        d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                        stroke="#B6B6B6" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                        stroke="#B6B6B6" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                        fill="#B6B6B6" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_helpicon123">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <div class="tooltip tooltip--big tooltip--big-right">
                                <span>Order a WordPress hosting plan today and register a brand
                                    new domain name, free of
                                    charge for one year. After the first year, the domain will
                                    renew at the regular rate. This offer covers the most
                                    popular domain extensions.</span>
                            </div>
                        </label>
                    </div>
                    <div class="plan__cell">Free Website Transfer <label
                            class="label label--tooltip">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_helpicon123)">
                                    <path
                                        d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                        stroke="#B6B6B6" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                        stroke="#B6B6B6" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                        fill="#B6B6B6" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_helpicon123">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <div class="tooltip tooltip--big tooltip--big-right">
                                <span>Have your website transferred over to us in less than an
                                    hour! Our migrations
                                    experts will move your existing site + emails free of
                                    charge, seamlessly and with no
                                    downtime.</span>
                            </div>
                        </label>
                    </div>
                    <div class="plan__cell">Free Daily Backups</div>
                    <div class="plan__cell">CPU Cores</div>
                    <div class="plan__cell">RAM Memory</div>
                    <div class="plan__cell">Free SSL Certificates <label
                            class="label label--tooltip">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_helpicon123)">
                                    <path
                                        d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                        stroke="#B6B6B6" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                        stroke="#B6B6B6" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                        fill="#B6B6B6" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_helpicon123">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <div class="tooltip tooltip--big tooltip--big-right">
                                <span>We provide free Lets Encrypt SSL certificates to protect
                                    your site with HTTPS —
                                    encrypting traffic and boosting SEO with Google.</span>
                            </div>
                        </label>
                    </div>
                    <div class="plan__cell">Immediate Account Setup</div>
                    <div class="plan__cell">24/7 WordPress Support</div>
                    <div class="plan__cell">Softaculous 1-Click Install</div>
                    <div class="plan__cell">Multiple Server Locations<label
                            class="label label--tooltip">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_helpicon123)">
                                    <path
                                        d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                        stroke="#B6B6B6" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                        stroke="#B6B6B6" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                        fill="#B6B6B6" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_helpicon123">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <div class="tooltip tooltip--big tooltip--big-right">
                                <span>Host your website close to its visitors for the best
                                    possible latency and faster page load times. We offer
                                    servers in Dallas, London, Sydney, Frankfurt, Bucharest,
                                    Singapore, and Mumbai.</span>
                            </div>
                        </label></div>
                    <div class="plan__cell">45 Days MoneyBack Guarantee</div>
                </div>
            </div>
            <div class="mobile-slider swiper-container" data-js-plan-slider>
                <div class="swiper-wrapper plan-wrapper"
                    data-slide-width='[353,353,353,200,200]'>
                    <div class="swiper-slide">
                        <div class="plan__column">
                            <div class="plan__body">
                                <div class="plan__cell">1 Website</div>
                                <div class="plan__cell">10 GB</div>
                                <div class="plan__cell">Unlimited</div>
                                <div class="plan__cell">250 000</div>
                                <div class="plan__cell"><i><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 6L6 18" stroke="#B7B7B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M6 6L18 18" stroke="#B7B7B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                    </i></div>
                                <div class="plan__cell"><i><svg width="24" height="25"
                                            viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#check1234532clip0)">
                                                <path d="M20 6.20312L9 17.2031L4 12.2031"
                                                    stroke="#009A64" stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="check1234532clip0">
                                                    <rect width="24" height="24" fill="white"
                                                        transform="translate(0 0.203125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </i></div>
                                <div class="plan__cell">10 days</div>
                                <div class="plan__cell">1 Core</div>
                                <div class="plan__cell">1 GB</div>
                                <div class="plan__cell"><i><svg width="24" height="25"
                                            viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#check1234532clip0)">
                                                <path d="M20 6.20312L9 17.2031L4 12.2031"
                                                    stroke="#009A64" stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="check1234532clip0">
                                                    <rect width="24" height="24" fill="white"
                                                        transform="translate(0 0.203125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </i></div>
                                <div class="plan__cell"><i><svg width="24" height="25"
                                            viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#check1234532clip0)">
                                                <path d="M20 6.20312L9 17.2031L4 12.2031"
                                                    stroke="#009A64" stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="check1234532clip0">
                                                    <rect width="24" height="24" fill="white"
                                                        transform="translate(0 0.203125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </i></div>
                                <div class="plan__cell"><i><svg width="24" height="25"
                                            viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#check1234532clip0)">
                                                <path d="M20 6.20312L9 17.2031L4 12.2031"
                                                    stroke="#009A64" stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="check1234532clip0">
                                                    <rect width="24" height="24" fill="white"
                                                        transform="translate(0 0.203125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </i></div>
                                <div class="plan__cell"><i><svg width="24" height="25"
                                            viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#check1234532clip0)">
                                                <path d="M20 6.20312L9 17.2031L4 12.2031"
                                                    stroke="#009A64" stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="check1234532clip0">
                                                    <rect width="24" height="24" fill="white"
                                                        transform="translate(0 0.203125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </i></div>
                                <div class="plan__cell"><i><svg width="24" height="25"
                                            viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#check1234532clip0)">
                                                <path d="M20 6.20312L9 17.2031L4 12.2031"
                                                    stroke="#009A64" stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="check1234532clip0">
                                                    <rect width="24" height="24" fill="white"
                                                        transform="translate(0 0.203125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </i></div>
                                <div class="plan__cell"><i><svg width="24" height="25"
                                            viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#check1234532clip0)">
                                                <path d="M20 6.20312L9 17.2031L4 12.2031"
                                                    stroke="#009A64" stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="check1234532clip0">
                                                    <rect width="24" height="24" fill="white"
                                                        transform="translate(0 0.203125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </i></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="plan__column">
                            <div class="plan__body">
                                <div class="plan__cell">1 Website</div>
                                <div class="plan__cell">100 GB</div>
                                <div class="plan__cell">Unlimited</div>
                                <div class="plan__cell">350 000</div>
                                <div class="plan__cell"><i><svg width="24" height="25"
                                            viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#check1234532clip0)">
                                                <path d="M20 6.20312L9 17.2031L4 12.2031"
                                                    stroke="#009A64" stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="check1234532clip0">
                                                    <rect width="24" height="24" fill="white"
                                                        transform="translate(0 0.203125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </i></div>
                                <div class="plan__cell"><i><svg width="24" height="25"
                                            viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#check1234532clip0)">
                                                <path d="M20 6.20312L9 17.2031L4 12.2031"
                                                    stroke="#009A64" stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="check1234532clip0">
                                                    <rect width="24" height="24" fill="white"
                                                        transform="translate(0 0.203125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </i></div>
                                <div class="plan__cell">20 days</div>
                                <div class="plan__cell">2 Core</div>
                                <div class="plan__cell">2 GB</div>
                                <div class="plan__cell"><i><svg width="24" height="25"
                                            viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#check1234532clip0)">
                                                <path d="M20 6.20312L9 17.2031L4 12.2031"
                                                    stroke="#009A64" stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="check1234532clip0">
                                                    <rect width="24" height="24" fill="white"
                                                        transform="translate(0 0.203125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </i></div>
                                <div class="plan__cell"><i><svg width="24" height="25"
                                            viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#check1234532clip0)">
                                                <path d="M20 6.20312L9 17.2031L4 12.2031"
                                                    stroke="#009A64" stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="check1234532clip0">
                                                    <rect width="24" height="24" fill="white"
                                                        transform="translate(0 0.203125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </i></div>
                                <div class="plan__cell"><i><svg width="24" height="25"
                                            viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#check1234532clip0)">
                                                <path d="M20 6.20312L9 17.2031L4 12.2031"
                                                    stroke="#009A64" stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="check1234532clip0">
                                                    <rect width="24" height="24" fill="white"
                                                        transform="translate(0 0.203125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </i></div>
                                <div class="plan__cell"><i><svg width="24" height="25"
                                            viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#check1234532clip0)">
                                                <path d="M20 6.20312L9 17.2031L4 12.2031"
                                                    stroke="#009A64" stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="check1234532clip0">
                                                    <rect width="24" height="24" fill="white"
                                                        transform="translate(0 0.203125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </i></div>
                                <div class="plan__cell"><i><svg width="24" height="25"
                                            viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#check1234532clip0)">
                                                <path d="M20 6.20312L9 17.2031L4 12.2031"
                                                    stroke="#009A64" stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="check1234532clip0">
                                                    <rect width="24" height="24" fill="white"
                                                        transform="translate(0 0.203125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </i></div>
                                <div class="plan__cell"><i><svg width="24" height="25"
                                            viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#check1234532clip0)">
                                                <path d="M20 6.20312L9 17.2031L4 12.2031"
                                                    stroke="#009A64" stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="check1234532clip0">
                                                    <rect width="24" height="24" fill="white"
                                                        transform="translate(0 0.203125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </i></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="plan__column">
                            <div class="plan__body">
                                <div class="plan__cell">Unlimited Websites</div>
                                <div class="plan__cell">Unlimited</div>
                                <div class="plan__cell">Unlimited</div>
                                <div class="plan__cell">500 000</div>
                                <div class="plan__cell"><i><svg width="24" height="25"
                                            viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#check1234532clip0)">
                                                <path d="M20 6.20312L9 17.2031L4 12.2031"
                                                    stroke="#009A64" stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="check1234532clip0">
                                                    <rect width="24" height="24" fill="white"
                                                        transform="translate(0 0.203125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </i></div>
                                <div class="plan__cell"><i><svg width="24" height="25"
                                            viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#check1234532clip0)">
                                                <path d="M20 6.20312L9 17.2031L4 12.2031"
                                                    stroke="#009A64" stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="check1234532clip0">
                                                    <rect width="24" height="24" fill="white"
                                                        transform="translate(0 0.203125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </i></div>
                                <div class="plan__cell">30 days</div>
                                <div class="plan__cell">3 Core</div>
                                <div class="plan__cell">3 GB</div>
                                <div class="plan__cell"><i><svg width="24" height="25"
                                            viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#check1234532clip0)">
                                                <path d="M20 6.20312L9 17.2031L4 12.2031"
                                                    stroke="#009A64" stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="check1234532clip0">
                                                    <rect width="24" height="24" fill="white"
                                                        transform="translate(0 0.203125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </i></div>
                                <div class="plan__cell"><i><svg width="24" height="25"
                                            viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#check1234532clip0)">
                                                <path d="M20 6.20312L9 17.2031L4 12.2031"
                                                    stroke="#009A64" stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="check1234532clip0">
                                                    <rect width="24" height="24" fill="white"
                                                        transform="translate(0 0.203125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </i></div>
                                <div class="plan__cell"><i><svg width="24" height="25"
                                            viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#check1234532clip0)">
                                                <path d="M20 6.20312L9 17.2031L4 12.2031"
                                                    stroke="#009A64" stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="check1234532clip0">
                                                    <rect width="24" height="24" fill="white"
                                                        transform="translate(0 0.203125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </i></div>
                                <div class="plan__cell"><i><svg width="24" height="25"
                                            viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#check1234532clip0)">
                                                <path d="M20 6.20312L9 17.2031L4 12.2031"
                                                    stroke="#009A64" stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="check1234532clip0">
                                                    <rect width="24" height="24" fill="white"
                                                        transform="translate(0 0.203125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </i></div>
                                <div class="plan__cell"><i><svg width="24" height="25"
                                            viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#check1234532clip0)">
                                                <path d="M20 6.20312L9 17.2031L4 12.2031"
                                                    stroke="#009A64" stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="check1234532clip0">
                                                    <rect width="24" height="24" fill="white"
                                                        transform="translate(0 0.203125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </i></div>
                                <div class="plan__cell"><i><svg width="24" height="25"
                                            viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#check1234532clip0)">
                                                <path d="M20 6.20312L9 17.2031L4 12.2031"
                                                    stroke="#009A64" stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="check1234532clip0">
                                                    <rect width="24" height="24" fill="white"
                                                        transform="translate(0 0.203125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="list-group list-group--collapse" id="compare-packages-collapse-wph">
    <div class="list-group__item" data-js-plan-container>
        <div class="list-group__top top" data-toggle="lu-collapse"
            data-target="#compare-packages-wph-1" aria-expanded="false"
            aria-controls="compare-packages-wph-1">
            <h4 class="top__title h5">Security & Reliability</h4>
            <i class="list-group__icon"><svg width="24" height="24" viewBox="0 0 24 24"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3Z"
                        stroke="black" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path class="collapse-open" d="M12 8V16" stroke="black" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M8 12H16" stroke="black" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg></i>
        </div>
        <div class="list-group__content collapse" id="compare-packages-wph-1">
            <div class="list-group__content-inner">
                <div class="plan plan--pricing js-plan has-shadow" id="plan2-wph" data-js-plan>
                    <div class="plan__column plan__column--empty">
                        <div class="plan__body">
                            <div class="plan__cell">Uptime Guarantee <label
                                    class="label label--tooltip">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_helpicon123)">
                                            <path
                                                d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                                fill="#B6B6B6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_helpicon123">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="tooltip tooltip--big tooltip--big-right">
                                        <span>You can rely on us because we hate downtime as
                                            much as you do and we
                                            guarantee that our servers will be online with the
                                            highest possible
                                            uptime.</span>
                                    </div>
                                </label></div>
                            <div class="plan__cell">Reliable Cloud Platform <label
                                    class="label label--tooltip">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_helpicon123)">
                                            <path
                                                d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                                fill="#B6B6B6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_helpicon123">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="tooltip tooltip--big tooltip--big-right">
                                        <span>Our cloud hosting infrastructure keeps your data
                                            safe. By distributing
                                            server data across redundant servers, information
                                            hosted in the cloud is
                                            protected against any failure.</span>
                                    </div>
                                </label></div>
                            <div class="plan__cell">Solid State Storage <label
                                    class="label label--tooltip">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_helpicon123)">
                                            <path
                                                d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                                fill="#B6B6B6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_helpicon123">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="tooltip tooltip--big tooltip--big-right">
                                        <span>All your files are stored exclusively on
                                            high-performance solid-state
                                            drives. This gives you up to 300% better
                                            performance than traditional hard
                                            drives.</span>
                                    </div>
                                </label></div>
                            <div class="plan__cell">Imunify360 Proactive Defense <label
                                    class="label label--tooltip">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_helpicon123)">
                                            <path
                                                d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                                fill="#B6B6B6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_helpicon123">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="tooltip tooltip--big tooltip--big-right">
                                        <span>Imunify360 is a next-generation all-in-one
                                            security solution. It uses herd
                                            immunity and the unique, proactive approach to
                                            provide total protection
                                            against known and unknown attacks.</span>
                                    </div>
                                </label></div>
                            <div class="plan__cell">Advanced Firewall Protection <label
                                    class="label label--tooltip">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_helpicon123)">
                                            <path
                                                d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                                fill="#B6B6B6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_helpicon123">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="tooltip tooltip--big tooltip--big-right">
                                        <span>Advanced firewall protection that uses herd
                                            immunity and artificial
                                            intelligence to detect new threats and protect the
                                            servers. The firewall is
                                            capable of defending against brute force attacks,
                                            DoS attacks, and port
                                            scans.</span>
                                    </div>
                                </label></div>
                            <div class="plan__cell">Web Application Firewall <label
                                    class="label label--tooltip">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_helpicon123)">
                                            <path
                                                d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                                fill="#B6B6B6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_helpicon123">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="tooltip tooltip--big tooltip--big-right">
                                        <span>The firewall tightly integrates with mod_security
                                            web application
                                            firewalls to dramatically enhance its usefulness.
                                            In combination with WAF,
                                            we can stop the majority of web application attacks
                                            even before they
                                            start.</span>
                                    </div>
                                </label></div>
                            <div class="plan__cell">Malware Detection <label
                                    class="label label--tooltip">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_helpicon123)">
                                            <path
                                                d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                                fill="#B6B6B6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_helpicon123">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="tooltip tooltip--big tooltip--big-right">
                                        <span>Imunify360 automatically scans file systems for
                                            malware injection and
                                            quarantines infected files.</span>
                                    </div>
                                </label></div>
                            <div class="plan__cell">Malware Removal <label
                                    class="label label--tooltip">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_helpicon123)">
                                            <path
                                                d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                                fill="#B6B6B6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_helpicon123">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="tooltip tooltip--big tooltip--big-right">
                                        <span>Available for free with our Turbo plan, our
                                            malware scanner scans your website for malware,
                                            fixing any threats to your website's
                                            security.</span>
                                    </div>
                                </label></div>
                            <div class="plan__cell">Rebootless Secure Kernel <label
                                    class="label label--tooltip">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_helpicon123)">
                                            <path
                                                d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                                fill="#B6B6B6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_helpicon123">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="tooltip tooltip--big tooltip--big-right">
                                        <span>Rebootless Secure Kernel powered by KernelCare is
                                            a component that keeps
                                            your server secure by automatically patching
                                            kernels without having to
                                            reboot the server. It checks for new patches every
                                            four hours and
                                            automatically applies them to the server without
                                            any service
                                            disruption.</span>
                                    </div>
                                </label></div>
                            <div class="plan__cell">CloudLinux OS <label
                                    class="label label--tooltip">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_helpicon123)">
                                            <path
                                                d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                                fill="#B6B6B6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_helpicon123">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="tooltip tooltip--big tooltip--big-right">
                                        <span>CloudLinux OS is the leading platform for
                                            multitenancy. It improves server
                                            stability, density, and security by isolating each
                                            tenant and giving them
                                            allocated server resources. This creates an
                                            environment that feels more like
                                            a virtual server than a shared hosting
                                            account.</span>
                                    </div>
                                </label></div>
                            <div class="plan__cell">Account Isolation <label
                                    class="label label--tooltip">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_helpicon123)">
                                            <path
                                                d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                                fill="#B6B6B6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_helpicon123">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="tooltip tooltip--big tooltip--big-right">
                                        <span>CageFS isolate tenants in "cages" to increase
                                            security. Users only have
                                            access to safe files and their own processes, and
                                            cannot see other users on
                                            the server.</span>
                                    </div>
                                </label></div>
                            <div class="plan__cell">Proactive Server Monitoring <label
                                    class="label label--tooltip">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_helpicon123)">
                                            <path
                                                d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                                fill="#B6B6B6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_helpicon123">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="tooltip tooltip--big tooltip--big-right">
                                        <span>We keep a close eye on your server since we react
                                            proactively to any
                                            attacks or problems towards your business. You can
                                            sleep well at night,
                                            knowing that your server stays safe and secure and
                                            your websites stay
                                            online.</span>
                                    </div>
                                </label></div>
                            <div class="plan__cell">Network Firewall</div>
                        </div>
                    </div>
                    <div class="mobile-slider swiper-container" data-js-plan-slider>
                        <div class="swiper-wrapper plan-wrapper"
                            data-slide-width='[353,353,353,200,200]'>
                            <div class="swiper-slide">
                                <div class="plan__column">
                                    <div class="plan__body">
                                        <div class="plan__cell">99.99%</div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 6L6 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6 6L18 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 6L6 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6 6L18 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 6L6 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6 6L18 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 6L6 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6 6L18 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell">24/7/365</div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="plan__column">
                                    <div class="plan__body">
                                        <div class="plan__cell">99.99%</div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 6L6 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6 6L18 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 6L6 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6 6L18 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell">24/7/365</div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="plan__column">
                                    <div class="plan__body">
                                        <div class="plan__cell">99.99%</div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell">24/7/365</div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="list-group__item" data-js-plan-container>
        <div class="list-group__top top" data-toggle="lu-collapse"
            data-target="#compare-packages-wph-2" aria-expanded="false"
            aria-controls="compare-packages-wph-2">
            <h4 class="top__title h5">Website Performance Features</h4>
            <i class="list-group__icon"><svg width="24" height="24" viewBox="0 0 24 24"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3Z"
                        stroke="black" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path class="collapse-open" d="M12 8V16" stroke="black" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M8 12H16" stroke="black" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg></i>
        </div>
        <div class="list-group__content collapse" id="compare-packages-wph-2">
            <div class="list-group__content-inner">
                <div class="plan plan--pricing js-plan has-shadow" id="plan3-wph" data-js-plan>
                    <div class="plan__column plan__column--empty">
                        <div class="plan__body">
                            <div class="plan__cell">LiteSpeed WordPress Cache <label
                                    class="label label--tooltip">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_helpicon123)">
                                            <path
                                                d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                                fill="#B6B6B6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_helpicon123">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="tooltip tooltip--big tooltip--big-right">
                                        <span>With advanced cache-management tools and
                                            optimization features, LiteSpeed
                                            WordPress Cache is an all-in-one site acceleration
                                            solution. It is the only
                                            optimization plugin you need.</span>
                                    </div>
                                </label></div>
                            <div class="plan__cell">HTTP/3</div>
                            <div class="plan__cell">Free CloudFlare CDN <label
                                    class="label label--tooltip">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_helpicon123)">
                                            <path
                                                d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                                fill="#B6B6B6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_helpicon123">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="tooltip tooltip--big tooltip--big-right">
                                        <span>We have partnered with Cloudflare to offer a free
                                            CDN service that will
                                            make your website load fast no matter where your
                                            visitors are
                                            located.</span>
                                    </div>
                                </label> </div>
                            <div class="plan__cell">Multiple Server Locations<label
                                    class="label label--tooltip">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_helpicon123)">
                                            <path
                                                d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                                fill="#B6B6B6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_helpicon123">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="tooltip tooltip--big tooltip--big-right">
                                        <span>Host your website close to its visitors for the
                                            best possible latency and
                                            faster page load times. We offer servers in Dallas,
                                            Frankfurt, Amsterdam,
                                            London, Singapore, and Bucharest.</span>
                                    </div>
                                </label></div>
                            <div class="plan__cell">NVMe Storage <label
                                    class="label label--tooltip">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_helpicon123)">
                                            <path
                                                d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                                fill="#B6B6B6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_helpicon123">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="tooltip tooltip--big tooltip--big-right">
                                        <span>Enterprise-grade NVMe drives that ensure up to
                                            300% faster access to your
                                            files and databases compared to other hosting
                                            providers using non-NVMe
                                            drives.</span>
                                    </div>
                                </label></div>
                            <div class="plan__cell">Memcached <label
                                    class="label label--tooltip">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_helpicon123)">
                                            <path
                                                d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                                fill="#B6B6B6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_helpicon123">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="tooltip tooltip--big tooltip--big-right">
                                        <span>Memcached increases the speed of your MySQL
                                            databases by keeping your most
                                            important data in memory for quicker
                                            retrieval.</span>
                                    </div>
                                </label></div>
                            <div class="plan__cell">APC</div>
                            <div class="plan__cell">OPCache</div>
                            <div class="plan__cell">Cloudflare Railgun <label
                                    class="label label--tooltip">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_helpicon123)">
                                            <path
                                                d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                                fill="#B6B6B6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_helpicon123">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="tooltip tooltip--big tooltip--big-right">
                                        <span>Railgun ensures that the connection between your
                                            origin server and the
                                            Cloudflare network is as fast as possible. This
                                            results in an average 200%
                                            additional performance increase.</span>
                                    </div>
                                </label></div>
                            <div class="plan__cell">QUIC Protocol <label
                                    class="label label--tooltip">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_helpicon123)">
                                            <path
                                                d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                                fill="#B6B6B6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_helpicon123">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="tooltip tooltip--big tooltip--big-right">
                                        <span>QUIC (Quick UDP Internet Connections) is a new
                                            encrypted-by-default
                                            Internet transport protocol, that provides a number
                                            of improvements designed
                                            to accelerate HTTP traffic as well as make it more
                                            secure, with the intended
                                            goal of eventually replacing TCP and TLS on the
                                            web.</span>
                                    </div>
                                </label></div>
                            <div class="plan__cell">Leverage Browser Caching </div>
                            <div class="plan__cell">GZIP Compression</div>
                            <div class="plan__cell">Keep-alive</div>
                            <div class="plan__cell">CSS/JS/HTML Minification</div>
                        </div>
                    </div>
                    <div class="mobile-slider swiper-container" data-js-plan-slider>
                        <div class="swiper-wrapper plan-wrapper"
                            data-slide-width='[353,353,353,200,200]'>
                            <div class="swiper-slide">
                                <div class="plan__column">
                                    <div class="plan__body">
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 6L6 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6 6L18 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 6L6 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6 6L18 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 6L6 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6 6L18 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 6L6 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6 6L18 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 6L6 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6 6L18 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="plan__column">
                                    <div class="plan__body">
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 6L6 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6 6L18 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 6L6 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6 6L18 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 6L6 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6 6L18 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 6L6 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6 6L18 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 6L6 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6 6L18 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="plan__column">
                                    <div class="plan__body">
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="list-group__item" data-js-plan-container>
        <div class="list-group__top top" data-toggle="lu-collapse"
            data-target="#compare-packages-wph-3" aria-expanded="false">
            <h4 class="top__title h5">Email Features</h4>
            <i class="list-group__icon"><svg width="24" height="24" viewBox="0 0 24 24"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3Z"
                        stroke="black" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path class="collapse-open" d="M12 8V16" stroke="black" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M8 12H16" stroke="black" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg></i>
        </div>
        <div class="list-group__content collapse" id="compare-packages-wph-3">
            <div class="list-group__content-inner">
                <div class="plan plan--pricing js-plan has-shadow" id="plan4-wph" data-js-plan>
                    <div class="plan__column plan__column--empty">
                        <div class="plan__body">
                            <div class="plan__cell">Email Accounts</div>
                            <div class="plan__cell">Mailbox Storage</div>
                            <div class="plan__cell">Email Forwarders</div>
                            <div class="plan__cell">Webmail <label
                                    class="label label--tooltip">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_helpicon123)">
                                            <path
                                                d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                                fill="#B6B6B6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_helpicon123">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="tooltip tooltip--big tooltip--big-right">
                                        <span>Webmail allows you to access your email accounts
                                            through any browser. You
                                            can use RoundCube as the webmail client.</span>
                                    </div>
                                </label></div>
                            <div class="plan__cell">Mail Client Setup <label
                                    class="label label--tooltip">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_helpicon123)">
                                            <path
                                                d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                                fill="#B6B6B6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_helpicon123">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="tooltip tooltip--big tooltip--big-right">
                                        <span>Always have your latest emails and contacts at
                                            your fingertips. Our
                                            professional email service work with Outlook, Apple
                                            Mail and other known
                                            email apps to keep all your devices up to date and
                                            in sync – from your
                                            laptop to your smartphone to tablet.</span>
                                    </div>
                                </label></div>
                            <div class="plan__cell">MailChannel <label
                                    class="label label--tooltip">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_helpicon123)">
                                            <path
                                                d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                                stroke="#B6B6B6" stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                                fill="#B6B6B6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_helpicon123">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="tooltip tooltip--big tooltip--big-right">
                                        <span>Never worry about Email blacklisting again! We’ve
                                            partnered with
                                            MailChannels to have your emails always delivered
                                            to the Inbox of your
                                            recipients.</span>
                                    </div>
                                </label></div>
                            <div class="plan__cell">Catch-all Email</div>
                            <div class="plan__cell">Email Filters</div>
                            <div class="plan__cell">Spam Filters</div>
                            <div class="plan__cell">Email Autoresponders</div>
                        </div>
                    </div>
                    <div class="mobile-slider swiper-container" data-js-plan-slider>
                        <div class="swiper-wrapper plan-wrapper"
                            data-slide-width='[353,353,353,200,200]'>
                            <div class="swiper-slide">
                                <div class="plan__column">
                                    <div class="plan__body">
                                        <div class="plan__cell">1</div>
                                        <div class="plan__cell">2 GB per email account</div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="plan__column">
                                    <div class="plan__body">
                                        <div class="plan__cell">1</div>
                                        <div class="plan__cell">Unlimited</div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="plan__column">
                                    <div class="plan__body">
                                        <div class="plan__cell">Unlimited</div>
                                        <div class="plan__cell">Unlimited</div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="list-group__item" data-js-plan-container>
        <div class="list-group__top top" data-toggle="lu-collapse"
            data-target="#compare-packages-wph-4" aria-expanded="false">
            <h4 class="top__title h5">Developer Features</h4>
            <i class="list-group__icon"><svg width="24" height="24" viewBox="0 0 24 24"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3Z"
                        stroke="black" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path class="collapse-open" d="M12 8V16" stroke="black" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M8 12H16" stroke="black" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg></i>
        </div>
        <div class="list-group__content collapse" id="compare-packages-wph-4">
            <div class="list-group__content-inner">
                <div class="plan plan--pricing js-plan has-shadow" id="plan5-wph" data-js-plan>
                    <div class="plan__column plan__column--empty">
                        <div class="plan__body">
                            <div class="plan__cell">Multiple PHP Versions</div>
                            <div class="plan__cell">PHP Selector</div>
                            <div class="plan__cell">Softaculous 1-Click App Installer</div>
                            <div class="plan__cell">Application Autoupdates</div>
                            <div class="plan__cell">WordPress Staging</div>
                            <div class="plan__cell">MySQL Version</div>
                            <div class="plan__cell">MySQL Databases</div>
                            <div class="plan__cell">Remote MySQL Access</div>
                            <div class="plan__cell">PostgreSQL Version</div>
                            <div class="plan__cell">PostgreSQL Databases</div>
                            <div class="plan__cell">phpMyAdmin</div>
                            <div class="plan__cell">Python</div>
                            <div class="plan__cell">SSH and SFTP Access </div>
                            <div class="plan__cell">Mod_rewrite for SEO URLs</div>
                            <div class="plan__cell">Preinstalled GIT</div>
                            <div class="plan__cell">WP-CLI</div>
                            <div class="plan__cell">Custom Cron Jobs</div>
                        </div>
                    </div>
                    <div class="mobile-slider swiper-container" data-js-plan-slider>
                        <div class="swiper-wrapper plan-wrapper"
                            data-slide-width='[353,353,208,200,200]'>
                            <div class="swiper-slide">
                                <div class="plan__column">
                                    <div class="plan__body">
                                        <div class="plan__cell">8.3, 8.2, 8.1, 8.0, 7.4, 7.3, 7.2,
                                            7.1, 7.0, 5.6</div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 6L6 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M6 6L18 18" stroke="#B7B7B7"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell">MariaDB 10.5</div>
                                        <div class="plan__cell">Unlimited</div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell">PostgreSQL 13</div>
                                        <div class="plan__cell">Unlimited</div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="plan__column">
                                    <div class="plan__body">
                                        <div class="plan__cell">8.3, 8.2, 8.1, 8.0, 7.4, 7.3, 7.2,
                                            7.1, 7.0, 5.6</div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell">MariaDB 10.5</div>
                                        <div class="plan__cell">Unlimited</div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell">PostgreSQL 13</div>
                                        <div class="plan__cell">Unlimited</div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="plan__column">
                                    <div class="plan__body">
                                        <div class="plan__cell">8.3, 8.2, 8.1, 8.0, 7.4, 7.3, 7.2,
                                            7.1, 7.0, 5.6</div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell">MariaDB 10.5</div>
                                        <div class="plan__cell">Unlimited</div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell">PostgreSQL 13</div>
                                        <div class="plan__cell">Unlimited</div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                        <div class="plan__cell"><i><svg width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#check1234532clip0)">
                                                        <path
                                                            d="M20 6.20312L9 17.2031L4 12.2031"
                                                            stroke="#009A64" stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="check1234532clip0">
                                                            <rect width="24" height="24"
                                                                fill="white"
                                                                transform="translate(0 0.203125)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
