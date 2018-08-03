@section('sidebar')
    <div class="form-group label-floating">
        @if (Session::has('username'))
            <form action="#" method="GET" class="">
                <label for="question">Ask your question here</label>
                <input required type="text" name="question" class="form-control" placeholder="Ex: How do I..., Have anyone ever..., etc."/>
                <button class="btn btn-block btn-primary"><i class="fa fa-comment"></i> Ask a question</button>
            </form>
        @else
            <h3>Join the community to ask questions!</h3>
            <button class="btn btn-block btn-primary"><span class="fa fa-sign-in"></span> Login/Signup</button>
        @endif

    </div>
@stop