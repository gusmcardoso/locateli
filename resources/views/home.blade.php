@extends('layouts.app')

@section('content')
    <x-hero-section />

    <section id="quem-somos" class="bg-clinic-secondary py-16">
        <div class="max-w-6xl mx-auto grid gap-10 px-4 md:grid-cols-2 md:items-center">
            <div class="space-y-4">
                <h2 class="text-base font-semibold uppercase tracking-[0.3em] text-[#9e8e7a]">Quem somos</h2>
                <p class="text-clinic-ink/80">
                    O Instituto Locatelli nasceu de um sonho: o de criar um espaço completo, com todas as especialidades odontológicas,
                    onde cada paciente fosse atendido com escuta, técnica e respeito. Mais do que resolver demandas, queremos oferecer
                    tranquilidade. Mais do que transformar sorrisos, queremos que você se sinta seguro(a) para sorrir de novo, com confiança!
                </p>
                <ul class="space-y-2 text-sm text-[#9e8e7a]">
                    <li>Profissionais qualificados.</li>
                    <li>Ambientes projetados para acolher crianças e adultos.</li>
                    <li>Monitoramento pós-atendimento via WhatsApp.</li>
                </ul>
            </div>
        </div>
    </section>

    <x-social-proof />

    <x-specialties />

    <section id="duvidas" class="bg-clinic-secondary py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center space-y-4">
                <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#9e8e7a]">Dúvidas</p>
                <h2 class="text-3xl font-bold text-clinic-ink">Perguntas frequentes</h2>
                <p class="max-w-2xl mx-auto text-clinic-ink/80">
                    Ainda tem alguma questão? Fale conosco pelo WhatsApp e receba um plano personalizado para o seu sorriso.
                </p>
            </div>
            <div class="mt-10 grid gap-6 md:grid-cols-3">
                <article class="rounded-2xl bg-white p-6 shadow">
                    <h3 class="text-lg font-semibold text-clinic-ink">Quais especialidades atendem?</h3>
                    <p class="mt-2 text-sm text-clinic-ink/80">
                        Implantodontia, ortodontia, odontopediatria, estética, periodontia e muito mais para toda a família.
                    </p>
                </article>
                <article class="rounded-2xl bg-white p-6 shadow">
                    <h3 class="text-lg font-semibold text-clinic-ink">Como funciona o agendamento?</h3>
                    <p class="mt-2 text-sm text-clinic-ink/80">
                        Escolha um horário pelo WhatsApp e confirme com nossa equipe. Enviamos lembretes e orientações pré-consulta.
                    </p>
                </article>
                <article class="rounded-2xl bg-white p-6 shadow">
                    <h3 class="text-lg font-semibold text-clinic-ink">E se precisar de urgência?</h3>
                    <p class="mt-2 text-sm text-clinic-ink/80">
                        Temos horários reservados para emergências. Entre em contato imediatamente que priorizamos seu atendimento.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <x-footer />
@endsection
