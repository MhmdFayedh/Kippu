<x-layout.guest>
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-indigo-500">
            Kippu | Login
        </h1>
    </div>
    <form action="/register" method="POST">
        @csrf
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="name">
                name
            </label>
            <input class="border border-gray-400 py-2 px-1 w-full rounded" type="text" name="name" id="name" value="{{ old('name') }}" required>
            @error('name')
                <p class="text-red-500 text-sm">{{ $message }}</P>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="email">
                email
            </label>
            <input class="border border-gray-400 py-2 px-1 w-full rounded" type="email" name="email" id="email" value="{{ old('email') }}" required>
            @error('email')
                <p class="text-red-500 text-sm">{{ $message }}</P>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="password">
                password
            </label>
            <input class="border border-gray-400 py-2 px-1 w-full rounded" type="password" name="password" id="password" required>
            @error('password')
                <p class="text-red-500 text-sm">{{ $message }}</P>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="password_confirmation">
                password confirmation
            </label>
            <input class="border border-gray-400 py-2 px-1 w-full rounded" type="password" name="password_confirmation" id="password_confirmation" required>
            @error('password')
                <p class="text-red-500 text-sm">{{ $message }}</P>
            @enderror
        </div>
        <div>
            <button 
            type="submit"
            class=" uppercase bg-indigo-500 text-white px-2 py-1 mb-6 rounded-md"
            >register</button>
        </div>

        <div>
            <p class=" text-gray-400">have an account? 
                <span class="text-indigo-500">
                    <a href={{ route('login.create') }}>login here!</a>
                </span>
            </p>
        </div>
    </form>
</x-layout.guest>