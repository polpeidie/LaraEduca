<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users management') }}
        </h2>
    </x-slot>

    <div class="pt-6 pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center">
            @if (!empty($users))
                <table class="border border-black border-collapse">
                    <tr class="border border-black">
                        <th class="border border-black py-1 w-48">Name</th>
                        <th class="border border-black py-1 w-48">Email</th>
                        <th class="border border-black py-1 w-48">Role</th>
                    </tr>
                    @foreach ($users as $user)
                        <tr class="border even:bg-slate-200">
                            <td class="border py-1 px-2">{{ $user->name }}</td>
                            <td class="border py-1 px-2">{{ $user->email }}</td>
                            <td class="border py-1 px-2">{{ $user->role->name }}</td>
                        </tr>    
                    @endforeach

                </table>
            @else
                <p>There are no users:(</p>
            @endif
        </div>
    </div>
</x-app-layout>