<div class="m-auto w-1/2 mb-4">
    <div class="mb-3 flex justify-between items-center">
        <a
            href="/dashboard/articles/create"
            class="text-blue-500 hover:text-blue-700 rounded-sm"
            wire:navigate
        >Create Article</a>

        <div>
            <button @class([
                    "text-gray-200 p-2 hover:bg-blue-900 rounded-sm",
                    'bg-gray-700' => $this->showOnlyPublished,
                    'bg-blue-700' => !$this->showOnlyPublished,
                ])
                wire:click="togglePublished(false)"
            >Show All</button>
            <button @class([
                    "text-gray-200 p-2 hover:bg-blue-900 rounded-sm",
                    'bg-blue-700' => $this->showOnlyPublished,
                    'bg-gray-700' => !$this->showOnlyPublished,
                ])
                wire:click="togglePublished(true)"
            >Show Published (<livewire:published-count placeholder-text="...loading"/>)</button>
        </div>

    </div>

    @if(session('status'))
        <div class="text-center bg-green-700 text-gray-200">
            {{ session('status') }}
        </div>
    @endif

    <div class="my-4">
        {{ $this->articles->links() }}
    </div>

    <table class="w-full">
        <thead class="text-xs uppercase bg-gray-700 text-gray-400">
            <tr>
                <th class="px-6 py-3">Title</th>
                <th class="px-6 py-3"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($this->articles as $article)
                <tr wire:key="{{$article->id}}" class="border-b bg-gray-800 border-gray-700">
                    <td @class([
                            "px-6 py-3",
                            'font-bold text-white' => $article->published,
                            '' => !$article->published,
                            ])
                    >{{ $article->title }}</td>


                    <td class="px-6 py-3">
                        <a
                            href="/dashboard/articles/{{ $article->id }}/edit"
                            class="text-gray-200 p-2 "
                            wire:navigate
                        >Edit</a>
                        <button
                            class="text-gray-200 p-2 bg-red-700 hover:bg-red-900 rounded-sm"
                            wire:click="delete({{ $article->id }})"
                            wire:confirm="Are you sure you want to delete this article?"
                        >Delete</button>

                    </td>
                </tr>
            @endforeach
    </table>
    <div class="mt-4">
        {{ $this->articles->links(data: ['scrollTo' => false]) }}
    </div>
</div>
