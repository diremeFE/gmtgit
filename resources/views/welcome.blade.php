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
                Soluciones de transporte eficientes para empresas y particulares. Confíe en Green Cate para
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


<section class="bg-white py-20 relative">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">
        <div class="text-center mb-14">
            <h2 class="text-4xl font-bold text-gray-800">¿Por qué elegirnos?</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                Nuestra tecnología, equipo y experiencia nos permiten ofrecerte un transporte confiable, rápido y adaptado a tus necesidades.
            </p>
        </div>

        <!-- Caja central -->
        <div class="relative grid grid-cols-1 md:grid-cols-3 gap-8 items-center">

            <!-- Bloques laterales -->
            <div class="space-y-6">
                <div class="bg-gray-100 p-6 rounded-2xl shadow-lg">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Seguimiento en Tiempo Real</h3>
                    <p class="text-gray-600 text-sm">Sigue tu mercancía en todo momento con nuestro sistema de tracking avanzado.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-2xl shadow-lg">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Cobertura Nacional</h3>
                    <p class="text-gray-600 text-sm">Llegamos a cualquier punto de España gracias a nuestra red logística.</p>
                </div>
            </div>

            <!-- Nodo central -->
            <div class="flex justify-center items-center">
                <div class="bg-[#77BD1F] text-white text-center px-8 py-12 rounded-full shadow-2xl w-[240px] h-[240px] flex flex-col justify-center items-center">
                    <svg class="w-12 h-12 mb-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path d="M12 3v18m9-9H3" />
                    </svg>
                    <p class="text-lg font-bold">Green Cate</p>
                    <span class="text-sm">Transporte Inteligente</span>
                </div>
            </div>

            <!-- Más bloques -->
            <div class="space-y-6">
                <div class="bg-gray-100 p-6 rounded-2xl shadow-lg">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Equipo Especializado</h3>
                    <p class="text-gray-600 text-sm">Nuestro equipo técnico y humano está preparado para responder con eficacia.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-2xl shadow-lg">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Compromiso Ambiental</h3>
                    <p class="text-gray-600 text-sm">Utilizamos rutas optimizadas y vehículos sostenibles para reducir emisiones.</p>
                </div>
            </div>

        </div>
    </div>
</section>



<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4 sm:px-6">

        <!-- Encabezado de la sección -->
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-gray-800">
                Llegamos Donde nos Necesites
            </h2>
            <p class="text-gray-600 mt-2 max-w-2xl mx-auto">
                Descubre nuestro servicio especializado en las principales ciudades

            </p>
        </div>

        <!-- Grid con 4 columnas (3 camiones + 1 bloque CTA) -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 items-start">

            @foreach([
            ['ciudad' => 'sevilla', 'titulo' => 'Sevilla', 'descripcion' => 'Comprometidos con la rapidez y la calidad
            en cada transporte. Green Cate asegura entregas eficientes en toda la capital andaluza.'],
            ['ciudad' => 'valencia', 'titulo' => 'Valencia', 'descripcion' => 'Ofrecemos soluciones de transporte
            flexibles y seguras adaptadas al ritmo dinámico de Valencia.'],
            ['ciudad' => 'madrid', 'titulo' => 'Madrid', 'descripcion' => 'Experiencia y eficiencia garantizada en la
            capital. Confía en Green Cate para entregas urgentes y voluminosas en Madrid.'],
            ['ciudad' => 'barcelona', 'titulo' => 'Barcelona', 'descripcion' => 'Adaptamos nuestros servicios al
            movimiento constante de Barcelona, brindando puntualidad y confianza en cada transporte.'],
            ['ciudad' => 'malaga', 'titulo' => 'Málaga', 'descripcion' => 'Expertos en movimiento. Agilidad y eficacia
            en transportes urgentes y delicados en toda Málaga.'],
            ] as $item)
            <div class="relative group overflow-hidden rounded-lg shadow-lg h-[32rem]">
                <img src="{{ asset('images/' . $item['ciudad'] . '.jpg') }}" alt="{{ $item['titulo'] }}"
                    class="object-cover w-full h-full absolute inset-0 z-0">
                <div class="absolute inset-0 bg-black/40 transition group-hover:bg-black/50 z-0"></div>

                <!-- Contenido desplazable -->
                <div
                    class="absolute bottom-0 left-0 right-0 z-10 transition-all duration-300 ease-in-out group-hover:-translate-y-16 p-4">
                    <h3 class="text-xl font-bold text-white">{{ $item['titulo'] }}</h3>
                    <p class="text-sm text-white mt-1">{{ $item['descripcion'] }}</p>
                </div>

                <!-- Botón oculto hasta hover -->
                <div
                    class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-all duration-300 ease-in-out z-10">
                    <a href="#"
                        class="inline-block bg-white text-black font-semibold px-4 py-2 rounded shadow hover:bg-gray-200 transition">
                        Ver más
                    </a>
                </div>
            </div>
            @endforeach

            <!-- Bloque destacado con Google Maps -->
            <div
                class="relative group text-white bg-gray-100 rounded-lg p-6 flex flex-col justify-between shadow-lg min-h-[32rem]">

                <!-- Título y texto -->
                <h3 class="text-3xl text-black font-bold mb-3">
                    Transporte a Nivel Nacional
                </h3>
                

                <!-- Google Maps -->
                <div id="map" class="w-full h-92 rounded-lg shadow mt-2"></div>

                
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
                   ¿Cómo trabajamos?
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


<section id="presupuesto" class="bg-white pt-32 pb-20">
    <div class="container mx-auto px-6 lg:px-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            
            <!-- Columna izquierda: texto y contacto -->
            <div>
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Solicita tu Presupuesto</h2>
                <p class="text-gray-600 mb-6">
                    ¿Necesitas mover mercancía o solicitar un transporte a medida? Rellena el formulario y nuestro equipo te responderá lo antes posible.
                </p>
                <div class="text-gray-600 mb-2">
                    <p class="mb-1">📍 Calle Ficticia 123, Valencia</p>
                    <p class="mb-1">📞 +34 600 123 456</p>
                    <p>✉️ info@greencate.com</p>
                </div>

                <!-- Redes sociales -->
                <div class="flex gap-4 mt-6">
                    <a href="#" class="text-gray-500 hover:text-green-600"><i class="fab fa-linkedin fa-lg"></i></a>
                    <a href="#" class="text-gray-500 hover:text-green-600"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" class="text-gray-500 hover:text-green-600"><i class="fab fa-twitter fa-lg"></i></a>
                </div>
            </div>

            <!-- Columna derecha: formulario -->
            <form action="#" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nombre completo*</label>
                    <input type="text" name="nombre" required
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#77BD1F]">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Correo electrónico*</label>
                    <input type="email" name="email" required
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#77BD1F]">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Empresa (opcional)</label>
                    <input type="text" name="empresa"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#77BD1F]">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Teléfono*</label>
                    <input type="text" name="telefono" required
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#77BD1F]">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Detalles del transporte*</label>
                    <textarea name="mensaje" rows="4" required
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#77BD1F]"></textarea>
                </div>

                <button type="submit"
                    class="inline-flex items-center justify-center px-6 py-3 bg-[#77BD1F] hover:bg-[#69a81c] text-white font-semibold rounded-md shadow focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#77BD1F]">
                    Enviar Presupuesto
                </button>
            </form>

        </div>
    </div>
</section>


<style>
    @keyframes scroll-horizontal {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }

    .animate-scroll-horizontal {
        display: flex;
        animation: scroll-horizontal 30s linear infinite;
        width: max-content;
    }
</style>


<section class="bg-none relative overflow-visible pt-16 pb-16">

</section>



@push('scripts')
<script>
    function initMap() {
        const cities = [
            { name: "Madrid",     position: { lat: 40.4168, lng: -3.7038 } },
            { name: "Barcelona",  position: { lat: 41.3851, lng: 2.1734 } },
            { name: "Sevilla",    position: { lat: 37.3891, lng: -5.9845 } },
            { name: "Valencia",   position: { lat: 39.4699, lng: -0.3763 } },
            { name: "Málaga",     position: { lat: 36.7213, lng: -4.4214 } },
        ];

        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 6,
            center: { lat: 39.5, lng: -3.5 },
            styles: [
                {
                    featureType: "poi",
                    elementType: "labels",
                    stylers: [{ visibility: "off" }]
                }
            ]
        });

        cities.forEach(city => {
            new google.maps.Marker({
                position: city.position,
                map,
                title: city.name
            });
        });
    }
</script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC04m4te_gUh6_H7YxvGbkMOMNbLgShJ5A&callback=initMap">
</script>
@endpush



@endsection