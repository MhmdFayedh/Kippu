<x-layout.app>
    <header class="backdrop-blur-lg  bg-[url('https://source.unsplash.com/7wBFsHWQDlk')] bg-opacity-10 bg-cover bg-center shadow-md" >
        <x-navbar />
        
    </header>

    @if (session('success'))
    <div class="fixed bottom-6 right-6 bg-[#009b72] py-3 px-3 rounded-xl select-none ">
        <p class="text-white">{{ session('success') }}</p>
    </div>
    @endif

</x-layout.app>