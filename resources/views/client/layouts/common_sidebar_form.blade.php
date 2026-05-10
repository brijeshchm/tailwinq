    <div class="pt-2">                
            @include('client.components.sidebar-enquiry')
    </div>

            {{-- Ad Tiles --}}
            <div class="pb-3 pt-2 border-t border-gray-100 mt-3 flex flex-col gap-2">
                <div class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-violet-600 to-indigo-600 p-3 cursor-pointer hover:-translate-y-0.5 transition-transform">
                    <div class="flex items-center gap-2.5">
                        <div class="w-8 h-8 flex-shrink-0 bg-white/20 rounded-xl flex items-center justify-center border border-white/30">🛏</div>
                        <div class="flex-1 min-w-0">
                            <span class="text-[9px] font-bold text-white/60 uppercase tracking-widest">Sponsored</span>
                            <p class="text-white font-bold text-xs leading-tight">Sleep Better Tonight</p>
                            <p class="text-white/70 text-[10px]">Orthopedic mattresses from ₹4,999</p>
                        </div>
                        <button class="flex-shrink-0 flex items-center gap-1 px-2.5 py-1 bg-white/20 hover:bg-white/30 border border-white/30 text-white text-[10px] font-bold rounded-lg transition-all whitespace-nowrap">View Deals ↗</button>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-emerald-500 to-teal-600 p-3 cursor-pointer hover:-translate-y-0.5 transition-transform">
                    <div class="flex items-center gap-2.5">
                        <div class="w-8 h-8 flex-shrink-0 bg-white/20 rounded-xl flex items-center justify-center border border-white/30">🛍</div>
                        <div class="flex-1 min-w-0">
                            <span class="text-[9px] font-bold text-white/60 uppercase tracking-widest">Sponsored</span>
                            <p class="text-white font-bold text-xs leading-tight">Home Decor Sale</p>
                            <p class="text-white/70 text-[10px]">Up to 60% off on premium furniture</p>
                        </div>
                        <button class="flex-shrink-0 flex items-center gap-1 px-2.5 py-1 bg-white/20 hover:bg-white/30 border border-white/30 text-white text-[10px] font-bold rounded-lg transition-all whitespace-nowrap">Shop Now ↗</button>
                    </div>
                </div>
            </div>
        
        