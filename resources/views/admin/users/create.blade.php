<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create user') }}
        </h2>
    </x-slot>

    <div class="pt-6 pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-4 justify-center">
            <div class="px-56">
                <form action="" class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-12 px-48">
                    <h3 class="font-semibold text-xl text-gray-800 leading-tight mb-6">New User</h3>

                    <div class="flex flex-col mt-6">
                        <label for="id" class="pl-1">Username</label>
                        <input type="text" name="id"
                            class="border-0 focus:border-0 target:border-0 border-b border-gray-300 focus:bg-gray-100 focus:border-indigo-500 focus:border-b-2 focus:placeholder-transparent hover:bg-gray-100 outline-none focus:outline-none px-2 py-1 duration-75 placeholder:transition-opacity transition-all ease-in-out"
                            required
                        >
                    </div>

                    <div class="flex flex-col mt-6">
                        <label for="id" class="pl-1">Email</label>
                        <input type="email" name="id"
                            class="border-0 focus:border-0 target:border-0 border-b border-gray-300 focus:bg-gray-100 focus:border-indigo-500 focus:border-b-2 focus:placeholder-transparent hover:bg-gray-100 outline-none focus:outline-none px-2 py-1 duration-75 placeholder:transition-opacity transition-all ease-in-out"
                            required
                        >
                    </div>

                    <div class="flex flex-col mt-6">
                        <label for="id" class="pl-1">Password</label>
                        <input type="password" name="id"
                            class="border-0 focus:border-0 target:border-0 border-b border-gray-300 focus:bg-gray-100 focus:border-indigo-500 focus:border-b-2 focus:placeholder-transparent hover:bg-gray-100 outline-none focus:outline-none px-2 py-1 duration-75 placeholder:transition-opacity transition-all ease-in-out"
                            required
                        >
                    </div>

                    <div class="flex justify-center mt-10">
                        <button 
                            type="submit"
                            class="inline-flex items-center px-4 py-3 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-500 active:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150"
                        >
                            Add user
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>