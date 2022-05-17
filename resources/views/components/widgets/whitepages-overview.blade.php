<x-filament::widget>
    <x-filament::card>
        <x-filament::card.heading>
            <div class="flex items-center justify-between">
                <span>White Pages</span>
                <a href="{{ route('filament.resources.white-pages.index') }}"
                    class="text-sm underline hover:text-primary-500 focus:text-primary-500">View All</a>
            </div>
        </x-filament::card.heading>
        {{-- @dd($pages) --}}
        @forelse ($pages as $type => $pages)
            <h3 class="text-sm">{{ Str::of($type)->title()->plural() }}</h3>
            <dl
                class="flex flex-wrap items-center justify-center bg-white border divide-x rounded-lg dark:bg-gray-700 dark:divide-gray-800 dark:border-gray-900">
                @forelse ($pages as $status => $items)
                    <div
                        class="flex flex-col w-full p-6 text-center {{ $loop->count < 3 ? 'md:!w-1/2' : 'md:!w-1/3' }}">
                        <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-600 dark:text-gray-400">
                            {{ Str::of($status)->title() }}</dt>
                        <dd class="order-1 text-2xl font-extrabold md:text-4xl text-primary-600">{{ count($items) }}
                        </dd>
                    </div>
                @empty
                    <div class="flex flex-col w-full p-6 text-center">
                        <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-600 dark:text-gray-400">
                            {{ __('White Pages') }}</dt>
                        <dd class="order-1 text-2xl font-extrabold md:text-4xl text-primary-600">0</dd>
                    </div>
                @endforelse
            </dl>
        @empty
            <div class="flex flex-col w-full p-6 text-center">
                <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-600 dark:text-gray-400">
                    {{ __('White Pages') }}</dt>
                <dd class="order-1 text-2xl font-extrabold md:text-4xl text-primary-600">0</dd>
            </div>
        @endforelse
    </x-filament::card>
</x-filament::widget>
