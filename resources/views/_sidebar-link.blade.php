<ul>
    <li><i class="fas fa-home"></i><a href="{{route('home')}}">Home</a></li>
    <li><i class="fas fa-hashtag"></i><a href="">Explore</a></li>
    <li><i class="fas fa-envelope"></i><a href="">Message</a></li>
    <li><i class="fas fa-user"></i><a href="{{route('profile',auth()->user())}}">Profile</a></li>
    <li><i class="fas fa-sign-out-alt"></i><a href="">LogOut</a></li>
</ul>
