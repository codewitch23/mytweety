<div class="border-bottom m-4">
    <div class="d-flex align-items-center">
        <a href="{{route('profile',$tweet->user)}}">
            <img width="50px"height="50px" class="rounded-circle mr-2" src={{$tweet->user->avatar}}></a>
        <a href="{{route('profile',$tweet->user)}}"><h5>{{$tweet->user->name}}</h5></a>
    </div>
    <div>
        {{$tweet->body}}
    </div>
</div>
