<a href="{{ $url }}" target="_blank"
    class="min-w-full inline-flex items-center justify-center p-3 text-base font-medium text-gray-900 dark:text-gray-100 rounded-lg bg-white hover:text-gray-900 hover:bg-gray-200 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
    <span class="w-full">{{ $slot }}</span>
    <svg class="w-4 h-4 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
    </svg>
</a>