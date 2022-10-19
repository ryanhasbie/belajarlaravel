<x-app-layout>
    @if (session()->has('success'))
    <div class="alert alert-success shadow-lg m-6 w-1/2">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span>{{session()->get('success')}}</span>
        </div>
    </div>
    @endif
    <h1 class="text-2xl font-bold m-6">Welcome to mywebsite guys!</h1>
    <p class="m-6 text-lg font-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit magnam aspernatur provident dolor atque, ullam quae a voluptates omnis eos.</p>
</x-app-layout>