<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __("Bem Vindo ") . auth()->user()->name }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex">
                <div>
                    @foreach ($links as $link)
                        <div class="mt-2">
                        <x-link-button :url="$link->url">
                                {{ $link->name }}
                        </x-link-button>
                        </div>
                    @endforeach
                </div>
                
                <div>
                    <p>noticias</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
