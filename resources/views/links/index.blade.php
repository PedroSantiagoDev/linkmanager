<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route("links.store") }}">
            @csrf

            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="{{ __('Nome') }}" :value="old('name')" autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="url" :value="__('URL')" />
                <x-text-input id="url" class="block mt-1 w-full" type="url" name="url" placeholder="{{ __('URL') }}" :value="old('url')" autofocus />
                <x-input-error :messages="$errors->get('url')" class="mt-2" />
            </div>

            <x-primary-button class="mt-4">{{ __("Link") }}</x-primary-button>
        </form>

        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            @foreach ($links as $link)
                <div class="p-4">
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-lg">
                                    <a href="{{ $link->url }}" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline font-medium">
                                        {{ $link->name }}
                                    </a>
                                    @unless ($link->created_at->eq($link->updated_at))
                                        <small class="text-sm text-gray-600">&middot; {{ __("edited") }}</small>
                                    @endunless
                                </p>
                            </div>

                            <x-dropdown>
                                <x-slot name="trigger">
                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg>
                                    </button>
                                </x-slot>
                                <x-slot name="content">
                                    <x-dropdown-link :href="route('links.edit', $link)">
                                        {{ __("Editar") }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>

                        <div>
                            <small class="text-gray-500">
                                Criado por:
                                <span class="text-gray-800">{{ $link->user->name }}</span>
                                em
                                {{ $link->created_at->format("d/m/Y H:i") }}
                            </small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
