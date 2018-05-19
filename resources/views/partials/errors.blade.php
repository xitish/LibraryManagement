@if(count($errors->all()))
<div class="row" style="margin-top:10px;">
    <div class="col-md-12">
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>  
@endif