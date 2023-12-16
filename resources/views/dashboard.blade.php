<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl font-semibold mb-4">Test</h1>

                <!-- Message Form -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <h1 class="text-2xl font-semibold mb-4">Compose Message</h1>

                    <form action="{{ route('whatsapp') }}" method="GET">
                        @csrf

                        <div class="mb-4">
                            <label for="message" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Message:</label>
                            <textarea name="message" id="message" rows="4" class="form-input rounded-md shadow-sm mt-1 block w-full dark:bg-gray-700 dark:text-white"></textarea>
                        </div>

                        <div class="flex items-center justify-end">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-800 transition duration-150 ease-in-out">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <h1 class="text-2xl font-semibold mb-4">Message List</h1>

                    <!-- Add your message list code here -->
                    <!-- Example: -->
                    @if ($messages->count() > 0)
                        <ul>
                            @foreach ($messages as $message)
                                <li>{{ $message->message }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p>No messages available.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

