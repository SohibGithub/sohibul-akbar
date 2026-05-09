<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sohibul Akbar | Live Monitoring IoT</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <style>
        :root {
            --primary-color: #2563eb;
            --dark-color: #0f172a;
            --light-bg: #f8fafc;
            --text-muted: #64748b;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light-bg);
            color: var(--dark-color);
            padding-top: 100px;
        }

        /* Navbar & Footer Styling */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 15px 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }

        .navbar-brand {
            font-weight: 800;
            color: var(--primary-color) !important;
        }

        .nav-link {
            font-weight: 500;
            color: var(--dark-color) !important;
            margin: 0 10px;
        }

        /* Dot Pattern Background */
        .page-header {
            position: relative;
            background-color: white;
            padding: 60px 0;
            margin-bottom: 40px;
            overflow: hidden;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .page-header::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: radial-gradient(var(--text-muted) 0.8px, transparent 0.8px);
            background-size: 24px 24px;
            opacity: 0.1;
            z-index: 0;
        }

        .container { position: relative; z-index: 1; }

        /* Card Styling */
        .stat-card {
            background: white;
            border-radius: 24px;
            padding: 30px;
            border: none;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            height: 100%;
        }

        .icon-box {
            width: 56px;
            height: 56px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .icon-temp { background: #fee2e2; color: #ef4444; }
        .icon-hum { background: #e0f2fe; color: #0ea5e9; }
        .icon-soil { background: #fef3c7; color: #d97706; }

        .stat-value {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 5px;
            letter-spacing: -1px;
            transition: all 0.5s ease;
        }

        .stat-label {
            color: var(--text-muted);
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .chart-container {
            background: white;
            border-radius: 24px;
            padding: 30px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            margin-top: 30px;
        }

        /* Status Pulse */
        .status-badge {
            display: inline-flex;
            align-items: center;
            background: #dcfce7;
            color: #15803d;
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .pulse {
            width: 8px;
            height: 8px;
            background: #22c55e;
            border-radius: 50%;
            margin-right: 8px;
            box-shadow: 0 0 0 rgba(34, 197, 94, 0.4);
            animation: pulse-green 2s infinite;
        }

        @keyframes pulse-green {
            0% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(34, 197, 94, 0); }
            100% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0); }
        }

        footer {
            margin-top: 80px;
            padding: 60px 0;
            background: var(--dark-color);
            color: white;
        }

        .value-up { color: #22c55e !important; }
        .value-down { color: #ef4444 !important; }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">SOHIBUL AKBAR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="index.html">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#">Monitoring</a></li>
                    <li class="nav-item">
                        <button class="btn btn-primary ms-lg-3 px-4 rounded-3 fw-bold">Login</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="page-header">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                <div>
                    <h1 class="fw-extrabold mb-2" style="letter-spacing: -1.5px;">Live IoT Dashboard</h1>
                    <p class="text-muted mb-0">Pemantauan data sensor secara interaktif dan real-time.</p>
                </div>
                <div class="mt-3 mt-md-0 text-md-end">
                    <div class="status-badge mb-2">
                        <span class="pulse"></span> Sistem Terhubung
                    </div>
                    <p class="text-muted small mb-0">Terakhir Update: <span id="last-update">--:--:--</span> WIB</p>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row g-4">
            <!-- Suhu Udara Card -->
            <div class="col-md-4">
                <div class="stat-card">
                    <div class="icon-box icon-temp">
                        <i data-lucide="thermometer"></i>
                    </div>
                    <div class="stat-label">Suhu Udara</div>
                    <div class="stat-value" id="val-suhu">--.-°C</div>
                    <div class="progress mt-3" style="height: 6px; background: #f1f5f9;">
                        <div id="prog-suhu" class="progress-bar bg-danger" style="width: 0%"></div>
                    </div>
                </div>
            </div>

            <!-- Kelembaban Udara Card -->
            <div class="col-md-4">
                <div class="stat-card">
                    <div class="icon-box icon-hum">
                        <i data-lucide="droplets"></i>
                    </div>
                    <div class="stat-label">Kelembaban Udara</div>
                    <div class="stat-value" id="val-hum">--%</div>
                    <div class="progress mt-3" style="height: 6px; background: #f1f5f9;">
                        <div id="prog-hum" class="progress-bar bg-info" style="width: 0%"></div>
                    </div>
                </div>
            </div>

            <!-- Kelembaban Tanah Card -->
            <div class="col-md-4">
                <div class="stat-card">
                    <div class="icon-box icon-soil">
                        <i data-lucide="sprout"></i>
                    </div>
                    <div class="stat-label">Kelembaban Tanah</div>
                    <div class="stat-value" id="val-soil">--%</div>
                    <div class="progress mt-3" style="height: 6px; background: #f1f5f9;">
                        <div id="prog-soil" class="progress-bar bg-warning" style="width: 0%"></div>
                    </div>
                </div>
            </div>

            <!-- Grafik Analisis -->
            <div class="col-12 mt-4">
                <div class="chart-container">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="fw-bold m-0">Live Data Streaming (Per 2 Detik)</h5>
                        <span class="badge bg-primary-subtle text-primary">Auto-update enabled</span>
                    </div>
                    <div style="position: relative; height:350px;">
                        <canvas id="liveChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <h4 class="fw-bold mb-1">Sohibul Akbar</h4>
            <p class="opacity-50">Monitoring System Portfolio &copy; 2024</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Inisialisasi Ikon
        lucide.createIcons();

        // Variabel Data Sensor Awal
        let currentSuhu = 27.5;
        let currentHum = 65;
        let currentSoil = 42;

        // Pengaturan Grafik Chart.js
        const maxPoints = 20; // Ditingkatkan agar sejarah grafik lebih panjang karena update lebih cepat
        const labels = Array(maxPoints).fill("");
        const suhuData = Array(maxPoints).fill(27.5);
        const humData = Array(maxPoints).fill(65);
        const soilData = Array(maxPoints).fill(42);

        const ctx = document.getElementById('liveChart').getContext('2d');
        const liveChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Suhu (°C)',
                        data: suhuData,
                        borderColor: '#ef4444',
                        backgroundColor: 'rgba(239, 68, 68, 0.1)',
                        fill: true,
                        tension: 0.4,
                        borderWidth: 2,
                        pointRadius: 0
                    },
                    {
                        label: 'Kelembaban Udara (%)',
                        data: humData,
                        borderColor: '#0ea5e9',
                        backgroundColor: 'rgba(14, 165, 233, 0.1)',
                        fill: true,
                        tension: 0.4,
                        borderWidth: 2,
                        pointRadius: 0
                    },
                    {
                        label: 'Kelembaban Tanah (%)',
                        data: soilData,
                        borderColor: '#d97706',
                        backgroundColor: 'rgba(217, 119, 6, 0.1)',
                        fill: true,
                        tension: 0.4,
                        borderWidth: 2,
                        pointRadius: 0
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                animation: { duration: 500 }, // Durasi animasi lebih pendek agar lebih responsif
                scales: {
                    x: { display: false },
                    y: { 
                        beginAtZero: false, 
                        grid: { color: 'rgba(0,0,0,0.05)' },
                        suggestedMin: 10,
                        suggestedMax: 90
                    }
                },
                plugins: {
                    legend: { position: 'bottom', labels: { usePointStyle: true, padding: 20 } }
                }
            }
        });

        // Fungsi Update Data Dinamis
        function simulateSensorUpdate() {
            // Update Waktu
            const now = new Date();
            document.getElementById('last-update').textContent = now.toLocaleTimeString('id-ID');

            // Simpan nilai lama untuk menentukan arah perubahan
            const oldSuhu = parseFloat(currentSuhu);
            const oldHum = currentHum;
            const oldSoil = currentSoil;

            // Logika Perubahan Data Acak yang Lebih Halus
            currentSuhu = (parseFloat(currentSuhu) + (Math.random() - 0.5) * 0.6).toFixed(1);
            currentHum = Math.min(100, Math.max(0, currentHum + Math.floor((Math.random() - 0.5) * 4)));
            currentSoil = Math.min(100, Math.max(0, currentSoil + Math.floor((Math.random() - 0.5) * 3)));

            // Update UI Cards dengan indikator naik/turun
            updateDisplay('val-suhu', currentSuhu + '°C', currentSuhu > oldSuhu);
            updateDisplay('val-hum', currentHum + '%', currentHum > oldHum);
            updateDisplay('val-soil', currentSoil + '%', currentSoil > oldSoil);

            // Update Progress Bars
            document.getElementById('prog-suhu').style.width = (currentSuhu / 50 * 100) + '%';
            document.getElementById('prog-hum').style.width = currentHum + '%';
            document.getElementById('prog-soil').style.width = currentSoil + '%';

            // Update Data Grafik
            liveChart.data.datasets[0].data.push(currentSuhu);
            liveChart.data.datasets[1].data.push(currentHum);
            liveChart.data.datasets[2].data.push(currentSoil);

            // Geser Data Grafik
            if (liveChart.data.datasets[0].data.length > maxPoints) {
                liveChart.data.datasets[0].data.shift();
                liveChart.data.datasets[1].data.shift();
                liveChart.data.datasets[2].data.shift();
            }
            
            liveChart.update('none'); // Update tanpa animasi penuh untuk performa pada interval cepat
        }

        // Helper untuk animasi teks
        function updateDisplay(id, value, isUp) {
            const el = document.getElementById(id);
            el.textContent = value;
            
            // Efek warna sekilas saat data berubah
            const flashClass = isUp ? 'value-up' : 'value-down';
            el.classList.remove('value-up', 'value-down'); // Reset class
            void el.offsetWidth; // Trigger reflow untuk restart animasi
            el.classList.add(flashClass);
            
            // Hapus class setelah animasi selesai (500ms cukup untuk interval 2 detik)
            setTimeout(() => el.classList.remove(flashClass), 500);
        }

        // Jalankan update setiap 2 detik (2000ms)
        setInterval(simulateSensorUpdate, 2000);
        simulateSensorUpdate(); // Jalankan pertama kali saat load
    </script>
</body>
</html>