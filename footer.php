<footer class="bg-gray-800 text-gray-300 py-6 mt-12">
  <div class="max-w-7xl mx-auto px-6 flex justify-center items-center text-center w-full">
    <p>© 2026 PT. Kayana Handal Aneka Indo. All rights reserved.</p>
</div>
</footer>
<script>
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
  
  function toggleKontak() {
    const form = document.getElementById('formKontak');
    const button = document.getElementById('toggleButton');
    if (form.classList.contains('hidden')) {
      form.classList.remove('hidden');
      button.classList.add('hidden');
    }
  }

  
  function kirimWhatsApp() {
    const nama = document.getElementById("nama").value;
    const pesan = document.getElementById("pesan").value;
    const noWa = "6289602892822"; // ganti dengan nomor WA tujuan (format internasional)

    const url = `https://wa.me/${noWa}?text=Halo, saya *${nama}* %0A${encodeURIComponent(pesan)}`;
    window.open(url, "_blank");
  }
</script>

</script>
</body>
</html>
