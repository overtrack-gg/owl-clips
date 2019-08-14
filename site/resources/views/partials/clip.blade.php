<div class="clip card text-dark">
    <div class="card-header">
        <div class="card-title">
            <p class="h4">{{ $clip['game_name'] }} - {{ $clip['player'] }} - {{ $clip['hero'] }}</p>
        </div>
    </div>
    <div class="card-body">
        <div class="video-responsive">
            <iframe src="https://clips.twitch.tv/embed?clip={{ substr($clip['url'], strrpos($clip['url'], '/') + 1) }}&autoplay=false"
                height="360"
                width="640"
                frameborder="0"
                scrolling="no"
                allowfullscreen="true">
            </iframe>
        </div>
    </div>
    {{-- <a href="{{ $clip['url'] }}">{{ $clip['game_name'] }} as {{ $clip['hero'] }} by {{ $clip['player'] }}</a> --}}
</div>
