<!-- Isi dari kontak.php akan dimasukkan di sini -->
 <section class="bg-white py-16" id="kontak">
  <div class="max-w-6xl mx-auto px-6">
    <div class="grid md:grid-cols-2 gap-12 items-start">
      
      <!-- Kolom Kiri: Informasi Dealer -->
      <div>
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Informasi Kontak</h2>
        <ul class="space-y-4 text-gray-700">
          <li><strong>📍 Alamat:</strong><br> Jl. Raya Mustikasari, RT.005/RW.018, Pengasinan, Kec. Rawalumbu, Kota Bks, Jawa Barat 17115</li>
          <li><strong>📞 Telepon:</strong><br> 0859-3299-2374</li>
          <li><strong>📧 Email:</strong><br> kayana.handal@gmail.com</li>
          <li class="mt-3">
    <strong>🔗 Sosial Media:</strong>
    <div class="flex flex-wrap items-center gap-5 mt-2">
        <a href="#" target="_blank"
           class="flex items-center gap-2 text-red-600 hover:text-blue-800 transition">
            <i class="fab fa-instagram text-xl"></i>
            Instagram
        </a>
        <a href="#" target="_blank"
           class="flex items-center gap-2 text-gray-900 hover:text-blue-800 transition">
            <i class="fab fa-tiktok text-xl"></i>
            TikTok
        </a>
        <a href="#" target="_blank"
           class="flex items-center gap-2 text-green-600 hover:text-blue-800 transition">
            <img src="gambar/tokopedia-logo.png"
            class="w-5 h-5 object-contain">
            Tokopedia
        </a>
    </div>
</li>
          </li>
        </ul>
      </div>

      <!-- Kolom Kanan: Form WhatsApp -->
      <div>
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Hubungi kami via WhatsApp</h2>
        <form onsubmit="kirimWhatsApp(); return false;" class="space-y-4">
          <div>
            <label class="block font-semibold text-gray-700 mb-1">Nama Lengkap</label>
            <input id="nama" type="text" placeholder="Masukkan nama lengkap Anda"
              class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-gray-800">
          </div>
          <div>
            <label class="block font-semibold text-gray-700 mb-1">Pesan</label>
            <textarea id="pesan" placeholder="Tulis pesan Anda"
              class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-gray-800"></textarea>
          </div>
          <button type="submit"
            class="w-full bg-blue-700 text-white font-bold py-3 rounded-md hover:bg-blue-800 transition">
            Kirim
          </button>
        </form>
      </div>

      <iframe 
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4524.120493636861!2d107.01253241115685!3d-6.2808271445927275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698da62d593bbd%3A0x9bb6f4fb40108791!2sPT%20KAYANA%20HANDAL%20ANEKA%20INDO!5e0!3m2!1sid!2sid!4v1794410233148!5m2!1sid!2sid"
width="100%" height="300">
</iframe>

    </div>
  </div>
</section>

