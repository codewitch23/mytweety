<h3>Friends</h3>
<ul>
    @foreach(auth()->user()->follows as $user)
        <li class="friends-list ">
            <div class="d-flex flex-row align-items-center">
                <a href="{{route('profile',$user)}}">
                    <img
                        src={{$user->avatar}}
                            width="40px"
                            height="40px"
                            alt=""
                        class="rounded-circle"
                    ></a>
                <a href="{{route('profile',$user)}}">{{$user->name}}</a>
            </div>
        </li>
    @endforeach
</ul>
