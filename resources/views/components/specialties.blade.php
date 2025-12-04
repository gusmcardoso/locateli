@php
    $services = [
        [
            'title' => 'Implantodontia guiada',
            'description' => 'Planejamento digital com cirurgia guiada para repor dentes com total previsibilidade.',
            'image' => asset('images/consulta1.jpg'),
        ],
        [
            'title' => 'Ortodontia estética',
            'description' => 'Alinhadores transparentes e aparelhos discretos para acompanhar sua rotina.',
            'image' => asset('images/consulta2.jpg'),
        ],
        [
            'title' => 'Odontopediatria acolhedora',
            'description' => 'Ambiente lúdico e protocolos que respeitam cada fase da infância.',
            'image' => asset('images/consulta3.jpg'),
        ],
        [
            'title' => 'Estética do sorriso',
            'description' => 'Lentes, facetas e clareamento supervisionado para um acabamento natural.',
            'image' => asset('images/consulta4.jpg'),
        ],
        [
            'title' => 'Endodontia microscópica',
            'description' => 'Tratamentos de canal com microscopia para preservar mais estrutura dental.',
            'image' => asset('images/consulta5.jpg'),
        ],
        [
            'title' => 'Periodontia integrada',
            'description' => 'Cuidados completos para gengivas saudáveis e hálito equilibrado.',
            'image' => asset('images/consulta6.jpg'),
        ],
        [
            'title' => 'Reabilitação total',
            'description' => 'Planejamento interdisciplinar para devolver função e estética com previsibilidade.',
            'image' => asset('images/consulta7.jpg'),
        ],
        [
            'title' => 'Odontologia preventiva',
            'description' => 'Protocolos de manutenção que mantêm gengivas e dentes saudáveis o ano todo.',
            'image' => asset('images/consulta8.jpg'),
        ],
        [
            'title' => 'Harmonização orofacial',
            'description' => 'Cuidados minimamente invasivos para equilibrar traços e destacar o sorriso.',
            'image' => asset('images/consulta9.jpg'),
        ],
    ];
@endphp

@once
    @push('head')
        <style>
            .specialties-3d {
                perspective: 1600px;
                overflow: hidden;
                padding: clamp(2.25rem, 6vw, 4.75rem) 0;
            }

            .specialties-3d__stage {
                position: relative;
                width: 100%;
                max-width: 1080px;
                margin: 0 auto;
                height: clamp(360px, 36vw, 460px);
                transform-style: preserve-3d;
                display: flex;
                align-items: center;
                justify-content: center;
                pointer-events: none;
                touch-action: pan-y;
            }

            .specialties-3d__card {
                position: absolute;
                inset: 0;
                margin: auto;
                width: clamp(240px, 26vw, 320px);
                height: clamp(280px, 32vw, 380px);
                border-radius: 2.6rem;
                overflow: hidden;
                transform-style: preserve-3d;
                box-shadow: 0 25px 60px rgba(28, 23, 20, 0.22);
                border: 1px solid rgba(158, 142, 122, 0.2);
                background: #fff;
                transition: opacity 0.4s ease, visibility 0.4s ease;
                backface-visibility: hidden;
            }

            .specialties-3d__card img {
                position: absolute;
                inset: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
                filter: brightness(1.08) saturate(1.05);
            }

            .specialties-3d__scrim {
                position: absolute;
                inset: 0;
                background: linear-gradient(180deg, rgba(8, 6, 5, 0) 0%, rgba(8, 6, 5, 0.25) 45%, rgba(8, 6, 5, 0.65) 75%, rgba(8, 6, 5, 0.85) 100%);
                backdrop-filter: blur(1.5px);
            }

            .specialties-3d__overlay {
                position: absolute;
                inset: 0;
                background: linear-gradient(180deg, rgba(13, 10, 8, 0.0) 0%, rgba(13, 10, 8, 0.6) 100%);
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
                gap: 0.35rem;
                padding: 1.2rem 1.7rem 2.6rem;
                color: #fff;
            }

            .specialties-3d__title {
                font-size: clamp(0.95rem, 1.7vw, 1.25rem);
                font-weight: 600;
                margin-bottom: 0.35rem;
                line-height: 1.25;
            }

            .specialties-3d__text {
                font-size: 0.85rem;
                line-height: 1.45;
                color: rgba(255, 255, 255, 0.85);
            }

            @media (max-width: 768px) {
                .specialties-3d {
                    perspective: 1100px;
                    padding: clamp(2.9rem, 10vw, 4.8rem) 0;
                }

                .specialties-3d__stage {
                    height: clamp(350px, 82vw, 400px);
                }

                .specialties-3d__card {
                    width: min(240px, 78vw);
                    height: clamp(310px, 78vw, 360px);
                    border-radius: 3rem;
                }
            }

            @media (max-width: 480px) {
                .specialties-3d {
                    perspective: 900px;
                    padding: clamp(3.3rem, 12vw, 5.3rem) 0;
                }

                .specialties-3d__stage {
                    height: clamp(340px, 94vw, 390px);
                }

                .specialties-3d__card {
                    width: min(220px, 74vw);
                    height: clamp(300px, 82vw, 340px);
                    border-radius: 3.2rem;
                }
            }
        </style>
    @endpush
@endonce

<section
    id="servicos"
    class="bg-white py-16"
    x-data='specialtiesCarousel(@json($services))'
    x-init="init()"
>
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center space-y-4">
            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#9e8e7a]">Especialidades</p>
            <h2 class="text-3xl font-bold text-clinic-ink">Saiba como podemos te ajudar!</h2>
            <p class="max-w-3xl mx-auto text-clinic-ink/80">
                Protocolos integrados que unem diagnóstico digital, planejamento interdisciplinar e acompanhamento humanizado.
            </p>
        </div>
        <div class="mt-12">
            <div class="specialties-3d" x-on:pointerdown.prevent="startDrag($event)" x-on:pointermove.prevent="drag($event)" x-on:pointerup="stopDrag()" x-on:pointerleave="stopDrag()" x-on:pointercancel="stopDrag()">
                <div class="specialties-3d__stage" :class="{ 'cursor-grabbing': isDragging }">
                    <template x-for="card in visibleCards" :key="card.key">
                        <figure class="specialties-3d__card" :style="cardStyle(card.delta)">
                            <img :src="card.slide.image" :alt="card.slide.title">
                            <div class="specialties-3d__scrim"></div>
                            <div class="specialties-3d__overlay">
                                <p class="text-xs uppercase tracking-[0.3em] text-[#f5d9bd]">Especialidade</p>
                                <h3 class="specialties-3d__title" x-text="card.slide.title"></h3>
                                <p class="specialties-3d__text" x-text="card.slide.description"></p>
                            </div>
                        </figure>
                    </template>
                </div>
            </div>
        </div>
    </div>
</section>

@once
    @push('scripts')
        <script>
            function specialtiesCarousel(slides) {
                return {
                    slides,
                    slots: [-1, 0, 1],
                    position: 0,
                    spacing: 320,
                    centerDepth: 300,
                    startX: null,
                    isDragging: false,
                    dragDivider: 360,
                    autoplayHandle: null,
                    autoplaySpeed: 0.013,
                    autoplayDelay: 24,
                    prefersReducedMotion: window.matchMedia('(prefers-reduced-motion: reduce)').matches,
                    resizeHandler: null,
                    init() {
                        this.updateMetrics();
                        this.resizeHandler = () => this.updateMetrics();
                        window.addEventListener('resize', this.resizeHandler);
                        this.$el.addEventListener('alpine:destroy', () => {
                            if (this.resizeHandler) {
                                window.removeEventListener('resize', this.resizeHandler);
                            }
                            this.stopAutoplay();
                        });
                        if (this.prefersReducedMotion) {
                            return;
                        }
                        this.startAutoplay();
                    },
                    updateMetrics() {
                        const width = window.innerWidth || document.documentElement.clientWidth;
                        if (width <= 480) {
                            this.spacing = 170;
                            this.centerDepth = 190;
                            this.dragDivider = 200;
                        } else if (width <= 768) {
                            this.spacing = 240;
                            this.centerDepth = 240;
                            this.dragDivider = 260;
                        } else {
                            this.spacing = 320;
                            this.centerDepth = 300;
                            this.dragDivider = 360;
                        }
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
                        const translateZ = this.centerDepth - Math.abs(clamped) * 110;
                        const rotateY = clamped * -12;
                        const prominence = Math.max(0, 1 - Math.abs(clamped)); // destaque suave para o card central
                        const opacity = 0.65 + prominence * 0.35;
                        const scale = 0.9 + prominence * 0.18;
                        const blur = Math.abs(delta) * 0.35;
                        const zIndex = Math.round((1 - Math.abs(delta)) * 120);
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
                        if (!this.isDragging) {
                            return;
                        }
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
                        if (this.prefersReducedMotion) {
                            return;
                        }
                        this.stopAutoplay();
                        this.startAutoplay();
                    }
                };
            }
        </script>
    @endpush
@endonce
