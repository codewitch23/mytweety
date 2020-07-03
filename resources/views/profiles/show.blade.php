<x-app>

    <div class="profile-grid">
        <div class="bx-1">
            <img src="/img/profile.jpg">
        </div>
        <div class="bx-2">
            <p class="font-weight-bold">{{$user->name}}</p>
            <p >joined{{$user->created_at->diffForHumans()}}</p>
        </div>
        <div class="bx-3">
            <img src="{{$user->avatar}}" class="rounded-circle">
        </div>
        <div class="bx-4 d-flex">
            <button class="btn btn-style-sm mr-2">Edit Profile</button>
            <button class="btn  btn-style-outline-sm">Follow Me</button>
        </div>
        <div class="bx-5">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum magni omnis quis recusandae sed. A alias
            aperiam excepturi ipsum maxime molestiae quo saepe. Dicta eum exercitationem illum iure neque nihil officiis
            quia repellat similique voluptatibus. Autem est incidunt iusto necessitatibus.
        </div>
    </div>
    @include('_timeline',['tweets'=>$user->tweets])
</x-app>
