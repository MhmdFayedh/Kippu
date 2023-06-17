<x-layout.guest>
    <div class="mb-6">
        <h1 class=" text-2xl font-bold text-indigo-500">
            Kippu | Fogot Password
        </h1>
    </div>
    <form action="{{ route('password.email') }}" method="POST">
        @csrf
        <div class="mb-2">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="email">
                email
            </label>
            <input class="border border-gray-400 py-2 px-1 w-full rounded" type="text" name="email" id="email" required>
            @error('email')
                <p class="text-red-500 text-sm">{{ $message }}</P>
            @enderror
        </div>

        <div class="mb-6 text-sm">
            <p class=" text-gray-400">You'll receive an email to reset your password, please check your email to complete the process</p>
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