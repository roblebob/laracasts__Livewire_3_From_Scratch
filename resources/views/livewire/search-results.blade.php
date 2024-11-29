<div class="{{ $show ? 'block' : 'hidden'}}">
    <div class="mt-4 p-4 absolute border rounded-md bg-gray-700 {{count($results) === 0 ? 'border-red-600' : 'border-indigo-600'}}">
        @if(count($results) === 0)
            <div class="pt-2 text-red-600">No results found</div>
        @endif

        @foreach($results as $result)
            <div class="pt-2">
                <a href="/articles/{{ $result->id }}" >{{ $result->title }}</a>
            </div>
        @endforeach
    </div>

</div>
