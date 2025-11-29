<footer class="bg-dark text-white py-12 relative overflow-hidden">
    <!-- Background pattern -->
    <div class="absolute top-0 left-0 w-full h-full opacity-5">
        <div class="absolute bottom-10 right-10 text-6xl">🏸</div>
        <div class="absolute top-10 left-10 text-6xl">🏸</div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <div class="flex items-center space-x-2 mb-4">
                    <div
                        class="w-10 h-10 bg-primary rounded-full flex items-center justify-center text-white font-bold shadow-lg">
                        <i class="fas fa-feather-alt"></i>
                    </div>
                    <span class="font-black text-xl">BookingLap</span>
                </div>
                <p class="text-gray-400 mb-4">
                    Platform booking lapangan bulutangkis terbaik dengan pengalaman pengguna yang mudah dan
                    menyenangkan.
                </p>
                <div class="flex space-x-4">
                    <a href="#"
                        class="w-10 h-10 bg-dark-light rounded-full flex items-center justify-center text-gray-400 hover:text-white hover:bg-primary transition-all duration-300">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-dark-light rounded-full flex items-center justify-center text-gray-400 hover:text-white hover:bg-primary transition-all duration-300">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-dark-light rounded-full flex items-center justify-center text-gray-400 hover:text-white hover:bg-primary transition-all duration-300">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-dark-light rounded-full flex items-center justify-center text-gray-400 hover:text-white hover:bg-primary transition-all duration-300">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <div>
                <h3 class="font-black text-lg mb-4">Tautan Cepat</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('user') }}"
                            class="text-gray-400 hover:text-white transition-all duration-300 flex items-center group">
                            <i
                                class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i>
                            Beranda
                        </a></li>
                    <li><a href="{{ route('lapangan') }}"
                            class="text-gray-400 hover:text-white transition-all duration-300 flex items-center group">
                            <i
                                class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i>
                            Lapangan
                        </a></li>
                    <li><a href="{{ route('kontak') }}"
                            class="text-gray-400 hover:text-white transition-all duration-300 flex items-center group">
                            <i
                                class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i>
                            Kontak
                        </a></li>
                    <li><a href="{{ route('riwayat') }}"
                            class="text-gray-400 hover:text-white transition-all duration-300 flex items-center group">
                            <i
                                class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i>
                            Riwayat
                        </a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-black text-lg mb-4">Layanan</h3>
                <ul class="space-y-2">
                    <li><a href="#"
                            class="text-gray-400 hover:text-white transition-all duration-300 flex items-center group">
                            <i
                                class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i>
                            Booking Lapangan
                        </a></li>
                    <li><a href="#"
                            class="text-gray-400 hover:text-white transition-all duration-300 flex items-center group">
                            <i
                                class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i>
                            Turnamen
                        </a></li>
                    <li><a href="#"
                            class="text-gray-400 hover:text-white transition-all duration-300 flex items-center group">
                            <i
                                class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i>
                            Pelatihan
                        </a></li>
                    <li><a href="#"
                            class="text-gray-400 hover:text-white transition-all duration-300 flex items-center group">
                            <i
                                class="fas fa-chevron-right text-xs mr-2 group-hover:translate-x-1 transition-transform"></i>
                            Sewa Perlengkapan
                        </a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-black text-lg mb-4">Kontak</h3>
                <ul class="space-y-3">
                    <li class="flex items-start space-x-3 text-gray-400">
                        <i class="fas fa-map-marker-alt mt-1"></i>
                        <span>Jl. Olahraga No. 123, Jakarta</span>
                    </li>
                    <li class="flex items-center space-x-3 text-gray-400">
                        <i class="fas fa-phone"></i>
                        <span>+62 812 3456 7890</span>
                    </li>
                    <li class="flex items-center space-x-3 text-gray-400">
                        <i class="fas fa-envelope"></i>
                        <span>info@bookinglap.com</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
            <p>&copy; 2023 BookingLap. All rights reserved.</p>
        </div>
    </div>
</footer>