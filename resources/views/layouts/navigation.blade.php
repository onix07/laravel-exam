<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    

    <!-- Responsive Navigation Menu -->
    <div>
        <div class="pt-2 pb-3 space-y-1">
            <x-nav-link :href="route('users')" :active="request()->routeIs('users')">
                {{ __('User') }}
            </x-nav-link>
             <x-nav-link :href="route('roles')" :active="request()->routeIs('roles')">
                {{ __('Role') }}
            </x-nav-link>
        </div>
    </div>
</nav>
