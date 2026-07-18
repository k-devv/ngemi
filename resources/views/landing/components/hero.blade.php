<section class="relative min-h-screen flex items-center justify-center overflow-hidden">

    <div class="absolute inset-0">
        <img
            src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=1920&q=80"
            alt="Festival crowd"
            class="w-full h-full object-cover object-center"
            loading="eager"
        />
    </div>

    <div class="absolute inset-0 bg-gradient-to-b from-ngemi-dark/70 via-ngemi-dark/50 to-ngemi-dark"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-ngemi-dark/60 via-transparent to-ngemi-dark/60"></div>

    <div class="absolute inset-0 opacity-[0.03]">
        <svg class="w-full h-full" viewBox="0 0 600 600" preserveAspectRatio="xMidYMid slice">
            <defs>
                <pattern id="tribal-hero" x="0" y="0" width="60" height="60" patternUnits="userSpaceOnUse" patternTransform="rotate(45)">
                    <path d="M30 0 L60 30 L30 60 L0 30Z" fill="none" stroke="#f5a623" stroke-width="0.6"/>
                    <circle cx="30" cy="30" r="6" fill="none" stroke="#f5a623" stroke-width="0.4"/>
                    <circle cx="30" cy="30" r="2" fill="#f5a623" opacity="0.3"/>
                    <line x1="30" y1="0" x2="30" y2="12" stroke="#f5a623" stroke-width="0.3"/>
                    <line x1="30" y1="48" x2="30" y2="60" stroke="#f5a623" stroke-width="0.3"/>
                    <line x1="0" y1="30" x2="12" y2="30" stroke="#f5a623" stroke-width="0.3"/>
                    <line x1="48" y1="30" x2="60" y2="30" stroke="#f5a623" stroke-width="0.3"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#tribal-hero)"/>
        </svg>
    </div>

    <div class="absolute top-0 left-0 w-full h-1 flex">
        <div class="flex-1 bg-ngemi-black"></div>
        <div class="flex-1 bg-ngemi-german-red"></div>
        <div class="flex-1 bg-ngemi-german-gold"></div>
    </div>

    <div class="relative z-10 text-center px-4 sm:px-6 max-w-6xl mx-auto pt-24 pb-16">

        <div class="mb-8 animate-slide-up">
            <span class="inline-flex items-center gap-2 px-5 py-2 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full text-ngemi-cream/80 text-xs sm:text-sm font-medium tracking-widest uppercase">
                <span class="w-2 h-2 bg-ngemi-orange rounded-full animate-pulse"></span>
                September 5, 2026
            </span>
        </div>

        <h1 class="font-black text-[4rem] sm:text-[7rem] lg:text-[10rem] xl:text-[12rem] leading-[0.85] text-ngemi-orange mb-4 tracking-tight animate-slide-up" style="animation-delay: 0.1s; font-family: 'Instrument Sans', sans-serif; letter-spacing: -0.03em;">
            NGEMI
        </h1>

        <p class="text-ngemi-cream/40 text-sm sm:text-lg lg:text-xl tracking-[0.4em] uppercase mb-4 animate-slide-up" style="animation-delay: 0.2s;">
            Germany Edition
        </p>

        <div class="flex items-center justify-center gap-4 mb-10 animate-slide-up" style="animation-delay: 0.3s;">
            <div class="h-px w-12 sm:w-20 bg-gradient-to-r from-transparent to-ngemi-orange/40"></div>
            <span class="text-ngemi-orange/70 text-xs sm:text-sm tracking-[0.3em] font-medium">A HOME COMING</span>
            <div class="h-px w-12 sm:w-20 bg-gradient-to-l from-transparent to-ngemi-orange/40"></div>
        </div>

        <div class="mb-10 animate-slide-up" style="animation-delay: 0.4s;">
            <p class="text-ngemi-cream/70 text-base sm:text-lg mb-1">Potsdam, Berlin</p>
            <p class="text-ngemi-cream/40 text-sm">Germany</p>
        </div>

        <div id="countdown" class="flex items-center justify-center gap-2 sm:gap-4 mb-12 animate-slide-up" style="animation-delay: 0.5s;">
            <div class="relative">
                <div class="w-16 sm:w-24 h-16 sm:h-24 bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl flex flex-col items-center justify-center">
                    <div id="days" class="text-2xl sm:text-4xl font-black text-ngemi-orange">00</div>
                    <div class="text-ngemi-cream/40 text-[9px] sm:text-xs uppercase tracking-wider font-medium">Days</div>
                </div>
            </div>
            <span class="text-ngemi-orange/40 text-xl sm:text-3xl font-light -mt-4">:</span>
            <div class="relative">
                <div class="w-16 sm:w-24 h-16 sm:h-24 bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl flex flex-col items-center justify-center">
                    <div id="hours" class="text-2xl sm:text-4xl font-black text-ngemi-orange">00</div>
                    <div class="text-ngemi-cream/40 text-[9px] sm:text-xs uppercase tracking-wider font-medium">Hours</div>
                </div>
            </div>
            <span class="text-ngemi-orange/40 text-xl sm:text-3xl font-light -mt-4">:</span>
            <div class="relative">
                <div class="w-16 sm:w-24 h-16 sm:h-24 bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl flex flex-col items-center justify-center">
                    <div id="minutes" class="text-2xl sm:text-4xl font-black text-ngemi-orange">00</div>
                    <div class="text-ngemi-cream/40 text-[9px] sm:text-xs uppercase tracking-wider font-medium">Minutes</div>
                </div>
            </div>
            <span class="text-ngemi-orange/40 text-xl sm:text-3xl font-light -mt-4">:</span>
            <div class="relative">
                <div class="w-16 sm:w-24 h-16 sm:h-24 bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl flex flex-col items-center justify-center">
                    <div id="seconds" class="text-2xl sm:text-4xl font-black text-ngemi-orange">00</div>
                    <div class="text-ngemi-cream/40 text-[9px] sm:text-xs uppercase tracking-wider font-medium">Seconds</div>
                </div>
            </div>
        </div>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 animate-slide-up" style="animation-delay: 0.6s;">
            <a href="#tickets" class="w-full sm:w-auto group relative bg-ngemi-orange hover:bg-ngemi-orange-dark text-ngemi-dark font-bold px-8 py-4 rounded-xl text-base transition-all hover:shadow-2xl hover:shadow-ngemi-orange/25 hover:-translate-y-0.5 active:scale-95 overflow-hidden">
                <span class="relative z-10 flex items-center justify-center gap-2">
                    Get Your Tickets
                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </span>
            </a>
            <a href="#experience" class="w-full sm:w-auto border border-ngemi-cream/20 text-ngemi-cream hover:bg-ngemi-cream/5 hover:border-ngemi-cream/30 font-medium px-8 py-4 rounded-xl text-base transition-all backdrop-blur-sm">
                Explore Experience
            </a>
        </div>

    </div>

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <div class="w-6 h-10 border-2 border-ngemi-cream/20 rounded-full flex justify-center pt-2">
            <div class="w-1 h-2.5 bg-ngemi-orange rounded-full animate-pulse"></div>
        </div>
    </div>

</section>
