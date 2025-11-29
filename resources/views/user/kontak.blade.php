@extends('user.component.master')
@section('judul', 'Kontak')
@section('konten')

    <!-- Hero Section -->
    <section class="gradient-bg min-h-[50vh] pt-24 pb-16 flex items-center relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-10">
            <div class="absolute top-20 left-10 w-20 h-20 bg-white rounded-full"></div>
            <div class="absolute bottom-32 right-20 w-32 h-32 bg-white rounded-full"></div>
        </div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-black text-white mb-6">
                Hubungi <span class="text-accent">Kami</span>
            </h1>
            <p class="text-xl text-white/90 max-w-2xl mx-auto">
                Tim support siap membantu Anda 24/7
            </p>
        </div>
    </section>

    <!-- Contact Methods Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-black text-dark mb-3">
                    Cara <span class="text-primary">Menghubungi</span>
                </h2>
                <p class="text-lg text-gray-600">Pilih channel yang paling nyaman untuk Anda</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <!-- WhatsApp -->
                <div class="group bg-white p-8 rounded-3xl border-2 border-gray-100 hover:border-success hover:shadow-2xl transition-all duration-300 text-center">
                    <div class="w-20 h-20 bg-success/10 rounded-2xl flex items-center justify-center text-success text-4xl mx-auto mb-6 group-hover:scale-110 transition-transform">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <h3 class="text-2xl font-black text-dark mb-4">WhatsApp</h3>
                    <p class="text-gray-600 mb-6">Respon cepat & instan</p>
                    <a href="https://wa.me/6282236234227" target="_blank" 
                        class="inline-block bg-success text-white px-6 py-3 rounded-full font-bold hover:bg-green-600 transition-all duration-300 hover:-translate-y-1 shadow-lg">
                        <i class="fab fa-whatsapp mr-2"></i>0822-3623-4227
                    </a>
                </div>

                <!-- Email -->
                <div class="group bg-white p-8 rounded-3xl border-2 border-gray-100 hover:border-primary hover:shadow-2xl transition-all duration-300 text-center">
                    <div class="w-20 h-20 bg-primary/10 rounded-2xl flex items-center justify-center text-primary text-4xl mx-auto mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3 class="text-2xl font-black text-dark mb-4">Email</h3>
                    <p class="text-gray-600 mb-6">Pertanyaan detail</p>
                    <a href="mailto:fikri.haikal17062004@gmail.com" 
                        class="inline-block bg-primary text-white px-6 py-3 rounded-full font-bold hover:bg-primary-dark transition-all duration-300 hover:-translate-y-1 shadow-lg">
                        <i class="fas fa-envelope mr-2"></i>Kirim Email
                    </a>
                </div>

                <!-- Instagram -->
                <div class="group bg-white p-8 rounded-3xl border-2 border-gray-100 hover:border-pink-500 hover:shadow-2xl transition-all duration-300 text-center">
                    <div class="w-20 h-20 bg-gradient-to-r from-purple-500 to-pink-500 opacity-10 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center">
                            <i class="fab fa-instagram text-white text-4xl"></i>
                        </div>
                    </div>
                    <h3 class="text-2xl font-black text-dark mb-4">Instagram</h3>
                    <p class="text-gray-600 mb-6">Update & promo</p>
                    <a href="https://www.instagram.com/fikrihaikal.17" target="_blank" 
                        class="inline-block bg-gradient-to-r from-purple-500 to-pink-500 text-white px-6 py-3 rounded-full font-bold hover:from-purple-600 hover:to-pink-600 transition-all duration-300 hover:-translate-y-1 shadow-lg">
                        <i class="fab fa-instagram mr-2"></i>@fikrihaikal.17
                    </a>
                </div>
            </div>

            <!-- Info Box -->
            <div class="mt-12 bg-gradient-to-r from-primary to-primary-light rounded-3xl p-8 text-white text-center max-w-3xl mx-auto">
                <h3 class="text-2xl font-black mb-4">Jam Operasional</h3>
                <div class="flex flex-col sm:flex-row justify-center items-center gap-6">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-clock text-2xl text-accent"></i>
                        <span class="font-semibold">Senin - Minggu: 08.00 - 22.00</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-map-marker-alt text-2xl text-accent"></i>
                        <span class="font-semibold">Jakarta, Indonesia</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-black text-dark mb-3">
                    FAQ <span class="text-primary">Umum</span>
                </h2>
                <p class="text-lg text-gray-600">Pertanyaan yang sering diajukan</p>
            </div>

            <div class="max-w-3xl mx-auto">
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden">
                    <!-- FAQ Item 1 -->
                    <div class="border-b border-gray-100 last:border-b-0">
                        <button class="faq-question w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition-all">
                            <span class="font-bold text-lg text-dark pr-4">Bagaimana cara booking?</span>
                            <i class="fas fa-chevron-down text-primary transition-transform duration-300 flex-shrink-0"></i>
                        </button>
                        <div class="faq-answer hidden px-6 pb-6">
                            <p class="text-gray-600">Pilih lapangan, tanggal, dan waktu yang diinginkan. Lakukan pembayaran dan konfirmasi akan dikirim via WhatsApp.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="border-b border-gray-100 last:border-b-0">
                        <button class="faq-question w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition-all">
                            <span class="font-bold text-lg text-dark pr-4">Bisa membatalkan booking?</span>
                            <i class="fas fa-chevron-down text-primary transition-transform duration-300 flex-shrink-0"></i>
                        </button>
                        <div class="faq-answer hidden px-6 pb-6">
                            <p class="text-gray-600">Ya, maksimal 24 jam sebelum waktu booking. Kurang dari 24 jam dikenakan biaya admin 30%.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="border-b border-gray-100 last:border-b-0">
                        <button class="faq-question w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition-all">
                            <span class="font-bold text-lg text-dark pr-4">Metode pembayaran?</span>
                            <i class="fas fa-chevron-down text-primary transition-transform duration-300 flex-shrink-0"></i>
                        </button>
                        <div class="faq-answer hidden px-6 pb-6">
                            <p class="text-gray-600">Transfer bank, e-wallet (OVO, GoPay, Dana), dan kartu kredit. Semua transaksi aman dan terenkripsi.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="border-b border-gray-100 last:border-b-0">
                        <button class="faq-question w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition-all">
                            <span class="font-bold text-lg text-dark pr-4">Ada sewa perlengkapan?</span>
                            <i class="fas fa-chevron-down text-primary transition-transform duration-300 flex-shrink-0"></i>
                        </button>
                        <div class="faq-answer hidden px-6 pb-6">
                            <p class="text-gray-600">Ya, tersedia raket, kok, dan net dengan biaya tambahan. Bisa dipesan saat booking lapangan.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="border-b border-gray-100 last:border-b-0">
                        <button class="faq-question w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition-all">
                            <span class="font-bold text-lg text-dark pr-4">Bagaimana jika hujan?</span>
                            <i class="fas fa-chevron-down text-primary transition-transform duration-300 flex-shrink-0"></i>
                        </button>
                        <div class="faq-answer hidden px-6 pb-6">
                            <p class="text-gray-600">Lapangan indoor tetap normal. Outdoor bisa reschedule gratis jika hujan deras sebelum sesi dimulai.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 gradient-bg relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full opacity-10">
            <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full translate-x-1/2 translate-y-1/2"></div>
        </div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
                Ada Pertanyaan?
            </h2>
            <p class="text-xl text-white/90 max-w-2xl mx-auto mb-8">
                Hubungi kami sekarang, tim support siap membantu
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="https://wa.me/6282236234227" target="_blank" 
                    class="inline-flex items-center justify-center gap-2 bg-white text-primary px-8 py-4 rounded-full font-black text-lg hover:bg-gray-100 transition-all duration-300 hover:-translate-y-1 shadow-xl">
                    <i class="fab fa-whatsapp text-xl"></i>
                    <span>Chat WhatsApp</span>
                </a>
                <a href="mailto:fikri.haikal17062004@gmail.com" 
                    class="inline-flex items-center justify-center gap-2 border-2 border-white text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-white/10 transition-all duration-300 hover:-translate-y-1">
                    <i class="fas fa-envelope"></i>
                    <span>Kirim Email</span>
                </a>
            </div>
        </div>
    </section>

    <script>
        // FAQ Toggle with smooth animation
        document.querySelectorAll('.faq-question').forEach(button => {
            button.addEventListener('click', function() {
                const answer = this.nextElementSibling;
                const icon = this.querySelector('i');
                const isOpen = !answer.classList.contains('hidden');

                // Close all other FAQs
                document.querySelectorAll('.faq-answer').forEach(otherAnswer => {
                    if (otherAnswer !== answer) {
                        otherAnswer.classList.add('hidden');
                    }
                });
                document.querySelectorAll('.faq-question i').forEach(otherIcon => {
                    if (otherIcon !== icon) {
                        otherIcon.classList.remove('rotate-180');
                    }
                });

                // Toggle current FAQ
                if (isOpen) {
                    answer.classList.add('hidden');
                    icon.classList.remove('rotate-180');
                } else {
                    answer.classList.remove('hidden');
                    icon.classList.add('rotate-180');
                }
            });
        });
    </script>

    <style>
        .rotate-180 {
            transform: rotate(180deg);
        }
        .faq-answer {
            transition: all 0.3s ease;
        }
    </style>

@endsection