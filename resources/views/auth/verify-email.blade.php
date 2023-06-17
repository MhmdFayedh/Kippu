<x-layout.guest>
    Pleese Verifiy Email
    <div class=" flex justify-start mt-5">
        <form action={{ route('verification.send') }} method="POST" class="bg-indigo-500 py-2 px-1 text-white rounded-md">
            @csrf
            <button type="submit">Resend verification link</button>
        </form>
    </div>
    
</x-layout.guest>