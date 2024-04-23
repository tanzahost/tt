@php
    $footer = @getContent('footer.content', true);
    $policyPages = @getContent('policy_pages.element', orderById:true);
@endphp

<!-- Footer Section -->
<footer class="py-4 footer bg-dark-two">
    <div class="container">
        <div class="footer-content text-center">
            <a href="{{ route('home') }}" class="logo mb-3">
                <img src="{{getImage(getFilePath('logoIcon') .'/logo.png')}}" alt="@lang('logo')">
            </a>
            

            <p>{{ __($general->site_name) }} &copy; {{ date('Y') }}. @lang('All Rights Reserved')</p>
        </div>
    </div>
</footer>
