@once
    @push('head')
        <style>
            .hero-photo {
                filter: contrast(1.25) saturate(1.15);
                object-position: 70% center;
                transition: filter 0.4s ease;
            }

            @media (max-width: 768px) {
                .hero-photo {
                    filter: contrast(1.12) saturate(1.08);
                    object-position: 86% center;
                    transform: scale(1.13);
                    margin-left: 90px;
                    width: calc(100% + 90px);
                }
            }
        </style>
    @endpush
@endonce

<section id="hero" class="relative overflow-hidden bg-white">
    <div class="absolute inset-0">
        <picture class="block h-full w-full">
            <source media="(max-width: 768px)" srcset="{{ asset('images/brunamobile.jpg') }}">
            <img
                src="{{ asset('images/brunalogo.jpg') }}"
                alt="Dra. Bruna Locatelli"
                class="hero-photo h-full w-full object-cover"
            >
        </picture>
        <div class="absolute inset-0 bg-gradient-to-r from-white/70 via-[#fef6ef]/40 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-white/8 via-transparent to-[#f0c6a4]/18 mix-blend-multiply"></div>
        <div
            class="absolute inset-0 md:hidden"
            style="background: linear-gradient(90deg,
                rgba(255,255,255,1) 0%,
                rgba(255,255,255,1) 20%,
                rgba(255,253,249,0.8) 35%,
                rgba(255,252,247,0.5) 48%,
                rgba(255,250,245,0.18) 65%,
                rgba(255,249,242,0.03) 85%,
                rgba(255,248,241,0.0) 100%
            );"
        ></div>
    </div>
    <div class="relative mx-auto flex min-h-[520px] max-w-6xl items-center px-4 py-20 sm:px-6 lg:px-8">
        <div class="max-w-2xl space-y-6 text-left">
            <p class="text-sm font-semibold tracking-[0.3em] uppercase text-[#9e8e7a]">Tecnologia e acolhimento</p>
            <h1 class="text-4xl font-bold leading-tight text-clinic-ink sm:text-5xl">
                Excelência em odontologia completa para toda a família.
            </h1>
            <p class="text-base text-clinic-ink/80">
                Cuidamos do seu sorriso com tecnologia, conforto e um atendimento humanizado pensado para cada fase da sua vida.
            </p>
            <div class="flex flex-wrap gap-4">
                <a
                    href="https://api.whatsapp.com/message/PNW6RMD5E2GXP1?autoload=1&app_absent=0"
                    target="_blank"
                    rel="noopener"
                    class="inline-flex items-center justify-center rounded-full bg-[#9e8e7a] px-8 py-3 text-sm font-semibold text-white shadow-lg shadow-[#9e8e7a]/30"
                >
                    Agendar consulta
                </a>
            </div>
        </div>
    </div>
</section>
