    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
            <a href="index.html" class="navbar-brand mx-4 mb-3">
                <img src="/assets/img/logo-pradita.png" class="logo-pradita" alt="logo-pradita">
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="/assets/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                    <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0">Patricia Ho</h6>
                    <span>Admin</span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-file-alt me-2"></i>Proposal</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="input-proposal.html" class="dropdown-item">Input Proposal</a>
                        <a href="proposal-data.html" class="dropdown-item">Proposal Data</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user me-2"></i>Pembicara</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="input-pembicara.html" class="dropdown-item">Input Pembicara</a>
                        <a href="detail-pembicara.html" class="dropdown-item">Data Pembicara</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user-circle me-2"></i>PIC</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{ route('pic.create') }}" class="dropdown-item">Input PIC</a>
                        <a href="{{ route('pic.index') }}" class="dropdown-item">Data PIC</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-calendar-day me-2"></i>Event</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="input-event.html" class="dropdown-item">Input Event</a>
                        <a href="detail-event.html" class="dropdown-item">Data Event</a>
                        <a href="input-laporan-akhir-event.html" class="dropdown-item">Input Laporan Akhir</a>
                        <a href="detail-laporan-akhir-event.html" class="dropdown-item">Data Laporan Akhir</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-users me-2"></i>Mahasiswa</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{ route("mahasiswa.create") }}" class="dropdown-item">Input Mahasiswa</a>
                        <a href="{{ route("mahasiswa.index") }}" class="dropdown-item">Data Mahasiswa</a>
                    </div>
                </div>

                <a href="data-presensi.html" class="nav-item nav-link"><i class="fa fa-check-square me-2"></i>Data Presensi</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-camera me-2"></i>Documentation</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{ route('documentation.create') }}" class="dropdown-item">Input Documentation</a>
                        <a href="{{ route('documentation.index') }}" class="dropdown-item">Download Documentation</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-newspaper me-2"></i>Posts</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{ route('post.create') }}" class="dropdown-item">Create Article</a>
                        <a href="{{ route('post.index') }}" class="dropdown-item">Search</a>
                    </div>
                </div>

            </div>
        </nav>
    </div>
    <!-- Sidebar End -->
