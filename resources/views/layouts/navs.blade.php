<style>
    .nav-pills .nav-link {
        color: black; /* Warna teks sebelum di klik (tidak aktif) */
    }

    .nav-pills .nav-link.active {
        background-color: rgb(73, 73, 73);
        color: white; /* Warna teks saat aktif */
    }

    .nav-pills .nav-link:hover {
        color: rgb(133, 64, 0); /* Warna teks saat di hover */
    }
</style>
<div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="nav-link mb-2  {{ $key == 'home' ? 'active' : '' }}" id="v-pills-home-tab" href="/home">Home</a>
    <a class="nav-link mb-2  {{ $key == 'coffee' ? 'active' : '' }}" id="v-pills-profile-tab" href="/coffee">Coffee</a>
    <a class="nav-link mb-2  {{ $key == 'about' ? 'active' : '' }}" id="v-pills-about-tab" href="/about">About</a>
    <a class="nav-link mb-2  {{ $key == 'faq' ? 'active' : '' }}" id="v-pills-faq-tab" href="/faq">FAQ</a>
</div>
