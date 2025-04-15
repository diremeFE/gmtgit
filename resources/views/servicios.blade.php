@extends('layouts.layout')

@section('titulo', 'Servicios')

@section('contenido')

<section class="w-full py-16 bg-[#0E126F] text-white">
    <div class="container mx-auto px-4 sm:px-6">
        
        <!-- Título Principal + Subtítulo -->
        <div class="mb-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold">
                Effortless Process, Continuous Supply
            </h2>
            <p class="mt-2 text-gray-300 max-w-xl mx-auto">
                Simplificamos cada paso para que tu mercancía llegue puntual y segura.
            </p>
            <!-- Pequeña línea decorativa bajo el título (opcional) -->
            <div class="mx-auto mt-4 w-16 h-0.5 bg-white"></div>
        </div>
        
        <!-- Cuatro Tarjetas/Pasos -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
            
            <!-- Paso 1 -->
            <div class="rounded-lg bg-[#1C2254] p-6 flex flex-col">
                <h3 class="text-xl font-semibold mb-2">
                    01. Choose a Plan
                </h3>
                <p class="text-base text-gray-200 flex-1">
                    Select the flexible or premium plan that suits your business needs.
                </p>
            </div>
            
            <!-- Paso 2 -->
            <div class="rounded-lg bg-[#1C2254] p-6 flex flex-col">
                <h3 class="text-xl font-semibold mb-2">
                    02. Subscribe Instantly
                </h3>
                <p class="text-base text-gray-200 flex-1">
                    Activate your subscription with just a click – no forms, no hassle.
                </p>
            </div>
            
            <!-- Paso 3 -->
            <div class="rounded-lg bg-[#1C2254] p-6 flex flex-col">
                <h3 class="text-xl font-semibold mb-2">
                    03. Get Tailored Solutions
                </h3>
                <p class="text-base text-gray-200 flex-1">
                    Receive personalized products & support for your operations.
                </p>
            </div>
            
            <!-- Paso 4 -->
            <div class="rounded-lg bg-[#1C2254] p-6 flex flex-col">
                <h3 class="text-xl font-semibold mb-2">
                    04. Receive Your Supplies
                </h3>
                <p class="text-base text-gray-200 flex-1">
                    Sit back as your goods are delivered on time, every time.
                </p>
            </div>
        </div>
        
        <!-- Fila inferior (Avatares + texto a la izquierda, botón a la derecha) -->
        <div class="flex flex-col md:flex-row items-center justify-between">
            
            <!-- Avatares + Leyenda -->
            <div class="flex items-center space-x-3 mb-4 md:mb-0">
                <!-- Sustituye estos "img" por tus propias imágenes/íconos -->
                <img 
                    src="https://via.placeholder.com/40" 
                    alt="Avatar 1" 
                    class="h-8 w-8 rounded-full object-cover"
                >
                <img 
                    src="https://via.placeholder.com/40" 
                    alt="Avatar 2" 
                    class="h-8 w-8 rounded-full object-cover"
                >
                <img 
                    src="https://via.placeholder.com/40" 
                    alt="Avatar 3" 
                    class="h-8 w-8 rounded-full object-cover"
                >
                
                <span class="text-sm text-gray-200">
                    Align with Businesses that 
                    <span class="font-semibold text-[#77BD1F]">Choose Quality</span>
                </span>
            </div>
            
            <!-- Botón "Start Now" -->
            <a href="#"
               class="inline-block bg-[#77BD1F] hover:bg-[#69a81c] text-black font-medium px-6 py-3 rounded-md shadow transition"
            >
                Start Now
            </a>
        </div>
        
    </div>
</section>


@endsection
