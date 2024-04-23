@extends($activeTemplate.'layouts.frontend')

@section('content')
    <section class="section">
        @if($sections != null)
        @foreach(json_decode($sections) as $sec)
            @include($activeTemplate.'sections.'.$sec)
        @endforeach
    @endif
    </section>
@endsection
