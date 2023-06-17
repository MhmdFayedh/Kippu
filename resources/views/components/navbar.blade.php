<div class="w-full h-full  backdrop-blur-lg">
    <nav class="flex justify-between items-center container mx-auto py-4">
        <div>
            <h1 class="text-4xl text-indigo-500 font-bold">
                <a href={{ route('home') }}>Kippu</a>
            </h1>
            
        </div>
            <ul class="flex gap-4 text-lg">
                <li class=" text-white hover:text-indigo-500 duration-100">
                    <a href="/event">
                        Events
                    </a>
                </li>
                <li class=" text-white hover:text-indigo-500 duration-100">
                    <a href="/event/include">
                        Include your event
                    </a>
                </li>
                <li class=" text-white hover:text-indigo-500 duration-100">
                    <a href="/contact">
                        Contact
                    </a>
                </li>
                <li class="text-white hover:text-red-500 duration-100">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            </ul>
                
        </div>
    </nav>
</div>