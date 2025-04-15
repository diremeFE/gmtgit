@extends('layouts.layout')

@section('titulo', 'Inicio')

@section('contenido')
    <section class="relative overflow-hidden bg-gray-50 dark:bg-gray-900">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/40 z-10"></div>
            <img src="{{ asset('images/hero-section-image.jpg') }}" alt="Logo" class="w-full h-full object-cover">
        </div>
        <div class="container relative z-20 p-20 md:py-32">
            <div class="max-w-2xl space-y-6">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white">
                    Transporte de mercancías <span class="text-[#77BD1F] bg-white">rápido y seguro</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-200">
                    Soluciones de transporte eficientes para empresas y particulares. Confíe en GMT Transportes para
                    entregas puntuales y seguras.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <button
                        class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 shadow h-10 rounded-full px-8 bg-[#77BD1F] hover:bg-[#69a81c] text-white">
                        Solicitar Presupuesto
                    </button>
                    <button
                        class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 border bg-background shadow-sm h-10 rounded-full px-8 border-white text-white hover:bg-white hover:text-gray-900">
                        Nuestros Servicios
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-arrow-right ml-2 h-4 w-4">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-none relative overflow-visible pt-16 pb-16">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Tarjeta 1: Camiones Modernos -->
                <div class="relative flex flex-col items-center text-center p-8 bg-white shadow-md rounded-lg">
                    <!-- Icono de Camión (SVG adaptado para transporte) -->
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#77BD1F] mx-auto" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 17V9H5v8m0 0v2a2 2 0 002 2h2a2 2 0 002-2v-2m10-6h-1a2 2 0 00-2 2v5m0 0H9m8 0a2 2 0 01-2 2h-2a2 2 0 01-2-2m-4-2a2 2 0 002 2h2a2 2 0 002-2m0 0V9m0 0h2a2 2 0 012 2v5" />
                        </svg>
                    </div>
                    <!-- Título -->
                    <h3 class="text-xl font-bold text-gray-800 mb-2">
                        Camiones Modernos
                    </h3>
                    <!-- Descripción -->
                    <p class="text-gray-600">
                        Nuestra flota cuenta con camiones modernos y equipados para garantizar la seguridad y eficiencia en
                        cada envío.
                    </p>
                </div>

                <!-- Tarjeta 2: Envíos Rápidos -->
                <div class="relative flex flex-col items-center text-center p-8 bg-white shadow-md rounded-lg">
                    <!-- Icono de Reloj (simboliza rapidez) -->
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#77BD1F] mx-auto" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <!-- Título -->
                    <h3 class="text-xl font-bold text-gray-800 mb-2">
                        Envíos Rápidos
                    </h3>
                    <!-- Descripción -->
                    <p class="text-gray-600">
                        Con rutas optimizadas y un equipo profesional, aseguramos que cada entrega se realice en el menor
                        tiempo posible.
                    </p>
                </div>

                <!-- Tarjeta 3: Logística Eficiente -->
                <div class="relative flex flex-col items-center text-center p-8 bg-white shadow-md rounded-lg">
                    <!-- Icono de engranaje (simboliza procesos eficientes) -->
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#77BD1F] mx-auto" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0a1.372 1.372 0 001.643.95 1.37 1.37 0 011.198 1.185 1.37 1.37 0 001.385 1.12c.88.116 1.558.714 1.697 1.576a1.37 1.37 0 001.112 1.348 1.37 1.37 0 011.503 1.192c.148.902.904 1.583 1.814 1.718a1.37 1.37 0 011.174 1.355 1.37 1.37 0 01-.34 1.07c-.318.319-.754.5-1.216.5h-.03c-.51 0-.967.248-1.27.651a1.37 1.37 0 01-1.228.672h-2.01a1.37 1.37 0 01-1.228-.672c-.303-.402-.76-.651-1.27-.651h-.03c-.462 0-.898.181-1.216.5a1.37 1.37 0 01-1.485.308 1.37 1.37 0 01-.355-1.07c.148-.912-.84-1.593-1.743-1.718a1.37 1.37 0 01-1.202-1.12 1.37 1.37 0 01.061-1.416 1.37 1.37 0 011.112-1.348c.139-.862.817-1.46 1.697-1.576a1.37 1.37 0 011.385-1.12 1.37 1.37 0 011.198-1.185c.496-.08.885-.49.967-.97z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <!-- Título -->
                    <h3 class="text-xl font-bold text-gray-800 mb-2">
                        Logística Eficiente
                    </h3>
                    <!-- Descripción -->
                    <p class="text-gray-600">
                        Optimizamos cada paso de la cadena de suministro para garantizar un transporte seguro y rentable.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4 sm:px-6">
            
            <!-- Encabezado de la sección -->
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-800">
                    Flota Destacada
                </h2>
                <p class="text-gray-600 mt-2 max-w-2xl mx-auto">
                    Descubre nuestros camiones mejor equipados para garantizar la eficiencia y seguridad de tu negocio.
                </p>
            </div>
            
            <!-- Grid con 4 columnas (3 camiones + 1 bloque CTA) -->
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                
                <!-- Tarjeta 1: Camión Volvo FH -->
                <div class="relative group overflow-hidden rounded-lg">
                    <img 
                        src="{{ asset('images/truck1.jpg') }}" 
                        alt="Camión Volvo FH"
                        class="object-cover w-full h-[32rem]"
                    >
                    <div class="absolute inset-0 bg-black/40 transition group-hover:bg-black/50"></div>
                    <div class="absolute bottom-0 left-0 p-4 text-white z-10">
                        <h3 class="text-xl font-bold">
                            Camión Volvo FH
                        </h3>
                        <p class="mt-1 text-sm">
                            Potencia y fiabilidad en cada viaje, ideal para rutas largas.
                        </p>
                        <p class="mt-2 text-white font-semibold">
                            Precio desde: 120.000€
                        </p>
                    </div>
                </div>
                
                <!-- Tarjeta 2: Scania R-Series -->
                <div class="relative group overflow-hidden rounded-lg">
                    <img 
                        src="{{ asset('images/truck2.jpg') }}" 
                        alt="Scania R-Series"
                        class="object-cover w-full h-[32rem]"
                    >
                    <div class="absolute inset-0 bg-black/40 transition group-hover:bg-black/50"></div>
                    <div class="absolute bottom-0 left-0 p-4 text-white z-10">
                        <h3 class="text-xl font-bold">
                            Scania R-Series
                        </h3>
                        <p class="mt-1 text-sm">
                            Máxima eficiencia de combustible y un interior ergonómico.
                        </p>
                        <p class="mt-2 text-white font-semibold">
                            Precio desde: 110.000€
                        </p>
                    </div>
                </div>
                
                <!-- Tarjeta 3: MAN TGX -->
                <div class="relative group overflow-hidden rounded-lg">
                    <img 
                        src="{{ asset('images/truck3.jpg') }}" 
                        alt="MAN TGX"
                        class="object-cover w-full h-[32rem]"
                    >
                    <div class="absolute inset-0 bg-black/40 transition group-hover:bg-black/50"></div>
                    <div class="absolute bottom-0 left-0 p-4 text-white z-10">
                        <h3 class="text-xl font-bold">
                            MAN TGX
                        </h3>
                        <p class="mt-1 text-sm">
                            Excelente desempeño en el transporte de cargas pesadas.
                        </p>
                        <p class="mt-2 text-white font-semibold">
                            Precio desde: 115.000€
                        </p>
                    </div>
                </div>
                
                <!-- Bloque destacado / CTA -->
                <div class="relative group text-white rounded-lg p-8 flex flex-col justify-center">
                    <div>
                        <h3 class="text-3xl text-black font-bold mb-3">
                            Encuentra el Camión Perfecto
                        </h3>
                        <p class="text-md text-black ">
                            ¿Necesitas asesoría? Nuestro equipo te ayudará a elegir el modelo y equipamiento ideales para tu negocio.
                        </p>
                    </div>
                    <div>
                        <a href="#"
                           class="inline-block mt-5 bg-black text-white font-medium px-5 py-2 rounded-full shadow transition"
                        >
                            Ver Más
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    
    
    
    




    <section class="bg-gray-100 py-12">
        <div class="mx-auto max-w-screen-xl px-0">
            <!-- Grid con 2 columnas en escritorio, 1 en móviles -->
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-0">

                <!-- Columna: Texto -->
                <div class="p-4 md:pr-2">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Who We Are
                    </h2>
                    <p class="text-gray-600 leading-relaxed">
                        Logistics Management is the part of supply chain management that plans, implements,
                        and controls the efficient, effective forward, and reverse flow and storage of goods,
                        services, and related information between the point of origin and the point of consumption.
                    </p>
                    <p class="text-gray-600 leading-relaxed mt-4">
                        The complexity of logistics can be modeled, analyzed, visualized,
                        and optimized by dedicated software. The minimization of the
                        use of resources is a common motivation in all logistics fields.
                    </p>
                </div>

                <!-- Columna: Imagen -->
                <div class="relative flex justify-end">
                    <img src="{{ asset('images/warehouse.png') }}" alt="Isometric Warehouse"
                        class="max-w-sm md:max-w-md -mb-32">
                </div>

            </div>
        </div>
    </section>

    <section class="bg-none relative overflow-visible pt-16 pb-16">

    </section>


    <section class="relative bg-gray-900 min-h-screen flex items-center overflow-hidden">
        {{-- Imagen de fondo y overlay --}}
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/hero-bg.jpg') }}" alt="Fondo transporte" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/60"></div>
        </div>

        {{-- Contenido principal: título y formulario --}}
        <div class="container mx-auto relative z-10 px-4 py-16 md:py-24 grid grid-cols-1 md:grid-cols-2 gap-8">

            {{-- Columna Izquierda: Título y descripción --}}
            <div class="text-white flex flex-col justify-center space-y-6 md:pr-8">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                    Solicita más información <br class="hidden md:block">
                    <span class="text-[#77BD1F]">sin compromiso</span>
                </h1>
                <p class="text-base md:text-lg leading-relaxed">
                    Ofrecemos soluciones de transporte profesional para empresas y particulares.
                    Nuestro equipo de expertos y nuestra amplia flota de camiones garantizan
                    entregas puntuales y seguras en todo momento.
                </p>

                <button
                    class="inline-block bg-white text-black border-2 p-3 rounded-full text-sm md:text-base font-semibold transition">
                    Nuestros Servicios
                </button>
            </div>

            {{-- Columna Derecha: Formulario de Presupuesto --}}
            <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 lg:p-10 text-gray-800 self-center">
                {{-- Título del formulario --}}
                <h2 class="text-2xl md:text-3xl font-bold mb-4">
                    Solicita tu presupuesto
                </h2>
                <p class="text-sm md:text-base text-gray-600 mb-6">
                    Completa el formulario y nuestro equipo se pondrá en contacto contigo
                    para ofrecerte una cotización personalizada.
                </p>

                {{-- Formulario --}}
                <form action="#" method="POST" class="space-y-4">
                    @csrf

                    {{-- Nombre --}}
                    <div>
                        <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                        <input type="text" name="nombre" id="nombre" required
                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#77BD1F] focus:ring-[#77BD1F]"
                            placeholder="Tu nombre completo">
                    </div>

                    {{-- Email --}}
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo electrónico</label>
                        <input type="email" name="email" id="email" required
                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#77BD1F] focus:ring-[#77BD1F]"
                            placeholder="tucorreo@ejemplo.com">
                    </div>

                    {{-- Teléfono --}}
                    <div>
                        <label for="telefono" class="block text-sm font-medium text-gray-700 mb-1">Teléfono</label>
                        <input type="tel" name="telefono" id="telefono"
                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#77BD1F] focus:ring-[#77BD1F]"
                            placeholder="+34 600 000 000">
                    </div>

                    {{-- Ciudad de Origen --}}
                    <div>
                        <label for="origen" class="block text-sm font-medium text-gray-700 mb-1">Ciudad de Origen</label>
                        <input type="text" name="origen" id="origen"
                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#77BD1F] focus:ring-[#77BD1F]"
                            placeholder="Ej. Madrid">
                    </div>

                    {{-- Ciudad de Destino --}}
                    <div>
                        <label for="destino" class="block text-sm font-medium text-gray-700 mb-1">Ciudad de Destino</label>
                        <input type="text" name="destino" id="destino"
                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#77BD1F] focus:ring-[#77BD1F]"
                            placeholder="Ej. Barcelona">
                    </div>

                    {{-- Tipo de carga --}}
                    <div>
                        <label for="tipo_carga" class="block text-sm font-medium text-gray-700 mb-1">Tipo de Carga</label>
                        <select id="tipo_carga" name="tipo_carga"
                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#77BD1F] focus:ring-[#77BD1F]">
                            <option value="">Selecciona una opción</option>
                            <option value="General">Mercancía General</option>
                            <option value="Refrigerada">Refrigerada</option>
                            <option value="Peligrosa">Peligrosa</option>
                            <option value="Otra">Otra</option>
                        </select>
                    </div>

                    {{-- Descripción o detalles --}}
                    <div>
                        <label for="detalles" class="block text-sm font-medium text-gray-700 mb-1">Detalles
                            adicionales</label>
                        <textarea name="detalles" id="detalles" rows="4"
                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-[#77BD1F] focus:ring-[#77BD1F]"
                            placeholder="Indica peso, dimensiones, fechas, etc."></textarea>
                    </div>

                    {{-- Checkbox de privacidad --}}
                    <div class="flex items-start space-x-2 mt-4">
                        <input type="checkbox" id="privacidad" name="privacidad" class="mt-1" required>
                        <label for="privacidad" class="text-sm text-gray-700 cursor-pointer">
                            Acepto la <a href="#" class="text-[#77BD1F] underline">política de privacidad</a>
                        </label>
                    </div>

                    {{-- Botón enviar --}}
                    <button type="submit"
                        class="w-full mt-6 inline-flex justify-center items-center rounded-md bg-[#77BD1F] py-3 text-white font-semibold hover:bg-[#5E9A19] transition">
                        Solicitar Presupuesto
                    </button>
                </form>
            </div>
        </div>
    </section>


@endsection