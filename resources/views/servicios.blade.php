@extends('layouts.layout')

@section('titulo', 'Servicios')

@section('contenido')


<section class="bg-white pt-20 pb-10">
    <div class="container mx-auto px-6 md:px-12 lg:px-20 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            Nuestros Servicios de Transporte
        </h1>
        <p class="text-gray-600 text-lg max-w-2xl mx-auto">
            En Green Cate ofrecemos soluciones adaptadas a cada necesidad: desde mercancías voluminosas hasta productos frágiles o entregas urgentes. Descubre cómo podemos ayudarte.
        </p>
    </div>
</section>


<!-- Transporte de paquetería voluminosa -->
<section class="bg-white py-24">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center" data-aos="fade-right">
            
            <!-- Imagen -->
            <div>
                <div class="w-full h-64 md:h-80 bg-gray-200 rounded-xl bg-[url('/images/pattern-placeholder.svg')] bg-center bg-cover shadow-inner shadow-gray-300"></div>
            </div>

            <!-- Texto -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Transporte de Paquetería Voluminosa (+3500kg)</h2>
                <p class="text-gray-600 text-base mb-6">
                    Cargas de gran volumen y peso con vehículos adaptados para transportar mercancías superiores a 3.500 kg de forma segura y eficaz.
                </p>
                <div class="flex gap-4">
                    <a href="#"
                        class="px-5 py-2 rounded-md bg-black text-white font-semibold text-sm shadow hover:opacity-90 transition">
                        Get Started
                    </a>
                    <a href="#"
                        class="px-5 py-2 rounded-md bg-gray-100 text-gray-800 font-semibold text-sm shadow-sm hover:bg-gray-200 transition">
                        Learn More
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Transporte frágil -->
<section class="bg-gray-50 py-24">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center" data-aos="fade-left">
            
            <!-- Texto a la izquierda -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Transporte Frágil</h2>
                <p class="text-gray-600 text-base mb-6">
                    Manipulación especializada, sistemas de protección reforzada y embalajes a medida para garantizar la integridad de tus productos más delicados.
                </p>
                <div class="flex gap-4">
                    <a href="#"
                        class="px-5 py-2 rounded-md bg-black text-white font-semibold text-sm shadow hover:opacity-90 transition">
                        Get Started
                    </a>
                    <a href="#"
                        class="px-5 py-2 rounded-md bg-gray-100 text-gray-800 font-semibold text-sm shadow-sm hover:bg-gray-200 transition">
                        Learn More
                    </a>
                </div>
            </div>

            <!-- Imagen a la derecha -->
            <div>
                <div class="w-full h-64 md:h-80 bg-gray-200 rounded-xl bg-[url('/images/pattern-placeholder.svg')] bg-center bg-cover shadow-inner shadow-gray-300"></div>
            </div>

        </div>
    </div>
</section>

<!-- Los demás bloques siguen igual -->
<section class="bg-white py-24">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center" data-aos="fade-right">
            <div>
                <div class="w-full h-64 md:h-80 bg-gray-200 rounded-xl bg-[url('/images/pattern-placeholder.svg')] bg-center bg-cover shadow-inner shadow-gray-300"></div>
            </div>
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Entrega de Línea Blanca</h2>
                <p class="text-gray-600 text-base mb-6">
                    Transportamos electrodomésticos grandes con cuidado, puntualidad y la posibilidad de entrega en domicilio con servicio de subida y colocación.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="px-5 py-2 rounded-md bg-black text-white font-semibold text-sm shadow hover:opacity-90 transition">Get Started</a>
                    <a href="#" class="px-5 py-2 rounded-md bg-gray-100 text-gray-800 font-semibold text-sm shadow-sm hover:bg-gray-200 transition">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-50 py-24">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center" data-aos="fade-left">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Transporte Línea Marrón</h2>
                <p class="text-gray-600 text-base mb-6">
                    Especialistas en transportar productos electrónicos como televisores, equipos de sonido y tecnología con total seguridad y trazabilidad.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="px-5 py-2 rounded-md bg-black text-white font-semibold text-sm shadow hover:opacity-90 transition">Get Started</a>
                    <a href="#" class="px-5 py-2 rounded-md bg-gray-100 text-gray-800 font-semibold text-sm shadow-sm hover:bg-gray-200 transition">Learn More</a>
                </div>
            </div>
            <div>
                <div class="w-full h-64 md:h-80 bg-gray-200 rounded-xl bg-[url('/images/pattern-placeholder.svg')] bg-center bg-cover shadow-inner shadow-gray-300"></div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-24">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center" data-aos="fade-right">
            <div>
                <div class="w-full h-64 md:h-80 bg-gray-200 rounded-xl bg-[url('/images/pattern-placeholder.svg')] bg-center bg-cover shadow-inner shadow-gray-300"></div>
            </div>
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Transporte Urgente</h2>
                <p class="text-gray-600 text-base mb-6">
                    Servicio inmediato para entregas críticas. Recogida rápida y distribución exprés con máxima prioridad, seguimiento en tiempo real y atención personalizada.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="px-5 py-2 rounded-md bg-black text-white font-semibold text-sm shadow hover:opacity-90 transition">Get Started</a>
                    <a href="#" class="px-5 py-2 rounded-md bg-gray-100 text-gray-800 font-semibold text-sm shadow-sm hover:bg-gray-200 transition">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
