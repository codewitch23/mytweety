<h3>Friends</h3>
<ul>
    @foreach(auth()->user()->follows as $user)
    <li class="friends-list ">
        <div class="">
            <img
                src={{$user->avatar}}
                alt=""
                class="rounded-circle"
            >
            <a href="">{{$user->name}}</a>
        </div>
    </li>
    @endforeach
</ul>
