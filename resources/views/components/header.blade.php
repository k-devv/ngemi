<header id="site-header" class="fixed top-0 left-0 right-0 z-50">
    <div class="absolute inset-0 bg-black/60 backdrop-blur-xl border-b border-white/5 transition-all duration-500" id="header-bg"></div>

    <nav class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-[70px] sm:h-[80px]">

            <a href="/" class="relative z-10 flex-shrink-0">
                <img src="/images/logo/ngemi_logo_transparent (1).svg" alt="Ngemi" class="h-[90px] sm:h-[100px] w-auto" />
            </a>

            <div class="hidden lg:flex items-center gap-1 absolute left-1/2 -translate-x-1/2">
                <a href="#experience" class="nav-link px-4 py-2 text-white/60 hover:text-ngemi-orange text-sm font-medium rounded-lg hover:bg-white/5 transition-all">Experience</a>
                <a href="#gallery" class="nav-link px-4 py-2 text-white/60 hover:text-ngemi-orange text-sm font-medium rounded-lg hover:bg-white/5 transition-all">Gallery</a>
                <a href="#about" class="nav-link px-4 py-2 text-white/60 hover:text-ngemi-orange text-sm font-medium rounded-lg hover:bg-white/5 transition-all">About</a>
                <a href="#team" class="nav-link px-4 py-2 text-white/60 hover:text-ngemi-orange text-sm font-medium rounded-lg hover:bg-white/5 transition-all">Team</a>
                <a href="#location" class="nav-link px-4 py-2 text-white/60 hover:text-ngemi-orange text-sm font-medium rounded-lg hover:bg-white/5 transition-all">Location</a>
                <a href="/contact" class="nav-link px-4 py-2 text-white/60 hover:text-ngemi-orange text-sm font-medium rounded-lg hover:bg-white/5 transition-all">Contact</a>
            </div>

            <div class="flex items-center gap-3">
                <a href="#" class="hidden sm:inline-flex bg-ngemi-orange hover:bg-ngemi-orange-dark text-ngemi-dark font-bold px-6 py-2.5 rounded-lg text-sm transition-all hover:shadow-lg hover:shadow-ngemi-orange/20 active:scale-95">
                    Get Tickets
                </a>
                <button id="mobile-menu-btn" class="lg:hidden relative z-10 w-10 h-10 flex flex-col items-center justify-center gap-1.5">
                    <span class="w-6 h-[2px] bg-white rounded-full transition-all duration-300" id="bar-1"></span>
                    <span class="w-6 h-[2px] bg-white rounded-full transition-all duration-300" id="bar-2"></span>
                    <span class="w-4 h-[2px] bg-white rounded-full transition-all duration-300 ml-auto" id="bar-3"></span>
                </button>
            </div>

        </div>
    </nav>

    <div id="mobile-menu-overlay" class="lg:hidden fixed inset-0 bg-black/70 backdrop-blur-sm z-40 opacity-0 pointer-events-none transition-opacity duration-300"></div>

    <div id="mobile-menu" class="lg:hidden fixed top-0 left-0 h-full w-80 bg-black/95 backdrop-blur-2xl border-r border-white/5 z-50 transform -translate-x-full opacity-0 pointer-events-none transition-all duration-300 overflow-y-auto">
        <div class="flex items-center justify-between px-6 py-5 border-b border-white/5">
            <a href="/" class="flex items-center gap-2">
                <img src="/images/logo/ngemi_logo_transparent (1).svg" alt="Ngemi" class="h-[70px] w-auto" />
            </a>
            <button id="mobile-menu-close" class="w-9 h-9 flex items-center justify-center text-white/50 hover:text-ngemi-orange transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
        <div class="px-4 py-6 space-y-1">
            <a href="#experience" class="mobile-nav-link block px-4 py-3 text-white/60 hover:text-ngemi-orange hover:bg-ngemi-orange/5 rounded-lg text-base font-medium transition-all mobile-menu-link">Experience</a>
            <a href="#gallery" class="mobile-nav-link block px-4 py-3 text-white/60 hover:text-ngemi-orange hover:bg-ngemi-orange/5 rounded-lg text-base font-medium transition-all mobile-menu-link">Gallery</a>
            <a href="#about" class="mobile-nav-link block px-4 py-3 text-white/60 hover:text-ngemi-orange hover:bg-ngemi-orange/5 rounded-lg text-base font-medium transition-all mobile-menu-link">About</a>
            <a href="#team" class="mobile-nav-link block px-4 py-3 text-white/60 hover:text-ngemi-orange hover:bg-ngemi-orange/5 rounded-lg text-base font-medium transition-all mobile-menu-link">Team</a>
            <a href="#location" class="mobile-nav-link block px-4 py-3 text-white/60 hover:text-ngemi-orange hover:bg-ngemi-orange/5 rounded-lg text-base font-medium transition-all mobile-menu-link">Location</a>
            <a href="/contact" class="mobile-nav-link block px-4 py-3 text-white/60 hover:text-ngemi-orange hover:bg-ngemi-orange/5 rounded-lg text-base font-medium transition-all mobile-menu-link">Contact</a>
            <div class="pt-4 border-t border-white/5 mt-4">
                <a href="#" class="block w-full text-center bg-ngemi-orange hover:bg-ngemi-orange-dark text-ngemi-dark font-bold px-5 py-3 rounded-lg text-sm transition-all mobile-menu-link">Get Tickets</a>
            </div>
        </div>
    </div>
</header>
