@extends('base_template')
    @section('content') 
        <div class="columns">
            <div class="column col-12 text-center">
                <h1>Clips for {{ $resultsFor }} - {{ count($clips) }}</h1>
            </div>
            @if (count($clips) > 1)
                @foreach ($clips as $clip)
                    <div class="column">
                        @include('partials/clip')
                    </div>
                @endforeach
                @endif
        </div>
    @endsection
