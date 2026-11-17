<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaki Irsyada Putra - Web Portfolio</title>

    @vite('resources/sass/app.scss')
</head>
<body class="portfolio-page" data-bs-spy="scroll" data-bs-target="#mainNavbar" data-bs-offset="100">

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNavbar">
        <div class="container py-2">
            <a class="navbar-brand d-flex align-items-center" href="#hero">
                <i class="bi bi-code-slash me-2 fs-3 text-primary"></i>
                <span class="fw-bold tracking-wide">ZAKI.DEV</span>
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                    <li class="nav-item me-lg-3"><a class="nav-link active" href="#hero">Beranda</a></li>
                    <li class="nav-item me-lg-3"><a class="nav-link" href="#about">Tentang Saya</a></li>
                    <li class="nav-item me-lg-3"><a class="nav-link" href="#skills">Keahlian</a></li>
                    <li class="nav-item me-lg-3"><a class="nav-link" href="#projects">Proyek</a></li>
                    <li class="nav-item me-lg-3"><a class="nav-link" href="#contact">Kontak</a></li>
                    <li class="nav-item me-lg-2 mt-2 mt-lg-0">
                        <a href="{{ url('/routing') }}" class="btn btn-outline-secondary btn-sm px-3 py-2">
                            <i class="bi bi-arrow-left me-1"></i>Daftar Routing
                        </a>
                    </li>
                    <li class="nav-item mt-2 mt-lg-0">
                        <a href="#contact" class="btn btn-primary-custom btn-sm px-3 py-2">Hubungi Saya</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="hero">
        <div class="container py-5">
            <div class="row align-items-center min-vh-75">
                <div class="col-lg-7 order-2 order-lg-1">
                    <div class="badge-custom mb-3">
                        <i class="bi bi-mortarboard-fill me-2"></i>S1 Sistem Informasi &middot; Telkom University Surabaya
                    </div>
                    <h1 class="display-4 fw-bold text-dark mb-3">
                        Halo, Saya <span class="text-primary">Zaki Irsyada Putra</span>
                    </h1>
                    <p class="lead text-secondary mb-4">
                        Mahasiswa Sistem Informasi yang antusias dalam <strong>Pengembangan Aplikasi Web</strong>, perancangan sistem informasi, serta implementasi framework modern seperti <strong>Bootstrap</strong> dan <strong>Laravel</strong>.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#projects" class="btn btn-primary-custom">
                            <i class="bi bi-briefcase me-2"></i>Lihat Portofolio
                        </a>
                        <a href="https://github.com/irsyadazaki77-beep" target="_blank" class="btn btn-outline-custom">
                            <i class="bi bi-github me-2"></i>Kunjungi GitHub
                        </a>
                    </div>

                    <div class="row mt-5 pt-3 border-top g-4">
                        <div class="col-4">
                            <h3 class="fw-bold text-dark mb-0">SI-08-03</h3>
                            <small class="text-muted">Kelas Perkuliahan</small>
                        </div>
                        <div class="col-4">
                            <h3 class="fw-bold text-dark mb-0">108052500069</h3>
                            <small class="text-muted">Nomor Induk Mahasiswa</small>
                        </div>
                        <div class="col-4">
                            <h3 class="fw-bold text-dark mb-0">100%</h3>
                            <small class="text-muted">Semangat Belajar</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 order-1 order-lg-2 text-center mb-5 mb-lg-0">
                    <div class="position-relative d-inline-block">
                        <div class="card card-hover p-4 bg-white shadow-lg border-0 rounded-4">
                            <div class="bg-primary bg-opacity-10 rounded-4 p-5 text-center">
                                <i class="bi bi-person-workspace display-1 text-primary"></i>
                            </div>
                            <div class="mt-4 text-start">
                                <h5 class="fw-bold mb-1">Zaki Irsyada Putra</h5>
                                <p class="text-muted small mb-3">Web Developer &amp; System Analyst Enthusiast</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <span class="badge bg-primary-subtle text-primary border border-primary-subtle">HTML5 / CSS3</span>
                                    <span class="badge bg-success-subtle text-success border border-success-subtle">Bootstrap 5</span>
                                    <span class="badge bg-danger-subtle text-danger border border-danger-subtle">Laravel 13</span>
                                    <span class="badge bg-warning-subtle text-warning border border-warning-subtle">MySQL</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5" id="about">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="pe-lg-4">
                        <span class="text-primary fw-bold text-uppercase small tracking-wide">Tentang Saya</span>
                        <h2 class="section-title mt-2">Membangun Solusi Digital dengan Fondasi Web Modern</h2>
                        <p class="text-secondary">
                            Sebagai mahasiswa Sistem Informasi di Telkom University Surabaya, saya memiliki minat mendalam dalam memadukan analisis proses bisnis dengan perancangan arsitektur teknologi web yang scalable.
                        </p>
                        <p class="text-secondary">
                            Melalui mata kuliah Pengembangan Aplikasi Web (PAW), saya mengasah keahlian mulai dari pemrograman native, pemanfaatan framework CSS (Bootstrap) untuk desain responsif mobile-first, hingga arsitektur backend MVC menggunakan PHP &amp; framework Laravel.
                        </p>

                        <div class="row g-3 mt-3">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success fs-4 me-3"></i>
                                    <div>
                                        <h6 class="mb-0 fw-bold">Desain Responsif</h6>
                                        <small class="text-muted">Mobile-first layout</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success fs-4 me-3"></i>
                                    <div>
                                        <h6 class="mb-0 fw-bold">Arsitektur MVC</h6>
                                        <small class="text-muted">Kode rapi &amp; terstruktur</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card card-hover border-0 shadow-sm p-4 rounded-4 bg-light">
                        <h5 class="fw-bold mb-4"><i class="bi bi-info-circle me-2 text-primary"></i>Informasi Akademik</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex justify-content-between py-2 border-bottom">
                                <span class="text-muted">Nama Lengkap</span>
                                <span class="fw-semibold text-dark">Zaki Irsyada Putra</span>
                            </li>
                            <li class="d-flex justify-content-between py-2 border-bottom">
                                <span class="text-muted">NIM</span>
                                <span class="fw-semibold text-dark">108052500069</span>
                            </li>
                            <li class="d-flex justify-content-between py-2 border-bottom">
                                <span class="text-muted">Program Studi</span>
                                <span class="fw-semibold text-dark">S1 Sistem Informasi</span>
                            </li>
                            <li class="d-flex justify-content-between py-2 border-bottom">
                                <span class="text-muted">Universitas</span>
                                <span class="fw-semibold text-dark">Telkom University Surabaya</span>
                            </li>
                            <li class="d-flex justify-content-between py-2">
                                <span class="text-muted">Status</span>
                                <span class="badge bg-success">Aktif</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-5 bg-light" id="skills">
        <div class="container py-4">
            <div class="text-center max-w-xl mx-auto mb-5">
                <span class="text-primary fw-bold text-uppercase small">Keahlian &amp; Teknologi</span>
                <h2 class="section-title">Tech Stack yang Dikuasai</h2>
                <p class="section-subtitle">Kombinasi teknologi yang digunakan dalam pengembangan aplikasi web modern.</p>
            </div>

            <div class="row g-4">
                <!-- Skill 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover h-100 p-4 text-center">
                        <div class="skill-icon-box mx-auto">
                            <i class="bi bi-bootstrap-fill text-primary"></i>
                        </div>
                        <h5 class="fw-bold">Bootstrap 5</h5>
                        <p class="text-muted small">Grid system, responsive utility classes, flexbox, components, dan offcanvas.</p>
                        <div class="progress" role="progressbar" style="height: 6px;">
                            <div class="progress-bar bg-primary" style="width: 90%"></div>
                        </div>
                    </div>
                </div>

                <!-- Skill 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover h-100 p-4 text-center">
                        <div class="skill-icon-box mx-auto" style="background: #eff6ff; color: #2563eb;">
                            <i class="bi bi-filetype-html text-danger"></i>
                        </div>
                        <h5 class="fw-bold">HTML5 &amp; CSS3</h5>
                        <p class="text-muted small">Semantic HTML, modern CSS styling, media queries, dan UI layouting.</p>
                        <div class="progress" role="progressbar" style="height: 6px;">
                            <div class="progress-bar bg-danger" style="width: 95%"></div>
                        </div>
                    </div>
                </div>

                <!-- Skill 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover h-100 p-4 text-center">
                        <div class="skill-icon-box mx-auto" style="background: #fdf2f8; color: #db2777;">
                            <i class="bi bi-filetype-php text-primary"></i>
                        </div>
                        <h5 class="fw-bold">PHP &amp; Laravel</h5>
                        <p class="text-muted small">PHP Native, OOP, arsitektur MVC, Composer dependencies, dan Artisan CLI.</p>
                        <div class="progress" role="progressbar" style="height: 6px;">
                            <div class="progress-bar bg-info" style="width: 80%"></div>
                        </div>
                    </div>
                </div>

                <!-- Skill 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover h-100 p-4 text-center">
                        <div class="skill-icon-box mx-auto" style="background: #ecfdf5; color: #059669;">
                            <i class="bi bi-database-fill text-success"></i>
                        </div>
                        <h5 class="fw-bold">MySQL Database</h5>
                        <p class="text-muted small">Relational database design, DDL/DML query, integrasi XAMPP dan PHPMyAdmin.</p>
                        <div class="progress" role="progressbar" style="height: 6px;">
                            <div class="progress-bar bg-success" style="width: 85%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="py-5" id="projects">
        <div class="container py-4">
            <div class="text-center max-w-xl mx-auto mb-5">
                <span class="text-primary fw-bold text-uppercase small">Portofolio</span>
                <h2 class="section-title">Proyek Praktikum &amp; Aplikasi</h2>
                <p class="section-subtitle">Hasil implementasi praktis konsep pengembangan aplikasi berbasis web.</p>
            </div>

            <div class="row g-4">
                <!-- Project 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover h-100">
                        <div class="bg-primary text-white p-4 text-center rounded-top">
                            <i class="bi bi-window-fullscreen display-3"></i>
                        </div>
                        <div class="card-body p-4 d-flex flex-column">
                            <div class="mb-2">
                                <span class="badge bg-primary project-badge me-1">Bootstrap 5.3</span>
                                <span class="badge bg-secondary project-badge">CSS Custom</span>
                            </div>
                            <h5 class="card-title fw-bold">Cloning Website Resmi Bootstrap</h5>
                            <p class="card-text text-muted flex-grow-1">
                                Rekonstruksi halaman resmi Bootstrap v5.3 meliputi Navbar Offcanvas responsif, Hero Section, Icons Grid, Themes Showcase, dan Multi-column Footer.
                            </p>
                            <a href="{{ url('/routing') }}" class="btn btn-outline-primary btn-sm mt-3">
                                <i class="bi bi-diagram-3 me-1"></i>Lihat Daftar Routing
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover h-100">
                        <div class="bg-dark text-white p-4 text-center rounded-top">
                            <i class="bi bi-person-badge display-3 text-info"></i>
                        </div>
                        <div class="card-body p-4 d-flex flex-column">
                            <div class="mb-2">
                                <span class="badge bg-info text-dark project-badge me-1">HTML5 / SCSS</span>
                                <span class="badge bg-success project-badge">Vite Bundling</span>
                            </div>
                            <h5 class="card-title fw-bold">Personal Web Portfolio</h5>
                            <p class="card-text text-muted flex-grow-1">
                                Web profil interaktif mahasiswa berbasis Bootstrap yang diintegrasikan ke dalam Laravel 13 Blade View dan Vite asset bundling.
                            </p>
                            <a href="#hero" class="btn btn-outline-primary btn-sm mt-3">
                                <i class="bi bi-arrow-up-circle me-1"></i>Halaman Ini
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-hover h-100">
                        <div class="bg-danger text-white p-4 text-center rounded-top">
                            <i class="bi bi-diagram-3-fill display-3"></i>
                        </div>
                        <div class="card-body p-4 d-flex flex-column">
                            <div class="mb-2">
                                <span class="badge bg-danger project-badge me-1">Laravel 13</span>
                                <span class="badge bg-dark project-badge">Artisan CLI</span>
                            </div>
                            <h5 class="card-title fw-bold">Routing &amp; Bundling Asset Laravel</h5>
                            <p class="card-text text-muted flex-grow-1">
                                Implementasi 13 teknik Laravel Routing (Basic, View, Controller, Redirect, Parameter, Regex, Named, Priority, Fallback, dan Group) serta bundling Vite.
                            </p>
                            <a href="{{ url('/routing') }}" class="btn btn-outline-danger btn-sm mt-3">
                                <i class="bi bi-box-arrow-up-right me-1"></i>Buka Praktikum Modul 09
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-5 bg-light" id="contact">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card card-hover border-0 shadow p-4 p-md-5 rounded-4">
                        <div class="text-center mb-4">
                            <span class="text-primary fw-bold text-uppercase small">Hubungi Saya</span>
                            <h2 class="fw-bold">Mari Terhubung!</h2>
                            <p class="text-muted">Punya pertanyaan seputar proyek atau ingin berdiskusi? Kirimkan pesan di bawah ini.</p>
                        </div>

                        <form onsubmit="event.preventDefault(); alert('Terima kasih! Pesan Anda telah terkirim.');">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Nama Anda" required>
                                        <label for="name"><i class="bi bi-person me-2"></i>Nama Lengkap</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="nama@email.com" required>
                                        <label for="email"><i class="bi bi-envelope me-2"></i>Email Anda</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subjek" required>
                                        <label for="subject"><i class="bi bi-chat-left-text me-2"></i>Subjek Pesan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Tuliskan pesan..." id="message" style="height: 120px" required></textarea>
                                        <label for="message"><i class="bi bi-pencil me-2"></i>Pesan</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-primary-custom px-5 py-3">
                                        <i class="bi bi-send-fill me-2"></i>Kirim Pesan Sekarang
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 text-white">
        <div class="container text-center">
            <div class="d-flex justify-content-center gap-3 mb-4">
                <a href="https://github.com/irsyadazaki77-beep" target="_blank" class="fs-4 text-white-50 hover-text-white"><i class="bi bi-github"></i></a>
                <a href="https://linkedin.com" target="_blank" class="fs-4 text-white-50 hover-text-white"><i class="bi bi-linkedin"></i></a>
                <a href="https://instagram.com" target="_blank" class="fs-4 text-white-50 hover-text-white"><i class="bi bi-instagram"></i></a>
                <a href="mailto:irsyadazaki77@gmail.com" class="fs-4 text-white-50 hover-text-white"><i class="bi bi-envelope-fill"></i></a>
            </div>
            <p class="mb-1 text-white-50">
                &copy; 2026 <strong>Zaki Irsyada Putra</strong> (108052500069) &middot; S1 Sistem Informasi
            </p>
            <small class="text-secondary">
                Dibuat untuk Praktikum Pengembangan Aplikasi Web (Modul 09 - Laravel 13 &amp; Vite) &middot; Telkom University Surabaya
            </small>
        </div>
    </footer>

    @vite('resources/js/app.js')
</body>
</html>
