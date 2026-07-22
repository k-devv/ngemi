<section id="gallery" class="relative py-20 sm:py-28 overflow-hidden">
    <div class="absolute inset-0 bg-ngemi-dark"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-10 sm:mb-14">
            <span class="text-ngemi-orange text-xs font-semibold tracking-[0.3em] uppercase mb-4 block">Past Events</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-ngemi-cream mb-4">
                The <span class="text-ngemi-orange">Vibe</span> in Motion
            </h2>
            <p class="text-ngemi-cream/40 max-w-xl mx-auto text-sm sm:text-base">
                Moments from previous editions. This is what awaits you.
            </p>
        </div>

        <div class="flex justify-center gap-2 mb-10 sm:mb-14 flex-wrap" id="gallery-tabs">
            <button onclick="filterGallery('all')" class="gallery-tab active px-5 py-2 rounded-full text-sm font-medium transition-all duration-300" data-filter="all">All</button>
            <button onclick="filterGallery('redcarpet')" class="gallery-tab px-5 py-2 rounded-full text-sm font-medium transition-all duration-300" data-filter="redcarpet">Red Carpet</button>
            <button onclick="filterGallery('stage')" class="gallery-tab px-5 py-2 rounded-full text-sm font-medium transition-all duration-300" data-filter="stage">The Stage</button>
            <button onclick="filterGallery('culture')" class="gallery-tab px-5 py-2 rounded-full text-sm font-medium transition-all duration-300" data-filter="culture">Culture</button>
            <button onclick="filterGallery('community')" class="gallery-tab px-5 py-2 rounded-full text-sm font-medium transition-all duration-300" data-filter="community">Community</button>
        </div>

        <div class="columns-2 md:columns-3 lg:columns-4 gap-3 sm:gap-4" id="gallery-grid">

            <div class="gallery-item break-inside-avoid mb-3 sm:mb-4 rounded-xl overflow-hidden group cursor-pointer" data-category="redcarpet" onclick="openLightbox(this)">
                <div class="relative">
                    <img src="/images/redcarpet/woman-grey-jumpsuit.jpg" alt="Ngemi Red Carpet" class="w-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-3 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <span class="text-white/80 text-xs tracking-wider uppercase">Red Carpet</span>
                    </div>
                </div>
            </div>

            <div class="gallery-item break-inside-avoid mb-3 sm:mb-4 rounded-xl overflow-hidden group cursor-pointer" data-category="stage" onclick="openLightbox(this)">
                <div class="relative">
                    <img src="/images/stage/performer-hat-crowd.jpg" alt="Ngemi Stage" class="w-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-3 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <span class="text-white/80 text-xs tracking-wider uppercase">The Stage</span>
                    </div>
                </div>
            </div>

            <div class="gallery-item break-inside-avoid mb-3 sm:mb-4 rounded-xl overflow-hidden group cursor-pointer" data-category="redcarpet" onclick="openLightbox(this)">
                <div class="relative">
                    <img src="/images/redcarpet/woman-blue-dress.jpg" alt="Ngemi Red Carpet" class="w-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-3 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <span class="text-white/80 text-xs tracking-wider uppercase">Red Carpet</span>
                    </div>
                </div>
            </div>

            <div class="gallery-item break-inside-avoid mb-3 sm:mb-4 rounded-xl overflow-hidden group cursor-pointer" data-category="culture" onclick="openLightbox(this)">
                <div class="relative">
                    <img src="/images/culture/traditional-dancers.jpg" alt="Ngemi Culture" class="w-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-3 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <span class="text-white/80 text-xs tracking-wider uppercase">Culture</span>
                    </div>
                </div>
            </div>

            <div class="gallery-item break-inside-avoid mb-3 sm:mb-4 rounded-xl overflow-hidden group cursor-pointer" data-category="stage" onclick="openLightbox(this)">
                <div class="relative">
                    <img src="/images/stage/djs-red-led.jpg" alt="Ngemi DJs" class="w-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-3 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <span class="text-white/80 text-xs tracking-wider uppercase">The Stage</span>
                    </div>
                </div>
            </div>

            <div class="gallery-item break-inside-avoid mb-3 sm:mb-4 rounded-xl overflow-hidden group cursor-pointer" data-category="redcarpet" onclick="openLightbox(this)">
                <div class="relative">
                    <img src="/images/redcarpet/four-women-african-print.jpg" alt="Ngemi Red Carpet" class="w-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-3 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <span class="text-white/80 text-xs tracking-wider uppercase">Red Carpet</span>
                    </div>
                </div>
            </div>

            <div class="gallery-item break-inside-avoid mb-3 sm:mb-4 rounded-xl overflow-hidden group cursor-pointer" data-category="community" onclick="openLightbox(this)">
                <div class="relative">
                    <img src="/images/community/family-three.jpg" alt="Ngemi Community" class="w-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-3 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <span class="text-white/80 text-xs tracking-wider uppercase">Community</span>
                    </div>
                </div>
            </div>

            <div class="gallery-item break-inside-avoid mb-3 sm:mb-4 rounded-xl overflow-hidden group cursor-pointer" data-category="redcarpet" onclick="openLightbox(this)">
                <div class="relative">
                    <img src="/images/redcarpet/woman-red-dress.jpg" alt="Ngemi Red Carpet" class="w-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-3 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <span class="text-white/80 text-xs tracking-wider uppercase">Red Carpet</span>
                    </div>
                </div>
            </div>

            <div class="gallery-item break-inside-avoid mb-3 sm:mb-4 rounded-xl overflow-hidden group cursor-pointer" data-category="stage" onclick="openLightbox(this)">
                <div class="relative">
                    <img src="/images/stage/crowd-from-stage.jpg" alt="Ngemi Crowd" class="w-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-3 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <span class="text-white/80 text-xs tracking-wider uppercase">The Stage</span>
                    </div>
                </div>
            </div>

            <div class="gallery-item break-inside-avoid mb-3 sm:mb-4 rounded-xl overflow-hidden group cursor-pointer" data-category="culture" onclick="openLightbox(this)">
                <div class="relative">
                    <img src="/images/culture/woman-shield-crowd.jpg" alt="Ngemi Culture" class="w-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-3 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <span class="text-white/80 text-xs tracking-wider uppercase">Culture</span>
                    </div>
                </div>
            </div>

            <div class="gallery-item break-inside-avoid mb-3 sm:mb-4 rounded-xl overflow-hidden group cursor-pointer" data-category="redcarpet" onclick="openLightbox(this)">
                <div class="relative">
                    <img src="/images/redcarpet/two-women-matching.jpg" alt="Ngemi Red Carpet" class="w-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-3 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <span class="text-white/80 text-xs tracking-wider uppercase">Red Carpet</span>
                    </div>
                </div>
            </div>

            <div class="gallery-item break-inside-avoid mb-3 sm:mb-4 rounded-xl overflow-hidden group cursor-pointer" data-category="community" onclick="openLightbox(this)">
                <div class="relative">
                    <img src="/images/community/four-women-drinks.jpg" alt="Ngemi Community" class="w-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-3 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <span class="text-white/80 text-xs tracking-wider uppercase">Community</span>
                    </div>
                </div>
            </div>

            <div class="gallery-item break-inside-avoid mb-3 sm:mb-4 rounded-xl overflow-hidden group cursor-pointer" data-category="redcarpet" onclick="openLightbox(this)">
                <div class="relative">
                    <img src="/images/redcarpet/three-women-white-boots.jpg" alt="Ngemi Red Carpet" class="w-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-3 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <span class="text-white/80 text-xs tracking-wider uppercase">Red Carpet</span>
                    </div>
                </div>
            </div>

            <div class="gallery-item break-inside-avoid mb-3 sm:mb-4 rounded-xl overflow-hidden group cursor-pointer" data-category="stage" onclick="openLightbox(this)">
                <div class="relative">
                    <img src="/images/stage/dj-booth-decks.jpg" alt="Ngemi DJ" class="w-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-3 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <span class="text-white/80 text-xs tracking-wider uppercase">The Stage</span>
                    </div>
                </div>
            </div>

            <div class="gallery-item break-inside-avoid mb-3 sm:mb-4 rounded-xl overflow-hidden group cursor-pointer" data-category="redcarpet" onclick="openLightbox(this)">
                <div class="relative">
                    <img src="/images/redcarpet/group-kenyan-flag.jpg" alt="Ngemi Red Carpet" class="w-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-3 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <span class="text-white/80 text-xs tracking-wider uppercase">Red Carpet</span>
                    </div>
                </div>
            </div>

            <div class="gallery-item break-inside-avoid mb-3 sm:mb-4 rounded-xl overflow-hidden group cursor-pointer" data-category="culture" onclick="openLightbox(this)">
                <div class="relative">
                    <img src="/images/culture/crowd-dancing.jpg" alt="Ngemi Culture" class="w-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-3 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <span class="text-white/80 text-xs tracking-wider uppercase">Culture</span>
                    </div>
                </div>
            </div>

            <div class="gallery-item break-inside-avoid mb-3 sm:mb-4 rounded-xl overflow-hidden group cursor-pointer" data-category="community" onclick="openLightbox(this)">
                <div class="relative">
                    <img src="/images/community/father-baby.jpg" alt="Ngemi Community" class="w-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-3 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <span class="text-white/80 text-xs tracking-wider uppercase">Community</span>
                    </div>
                </div>
            </div>

            <div class="gallery-item break-inside-avoid mb-3 sm:mb-4 rounded-xl overflow-hidden group cursor-pointer" data-category="stage" onclick="openLightbox(this)">
                <div class="relative">
                    <img src="/images/stage/woman-on-stage-crowd.jpg" alt="Ngemi Stage" class="w-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-3 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <span class="text-white/80 text-xs tracking-wider uppercase">The Stage</span>
                    </div>
                </div>
            </div>

            <div class="gallery-item break-inside-avoid mb-3 sm:mb-4 rounded-xl overflow-hidden group cursor-pointer" data-category="community" onclick="openLightbox(this)">
                <div class="relative">
                    <img src="/images/community/vip-table.jpg" alt="Ngemi VIP" class="w-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-3 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <span class="text-white/80 text-xs tracking-wider uppercase">Community</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div id="lightbox" class="fixed inset-0 z-[100] bg-black/95 backdrop-blur-xl hidden items-center justify-center opacity-0 transition-opacity duration-300" onclick="closeLightbox(event)">
    <button onclick="closeLightbox(event)" class="absolute top-6 right-6 w-10 h-10 flex items-center justify-center text-white/60 hover:text-white transition-colors z-10">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
    </button>
    <button onclick="prevImage(event)" class="absolute left-4 sm:left-8 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center text-white/50 hover:text-ngemi-orange transition-colors z-10">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
    </button>
    <button onclick="nextImage(event)" class="absolute right-4 sm:right-8 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center text-white/50 hover:text-ngemi-orange transition-colors z-10">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
    </button>
    <img id="lightbox-img" src="" alt="" class="max-w-[90vw] max-h-[85vh] object-contain rounded-lg transition-transform duration-300" />
</div>

<script>
function filterGallery(category) {
    document.querySelectorAll('.gallery-tab').forEach(function(tab) {
        tab.classList.remove('active');
        if (tab.dataset.filter === category) tab.classList.add('active');
    });
    document.querySelectorAll('.gallery-item').forEach(function(item) {
        if (category === 'all' || item.dataset.category === category) {
            item.style.display = '';
            item.style.opacity = '0';
            item.style.transform = 'translateY(10px)';
            setTimeout(function() {
                item.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                item.style.opacity = '1';
                item.style.transform = 'translateY(0)';
            }, 50);
        } else {
            item.style.opacity = '0';
            item.style.transform = 'translateY(10px)';
            setTimeout(function() { item.style.display = 'none'; }, 400);
        }
    });
}

var currentLightboxImages = [];
var currentLightboxIndex = 0;

function openLightbox(el) {
    var grid = document.getElementById('gallery-grid');
    currentLightboxImages = [];
    currentLightboxIndex = 0;
    var items = grid.querySelectorAll('.gallery-item');
    items.forEach(function(item, i) {
        if (item.style.display !== 'none') {
            var img = item.querySelector('img');
            if (img) {
                if (item === el) currentLightboxIndex = currentLightboxImages.length;
                currentLightboxImages.push(img.src);
            }
        }
    });
    var lightbox = document.getElementById('lightbox');
    var lightboxImg = document.getElementById('lightbox-img');
    lightboxImg.src = currentLightboxImages[currentLightboxIndex];
    lightbox.classList.remove('hidden');
    lightbox.classList.add('flex');
    setTimeout(function() { lightbox.style.opacity = '1'; }, 10);
    document.body.style.overflow = 'hidden';
}

function closeLightbox(e) {
    if (e.target.id === 'lightbox' || e.target.closest('button')) {
        var lightbox = document.getElementById('lightbox');
        lightbox.style.opacity = '0';
        setTimeout(function() {
            lightbox.classList.add('hidden');
            lightbox.classList.remove('flex');
        }, 300);
        document.body.style.overflow = '';
    }
}

function nextImage(e) {
    e.stopPropagation();
    currentLightboxIndex = (currentLightboxIndex + 1) % currentLightboxImages.length;
    document.getElementById('lightbox-img').src = currentLightboxImages[currentLightboxIndex];
}

function prevImage(e) {
    e.stopPropagation();
    currentLightboxIndex = (currentLightboxIndex - 1 + currentLightboxImages.length) % currentLightboxImages.length;
    document.getElementById('lightbox-img').src = currentLightboxImages[currentLightboxIndex];
}

document.addEventListener('keydown', function(e) {
    var lightbox = document.getElementById('lightbox');
    if (lightbox.classList.contains('hidden')) return;
    if (e.key === 'Escape') closeLightbox({target: lightbox});
    if (e.key === 'ArrowRight') nextImage(e);
    if (e.key === 'ArrowLeft') prevImage(e);
});
</script>

<style>
.gallery-tab {
    background: rgba(255,255,255,0.05);
    color: rgba(255,255,255,0.5);
    border: 1px solid transparent;
}
.gallery-tab:hover {
    background: rgba(255,255,255,0.1);
    color: rgba(255,255,255,0.8);
}
.gallery-tab.active {
    background: var(--color-ngemi-orange, #E8740C);
    color: #1a1a1a;
    border-color: var(--color-ngemi-orange, #E8740C);
}
</style>
