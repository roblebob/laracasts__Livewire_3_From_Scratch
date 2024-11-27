<div>


    <form
        wire:submit="changeGreeting()"
    >
        <div class="mt-2">
            <select
                type="text"
                class="border rounded-md bg-gray-700 text-white"
                wire:model.fill="greeting"
            >
                @foreach($greetings as $item)
                    <option value="{{ $item->greeting }}">{{ $item->greeting }}</option>
                @endforeach
            </select>

            <input
                type="text"
                class="border rounded-md bg-gray-700 text-white"
                wire:model="name"
            >
        </div>

        <div>
            @error('name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-2">
            <button
                type="submit"
                class="text-white font-medium rounded-md px-4 py-2 bg-blue-600"
            >
                Greet
            </button>

        </div>

        @if($greetingMessage !== '')
            <div class="mt-5">
                {{ $greetingMessage }}
            </div>
        @endif
    </form>
</div>
