<header x-data="{ open: false }" class="bg-white/95 backdrop-blur border-b border-clinic-secondary/60 sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <a href="#topo" class="flex items-center gap-2" aria-label="Instituto Locatelli">
                <img src="{{ asset('images/logo-instituto.png') }}" alt="Logotipo Instituto Locatelli" class="h-10 w-auto">
                <div class="text-sm font-semibold uppercase tracking-wide text-clinic-ink">
                    Instituto Locatelli
                </div>
            </a>
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-clinic-ink/80">
                <a href="#servicos" class="hover:text-clinic-primary transition">Serviços</a>
                <a href="#quem-somos" class="hover:text-clinic-primary transition">Quem somos</a>
                <a href="#duvidas" class="hover:text-clinic-primary transition">Dúvidas</a>
                <a href="#localizacao" class="hover:text-clinic-primary transition">Localização</a>
            </nav>
            <div class="hidden md:flex">
                <a
                    href="https://api.whatsapp.com/message/PNW6RMD5E2GXP1?autoload=1&app_absent=0"
                    target="_blank"
                    rel="noopener"
                    class="rounded-full bg-clinic-primary px-5 py-2 text-sm font-semibold text-white shadow-lg shadow-clinic-primary/30"
                >
                    Agendar Consulta
                </a>
            </div>
            <button
                type="button"
                class="md:hidden inline-flex items-center justify-center rounded-md p-2 text-clinic-ink focus:outline-none focus:ring-2 focus:ring-clinic-primary"
                x-on:click="open = !open"
                aria-label="Abrir menu mobile"
            >
                <svg x-show="!open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="open" x-cloak class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div x-show="open" x-transition class="md:hidden border-t border-clinic-secondary/60 py-4 space-y-4">
            <nav class="flex flex-col gap-3 text-base font-medium text-clinic-ink">
                <a href="#servicos" class="hover:text-clinic-primary transition" x-on:click="open = false">Serviços</a>
                <a href="#quem-somos" class="hover:text-clinic-primary transition" x-on:click="open = false">Quem somos</a>
                <a href="#duvidas" class="hover:text-clinic-primary transition" x-on:click="open = false">Dúvidas</a>
                <a href="#localizacao" class="hover:text-clinic-primary transition" x-on:click="open = false">Localização</a>
            </nav>
            <a
                href="https://api.whatsapp.com/message/PNW6RMD5E2GXP1?autoload=1&app_absent=0"
                target="_blank"
                rel="noopener"
                class="inline-flex w-full items-center justify-center rounded-full bg-clinic-primary px-5 py-2 text-sm font-semibold text-white shadow-lg shadow-clinic-primary/30"
            >
                Agendar Consulta
            </a>
        </div>
    </div>
</header>
