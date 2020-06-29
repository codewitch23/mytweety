<div class="px-3 py-2 tweet-box">
    <form action="/tweets" method="POST">
        @csrf
        <textarea
            name="body"
            placeholder="what's up doc?"
            class="form-control "></textarea>
        <hr>
        <div class="d-flex justify-content-between align-items-center ">
            <div>
                <img class="rounded-circle" src="{{auth()->user()->avatar}}" alt="">
            </div>
            <div>
                <button type="submit" class="btn-style">Tweet</button>
            </div>
        </div>
        @error('body')
        <div class="text-danger">
            {{$message}}
        </div>
        @enderror
    </form>
</div>
