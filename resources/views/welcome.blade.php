@extends ('layout')

@section ('content')
        <h1>
            Larasta
        </h1>
        <span class="version">{{ config('app.version') }}</span>
        <div>
            <a href="/remarks">Remarques</a>
        </div>
        <div>
            <a href="/synchro">Synchro</a>
        </div>
    </div>
@stop