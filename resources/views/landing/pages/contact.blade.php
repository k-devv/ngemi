@extends('layouts.app')

@section('title', 'Contact Us – Ngemi Germany Edition')
@section('description', 'Get in touch with Ngemi Festival Germany. WhatsApp, email, and location details.')

@section('content')
<section class="relative pt-32 sm:pt-40 pb-20 sm:pb-28 overflow-hidden min-h-screen">
    <div class="absolute inset-0 bg-ngemi-dark"></div>
    <div class="absolute inset-0 bg-grain opacity-20"></div>
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-ngemi-orange/5 rounded-full blur-[150px]"></div>

    <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12 sm:mb-16">
            <div class="reveal">
                <span class="text-ngemi-orange text-xs font-semibold tracking-[0.3em] uppercase mb-4 block">Get in Touch</span>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-ngemi-cream mb-4">
                    Contact <span class="text-ngemi-orange">Us</span>
                </h1>
                <p class="text-ngemi-cream/40 max-w-xl mx-auto text-sm sm:text-base">
                    Have questions? Want to partner with us? Reach out anytime.
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">

            <div class="reveal reveal-delay-1 p-8 bg-ngemi-dark-light/80 backdrop-blur-sm rounded-2xl border border-ngemi-orange/10 hover:border-ngemi-orange/20 transition-all">
                <div class="w-14 h-14 rounded-2xl bg-green-500/10 flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-green-500" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                </div>
                <h3 class="text-ngemi-cream font-bold text-lg mb-2">WhatsApp</h3>
                <p class="text-ngemi-cream/40 text-sm mb-5">Quick response. Message us anytime.</p>
                <div class="space-y-2">
                    <a href="https://wa.me/4917673940358" target="_blank" class="block text-ngemi-orange hover:text-ngemi-orange-light transition-colors text-sm font-medium">+49 176 7394 0358</a>
                    <a href="https://wa.me/491781188522" target="_blank" class="block text-ngemi-orange hover:text-ngemi-orange-light transition-colors text-sm font-medium">+49 178 1188 522</a>
                    <a href="https://wa.me/491602034261" target="_blank" class="block text-ngemi-orange hover:text-ngemi-orange-light transition-colors text-sm font-medium">+49 160 2034 261</a>
                </div>
            </div>

            <div class="reveal reveal-delay-2 p-8 bg-ngemi-dark-light/80 backdrop-blur-sm rounded-2xl border border-ngemi-orange/10 hover:border-ngemi-orange/20 transition-all">
                <div class="w-14 h-14 rounded-2xl bg-ngemi-orange/10 flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-ngemi-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <h3 class="text-ngemi-cream font-bold text-lg mb-2">Email</h3>
                <p class="text-ngemi-cream/40 text-sm mb-5">For partnerships, press, and general enquiries.</p>
                <a href="mailto:info@ngemifestivalgermany.com" class="text-ngemi-orange hover:text-ngemi-orange-light transition-colors text-sm font-medium">info@ngemifestivalgermany.com</a>
            </div>

            <div class="reveal reveal-delay-3 p-8 bg-ngemi-dark-light/80 backdrop-blur-sm rounded-2xl border border-ngemi-orange/10 hover:border-ngemi-orange/20 transition-all">
                <div class="w-14 h-14 rounded-2xl bg-ngemi-orange/10 flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-ngemi-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <h3 class="text-ngemi-cream font-bold text-lg mb-2">Event</h3>
                <p class="text-ngemi-cream/40 text-sm mb-5">September 5, 2026. Berlin, Germany.</p>
                <span class="text-ngemi-orange text-sm font-medium">Venue TBA</span>
            </div>

            <div class="reveal reveal-delay-4 p-8 bg-ngemi-dark-light/80 backdrop-blur-sm rounded-2xl border border-ngemi-orange/10 hover:border-ngemi-orange/20 transition-all">
                <div class="w-14 h-14 rounded-2xl bg-ngemi-orange/10 flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-ngemi-orange" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                </div>
                <h3 class="text-ngemi-cream font-bold text-lg mb-2">Follow Us</h3>
                <p class="text-ngemi-cream/40 text-sm mb-5">Stay updated on announcements and lineup drops.</p>
                <div class="flex items-center gap-3">
                    <a href="https://www.instagram.com/ngemi_festival_germany" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-xl bg-ngemi-orange/10 flex items-center justify-center text-ngemi-orange hover:bg-ngemi-orange/20 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                    <a href="https://www.tiktok.com/@ngemifestivalgermany2" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-xl bg-ngemi-orange/10 flex items-center justify-center text-ngemi-orange hover:bg-ngemi-orange/20 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1v-3.5a6.37 6.37 0 00-.79-.05A6.34 6.34 0 003.15 15.2a6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.34-6.34V8.72a8.16 8.16 0 004.76 1.52v-3.4a4.85 4.85 0 01-1-.15z"/></svg>
                    </a>
                    <a href="https://www.facebook.com/share/19DJP7SYzu/" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-xl bg-ngemi-orange/10 flex items-center justify-center text-ngemi-orange hover:bg-ngemi-orange/20 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>
@endsection
