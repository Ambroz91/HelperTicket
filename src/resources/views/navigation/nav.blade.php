<div>
    @if(in_array(Route::current()->getName(), ['home.index', 'login', 'home.show']))
        <div class="sm:top-0 sm:right-0 p-6 text-right">
            <a href="{{ route('login') }}"
               class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                in</a>
            <a href="{{ route('register') }}"
               class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
        </div>
    @endif
</div>

