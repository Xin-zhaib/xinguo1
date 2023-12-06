<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Register!</h1>

                <form method="POST" action="/register" class="mt-10">
                    @csrf
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="name"
                        >
                          name
                        </label>
                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="name"
                           id="name"
                           value="{{old('name')}}"
                           required
                    >
                    @error('name')
                         <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="username"
                        >
                          username
                        </label>
                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="username"
                           id="username"
                           value="{{old('username')}}"
                           required
                    >
                    @error('username')
                         <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="email"
                        >
                          Email
                        </label>
                    <input class="border border-gray-400 p-2 w-full"
                           type="email"
                           name="email"
                           id="email"
                           value="{{old('email')}}"
                           required
                    >
                    @error('email')
                         <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="password"
                        >
                          Password
                        </label>
                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="password"
                           id="password"
                           required
                    >
                    </div>
                    <div class="mb-6">
                        <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                 
                        >
                          Submit
                        </button>
                    </div>
                    @if($errors->any())
                    <ul>
                    @foreach ($errors->all() as $error )
                      <li class=:text-red-500 text-xs>{{ $error }}</li>
                        
                    @endforeach
                    </ul>
                    @endif
                    {{-- <x-form.input name="name" required />
                    <x-form.input name="username" required />
                    <x-form.input name="email" type="email" required />
                    <x-form.input name="password" type="password" autocomplete="new-password" required />
                    <x-form.button>Sign Up</x-form.button> --}}
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>