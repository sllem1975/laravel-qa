<div class="row mt-4">
    <div class="col-md-12">
        <div class="card border border-success ">
            <div class="card-body ">
                <div class="card-title ">
                    <h3>Your answer</h3>
                </div>
                <hr>
                <form action="{{ route('questions.answers.store', $question->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <textarea class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" rows="7"
                            name="body"></textarea>
                        @if ($errors->has('body'))
                            <div class="invalid-feeback">
                                <strong>{{ $errors->first('body') }} </strong>
                            </div>
                        @endif

                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-outline-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>