{{-- <main class="flex-shrink-0">
    <div class="container" >
        <div class="row" id="post">

        </div> --}}
{{-- here loads posts --}}
{{-- </div>
    <div class="text-center m-3">
        <button class="btn btn-primary" id="load-more" data-paginate="2">Load more...</button>
        <p class="invisible">No more posts...</p>
    </div>
</main> --}}

{{-- <div>

    <ul> --}}
        {{-- {{dd($users[])}} --}}
        {{-- @foreach ($users as $user)
            <li wire:key="$loop->index()">
                {{ $user->title }}
            </li>
        @endforeach
    </ul>

    <button type="button" class="btn btn-primary" wire:click="loadMore">
        Load more
    </button>

</div> --}}


<main class="flex-shrink-0">
    <div class="container">
        <div class="row" id="post">
            @foreach ($posts as $post)
            <div class="mt-5  col-lg-3 border border-2"><h1>{{$post->title}} </h1><p>{{$post->body}}</p></div>
            @endforeach
        </div>
        {{-- here loads posts --}}
    </div>
    <div class="text-center m-3">
        <button button type="button" class="btn btn-primary" wire:click="loadMore" >Load more...</button>
        <p class="invisible">No more posts...</p>
    </div>
</main>
