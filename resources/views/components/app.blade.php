<x-master>
    <main class="py-4">
        <div class="container">
            <div class="grid">
                {{-------------------sidebox------------------}}
                @if (auth()->check())
                <div class="box-1">
                    @include('_sidebar-link')
                </div>
                @endif
                {{-------------------tweets------------------}}
                <div class="box-2">
                    {{$slot}}
                </div>
                {{-------------------followers------------------}}
               @if (auth()->check())
                <div class="box-3">
                    @include('_friends-list')
                </div>
               @endif
            </div>
        </div>
    </main>
</x-master>
