<div>


    <form
        wire:submit="changeName()"
    >
        <div class="mt-2">
            <select
                type="text"
                class="border rounded-md bg-gray-700 text-white"
                wire:model.fill="greeting"
            >
                <option value="Hello">Hello</option>
                <option value="Hi">Hi</option>
                <option value="Hey" selected>Hey</option>
                <option value="Hola">Hola</option>
            </select>

            <input
                type="text"
                class="border rounded-md bg-gray-700 text-white"
                wire:model="name"
            >
        </div>

        <div class="mt-2">
            <button
                type="submit"
                class="text-white font-medium rounded-md px-4 py-2 bg-blue-600"
            >
                Greet
            </button>

        </div>

        @if($name !== '')
            <div class="mt-5">
                {{ $greeting }}, {{ $name }}
            </div>
        @endif
    </form>
</div>
