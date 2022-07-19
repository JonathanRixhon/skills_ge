<template>
    <div v-if="type === 'select'" class="mb-2">
        <label :for="name" class="label">
            <slot></slot>
        </label>
        <select
            :name="name"
            :id="name"
            class="select select-sm select-bordered w-full"
        >
            <option>Han Solo</option>
            <option>Greedo</option>
        </select>
    </div>

    <div v-else-if="type === 'search'" class="mb-2">
        <label :for="name" class="label">
            <slot></slot>
        </label>
        <input
            class="input input-sm input-bordered w-full"
            :type="type"
            :name="name"
            :id="name"
        />
        <ul
            class="border rounded-md border-gray-300 mt-2 absolute top-30 bg-white w-full p-1 hidden"
        >
            <li><a href="#">Result 1</a></li>
            <li><a href="#">Result 1</a></li>
        </ul>
    </div>

    <div v-else class="mb-2">
        <label :for="name" class="label">
            <slot></slot>
        </label>
        <input
            class="input input-sm input-bordered w-full"
            :type="type"
            :name="name"
            :id="name"
        />
    </div>
</template>

<script setup>
defineProps({
    type: String,
    name: String,
    options: Array,
});
</script>
