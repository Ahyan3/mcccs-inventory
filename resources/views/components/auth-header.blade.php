<header class="text-center mb-8">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <img src="{{ asset('/images/CCS.png') }}" alt="MCCSS Logo" class="mx-auto h-16 w-auto">
    <h1 class="text-2xl font-bold text-gray-800 mt-4">MC CCS - Inventory System</h1>
    @stack('styles') {{-- This is where your Tailwind CSS will be injected --}}
</header>
