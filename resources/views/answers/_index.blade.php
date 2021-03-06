<div class="row mt-4">
    <div class="col-md-12">
        <div class="card border border-success ">
            <div class="card-body ">
                <div class="card-title ">
                    <h2 class="text-primary">
                        {{ $answersCount . " " . str_plural('Answer', $answersCount) }}</h2>
                </div>
                <hr>
                @include('layouts._messages')
                
                @foreach ($answers as $answer)
                <div class="media">
                    <div class="d-fex flex-column vote-controls">
                        <a title="This answer is useful" class="vote-up">
                            <i class="fas fa-caret-up fa-3x"></i>
                        </a>
                        <span class="votes-count">1230</span>
                        <a title="This answer is not useful" class="vote-dowm off">
                            <i class="fas fa-caret-down fa-3x"></i>
                        </a>
                        <a title="Mark this answer as best answer" class="vote-accepted mt-2 ">
                            <i class="fas fa-check fa-2x"></i>
                            <span class="favorites-count "></span>
                        </a>


                    </div>
                    <div class="media-body">
                        {!! $answer->body_html !!}
                        <div class="float-right">
                            <span class="text-muted">Answerd {{ $answer->created_date }} </span>
                            <div class="media mt-2">
                                <a href="{{ $answer->user->url }}" class="pr-2">
                                    <img src="{{ $answer->user->avatar }}">
                                </a>
                                <div class="media-body mt-1">
                                    <a href="{{ $answer->user->url }}">{{ $answer->user->name }}</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <hr class="border border-success">
                @endforeach

            </div>
        </div>

    </div>
</div>