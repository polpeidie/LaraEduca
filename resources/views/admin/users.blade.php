<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users management') }}
        </h2>
    </x-slot>

    <div class="pt-6 pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-4 justify-center">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-8 px-48">
                @if (!empty($users))
                    <div class="flex justify-between items-center">
                        <h3 class="mb-6 font-semibold text-xl text-gray-800 leading-tight">List of users</h3>
                        <a 
                            class="inline-flex items-center px-4 py-3 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-500 active:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150"
                            href="{{ route('admin.users.create') }}"
                        >
                            Add user
                        </a>
                    </div>
                    <div class="flex items-center px-8 py-4 justify-between">
                        <p class="font-bold">Name</p>
                        <p class="font-bold">Email</p>
                        <p class="font-bold">Role</p>
                        <p class=""></p>
                    </div>
                    @foreach ($users as $user)
                        @if ($user->id !== Auth::user()->id)
                            <hr>
                            <div class="flex items-center px-8 py-4 justify-between">
                                <p class="w-1/4">{{ $user->name }}</p>
                                <p class="w-1/4">{{ $user->email }}</p>
                                <p class="w-1/4 pl-12">{{ $user->role->name }}</p>
                                <form method="POST" action="{{ route('admin.users.delete', ['user' => $user->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <button 
                                        class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150" 
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        @endif
                    @endforeach
                @else
                    <h3 class="mb-6 font-bold text-xl">List of users</h3>
                    <p>There are no users:(</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>