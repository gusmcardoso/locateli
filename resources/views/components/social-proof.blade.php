<section id="avaliacoes" class="bg-clinic-secondary py-16">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center space-y-4">
            <div class="flex items-center justify-center gap-1 text-amber-400 text-lg">
                @for ($i = 0; $i < 5; $i++)
                    <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" aria-hidden="true">
                        <path d="M10 1l2.472 6.214L19 7.326l-5 4.06L15.472 18 10 14.77 4.528 18 6 11.386l-5-4.06 6.528-.112z" />
                    </svg>
                @endfor
            </div>
            <h2 class="text-3xl font-bold text-clinic-ink">Algumas avaliações dos nossos pacientes!</h2>
            <p class="max-w-2xl mx-auto text-clinic-ink/80">
                Torne-se você também um dos nossos clientes satisfeitos com nosso atendimento personalizado e qualidade comprovada!
            </p>
        </div>
        <div class="mt-10 grid gap-6 md:grid-cols-3">
            @foreach ([1, 2, 3] as $index)
                <article class="rounded-2xl bg-white p-4 shadow-lg">
                    <div class="aspect-[4/3] w-full overflow-hidden rounded-xl bg-clinic-secondary">
                        <img
                            src="{{ asset('images/testimonials.png') }}"
                            alt="Depoimento {{ $index }}"
                            class="h-full w-full object-cover"
                        >
                    </div>
                    <p class="mt-4 text-sm text-clinic-ink/80">
                        Placeholder para print de avaliações. Substitua pela captura real quando disponível.
                    </p>
                </article>
            @endforeach
        </div>
    </div>
</section>
