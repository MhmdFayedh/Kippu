<x-layout.guest>
    <div class="mb-6">
        <h1 class=" text-2xl font-bold text-indigo-500">
            Kippu | Login
        </h1>
    </div>
    <form action="{{ route('login.store') }}" method="POST">
        @csrf
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="email">
                email
            </label>
            <input class="border border-gray-400 py-2 px-1 w-full rounded" type="text" name="email" id="email" value="{{ old('email') }}" required>
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

        <div class=" flex justify-between">
            <button 
            type="submit"
            class=" uppercase bg-indigo-500 text-white px-2 py-1 mb-6 rounded-md"
            >login</button>

            <div>
                <p class=" text-gray-400"> 
                    <span class="text-gray-400 hover:text-indigo-500 "><a href={{ route('password.request') }}>Forget password?</a></span>
                </p>
            </div>
        </div>

        <div class="mb-6">
            <div class=" flex justify-start gap-3 items-center">
                <label class="block uppercase font-bold  text-xs text-gray-700 " for="remember_me">
                    remember me
                </label>
                <input class="border border-gray-400" type="checkbox" name="remember_me" id="remember_me" value="true">    
            </div>
            @error('remember_me')
                <p class="text-red-500 text-sm">{{ $message }}</P>
            @enderror
        </div>
        <div>
            <p class=" text-gray-400">Don't have an account? 
                <span class="text-indigo-500">
                    <a href={{ route('register.create') }}>register here!</a>
                </span>
            </p>
        </div>
    </form>
</x-layout.guest>