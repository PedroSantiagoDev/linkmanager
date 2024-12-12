<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route("links.update", $link) }}">
            @csrf
            @method("put")
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="{{ __('Nome') }}" :value="old('name', $link->name)" autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="url" :value="__('URL')" />
                <x-text-input id="url" class="block mt-1 w-full" type="url" name="url" placeholder="{{ __('URL') }}" :value="old('url', $link->url)" autofocus />
                <x-input-error :messages="$errors->get('url')" class="mt-2" />
            </div>

            <div class="mt-4 space-x-2">
                <x-primary-button class="mt-4">{{ __("Atualizar") }}</x-primary-button>
                <a href="{{ route("links.index") }}">{{ __("Cancel") }}</a>
            </div>
        </form>
    </div>
</x-app-layout>
