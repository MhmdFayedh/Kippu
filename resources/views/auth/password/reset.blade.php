<x-layout.guest>
    <div class="mb-6">
        <h1 class=" text-2xl font-bold text-indigo-500">
            Kippu | Reset Password
        </h1>
    </div>
    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ request()->route('token') }}">
        <div class="mb-2">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="email">
                email
            </label>
            <input class="border border-gray-400 py-2 px-1 w-full rounded" type="text" name="email" id="email" required>
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
        
        <div class=" flex justify-between">
            <button 
            type="submit"
            class=" uppercase bg-indigo-500 text-white px-2 py-1 mb-6 rounded-md"
            >Reset</button>
        </div>
    </form>

    @if (session('status'))
    <div class="fixed bottom-6 right-6 bg-[#009b72] py-3 px-3 rounded-xl select-none ">
        <p class="text-white">{{ session('status') }}</p>
    </div>
    @endif
</x-layout.guest>