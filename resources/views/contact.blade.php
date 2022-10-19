<x-app-layout title="Contact Page">
    <h1>Contact</h1>
    <form action="/contact" method="POST">
    @csrf
        <button type="submit">Send</button>
    </form>
</x-app-layout>