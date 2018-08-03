@extends('layouts.app')

@section('content')
<h2>List of questions</h2>
<div class="card-deck">
    @forelse($questions as $question)
        <div class="col-sm-4 d-flex align-items-stretch">
            <div class="card mb-3 ">
                <div class="card-header">
                    <small class="text-muted">
                        Updated:
                        Answers:
                    </small>
                </div>
                <div class="card-body">
                    <p class="card-text">{{$question->body}}</p>
                </div>
                <div class="card-footer">
                    <p class="card-text">

                        <a class="btn btn-primary float-right" href="{{ route('questions.show', ['id' => $question->id]) }}">
                            View
                        </a>
                    </p>
                </div>
            </div>
        </div>

    @empty

        There are no question to view.
    @endforelse



</div>
<div class="card-footer">
    <div class="float-right">
        {{ $questions->links() }}
    </div>
</div>
@endsection