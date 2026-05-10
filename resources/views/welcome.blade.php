<x-layouts::public>

    {{-- ══════════════════════════════════════════════════════════
     NAVBAR
══════════════════════════════════════════════════════════ --}}
    <nav x-data="{
        open: false,
        scrolled: false,
        init() {
            window.addEventListener('scroll', () => { this.scrolled = window.scrollY > 24; });
        }
    }"
        :class="scrolled ? 'shadow-lg bg-white/60 backdrop-blur-xl' : 'bg-white/50 backdrop-blur-md'"
        class="fixed z-50 top-0 left-0 right-0 transition-all duration-400 border-b border-transparent"
        :style="scrolled ? 'border-color:rgba(226,232,240,.6)' : ''">
        <div class="max-w-[1680px] mx-auto px-6 lg:px-10 h-[68px] flex items-center justify-between">

            {{-- Logo --}}
            <a href="/" class="flex items-center gap-2.5 group">
                <div class="flex items-center justify-center group-hover:scale-105 transition-all duration-300">
                    <img src="{{ asset('images/sct-logo.svg') }}" alt="SCT" class="h-12" />
                </div>
            </a>

            {{-- Desktop links --}}
            <div class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-500">
                <a href="#services" class="nav-link hover:text-slate-900 transition-colors duration-200">Services</a>
                <a href="#our-work" class="nav-link hover:text-slate-900 transition-colors duration-200">Notices</a>
                <a href="#why-us" class="nav-link hover:text-slate-900 transition-colors duration-200">Offers</a>
                <a href="#resources"
                    class="nav-link hover:text-slate-900 transition-colors duration-200">Integrations</a>
            </div>

            {{-- CTA --}}
            <a href="#contact"
                class="hidden md:inline-flex items-center gap-2 rounded-full bg-blue-600 hover:bg-blue-700 active:bg-blue-800 text-white text-sm font-semibold px-5 py-2.5 shadow-md hover:shadow-lg hover:shadow-blue-200 transition-all duration-250 group">
                Get in Touch
                <svg class="group-hover:translate-x-0.5 transition-transform duration-200" width="13" height="13"
                    viewBox="0 0 24 24" fill="none">
                    <path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </a>

            {{-- Mobile hamburger --}}
            <button @click="open = !open" aria-label="Toggle menu"
                class="md:hidden w-10 h-10 flex items-center justify-center rounded-xl hover:bg-slate-100 transition-colors">
                <svg class="w-5 h-5 text-slate-700" fill="none" viewBox="0 0 24 24">
                    <path x-show="!open" d="M3 6h18M3 12h18M3 18h18" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" />
                    <path x-show="open" x-cloak d="M6 6l12 12M18 6l-12 12" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" />
                </svg>
            </button>
        </div>

        {{-- Mobile menu --}}
        <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-250"
            x-transition:enter-start="opacity-0 -translate-y-3" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-180" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-3"
            class="md:hidden bg-white border-t border-slate-100 px-6 pb-6 pt-4 space-y-1 shadow-xl">
            <a href="#services" @click="open=false"
                class="block rounded-xl px-4 py-3 text-sm font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-700 transition-colors">Services</a>
            <a href="#our-work" @click="open=false"
                class="block rounded-xl px-4 py-3 text-sm font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-700 transition-colors">Our
                Work</a>
            <a href="#why-us" @click="open=false"
                class="block rounded-xl px-4 py-3 text-sm font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-700 transition-colors">Why
                Us</a>
            <a href="#resources" @click="open=false"
                class="block rounded-xl px-4 py-3 text-sm font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-700 transition-colors">Resources</a>
            <div class="pt-3">
                <a href="#contact" @click="open=false"
                    class="block text-center rounded-2xl bg-blue-600 text-white font-semibold text-sm px-5 py-3 shadow-md">
                    Get in Touch →
                </a>
            </div>
        </div>
    </nav>

    {{-- ══════════════════════════════════════════════════════════
     HERO
══════════════════════════════════════════════════════════ --}}
    <section class="mesh w-full min-h-screen flex items-center pt-[68px] overflow-hidden">
        <div
            class="max-w-[1680px] mx-auto w-full px-6 lg:px-10 flex flex-col lg:flex-row gap-12 items-center justify-between py-20 lg:py-0">

            {{-- Left text --}}
            <div class="grow max-w-2xl lg:pt-12">
                <div
                    class="inline-flex items-center gap-2 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-3xl px-6 py-2 text-sm font-semibold mb-8 shadow-inner">
                    <span class="relative flex h-3 w-3">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                    </span>
                    Nepal’s Trusted Payment Network Since 2001
                </div>

                <h1
                    class="font-semibold text-slate-900 tracking-tighter text-5xl md:text-6xl xl:text-7xl leading-[1.05] mb-6">
                    Connecting Nepal’s<br>
                    <span class="font-serif tracking-wide italic text-blue-600">Financial Future</span>
                </h1>

                <p class="text-slate-600 text-xl max-w-lg mb-10">
                    Unifing banks, merchants, fintechs, and consumers through an intelligent payment network —
                    trusted and operational since 2001.
                </p>

                <div class="flex flex-wrap gap-4">
                    <div x-data="{ hover: false }" class="inline-block fade-up delay-3">
                        <a href="#contact" @mouseenter="hover = true" @mouseleave="hover = false"
                            class="relative block overflow-hidden rounded-full bg-blue-600 hover:bg-blue-700 px-8 py-5 font-bold text-white shadow-lg hover:shadow-xl transition-all duration-300 text-base">
                            <span class="block transition-all duration-300"
                                :class="hover ? '-translate-y-8 opacity-0' : 'translate-y-0 opacity-100'">
                                Book an Appointment
                            </span>
                            <span class="absolute inset-0 flex items-center justify-center transition-all duration-300"
                                :class="hover ? 'translate-y-0 opacity-100' : 'translate-y-8 opacity-0'">
                                Let's Talk →
                            </span>
                        </a>
                    </div>

                    <a href="#"
                        class="block px-8 py-5 border-2 border-slate-300 hover:text-blue-600 hover:bg-blue-50 hover:border-blue-600 font-medium rounded-full transition-all">
                        Explore Services
                    </a>
                </div>

                {{-- Trust Certifications --}}
                <div class="hero-fade hero-d5 flex flex-wrap gap-6 mt-12">

                    <div class="group flex items-center gap-4">
                        <div
                            class="w-10 h-10 flex-shrink-0 rounded-xl bg-gradient-to-br from-blue-600 to-indigo-600 flex items-center justify-center shadow-md shadow-blue-200 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                                <path d="M12 2L4 6v6c0 5.25 3.5 10.15 8 11.35C16.5 22.15 20 17.25 20 12V6L12 2z"
                                    fill="rgba(255,255,255,.2)" stroke="white" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M9 12l2 2 4-4" stroke="white" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm font-bold text-slate-800 leading-tight">PCI-DSS Certified</div>
                            <div class="text-xs text-emerald-600 font-semibold mt-0.5">Level 1 Compliance</div>
                        </div>
                    </div>

                    <div class="w-px self-stretch bg-slate-200 hidden sm:block"></div>

                    <div class="group flex items-center gap-4">
                        <div
                            class="w-10 h-10 flex-shrink-0 rounded-xl bg-gradient-to-br from-amber-500 to-orange-500 flex items-center justify-center shadow-md shadow-amber-200 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" fill="rgba(255,255,255,.2)"
                                    stroke="white" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M9 22V12h6v10" stroke="white" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm font-bold text-slate-800 leading-tight">NRB PSO Licensed</div>
                            <div class="text-xs text-emerald-600 font-semibold mt-0.5">Payment System Operator</div>
                        </div>
                    </div>

                    <div class="w-px self-stretch bg-slate-200 hidden sm:block"></div>

                    <div class="group flex items-center gap-4">
                        <div
                            class="w-10 h-10 flex-shrink-0 rounded-xl bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center shadow-md shadow-emerald-200 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <span
                                class="text-white font-black text-[10px] tracking-tight leading-none">ISO<br>27001</span>
                        </div>
                        <div>
                            <div class="text-sm font-bold text-slate-800 leading-tight">ISO 27001:2022</div>
                            <div class="text-xs text-emerald-600 font-semibold mt-0.5">Information Security</div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Right: Scrolling image columns --}}
            @php
                $heroColumns = [
                    [
                        'direction' => 'down',
                        'speed' => 0.45,
                        'offset_start' => true,
                        'mt' => '',
                        'images' => [
                            [
                                'src' => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=400&q=80',
                                'alt' => 'Payment Terminal',
                                'href' => '#',
                            ],
                            [
                                'src' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=400&q=80',
                                'alt' => 'Fintech Solutions',
                                'href' => '#',
                            ],
                            [
                                'src' => 'https://images.unsplash.com/photo-1601597111158-2fceff292cdc?w=400&q=80',
                                'alt' => 'Banking Network',
                                'href' => '#',
                            ],
                        ],
                    ],
                    [
                        'direction' => 'up',
                        'speed' => 0.45,
                        'offset_start' => false,
                        'mt' => 'mt-8',
                        'images' => [
                            [
                                'src' => 'https://images.unsplash.com/photo-1580508174046-170816f65662?w=400&q=80',
                                'alt' => 'Mobile Payments',
                                'href' => '#',
                            ],
                            [
                                'src' => 'https://images.unsplash.com/photo-1621761191319-c6fb62004040?w=400&q=80',
                                'alt' => 'QR Transactions',
                                'href' => '#',
                            ],
                            [
                                'src' => 'https://images.unsplash.com/photo-1518186285589-2f7649de83e0?w=400&q=80',
                                'alt' => 'Digital Network',
                                'href' => '#',
                            ],
                        ],
                    ],
                    [
                        'direction' => 'down',
                        'speed' => 0.3,
                        'offset_start' => true,
                        'mt' => '',
                        'images' => [
                            [
                                'src' => 'https://images.unsplash.com/photo-1512428559087-560fa5ceab42?w=400&q=80',
                                'alt' => 'Card Issuance',
                                'href' => '#',
                            ],
                            [
                                'src' => 'https://images.unsplash.com/photo-1502920917128-1aa500764cbd?w=400&q=80',
                                'alt' => 'Nepal Finance',
                                'href' => '#',
                            ],
                            [
                                'src' => 'https://images.unsplash.com/photo-1553729459-efe14ef6055d?w=400&q=80',
                                'alt' => 'ATM Infrastructure',
                                'href' => '#',
                            ],
                        ],
                    ],
                ];
            @endphp

            {{-- Cursor pill (single, shared across all images) --}}
            <div id="imgCursorPill" class="img-cursor-pill border border-blue-400 bg-blue-500/60 backdrop-blur-xs"
                aria-hidden="true">
                More
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none">
                    <path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2.6" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>

            {{-- Right: Scrolling image columns --}}
            <div class="hidden lg:grid grid-cols-3 gap-3 relative h-[88vh] max-w-md xl:max-w-lg rounded-2xl overflow-hidden shrink-0 hero-fade hero-d6"
                style="mask-image: linear-gradient(to bottom, transparent 0%, black 10%, black 90%, transparent 100%);
            -webkit-mask-image: linear-gradient(to bottom, transparent 0%, black 10%, black 90%, transparent 100%);">

                @foreach ($heroColumns as $col)
                    @php
                        $speed = $col['speed'];
                        $isDown = $col['direction'] === 'down';
                        $offsetStart = $col['offset_start'] ? 'true' : 'false';

                        $initJs = $isDown
                            ? "const el = this.\$refs.track;
           if ({$offsetStart}) this.offset = -(el.scrollHeight / 2);
           const tick = () => {
               if (!this.paused) {
                   this.offset += {$speed};
                   if (this.offset >= 0) this.offset = -(el.scrollHeight / 2);
                   el.style.transform = 'translateY(' + this.offset + 'px)';
               }
               requestAnimationFrame(tick);
           };
           requestAnimationFrame(tick);"
                            : "const el = this.\$refs.track;
           const tick = () => {
               if (!this.paused) {
                   this.offset -= {$speed};
                   if (Math.abs(this.offset) >= el.scrollHeight / 2) this.offset = 0;
                   el.style.transform = 'translateY(' + this.offset + 'px)';
               }
               requestAnimationFrame(tick);
           };
           requestAnimationFrame(tick);";
                    @endphp

                    <div x-data="{ offset: 0, paused: false, init() { {{ $initJs }} } }" @mouseenter="paused = true" @mouseleave="paused = false"
                        class="overflow-hidden opacity-85 hover:opacity-100 transition-opacity duration-300 {{ $col['mt'] }}">

                        <div x-ref="track" class="scroll-track flex flex-col gap-3">

                            @foreach ([...$col['images'], ...$col['images']] as $img)
                                <a href="{{ $img['href'] }}"
                                    class="hero-img-wrap group relative block rounded-xl overflow-hidden flex-shrink-0 aspect-[3/4] w-full"
                                    data-img-link>

                                    <img src="{{ $img['src'] }}" alt="{{ $img['alt'] }}"
                                        class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-105" />

                                    {{-- Subtle dark scrim on hover --}}
                                    <div
                                        class="absolute inset-0 rounded-xl bg-blue-950/0 group-hover:bg-blue-950/40 transition-colors duration-350 ease-out pointer-events-none">
                                    </div>

                                </a>
                            @endforeach

                        </div>
                    </div>
                @endforeach

            </div>

        </div>

        <!-- Premium Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 hidden lg:flex flex-col items-center gap-2 text-slate-400">
            <div class="text-[10px] font-mono tracking-[3px] uppercase mb-1">Scroll</div>

            <div class="relative flex flex-col items-center">
                <!-- Bouncing Chevron -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 animate-scroll-down text-blue-400/70"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-9-9m0 0L5 14" />
                </svg>

                <!-- Subtle line -->
                <div class="w-[1px] h-5 bg-gradient-to-b from-transparent via-slate-300 to-transparent mt-1"></div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════════
     SUCCESS IN NUMBERS + SERVICES
══════════════════════════════════════════════════════════ --}}
    <section class="py-28 bg-white" id="services">
        <div class="max-w-[1680px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-12 gap-16 lg:gap-20 items-start">

                {{-- LEFT: Stats --}}
                <div class="lg:col-span-5">
                    <p class="reveal text-xs font-bold uppercase tracking-[0.14em] text-slate-400 mb-2">Success in
                        Numbers</p>

                    <h2 class="reveal delay-100 font-bold text-4xl md:text-5xl xl:text-6xl leading-tight text-slate-900 mb-2"
                        style="font-family:'Outfit',sans-serif;">
                        Everything in<br>
                        <span
                            class="italic font-light text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-500"
                            style="font-family:'DM Serif Display',serif;">one network</span>
                    </h2>

                    <div
                        class="reveal delay-200 w-12 h-0.5 bg-gradient-to-r from-blue-600 to-indigo-500 rounded-full mt-7 mb-12">
                    </div>

                    <div class="space-y-10">
                        <div class="reveal reveal-left delay-200 flex items-center gap-6">
                            <div class="text-5xl md:text-6xl font-bold text-slate-900 w-48 counter-num"
                                style="font-family:'DM Serif Display',serif;" data-target="100" data-suffix="+">0
                            </div>
                            <div>
                                <div class="text-lg font-semibold text-slate-700">Partner Banks</div>
                                <div class="text-slate-400 text-sm mt-0.5">Trusted financial institutions</div>
                            </div>
                        </div>
                        <div class="reveal reveal-left delay-300 flex items-center gap-6">
                            <div class="text-5xl md:text-6xl font-bold text-slate-900 w-48 counter-num"
                                style="font-family:'DM Serif Display',serif;" data-target="24" data-suffix="M+">0
                            </div>
                            <div>
                                <div class="text-lg font-semibold text-slate-700">Active Cardholders</div>
                                <div class="text-slate-400 text-sm mt-0.5">Growing every quarter</div>
                            </div>
                        </div>
                        <div class="reveal reveal-left delay-400 flex items-center gap-6">
                            <div class="text-5xl md:text-6xl font-bold text-slate-900 w-48 counter-num"
                                style="font-family:'DM Serif Display',serif;" data-target="99.98" data-suffix="%"
                                data-decimals="2">0</div>
                            <div>
                                <div class="text-lg font-semibold text-slate-700">Network Uptime</div>
                                <div class="text-slate-400 text-sm mt-0.5">Industry-leading reliability</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- RIGHT: Services Grid --}}
                <div class="lg:col-span-7">
                    <div class="mb-12">
                        <h3 class="text-4xl font-semibold tracking-tight">Comprehensive Payment Solutions</h3>
                        <p class="text-slate-600 mt-3 text-lg">Built for scale, designed for simplicity.</p>
                    </div>

                    <div>
                        @php
                            $services = [
                                [
                                    'id' => 'smart-switch',
                                    'icon' => '↔️',
                                    'title' => 'SMART SWITCH',
                                    'desc' => 'Card Switching & Routing',
                                ],
                                [
                                    'id' => 'smartpay',
                                    'icon' => '💸',
                                    'title' => 'SMARTPAY',
                                    'desc' => 'Interbank Fund Transfer',
                                ],
                                [
                                    'id' => 'smartmms',
                                    'icon' => '🏬',
                                    'title' => 'SMARTMMS',
                                    'desc' => 'Merchant Management',
                                ],
                                [
                                    'id' => 'smartbanking',
                                    'icon' => '📱',
                                    'title' => 'SMARTBANKING',
                                    'desc' => 'Mobile & Internet Banking',
                                ],
                                [
                                    'id' => 'missed-call',
                                    'icon' => '🛎️',
                                    'title' => 'MISSED CALL',
                                    'desc' => 'Notification Services',
                                ],
                                [
                                    'id' => 'api-suite',
                                    'icon' => '🔌',
                                    'title' => 'API SUITE',
                                    'desc' => 'Developer Integration',
                                ],
                                [
                                    'id' => 'my-card',
                                    'icon' => '💳',
                                    'title' => 'MY CARD',
                                    'desc' => 'Virtual & Physical Cards',
                                ],
                                [
                                    'id' => 'sound-box',
                                    'icon' => '🔊',
                                    'title' => 'SOUND BOX',
                                    'desc' => 'Audio Confirmation',
                                ],
                                [
                                    'id' => 'myqr',
                                    'icon' => '📲',
                                    'title' => 'MYQR / SMARTQR',
                                    'desc' => 'QR Payment Solutions',
                                ],
                            ];
                        @endphp

                        {{-- Service Grid --}}
                        <div id="service-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach ($services as $index => $service)
                                <a href="#{{ $service['id'] }}"
                                    class="group bg-white border border-slate-100 hover:border-blue-200 rounded-3xl p-8 transition-all duration-500 hover:-translate-y-3 hover:shadow-2xl block"
                                    style="transition-delay: {{ $index * 40 }}ms">
                                    <div class="text-5xl mb-8 transition-transform group-hover:scale-110">
                                        {{ $service['icon'] }}
                                    </div>

                                    <div class="uppercase text-blue-600 text-xs font-bold tracking-widest">
                                        {{ $service['title'] }}
                                    </div>

                                    <div class="text-slate-700 font-medium mt-2">
                                        {{ $service['desc'] }}
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════════
     TRUSTED PARTNERS
══════════════════════════════════════════════════════════ --}}
    <section class="mesh py-24 bg-slate-50">
        <div class="max-w-[1680px] mx-auto text-center px-6 lg:px-10">

            <p class="reveal text-xs font-bold uppercase tracking-widest text-slate-400 mb-1">Trusted Partners</p>
            <h2 class="reveal delay-100 font-bold text-3xl md:text-4xl xl:text-5xl text-slate-900 leading-tight mb-2"
                style="font-family:'Outfit',sans-serif;">
                International Associations
            </h2>
            <div class="reveal delay-200 w-16 h-0.5 bg-blue-600 mx-auto rounded mb-12"></div>

            {{-- Association cards --}}
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 mb-20">

                <div
                    class="reveal partner-card group flex flex-col items-center gap-3 bg-white border border-slate-100 rounded-2xl py-7 px-4 cursor-default">
                    <div class="h-10 flex items-center justify-center">
                        <span
                            style="font-size:28px;font-weight:900;font-style:italic;letter-spacing:-1px;color:#1a1f71;">VISA</span>
                    </div>
                    <span class="text-xs font-medium text-slate-400">Visa International</span>
                </div>

                <div
                    class="reveal delay-100 partner-card group flex flex-col items-center gap-3 bg-white border border-slate-100 rounded-2xl py-7 px-4 cursor-default">
                    <div class="h-10 flex items-center justify-center">
                        <div class="relative w-12 h-8">
                            <div class="absolute left-0 top-0 w-8 h-8 rounded-full bg-red-600 opacity-90"></div>
                            <div class="absolute right-0 top-0 w-8 h-8 rounded-full bg-amber-400 opacity-90"></div>
                        </div>
                    </div>
                    <span class="text-xs font-medium text-slate-400">Mastercard</span>
                </div>

                <div
                    class="reveal delay-200 partner-card group flex flex-col items-center gap-3 bg-white border border-slate-100 rounded-2xl py-7 px-4 cursor-default">
                    <div class="h-10 flex items-center justify-center">
                        <span
                            style="font-size:13px;font-weight:700;color:#c0392b;text-align:center;line-height:1.3;">银联<br>UnionPay</span>
                    </div>
                    <span class="text-xs font-medium text-slate-400">UnionPay International</span>
                </div>

                <div
                    class="reveal delay-300 partner-card group flex flex-col items-center gap-3 bg-white border border-slate-100 rounded-2xl py-7 px-4 cursor-default">
                    <div class="h-10 flex items-center justify-center gap-1">
                        <span
                            style="background:#003087;color:#fff;width:18px;height:28px;border-radius:6px;display:inline-flex;align-items:center;justify-content:center;font-size:11px;font-weight:800;">J</span>
                        <span
                            style="background:#cc0000;color:#fff;width:18px;height:28px;border-radius:6px;display:inline-flex;align-items:center;justify-content:center;font-size:11px;font-weight:800;">C</span>
                        <span
                            style="background:#007b40;color:#fff;width:18px;height:28px;border-radius:6px;display:inline-flex;align-items:center;justify-content:center;font-size:11px;font-weight:800;">B</span>
                    </div>
                    <span class="text-xs font-medium text-slate-400">JCB International</span>
                </div>

                <div
                    class="reveal delay-400 partner-card group flex flex-col items-center gap-3 bg-white border border-slate-100 rounded-2xl py-7 px-4 cursor-default">
                    <div class="h-10 flex items-center justify-center">
                        <span style="font-size:22px;font-weight:900;letter-spacing:2px;color:#c0392b;">CUP</span>
                    </div>
                    <span class="text-xs font-medium text-slate-400">China UnionPay</span>
                </div>
            </div>

            <hr class="border-t border-slate-100 mb-14" />

            <p class="reveal text-sm font-bold uppercase tracking-widest text-slate-500 mb-8">Trusted by Nepal's
                Leading Financial Institutions</p>

            {{-- Marquee --}}
            <div class="relative overflow-hidden border-y border-slate-100">
                <div class="pointer-events-none absolute inset-y-0 left-0 w-24 z-10"
                    style="background:linear-gradient(to right,#f8fafc,transparent);"></div>
                <div class="pointer-events-none absolute inset-y-0 right-0 w-24 z-10"
                    style="background:linear-gradient(to left,#f8fafc,transparent);"></div>
                <div id="np-marquee" class="flex w-max">
                    @php
                        $banks = [
                            'NIC Asia Bank',
                            'Nabil Bank',
                            'Global IME Bank',
                            'Kumari Bank',
                            'Prabhu Bank',
                            'Siddhartha Bank',
                            'Laxmi Sunrise Bank',
                            'Sanima Bank',
                            'Mega Bank',
                            'Century Commercial',
                            'Nepal Bank Ltd',
                            'Rastriya Banijya',
                            'Agricultural Dev. Bank',
                            'Nepal Investment Bank',
                            'Everest Bank',
                            'Prime Commercial Bank',
                        ];
                    @endphp
                    @foreach (array_merge($banks, $banks) as $bank)
                        <div
                            class="flex items-center px-10 h-16 border-r border-slate-100 text-sm font-medium text-slate-400 hover:text-slate-800 transition-colors duration-200 whitespace-nowrap cursor-default">
                            {{ $bank }}
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>


    {{-- ══════════════════════════════════════════════════════════
     AI-FIRST / WHAT WE DO
══════════════════════════════════════════════════════════ --}}
    <section class="py-28 bg-white" id="our-work">
        <div class="max-w-[1680px] mx-auto px-6 lg:px-10">
            <div class="flex flex-col lg:flex-row gap-16 items-center">

                {{-- Text --}}
                <div class="lg:w-1/2 max-w-xl">
                    <div
                        class="reveal inline-flex items-center gap-2 bg-blue-50 border border-blue-100 text-blue-600 rounded-full px-4 py-1.5 text-xs font-bold tracking-widest uppercase mb-6">
                        The Future of Payments
                    </div>
                    <h2 class="reveal delay-100 font-bold text-3xl md:text-4xl xl:text-5xl text-slate-900 leading-tight mb-6"
                        style="font-family:'Outfit',sans-serif;">
                        Beyond connected.<br />
                        <span class="italic font-light text-blue-600"
                            style="font-family:'DM Serif Display',serif;">Built to power</span><br />
                        Nepal's economy.
                    </h2>
                    <p class="reveal delay-200 text-slate-500 text-base leading-relaxed mb-4">
                        SCT's intelligent payment network serves as the backbone of Nepal's financial infrastructure —
                        interoperating seamlessly across every bank, every merchant terminal, and every digital wallet
                        in the country.
                    </p>
                    <p class="reveal delay-300 text-slate-400 text-sm leading-relaxed mb-8">
                        From card issuance to real-time settlement, our platform provides financial institutions with
                        the reliable rails needed to move capital securely, instantly, and at scale.
                    </p>
                    <a href="#contact"
                        class="reveal delay-400 inline-flex items-center gap-2 rounded-full bg-blue-600 hover:bg-blue-700 text-white font-semibold text-sm px-6 py-3.5 shadow-md hover:shadow-lg hover:shadow-blue-200 transition-all duration-250 group">
                        Explore Our Platform
                        <svg class="group-hover:translate-x-1 transition-transform duration-200" width="14"
                            height="14" viewBox="0 0 24 24" fill="none">
                            <path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2.2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>

                {{-- Image --}}
                <div class="reveal-right lg:w-1/2 relative">
                    <div class="rounded-3xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=900&q=85"
                            alt="SCT payment infrastructure" class="w-full h-96 lg:h-[520px] object-cover" />
                    </div>
                    {{-- Floating badges --}}
                    <div
                        class="float-badge absolute -bottom-5 -left-5 bg-white rounded-2xl shadow-xl px-6 py-4 flex items-center gap-3 border border-slate-100">
                        <div
                            class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-600 text-lg font-bold flex-shrink-0">
                            ✓</div>
                        <div>
                            <div class="text-xs text-slate-400 font-medium">Network Uptime</div>
                            <div class="text-lg font-bold text-slate-900">99.98%</div>
                        </div>
                    </div>
                    <div
                        class="float-badge-2 absolute -top-5 -right-5 bg-blue-600 rounded-2xl shadow-xl px-6 py-4 text-white">
                        <div class="text-xs opacity-75 font-medium">Transactions / Day</div>
                        <div class="text-lg font-bold">2.4M+</div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ══════════════════════════════════════════════════════════
     WHY US
══════════════════════════════════════════════════════════ --}}
    <section class="py-28 mesh" id="why-us">
        <div class="max-w-[1680px] mx-auto flex justify-center px-6">
            <div class="flex flex-col lg:flex-row-reverse gap-16 items-center">

                {{-- Image collage --}}
                <div class="reveal-right lg:w-1/2 grid grid-cols-2 gap-3 max-w-lg w-full">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=500&q=80" alt="team"
                        class="rounded-2xl object-cover w-full h-56 col-span-2 shadow-lg hover:scale-[1.02] transition-transform duration-400" />
                    <img src="https://images.unsplash.com/photo-1580508174046-170816f65662?w=400&q=80" alt="mobile"
                        class="rounded-2xl object-cover w-full h-44 shadow-md hover:scale-[1.02] transition-transform duration-400" />
                    <img src="https://images.unsplash.com/photo-1518186285589-2f7649de83e0?w=400&q=80" alt="network"
                        class="rounded-2xl object-cover w-full h-44 shadow-md hover:scale-[1.02] transition-transform duration-400" />
                </div>

                {{-- Text --}}
                <div class="lg:w-1/2 max-w-xl">
                    <div
                        class="reveal inline-flex items-center gap-2 bg-blue-50 border border-blue-100 text-blue-600 rounded-full px-4 py-1.5 text-xs font-bold tracking-widest uppercase mb-6">
                        Your Competitive Advantage
                    </div>
                    <h2 class="reveal delay-100 font-bold text-3xl md:text-4xl xl:text-5xl text-slate-900 leading-tight mb-6"
                        style="font-family:'Outfit',sans-serif;">
                        The financial partner<br />
                        <span class="italic font-light text-blue-600"
                            style="font-family:'DM Serif Display',serif;">Nepal's banks trust</span>
                    </h2>
                    <p class="reveal delay-200 text-slate-500 text-base leading-relaxed mb-4">
                        SCT operates as the neutral, interoperable switch that keeps Nepal's financial ecosystem moving.
                        We serve as the trusted bridge between issuers, acquirers, and consumers nationwide.
                    </p>
                    <p class="reveal delay-300 text-slate-400 text-sm leading-relaxed">
                        We are the connective tissue of Nepal's payment infrastructure — enabling institutions to focus
                        entirely on their customers while we manage the complexities of interbank settlement, fraud
                        monitoring, and network reliability.
                    </p>
                </div>

            </div>
        </div>
    </section>


    {{-- ══════════════════════════════════════════════════════════
     RESOURCES / DARK SECTION
══════════════════════════════════════════════════════════ --}}
    <section class="talent-bg py-28" id="resources">
        <div class="max-w-[1680px] mx-auto px-6 lg:px-10 text-center mb-16">
            <div
                class="reveal inline-flex items-center gap-2 bg-white/10 border border-white/20 text-blue-300 rounded-full px-4 py-1.5 text-xs font-bold tracking-widest uppercase mb-6">
                Fast &amp; Reliable
            </div>
            <h2 class="reveal delay-100 font-bold text-3xl md:text-4xl xl:text-5xl text-white leading-tight max-w-3xl mx-auto"
                style="font-family:'Outfit',sans-serif;">
                World-class infrastructure.<br />
                <span class="italic font-light text-blue-400"
                    style="font-family:'DM Serif Display',serif;">Purposefully engineered</span> to keep pace with you.
            </h2>
        </div>

        <div class="max-w-[1680px] mx-auto px-6 lg:px-10 grid grid-cols-1 md:grid-cols-3 gap-5">

            <div class="reveal group relative rounded-2xl overflow-hidden card-lift cursor-pointer">
                <img src="https://images.unsplash.com/photo-1531297484001-80022131f5a1?w=700&q=80" alt="technology"
                    class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/20 to-transparent"></div>
                <div class="absolute inset-0 bg-blue-900/0 group-hover:bg-blue-900/20 transition-colors duration-300">
                </div>
                <div class="absolute bottom-5 left-5 right-5">
                    <div
                        class="inline-block bg-white/10 border border-white/20 text-white text-xs font-semibold px-3 py-1 rounded-full mb-2">
                        Flexible</div>
                    <div class="text-white font-semibold text-lg">Scalable subscription model</div>
                </div>
            </div>

            <div class="reveal delay-100 group relative rounded-2xl overflow-hidden card-lift cursor-pointer">
                <img src="https://images.unsplash.com/photo-1621761191319-c6fb62004040?w=700&q=80" alt="team"
                    class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/20 to-transparent"></div>
                <div class="talent-card-overlay absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent">
                </div>
                <div class="absolute bottom-5 left-5 right-5">
                    <div
                        class="inline-block bg-green-500/20 border border-green-400/40 text-green-300 text-xs font-semibold px-3 py-1 rounded-full mb-2">
                        Nationwide</div>
                    <div class="text-white font-semibold text-lg">Top-tier technical expertise</div>
                    <p class="text-white/70 text-xs mt-1 leading-relaxed">Our team builds and maintains
                        mission-critical infrastructure for Nepal's entire banking sector.</p>
                </div>
            </div>

            <div class="reveal delay-200 group relative rounded-2xl overflow-hidden card-lift cursor-pointer">
                <img src="https://images.unsplash.com/photo-1553729459-efe14ef6055d?w=700&q=80" alt="smart systems"
                    class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/20 to-transparent"></div>
                <div class="absolute inset-0 bg-blue-900/0 group-hover:bg-blue-900/20 transition-colors duration-300">
                </div>
                <div class="absolute bottom-5 left-5 right-5">
                    <div
                        class="inline-block bg-blue-500/20 border border-blue-400/40 text-blue-300 text-xs font-semibold px-3 py-1 rounded-full mb-2">
                        Modern</div>
                    <div class="text-white font-semibold text-lg">Intelligent payment systems</div>
                </div>
            </div>

        </div>
    </section>


    {{-- ══════════════════════════════════════════════════════════
     ENTERPRISE FEATURE CARDS
══════════════════════════════════════════════════════════ --}}
    <section class="py-28 bg-slate-50">
        <div class="max-w-[1680px] mx-auto px-6 lg:px-10">

            <div class="text-center mb-16">
                <div
                    class="reveal inline-flex items-center gap-2 bg-blue-50 border border-blue-100 text-blue-600 rounded-full px-4 py-1.5 text-xs font-bold tracking-widest uppercase mb-6">
                    For Enterprise
                </div>
                <h2 class="reveal delay-100 font-bold text-3xl md:text-4xl xl:text-5xl text-slate-900 leading-tight max-w-2xl mx-auto"
                    style="font-family:'Outfit',sans-serif;">
                    SCT is built for institutions<br />
                    <span class="italic font-light text-blue-600" style="font-family:'DM Serif Display',serif;">that
                        refuse to compromise</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="reveal reveal-scale bg-white rounded-2xl p-8 border border-slate-100 card-lift group">
                    <div
                        class="w-12 h-12 rounded-xl bg-blue-50 group-hover:bg-blue-600 flex items-center justify-center text-2xl mb-5 transition-colors duration-300">
                        ⚡</div>
                    <div class="text-xs font-bold tracking-widest text-blue-500 uppercase mb-2">Scalable</div>
                    <h4 class="font-semibold text-slate-900 text-lg mb-3">Amplify your institution</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">Expand your transaction capacity without building
                        costly in-house infrastructure from scratch.</p>
                </div>

                <div
                    class="reveal reveal-scale delay-100 bg-white rounded-2xl p-8 border border-slate-100 card-lift group">
                    <div
                        class="w-12 h-12 rounded-xl bg-green-50 group-hover:bg-green-600 flex items-center justify-center text-2xl mb-5 transition-colors duration-300">
                        🔄</div>
                    <div class="text-xs font-bold tracking-widest text-green-600 uppercase mb-2">Flexible</div>
                    <h4 class="font-semibold text-slate-900 text-lg mb-3">Say yes to more services</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">Cards, QR, mobile wallets, ATM — we are fully
                        operational the moment your customers are ready.</p>
                </div>

                <div
                    class="reveal reveal-scale delay-200 bg-white rounded-2xl p-8 border border-slate-100 card-lift group">
                    <div
                        class="w-12 h-12 rounded-xl bg-purple-50 group-hover:bg-purple-600 flex items-center justify-center text-2xl mb-5 transition-colors duration-300">
                        ✨</div>
                    <div class="text-xs font-bold tracking-widest text-purple-600 uppercase mb-2">Responsive</div>
                    <h4 class="font-semibold text-slate-900 text-lg mb-3">Security without trade-offs</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">Real-time fraud monitoring and sub-second
                        transaction authorization — no compromises required.</p>
                </div>

                <div
                    class="reveal reveal-scale delay-300 bg-white rounded-2xl p-8 border border-slate-100 card-lift group">
                    <div
                        class="w-12 h-12 rounded-xl bg-orange-50 group-hover:bg-orange-500 flex items-center justify-center text-2xl mb-5 transition-colors duration-300">
                        🎯</div>
                    <div class="text-xs font-bold tracking-widest text-orange-500 uppercase mb-2">Seamless</div>
                    <h4 class="font-semibold text-slate-900 text-lg mb-3">One switch, total interop</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">Manage settlement, reporting, and reconciliation
                        through a single, unified operations dashboard.</p>
                </div>

            </div>
        </div>
    </section>


    {{-- ══════════════════════════════════════════════════════════
     FINAL CTA
══════════════════════════════════════════════════════════ --}}
    <section class="cta-section py-32 relative overflow-hidden" id="contact">

        {{-- Background image strip --}}
        <div class="absolute inset-0 flex opacity-10 pointer-events-none overflow-hidden">
            <img src="https://images.unsplash.com/photo-1512428559087-560fa5ceab42?w=400&q=60" alt=""
                class="h-full w-48 object-cover flex-shrink-0" />
            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=400&q=60" alt=""
                class="h-full w-48 object-cover flex-shrink-0" />
            <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=400&q=60" alt=""
                class="h-full w-48 object-cover flex-shrink-0" />
            <img src="https://images.unsplash.com/photo-1580508174046-170816f65662?w=400&q=60" alt=""
                class="h-full w-48 object-cover flex-shrink-0" />
            <img src="https://images.unsplash.com/photo-1518186285589-2f7649de83e0?w=400&q=60" alt=""
                class="h-full w-48 object-cover flex-shrink-0" />
        </div>

        <div class="relative max-w-[1680px] mx-auto px-6 lg:px-10 text-center">
            <h2 class="reveal font-bold text-4xl md:text-5xl xl:text-6xl text-white leading-tight mb-6"
                style="font-family:'Outfit',sans-serif;">
                Nepal's financial network.<br />
                <span class="italic font-light text-blue-100" style="font-family:'DM Serif Display',serif;">Your
                    competitive edge.™</span>
            </h2>
            <p class="reveal delay-100 text-blue-100 text-lg max-w-xl mx-auto mb-10 leading-relaxed">
                Scale your payment services without the overhead. SCT combines two decades of domain expertise with
                modern infrastructure to deliver measurable results at scale.
            </p>
            <div class="reveal delay-200 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#"
                    class="inline-flex items-center justify-center gap-2 rounded-full bg-white text-blue-700 font-bold text-sm px-8 py-4 shadow-xl hover:bg-blue-50 hover:shadow-2xl transition-all duration-250 group">
                    Book a Strategy Call
                    <svg class="group-hover:translate-x-0.5 transition-transform duration-200" width="14"
                        height="14" viewBox="0 0 24 24" fill="none">
                        <path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2.2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                <a href="#"
                    class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-white/30 text-white font-semibold text-sm px-8 py-4 hover:bg-white/10 hover:border-white/60 transition-all duration-250">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>


    {{-- ══════════════════════════════════════════════════════════
     FOOTER
══════════════════════════════════════════════════════════ --}}
    <footer class="footer-bg text-slate-400">
        <div class="max-w-[1680px] mx-auto px-6 lg:px-10">

            <div class="grid grid-cols-2 md:grid-cols-4 gap-10 pt-20 pb-14 border-b border-white/10">

                <div class="flex items-start">
                    <img src="{{ asset('images/sct-logo.svg') }}" alt="SCT" class="h-12" />
                </div>

                <div>
                    <h5 class="text-white text-xs font-bold uppercase tracking-widest mb-5">Services</h5>
                    <div class="space-y-3 text-sm">
                        <a href="#" class="block hover:text-white transition-colors duration-200">Card
                            Issuing</a>
                        <a href="#" class="block hover:text-white transition-colors duration-200">Merchant
                            Acquiring</a>
                        <a href="#" class="block hover:text-white transition-colors duration-200">ATM
                            Network</a>
                        <a href="#" class="block hover:text-white transition-colors duration-200">QR
                            Payments</a>
                        <a href="#" class="block hover:text-white transition-colors duration-200">Interbank
                            Settlement</a>
                    </div>
                </div>

                <div>
                    <h5 class="text-white text-xs font-bold uppercase tracking-widest mb-5">Company</h5>
                    <div class="space-y-3 text-sm">
                        <a href="#" class="block hover:text-white transition-colors duration-200">About Us</a>
                        <a href="#" class="block hover:text-white transition-colors duration-200">Careers</a>
                        <a href="#" class="block hover:text-white transition-colors duration-200">Reports</a>
                        <a href="#" class="block hover:text-white transition-colors duration-200">Gunaso-Nepal
                            Rastra Bank</a>
                        <a href="#"
                            class="block hover:text-white transition-colors duration-200">Partnerships</a>
                        <a href="#" class="block hover:text-white transition-colors duration-200">Contact</a>
                    </div>
                </div>

                <div>
                    <h5 class="text-white text-xs font-bold uppercase tracking-widest mb-5">Legal</h5>
                    <div class="space-y-3 text-sm">
                        <a href="#" class="block hover:text-white transition-colors duration-200">Privacy
                            Policy</a>
                        <a href="#" class="block hover:text-white transition-colors duration-200">Terms of
                            Service</a>
                        <a href="#" class="block hover:text-white transition-colors duration-200">Cookie
                            Policy</a>
                        <a href="#" class="block hover:text-white transition-colors duration-200">Security</a>
                    </div>
                </div>

            </div>

            <div class="flex flex-col md:flex-row items-center justify-between gap-4 py-8 text-xs text-slate-600">
                <div>© {{ date('Y') }} Smart Choice Technology Pvt. Ltd. All rights reserved.</div>
                <div class="flex gap-6">
                    <a href="#" class="hover:text-slate-300 transition-colors duration-200">LinkedIn</a>
                    <a href="#" class="hover:text-slate-300 transition-colors duration-200">Twitter</a>
                    <a href="#" class="hover:text-slate-300 transition-colors duration-200">Facebook</a>
                </div>
            </div>

        </div>
    </footer>

</x-layouts::public>
