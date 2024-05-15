<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users management') }}
        </h2>
    </x-slot>

    <div class="pt-6 pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-4 justify-center">
            @if (!empty($users))
                @foreach ($users as $user)
                    <div class="flex items-center px-52 py-2 justify-between border">
                        <p>{{ $user->name }} - {{ $user->email }} - {{ $user->role->name }}</p>
                        <x-danger-button>Delete</x-danger-button>
                    </div>
                @endforeach
            @else
                <p>There are no users:(</p>
            @endif
        </div>
    </div>
</x-app-layout>