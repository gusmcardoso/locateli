<footer class="bg-clinic-ink text-white" id="localizacao">
    <div class="max-w-6xl mx-auto px-4 py-14 space-y-8">
        <div class="space-y-4 text-center">
            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-clinic-primary">Esperamos por você!</p>
            <h2 class="text-3xl font-bold">Vamos agendar um horário?</h2>
            <p class="text-white/80 max-w-2xl mx-auto">
                Clique nos botões abaixo e fale direto com nossa equipe. Estamos prontos para planejar o melhor momento para o seu atendimento.
            </p>
            <div class="flex flex-col gap-4 sm:flex-row sm:justify-center">
                <a
                    href="https://api.whatsapp.com/message/PNW6RMD5E2GXP1?autoload=1&app_absent=0"
                    target="_blank"
                    rel="noopener"
                    class="inline-flex items-center justify-center rounded-full bg-clinic-primary px-8 py-3 text-sm font-semibold text-white shadow-lg shadow-clinic-primary/30"
                >
                    Agendar consulta
                </a>
                <a
                    href="https://maps.app.goo.gl/jnBQRGv5iwiik5qt7"
                    target="_blank"
                    rel="noopener"
                    class="inline-flex items-center justify-center rounded-full border border-white/40 px-8 py-3 text-sm font-semibold"
                >
                    Clique para acessar localização
                </a>
            </div>
        </div>
        <div class="grid gap-6 text-sm sm:grid-cols-2 lg:grid-cols-3">
            <div>
                <span class="font-semibold uppercase tracking-widest text-clinic-primary text-xs">Endereço</span>
                <p class="mt-2 text-white/80">Rua Dom Domingos Carrerot, 1005 – Centro, Porto Nacional – TO, 77500-000</p>
            </div>
            <div>
                <span class="font-semibold uppercase tracking-widest text-clinic-primary text-xs">Atendimento</span>
                <p class="mt-2 text-white/80">(63) 9 9253-1803<br>Segunda à sexta 08:30–18:00<br>Sábado 09:00–12:00</p>
            </div>
            <div>
                <span class="font-semibold uppercase tracking-widest text-clinic-primary text-xs">Localização</span>
                <div class="mt-2 rounded-xl border border-white/20 p-4 text-white/70">
                    {{-- iframe placeholder: inserir mapa do Google --}}
                    Mapa interativo aqui.
                </div>
            </div>
        </div>
        <div class="border-t border-white/10 pt-6 text-center text-xs text-white/60">
            © {{ date('Y') }} Instituto Locatelli LTDA – CNPJ 59.453.524/0001-80 – Todos os direitos reservados.
        </div>
    </div>
</footer>
