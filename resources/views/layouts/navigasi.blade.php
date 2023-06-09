<div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="nav-link text-light font-weight-bold {{ $key == 'home' ? 'active bg-dark' : 'text-dark' }}" href="/home">
        <i class="bi bi-house-door-fill"></i> Home</a>
    <a class="nav-link text-light font-weight-bold {{ $key == 'profile' ? 'active bg-dark' : 'text-dark' }}"
        href="/profile">
        <i class="bi bi-person-circle"></i> Profile</a>
    <a class="nav-link text-light font-weight-bold {{ $key == 'mahasiswa' ? 'active bg-dark' : 'text-dark' }}"
        href="/mahasiswa">
        <i class="bi bi-person-check-fill"></i> Mahasiswa</a>
    <a class="nav-link text-light font-weight-bold {{ $key == 'contact' ? 'active bg-dark' : 'text-dark' }}"
        href="/contact">
        <i class="bi bi-person-lines-fill"></i> Contact</a>

    <a class="nav-link text-light font-weight-bold {{ $key == 'artikel' ? 'active bg-dark' : 'text-dark' }}"
        href="/artikel">
        <i class="bi bi-file-earmark-ppt-fill"></i> Artikel</a>

    <a class="nav-link text-light font-weight-bold {{ $key == 'task' ? 'active bg-dark' : 'text-dark' }}"
        href="/task">

        <i class="bi bi-file-earmark-ppt-fill"></i> Task</a>
</div>
