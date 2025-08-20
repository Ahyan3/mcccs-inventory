<x-app-layout>
    <!-- Full screen background -->
    <div class="fixed inset-0 -z-10">
        <img src="{{ asset('images/CCSCOVER.png') }}" alt="Mabini Colleges, Inc."
             class="w-full h-full object-cover opacity-60">
    </div>

    <!-- Main Container - Full height minus header -->
    <div class="relative min-h-screen flex flex-col">
        <!-- Header space (from app-layout) will appear here automatically -->

        <!-- Centered Content -->
        <main class="flex-grow flex items-center justify-center px-4">
            <div class="bg-white bg-opacity-80 p-8 rounded-xl shadow-md text-center animate-fade-in max-w-md w-full border-b-4 border-[#00553d]">
                @auth
                    <h2 class="text-lg font-bold text-gray-900 mb-4">Welcome Back!</h2>
                    <p class="text-base text-gray-600 mb-6">Manage your equipment and issuances</p>
                    <a href="{{ route('dashboard') }}"
                       class="bg-green-600 hover:bg-green-700 text-white text-sm py-2 px-6 rounded-lg transition duration-200">
                        Continue to Dashboard
                    </a>
                @else
                    <h2 class="text-lg font-bold text-gray-900 mb-4">Welcome to MC CCS - Inventory System</h2>
                    <p class="text-base text-gray-600 mb-6">Manage equipment and issuances with ease.</p>
                    <div class="flex justify-center space-x-4">
                        <a href="{{ route('login') }}"
                           class="bg-gray-600 hover:bg-gray-900 text-white text-sm py-2 px-6 rounded-lg transition duration-200">
                            Login
                        </a>
                        <a href="{{ route('register') }}"
                           class="bg-gray-600 hover:bg-gray-900 text-white text-sm py-2 px-6 rounded-lg transition duration-200">
                            Register
                        </a>
                    </div>
                @endauth
            </div>
        </main>

        <!-- Footer -->
        <footer style="background-color: #3b3b3b;" class="text-white py-4 w-full fixed bottom-0">
            <div class="container mx-auto px-4 text-center">
                <p class="text-xs">
                    Copyright © {{ date('Y') }}
                    <a href="https://portal.mabinicolleges.edu.ph/" target="_blank" class="font-bold text-blue-600 hover:underline">
                        MC CCS
                    </a> - Inventory System.
                    Copyright ©
                    <a href="https://www.facebook.com/Ahyanromano" target="_blank" class="font-bold text-blue-600 hover:underline">
                        Ryan Francis Romano
                    </a> All rights reserved.
                </p>
            </div>
        </footer>
    </div>
</x-app-layout>
