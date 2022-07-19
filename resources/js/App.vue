<template>
    <section>
        <h2 class="h2">Rechercher les participants</h2>
        <div>
            <InputGrouped name="session" type="select"> Session </InputGrouped>
        </div>
        <div class="mt-4">
            <InputGrouped name="search" type="search">
                Rechercher une personne
            </InputGrouped>
        </div>
    </section>

    <section class="mt-4">
        <h2 class="h2">Inscrits</h2>
        <ul class="ml-2">
            <li>Nom Prénom - example@email.com</li>
        </ul>
    </section>
</template>

<script>
import InputGrouped from "./components/InputGrouped.vue";
export default {
    data() {
        return {
            registered: [],
        };
    },
    components: { InputGrouped },
};
</script>
