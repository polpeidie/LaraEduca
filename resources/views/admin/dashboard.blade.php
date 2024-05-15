<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome') }} {{ Auth::user()->name}} 
        </h2>
    </x-slot>

    <div class="pt-6 pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-3 gap-x-6 gap-y-4">
            <a href="{{ route('admin.users') }}" class="bg-white overflow-hidden shadow-sm sm:rounded-lg h-56 flex flex-col justify-end items hover:shadow-md duration-150 cursor-pointer">
                <div class="py-3 font-semibold text-gray-900 bg-slate-300 text-center">
                    {{ __("Manage users") }}
                </div>
            </a>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg h-56 flex flex-col justify-end items hover:shadow-md duration-150 cursor-pointer">
                <div class="py-3 font-semibold text-gray-900 bg-slate-300 text-center">
                    {{ __("Manage games") }}
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg h-56 flex flex-col justify-end items hover:shadow-md duration-150 cursor-pointer">
                <div class="py-3 font-semibold text-gray-900 bg-slate-300 text-center">
                    {{ __("Manage courses") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
