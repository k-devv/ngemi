<header id="site-header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500">
    <div class="absolute inset-0 bg-ngemi-dark/0 backdrop-blur-none transition-all duration-500" id="header-bg"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 sm:h-20">

            <a href="/" class="flex items-center gap-3 group">
                <img src="/images/logo/ngemilogo.jpg" alt="Ngemi" class="w-10 h-10 sm:w-11 sm:h-11 rounded-lg object-cover transition-transform group-hover:scale-105" />
                <div class="hidden sm:block">
                    <span class="text-ngemi-orange font-bold text-lg tracking-wide">NGEMI</span>
                    <span class="block text-ngemi-cream/40 text-[10px] tracking-[0.25em] uppercase">Germany Edition</span>
                </div>
            </a>

            <nav class="hidden lg:flex items-center gap-1">
                <a href="#about" class="nav-link px-4 py-2 text-ngemi-cream/60 hover:text-ngemi-orange transition-colors text-sm font-medium rounded-lg hover:bg-white/5">About</a>
                <a href="#experience" class="nav-link px-4 py-2 text-ngemi-cream/60 hover:text-ngemi-orange transition-colors text-sm font-medium rounded-lg hover:bg-white/5">Experience</a>
                <a href="#gallery" class="nav-link px-4 py-2 text-ngemi-cream/60 hover:text-ngemi-orange transition-colors text-sm font-medium rounded-lg hover:bg-white/5">Gallery</a>
                <a href="#location" class="nav-link px-4 py-2 text-ngemi-cream/60 hover:text-ngemi-orange transition-colors text-sm font-medium rounded-lg hover:bg-white/5">Location</a>
                <a href="/contact" class="nav-link px-4 py-2 text-ngemi-cream/60 hover:text-ngemi-orange transition-colors text-sm font-medium rounded-lg hover:bg-white/5">Contact</a>
            </nav>

            <div class="flex items-center gap-3">
                <a href="#" class="hidden sm:inline-flex bg-ngemi-orange hover:bg-ngemi-orange-dark text-ngemi-dark font-bold px-5 py-2.5 rounded-lg text-sm transition-all hover:shadow-lg hover:shadow-ngemi-orange/20 active:scale-95">
                    Get Tickets
                </a>

                <button id="mobile-menu-btn" class="lg:hidden w-10 h-10 flex flex-col items-center justify-center gap-1.5 group">
                    <span class="w-6 h-0.5 bg-ngemi-cream group-hover:bg-ngemi-orange transition-colors" id="bar-1"></span>
                    <span class="w-6 h-0.5 bg-ngemi-cream group-hover:bg-ngemi-orange transition-colors" id="bar-2"></span>
                    <span class="w-4 h-0.5 bg-ngemi-cream group-hover:bg-ngemi-orange transition-colors ml-auto" id="bar-3"></span>
                </button>
            </div>

        </div>
    </div>

    <div id="mobile-menu-overlay" class="lg:hidden fixed inset-0 bg-black/60 backdrop-blur-sm z-40 opacity-0 pointer-events-none transition-opacity duration-300"></div>

    <div id="mobile-menu" class="lg:hidden fixed top-0 left-0 h-full w-72 bg-ngemi-dark/98 backdrop-blur-xl border-r border-ngemi-orange/10 z-50 transform -translate-x-full opacity-0 pointer-events-none transition-all duration-300 overflow-y-auto">
        <div class="flex items-center justify-between px-6 py-5 border-b border-ngemi-orange/10">
            <a href="/" class="flex items-center gap-2">
                <img src="/images/logo/ngemilogo.jpg" alt="Ngemi" class="w-7 h-7 rounded-md object-cover" />
                <span class="text-ngemi-orange font-bold text-sm tracking-wide">NGEMI</span>
            </a>
            <button id="mobile-menu-close" class="w-9 h-9 flex items-center justify-center text-ngemi-cream/60 hover:text-ngemi-orange transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        <div class="px-4 py-6 space-y-1">
            <a href="#about" class="mobile-nav-link block px-4 py-3 text-ngemi-cream/60 hover:text-ngemi-orange hover:bg-ngemi-orange/5 rounded-lg text-base font-medium transition-all mobile-menu-link">About</a>
            <a href="#experience" class="mobile-nav-link block px-4 py-3 text-ngemi-cream/60 hover:text-ngemi-orange hover:bg-ngemi-orange/5 rounded-lg text-base font-medium transition-all mobile-menu-link">Experience</a>
            <a href="#gallery" class="mobile-nav-link block px-4 py-3 text-ngemi-cream/60 hover:text-ngemi-orange hover:bg-ngemi-orange/5 rounded-lg text-base font-medium transition-all mobile-menu-link">Gallery</a>
            <a href="#location" class="mobile-nav-link block px-4 py-3 text-ngemi-cream/60 hover:text-ngemi-orange hover:bg-ngemi-orange/5 rounded-lg text-base font-medium transition-all mobile-menu-link">Location</a>
            <a href="/contact" class="mobile-nav-link block px-4 py-3 text-ngemi-cream/60 hover:text-ngemi-orange hover:bg-ngemi-orange/5 rounded-lg text-base font-medium transition-all mobile-menu-link">Contact</a>
            <div class="pt-4 border-t border-ngemi-orange/10 mt-4">
                <a href="#" class="block w-full text-center bg-ngemi-orange hover:bg-ngemi-orange-dark text-ngemi-dark font-bold px-5 py-3 rounded-lg text-sm transition-all mobile-menu-link">Get Tickets</a>
            </div>
        </div>
    </div>
</header>
