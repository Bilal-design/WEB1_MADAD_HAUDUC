@if($errors)
    <ul>
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                {{$error}}<br/>
            </div>

            @if('type' == 'vide')
                <div class="alert alert-danger" role="alert">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only">Error:</span>
                    {{$error}}<br/>
                </div>
             @else

             @endif
        @endforeach
    </ul>
@endif