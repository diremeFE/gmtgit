<header class="sticky top-0 z-50 w-full border-b bg-white/80 backdrop-blur-lg py-4 shadow-md">
    <div class="container mx-auto h-16 px-4 md:px-6 flex items-center">
        
        <!-- LOGO (IZQUIERDA) -->
        <a href="{{ route('home') }}" class="flex items-center gap-2">
            <span class="font-bold text-xl text-gray-800">
                GMT <span class="text-[#77BD1F]">Transportes</span>
            </span>
        </a>
        
        <!-- NAVEGACIÓN (CENTRO) - se muestra solo en pantallas lg -->
        <nav class="hidden lg:flex flex-1 justify-center">
            <ul class="flex items-center gap-6">
                <li><a href="{{ route('home') }}" class="text-md font-medium hover:text-[#77BD1F]">Inicio</a></li>
                <li><a href="{{ route('servicios') }}" class="text-md font-medium hover:text-[#77BD1F]">Servicios</a></li>
                <li><a href="{{ route('sobre-nosotros') }}" class="text-md font-medium hover:text-[#77BD1F]">Sobre Nosotros</a></li>
                <li><a href="{{ route('contacto') }}" class="text-md font-medium hover:text-[#77BD1F]">Contacto</a></li>
            </ul>
        </nav>
        
        <!-- BOTÓN "SOLICITAR PRESUPUESTO" (Derecha) - se muestra solo en pantallas lg -->
        <div class="hidden lg:block ml-4">
            <a href="{{ route('presupuesto') }}"
               class="inline-block bg-[#77BD1F] hover:bg-[#69a81c] text-white font-semibold px-6 py-5 rounded-full shadow"
            >
                Solicitar Presupuesto
            </a>
        </div>
        
        <!-- BOTÓN MENÚ MÓVIL (HAMBURGUESA) - se muestra en móviles y tablets -->
        <button class="lg:hidden ml-auto" aria-label="Toggle menu">
            <svg xmlns="http://www.w3.org/2000/svg"
                 width="24" height="24"
                 viewBox="0 0 24 24"
                 fill="none" stroke="currentColor"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="h-6 w-6 text-gray-700"
            >
                <line x1="4" x2="20" y1="6" y2="6"></line>
                <line x1="4" x2="20" y1="12" y2="12"></line>
                <line x1="4" x2="20" y1="18" y2="18"></line>
            </svg>
        </button>
    </div>
    
    <!-- MENÚ MÓVIL DESPLEGABLE (solo en dispositivos menores a lg) -->
    <nav id="mobileMenu" class="lg:hidden hidden bg-white border-t border-b">
        <ul class="flex flex-col px-4 py-2 space-y-2">
            <li><a href="{{ route('home') }}" class="block text-md font-medium hover:text-[#77BD1F]">Inicio</a></li>
            <li><a href="{{ route('servicios') }}" class="block text-md font-medium hover:text-[#77BD1F]">Servicios</a></li>
            <li><a href="{{ route('sobre-nosotros') }}" class="block text-md font-medium hover:text-[#77BD1F]">Sobre Nosotros</a></li>
            <li><a href="{{ route('contacto') }}" class="block text-md font-medium hover:text-[#77BD1F]">Contacto</a></li>
            <li>
                <a href="{{ route('presupuesto') }}"
                   class="block bg-[#77BD1F] hover:bg-[#69a81c] text-white text-center font-medium px-4 py-2 rounded-full shadow"
                >
                    Solicitar Presupuesto
                </a>
            </li>
        </ul>
    </nav>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuBtn = document.querySelector('[aria-label="Toggle menu"]');
        const mobileMenu = document.getElementById('mobileMenu');
        
        menuBtn.addEventListener("click", function() {
            mobileMenu.classList.toggle("hidden");
        });
    });
</script>
