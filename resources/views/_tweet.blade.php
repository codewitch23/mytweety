<div class="border-bottom m-4">
    <div class="d-flex align-items-center">
        <img class="rounded-circle mr-2" src={{$tweet->user->avatar}}>
        <h5>{{$tweet->user->name}}</h5>
    </div>
    <div>
        {{$tweet->body}}
    </div>
</div>
