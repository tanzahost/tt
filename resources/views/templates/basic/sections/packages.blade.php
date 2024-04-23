@php
    $serviceContent = @getContent('service.content', true);
    $categories = App\Models\ServiceCategory::active()->get();
@endphp
<section class="section">
    <span class="anchor-target" id="hosting-plans-for-every-website"></span>
    <div class="container">
        <h2 class="section__title">
            {{ __(@$serviceContent->data_values->heading) }}
        </h2>
        <p class="section__subtitle p-1">
            {{ __(@$serviceContent->data_values->subheading) }}
         </p>
        
        @include('templates.basic.partials.catepackages')
    </div>
</section>
