@if ($type === 'select')
    <div class="mb-2">
        <label for="{{ $name }}" class="label">
            {{ $slot }}
        </label>
        <select name="{{ $name }}" id="{{ $name }}" class="select select-sm select-bordered w-full">
            <option disabled selected>Who shot first?</option>
            <option>Han Solo</option>
            <option>Greedo</option>
        </select>
    </div>
@elseif ($type === 'search')
    <div class="mb-2 relative">
        <label for="{{ $name }}" class="label">
            {{ $slot }}
        </label>
        <input class="input input-sm input-bordered w-full" type="{{ $type }}" name="{{ $name }}"
            id="{{ $name }}" value="{{ $type !== 'password' ? old($name) : '' }}">
        <ul class="border rounded-md border-gray-300 mt-2 absolute top-30 bg-white w-full p-1 hidden">
            <li><a href="#">Result 1</a></li>
            <li><a href="#">Result 1</a></li>
        </ul>
    </div>
@else
    <div class="mb-2">
        <label for="{{ $name }}" class="label">
            {{ $slot }}
        </label>
        <input class="input input-sm input-bordered w-full" type="{{ $type }}" name="{{ $name }}"
            id="{{ $name }}" value="{{ $type !== 'password' ? old($name) : '' }}">
    </div>
@endif
