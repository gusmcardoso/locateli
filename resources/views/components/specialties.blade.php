@php
    $services = [
        [
            'title' => 'Implantodontia guiada',
            'description' => 'Planejamento digital e execução precisa para repor dentes com total segurança.',
            'image' => asset('images/consulta-01.jpg'),
        ],
        [
            'title' => 'Ortodontia estética',
            'description' => 'Alinhadores transparentes e aparelhos discretos que acompanham sua rotina.',
            'image' => asset('images/consulta-02.jpg'),
        ],
        [
            'title' => 'Odontopediatria acolhedora',
            'description' => 'Ambiente lúdico e profissionais preparados para cada fase da infância.',
            'image' => asset('images/consulta-02.jpg'),
        ],
        [
            'title' => 'Estética do sorriso',
            'description' => 'Lentes, facetas e protocolos de clareamento com acabamento natural.',
            'image' => asset('images/consulta-01.jpg'),
        ],
        [
            'title' => 'Endodontia microscópica',
            'description' => 'Tratamentos de canal com microscopia para preservar mais estrutura dental.',
            'image' => asset('images/consulta-02.jpg'),
        ],
        [
            'title' => 'Periodontia integrada',
            'description' => 'Cuidados completos para gengivas saudáveis e hálito equilibrado.',
            'image' => asset('images/consulta-01.jpg'),
        ],
    ];
@endphp

<section id="servicos" class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center space-y-4">
            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-clinic-primary">Especialidades</p>
            <h2 class="text-3xl font-bold text-clinic-ink">Saiba como podemos te ajudar!</h2>
            <p class="max-w-3xl mx-auto text-clinic-ink/80">
                Protocolos integrados que unem diagnóstico digital, planejamento interdisciplinar e acompanhamento humanizado.
            </p>
        </div>
        <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($services as $service)
                <article class="rounded-2xl border border-clinic-secondary bg-clinic-secondary/60 p-4 shadow-sm">
                    <div class="aspect-[4/3] overflow-hidden rounded-xl">
                        <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="h-full w-full object-cover">
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-clinic-ink">{{ $service['title'] }}</h3>
                    <p class="text-sm text-clinic-ink/80">{{ $service['description'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
