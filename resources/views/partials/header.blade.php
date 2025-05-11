<style>
    .nav-link {
        position: relative;
        transition: color 0.3s;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        bottom: -4px;
        left: 0;
        width: 0%;
        height: 2px;
        background-color: #77BD1F;
        transition: width 0.3s ease-in-out;
    }

    .nav-link:hover {
        color: #77BD1F;
    }

    .nav-link:hover::after {
        width: 100%;
    }
</style>



<header class="sticky top-0 z-50 w-full border-b bg-white py-4 px-6 shadow-sm">
    <div class="container mx-auto h-16 px-4 flex items-center justify-between gap-8">

        {{-- LOGO + MENÚ --}}
        <div class="flex items-center gap-10">
            {{-- LOGO --}}
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <span class="text-4xl font-semibold text-gray-800">
                    Green <span class="text-[#77BD1F]">Cate</span>
                </span>
            </a>

            {{-- MENÚ DE NAVEGACIÓN --}}
            <nav class="hidden lg:flex gap-8 items-center text-md font-semibold text-gray-800">
                <a href="{{ route('home') }}" class="nav-link">Inicio</a>
                <a href="{{ route('servicios') }}" class="nav-link">Servicios</a>
                <a href="{{ route('sobre-nosotros') }}" class="nav-link">Sobre Nosotros</a>
            </nav>

        </div>

        {{-- BOTONES DE ACCIÓN --}}
        <div class="hidden lg:flex items-center gap-4">
            <a href="{{ route('contacto') }}"
                class="border border-[#77BD1F] text-[#77BD1F] px-5 py-2 rounded-full font-semibold hover:bg-[#77BD1F] hover:text-white transition">
                Contactar
            </a>
            <a href="#presupuesto"
    class="bg-[#77BD1F] hover:bg-[#69a81c] text-white px-6 py-2 rounded-full font-semibold transition scroll-to-form">
    Solicitar Presupuesto
</a>

        </div>

        {{-- BOTÓN MENÚ MÓVIL --}}
        <button class="lg:hidden ml-auto" aria-label="Toggle menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="h-6 w-6 text-gray-700">
                <line x1="4" x2="20" y1="6" y2="6"></line>
                <line x1="4" x2="20" y1="12" y2="12"></line>
                <line x1="4" x2="20" y1="18" y2="18"></line>
            </svg>
        </button>
    </div>

    {{-- MENÚ MÓVIL --}}
    <nav id="mobileMenu" class="lg:hidden hidden bg-white border-t">
        <ul class="flex flex-col px-4 py-4 gap-3">
            <li><a href="{{ route('home') }}" class="block text-gray-800 hover:text-[#77BD1F]">Inicio</a></li>
            <li><a href="{{ route('servicios') }}" class="block text-gray-800 hover:text-[#77BD1F]">Servicios</a></li>
            <li><a href="{{ route('sobre-nosotros') }}" class="block text-gray-800 hover:text-[#77BD1F]">Sobre
                    Nosotros</a></li>
            <li>
                <a href="{{ route('contacto') }}"
                    class="block text-center border border-[#77BD1F] text-[#77BD1F] px-4 py-2 rounded-full font-semibold">
                    Contactar
                </a>
            </li>
            <li>
            <a href="#presupuesto"
    class="bg-[#77BD1F] hover:bg-[#69a81c] text-white px-6 py-2 rounded-full font-semibold transition scroll-to-form">
    Solicitar Presupuesto
</a>

            </li>
        </ul>
    </nav>
</header>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const menuBtn = document.querySelector('[aria-label="Toggle menu"]');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileLinks = mobileMenu.querySelectorAll('a');

    // Toggle del menú
    menuBtn.addEventListener("click", function () {
        mobileMenu.classList.toggle("hidden");
    });

    // Cerrar el menú al hacer clic en un enlace
    mobileLinks.forEach(link => {
        link.addEventListener("click", function () {
            mobileMenu.classList.add("hidden");
        });
    });

    // Scroll suave al formulario
    const scrollLinks = document.querySelectorAll('a.scroll-to-form');
    scrollLinks.forEach(link => {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute("href"));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 80, // ajusta si hay header sticky
                    behavior: "smooth"
                });
            }

            // Si estamos en móvil, cerrar el menú después de hacer scroll
            if (window.innerWidth < 1024) {
                mobileMenu.classList.add("hidden");
            }
        });
    });
});
</script>
