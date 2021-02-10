<div class="overlay"></div>
<div class="footer">
    <div class="clearfix"></div>
    <div class="row no-gutters justify-content-around" id="bg">
        <div class="col-auto">
            <a href="{{url('/')}}" class="btn active">
                <i class="material-icons-outlined">home</i>
            </a>
        </div>
        <div class="col-auto">
            <a href="{{ route('favorites') }}" class="btn">
                <i class="material-icons">favorite_border</i>
            </a>
        </div>
        <div class="col-auto">
            <a href="{{route('free.ads')}}" class="btn centerbutton">
                <i class="material-icons">أضافه أعلان</i>
            </a>
        </div>
        <div class="col-auto">
            <a href="{{route('chat.inbox')}}" class="btn">
                <i class="material-icons-outlined">sms</i>
            </a>
        </div>
        <div class="col-auto">
        <a href="@guest {{url('login')}} @endguest  @auth{{url('account')}}@endauth" class="btn">
                <i class="material-icons">person_outline</i>
            </a>
        </div>
    </div>
</div>
