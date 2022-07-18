<x-layout>

    <x-slot name="mainContent">
        <div id="app" class="panel max-w-2xl w-full m-auto">
            <section>
                <h2 class="h2">Rechercher les participants</h2>
                <div>
                    <x-input name="session" type="select">
                        Session
                    </x-input>
                </div>
                <div class="mt-4">
                    <x-input name="search" type="search">
                        Rechercher une personne
                    </x-input>
                </div>
            </section>

            <section class="mt-4">
                <h2 class="h2">Inscrits</h2>
                <ul class="ml-2">
                    <li>Nom Prénom</li>
                </ul>
            </section>
        </div>
    </x-slot>

</x-layout>
