@extends('layouts.layout')

@section('titulo', 'Sobre Nosotros')

@section('contenido')

<!-- HERO SECTION -->
<section class="bg-white py-20" id="hero">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-10">
            <div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-6">
                    Transporte que impulsa tu negocio
                </h1>
                <p class="text-gray-600 text-lg mb-6">
                    En Green Cate somos expertos en transporte nacional especializado. Ponemos a tu disposición una
                    flota moderna de más de 40 vehículos y una red de más de 5 partners logísticos estratégicos.
                </p>
                <a href="#quienes-somos"
                    class="scroll-to inline-block px-6 py-3 bg-[#77BD1F] text-white rounded-md font-semibold shadow hover:bg-[#69a81c] transition">
                    Conócenos
                </a>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1605902711622-cfb43c4437b5?auto=format&fit=crop&w=1200&q=80"
                    alt="Flota de transporte" class="rounded-xl shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- DATOS DESTACADOS -->
<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">
        <div class="grid grid-cols-1 md:grid-cols-3 text-center gap-10">
            <div>
                <h2 id="fleet-counter" class="text-4xl font-bold text-[#77BD1F] mb-2">0</h2>
                <p class="text-gray-600">Vehículos en nuestra flota</p>
            </div>
            <div>
                <h2 id="partner-counter" class="text-4xl font-bold text-[#77BD1F] mb-2">0</h2>
                <p class="text-gray-600">Partners logísticos estratégicos</p>
            </div>
            <div>
                <h2 id="delivery-counter" class="text-4xl font-bold text-[#77BD1F] mb-2">0</h2>
                <p class="text-gray-600">Entregas gestionadas cada año</p>
            </div>
        </div>
    </div>
</section>

<!-- SOBRE GREEN CATE -->
<section class="bg-gray-50 py-20" id="quienes-somos">
    <div class="container mx-auto px-6 md:px-12 lg:px-20 grid grid-cols-1 md:grid-cols-2 items-center gap-10">
        <div>
            <img src="https://images.unsplash.com/photo-1618005198919-d3d4b6c1ef71?auto=format&fit=crop&w=1200&q=80"
                alt="Camión en ruta" class="rounded-xl shadow-lg">
        </div>
        <div>
            <h3 class="text-2xl font-bold text-gray-900 mb-4">¿Quiénes somos?</h3>
            <p class="text-gray-600 mb-4">
                En Green Cate trabajamos día a día para ofrecer un servicio logístico eficaz, puntual y personalizado.
                Combinamos tecnología, personas y experiencia para garantizar la máxima calidad en cada entrega.
            </p>
            <div class="grid grid-cols-3 gap-4 text-center">
                <div>
                    <p id="experience-counter" class="text-3xl font-bold text-[#77BD1F]">0</p>
                    <p class="text-sm text-gray-500">Años de experiencia</p>
                </div>
                <div>
                    <p id="satisfaction-counter" class="text-3xl font-bold text-[#77BD1F]">0</p>
                    <p class="text-sm text-gray-500">Satisfacción media</p>
                </div>
                <div>
                    <p id="coverage-counter" class="text-3xl font-bold text-[#77BD1F]">0</p>
                    <p class="text-sm text-gray-500">Cobertura nacional</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- OFICINAS -->
<section id="oficinas" class="bg-white py-20">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-10">¿Dónde están nuestras oficinas?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 text-center">
            <div>
                <h4 class="text-xl font-semibold text-gray-800">Madrid</h4>
                <p class="text-gray-600">Calle Ficticia 101, Madrid</p>
            </div>
            <div>
                <h4 class="text-xl font-semibold text-gray-800">Barcelona</h4>
                <p class="text-gray-600">Avinguda Inexistente 202, Barcelona</p>
            </div>
            <div>
                <h4 class="text-xl font-semibold text-gray-800">Valencia</h4>
                <p class="text-gray-600">Calle Inventada 303, Valencia</p>
            </div>
            <div>
                <h4 class="text-xl font-semibold text-gray-800">Sevilla</h4>
                <p class="text-gray-600">Avenida Ejemplo 404, Sevilla</p>
            </div>
            <div>
                <h4 class="text-xl font-semibold text-gray-800">Málaga</h4>
                <p class="text-gray-600">Paseo Simulado 505, Málaga</p>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
function animateCounter(id, target, suffix = '', step = 1, delay = 50) {
    const counter = document.getElementById(id);
    if (!counter) return; // Si no existe el elemento, no hacer nada

    let counted = false;

    function checkVisibility() {
        const rect = counter.getBoundingClientRect();
        const isVisible = rect.top < window.innerHeight && rect.bottom >= 0;

        if (isVisible && !counted) {
            counted = true;
            let i = 0;
            const interval = setInterval(() => {
                if (i < target) {
                    const isDecimal = (step % 1 !== 0);
                    const value = isDecimal ? i.toFixed(1) : i;
                    counter.textContent = value + suffix;
                    i += step;
                } else {
                    const final = (step % 1 !== 0) ? target.toFixed(1) : target;
                    counter.textContent = final + suffix;
                    clearInterval(interval);
                }
            }, delay);
        }
    }

    window.addEventListener('scroll', checkVisibility);
    checkVisibility();
}


animateCounter('partner-counter', 5, '+');
animateCounter('fleet-counter', 40, '+');
animateCounter('delivery-counter', 10000, '+', 1000);
animateCounter('partner-counter-only', 5, '+');
animateCounter('experience-counter', 5, '+');
animateCounter('satisfaction-counter', 9.8, '/10', 0.1, 50);
animateCounter('coverage-counter', 100, '%', 1, 20);

// Smooth scroll para "Conócenos"
document.querySelectorAll('a.scroll-to').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const href = this.getAttribute('href');
        const target = document.querySelector(href);
        if (target) {
            window.scrollTo({
                top: target.offsetTop - 60,
                behavior: 'smooth'
            });
        }
    });
});
</script>
@endpush

@endsection