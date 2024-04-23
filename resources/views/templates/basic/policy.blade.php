@extends($activeTemplate.'layouts.frontend')

@section('content')
<section class="section">
    <div class="policy-section pt-60 pb-60 bg--light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="policy-content">
                        @php
                            echo $policy->data_values->details
                        @endphp
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
