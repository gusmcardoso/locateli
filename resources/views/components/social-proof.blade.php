@once
    @push('head')
        <style>
            .carousel-3d {
                perspective: 1400px;
            }

            .carousel-3d__stage {
                position: relative;
                width: 100%;
                max-width: 960px;
                margin: 0 auto;
                height: clamp(340px, 34vw, 420px);
                transform-style: preserve-3d;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: grab;
                pointer-events: none;
            }

            .carousel-3d__stage.cursor-grabbing {
                cursor: grabbing;
            }

            .carousel-3d__card {
                position: absolute;
                inset: 0;
                margin: auto;
                width: clamp(210px, 20vw, 280px);
                height: clamp(240px, 26vw, 320px);
                padding: clamp(1.4rem, 2.2vw, 2.1rem);
                transform-style: preserve-3d;
                border-radius: 1.5rem;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                gap: clamp(1rem, 1.6vw, 1.4rem);
                background: linear-gradient(145deg, #ffffff, #f5ede3);
                border: 1px solid rgba(158, 142, 122, 0.15);
                box-shadow: 0 30px 70px rgba(0, 0, 0, 0.18);
                backface-visibility: hidden;
                will-change: transform, opacity;
                transition: opacity 0.4s ease, visibility 0.4s ease;
            }

            .carousel-3d__stars {
                display: flex;
                align-items: center;
                gap: 0.35rem;
                color: #eab308;
            }

            .carousel-3d__name {
                font-size: clamp(1.15rem, 2vw, 1.4rem);
                font-weight: 600;
                color: #3f362d;
                text-align: left;
                line-height: 1.3;
                min-height: 1.6rem;
            }

            .carousel-3d__message {
                font-size: 0.98rem;
                line-height: 1.7;
                color: #4c4338;
                overflow-wrap: anywhere;
                word-break: break-word;
                text-align: left;
            }

            @media (max-width: 640px) {
                .carousel-3d__stage {
                    height: 360px;
                }

                .carousel-3d__card {
                    width: min(260px, 86vw);
                    height: auto;
                    padding: 1.35rem;
                    gap: 0.85rem;
                }

                .carousel-3d__message {
                    font-size: 0.93rem;
                    line-height: 1.55;
                }
            }
        </style>
    @endpush
@endonce

<section id="avaliacoes" class="bg-clinic-secondary py-16">
    <div class="max-w-6xl mx-auto px-4" x-data="carousel3D()" x-init="init()">
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
                Veja o que nossos clientes dizem sobre nós e seja você também um cliente satisfeito!
            </p>
        </div>
        <div class="mt-12 space-y-8">
            <div
                class="carousel-3d"
                x-on:pointerdown.prevent="startDrag($event)"
                x-on:pointermove.prevent="drag($event)"
                x-on:pointerup="stopDrag()"
                x-on:pointerleave="stopDrag()"
                x-on:pointercancel="stopDrag()"
            >
                <div
                    class="carousel-3d__stage"
                    :class="{ 'cursor-grabbing': isDragging }"
                >
                    <template x-for="card in visibleCards" :key="card.key">
                        <figure class="carousel-3d__card" :style="cardStyle(card.delta)">
                            <div class="carousel-3d__stars">
                                <template x-for="star in 5" :key="star">
                                    <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M10 1l2.472 6.214L19 7.326l-5 4.06L15.472 18 10 14.77 4.528 18 6 11.386l-5-4.06 6.528-.112z" />
                                    </svg>
                                </template>
                            </div>
                            <div class="space-y-3">
                                <p class="carousel-3d__name" x-text="card.slide.name"></p>
                                <p class="carousel-3d__message" x-text="card.slide.message"></p>
                            </div>
                        </figure>
                    </template>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
    <script>
        function carousel3D() {
            return {
                slides: [
                    {
                        name: 'Gabriel Mota',
                        message: 'Clínica muito linda, aconchegante e confortável, fui muito bem recebido pela secretária Carol e a Dra. Bruna muito simpática e atenciosa! Recomendo o Instituto Locatelli.'
                    },
                    {
                        name: 'Sabrina Keller',
                        message: 'Fui muito bem atendida desde o primeiro contato. Profissionais atenciosos, ambiente acolhedor e um cuidado excepcional durante toda a consulta.'
                    },
                    {
                        name: 'Tatyany Motta',
                        message: 'Ótimo atendimento, preço justo com a qualidade dos materiais e do serviço oferecido. Esclareceram todas as minhas dúvidas, me passaram confiança e me deram todo suporte.'
                    },
                    {
                        name: 'Lucio Bispo',
                        message: 'Excelente serviços, fiquei supersatisfeito, servic de alto nível, onde vc pode ver o cuidado profissional. Nota "10"!!!'
                    },
                    {
                        name: 'Ana Laura',
                        message: 'Amei!! Lugar lindo e confortável. A Dra e sua equipe é muito simpática e educada. Certamente voltarei para a limpeza a cada 6 meses.'
                    },
                    {
                        name: 'Uelida Martins',
                        message: 'Lugar aconchegante, atendimento de qualidade e profissionais de excelência!'
                    },
                    {
                        name: 'Lorrany Souza',
                        message: 'A Dra. Bruna é uma excelente dentista! Muito simpática, atenciosa e cuidadosa. Profissional de confiança e muito competente.'
                    },
                    {
                        name: 'Glauber Dias',
                        message: 'Atendimento excelente, ambiente acolhedor e profissionais capacitados!'
                    },
                    {
                        name: 'Amanda Mendes',
                        message: 'Atendimento ótimo, meu bebê de 6 meses foi atendido pela Dra. Sarah Parente.'
                    },
                    {
                        name: 'Porto Vah',
                        message: 'Doutora super atenciosa e muito querida!!! A melhor de Porto Nacional!'
                    },
                    {
                        name: 'João',
                        message: 'O melhor lugar para você cuidar da sua saúde, super indico.'
                    },
                ],
                slots: [-1, 0, 1],
                position: 0,
                spacing: 280,
                centerDepth: 260,
                startX: null,
                isDragging: false,
                dragDivider: 340,
                autoplayHandle: null,
                autoplaySpeed: 0.013,
                autoplayDelay: 24,
                init() {
                    this.startAutoplay();
                },
                get visibleCards() {
                    const base = Math.floor(this.position);
                    return this.slots.map((offset) => {
                        const index = base + offset;
                        return {
                            key: `${this.wrapIndex(index)}-${offset}`,
                            slide: this.getSlide(index),
                            delta: index - this.position,
                        };
                    });
                },
                getSlide(index) {
                    return this.slides[this.wrapIndex(index)];
                },
                wrapIndex(value) {
                    const len = this.slides.length;
                    return ((value % len) + len) % len;
                },
                step(amount) {
                    const len = this.slides.length;
                    this.position = (this.position + amount) % len;
                    if (this.position < 0) {
                        this.position += len;
                    }
                },
                cardStyle(delta) {
                    const clamped = Math.max(-1.5, Math.min(1.5, delta));
                    const translateX = clamped * this.spacing;
                    const translateZ = this.centerDepth - Math.abs(clamped) * 90;
                    const rotateY = clamped * -12;
                    const opacity = 1 - Math.min(1, Math.abs(delta) * 0.7);
                    const scale = 0.95 + (1 - Math.abs(clamped) / 1.5) * 0.05;
                    const blur = Math.abs(delta) * 0.4;
                    const zIndex = Math.round((1 - Math.abs(delta)) * 100);
                    return [
                        `transform: translate3d(${translateX}px, 0, ${translateZ}px) rotateY(${rotateY}deg) scale(${scale})`,
                        `opacity: ${opacity.toFixed(2)}`,
                        `filter: blur(${blur.toFixed(2)}px)`,
                        `z-index: ${zIndex}`,
                        `pointer-events: ${Math.abs(delta) < 0.6 ? 'auto' : 'none'}`
                    ].join('; ');
                },
                startDrag(event) {
                    this.stopAutoplay();
                    this.isDragging = true;
                    this.startX = event.clientX ?? event.touches?.[0]?.clientX ?? 0;
                },
                drag(event) {
                    if (!this.isDragging) {
                        return;
                    }
                    const clientX = event.clientX ?? event.touches?.[0]?.clientX ?? 0;
                    const delta = clientX - this.startX;
                    this.step(-delta / this.dragDivider);
                    this.startX = clientX;
                },
                stopDrag() {
                    this.isDragging = false;
                    this.restartAutoplay();
                },
                startAutoplay() {
                    if (this.autoplayHandle) {
                        return;
                    }
                    this.autoplayHandle = setInterval(() => {
                        if (this.isDragging) {
                            return;
                        }
                        this.step(this.autoplaySpeed);
                    }, this.autoplayDelay);
                },
                stopAutoplay() {
                    if (!this.autoplayHandle) {
                        return;
                    }
                    clearInterval(this.autoplayHandle);
                    this.autoplayHandle = null;
                },
                restartAutoplay() {
                    this.stopAutoplay();
                    this.startAutoplay();
                },
            };
        }
    </script>
@endpush
