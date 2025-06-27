<?php
ini_set('display_errors', 1); error_reporting(E_ALL);
session_start();
require_once("koneksi.php");
if (!isset($_SESSION['username'])) {
    header("location: index.php"); exit();
}
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
      <link rel="icon" href="img/logo.png" type="image/png">
    <!-- Bootstrap & Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome-5/css/all.min.css">
        <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap">
    <!-- Custom Dashboard CSS -->
    <link rel="stylesheet" href="css/dashboard_admin.css">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                           
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                   <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="admin2.php">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                
                            </ul>
                        </li>
                        <li>
                            <a href="datakaryawan.php">
                                <i class="fas fa-chart-bar"></i>Data Karyawan</a>
                        </li>
                        <li>
                            <a href="datauser.php">
                                <i class="fas fa-table"></i>Data user</a>
                        </li>
                        <li>
                            <a href="datajabatan.php">
                                <i class="far fa-check-square"></i>Data Jabatan</a>
                        </li>
                        <li>
                            <a href="data_absen.php">
                                <i class="fas fa-calendar-alt"></i>Data Absen</a>
                        </li>
                       <li>
                            <a href="data_keterangan.php">
                                <i class="fas fa-table"></i>data Keterangan
                            </a>
                        </li>
                       
                       
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                   <h1>admin</h1>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="admin2.php">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>
                          
                        </li>
                        <li>
                            <a href="datakaryawan.php">
                                <i class="fas fa-chart-bar"></i>Data Karyawan</a>
                        </li>
                        <li>
                            <a href="datauser.php">
                                <i class="fas fa-table"></i>Data User</a>
                        </li>
                        <li>
                            <a href="datajabatan.php">
                                <i class="far fa-check-square"></i>Data Jabatan</a>
                        </li>
                        <li>
                            <a href="data_absen.php">
                                <i class="fas fa-calendar-alt"></i>Data Absen</a>
                        </li>
                        <li>
                            <a href="data_keterangan.php">
                                <i class="fas fa-table"></i>data Keterangan
                            </a>
                        </li>
                        <!--<li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>-->
                        <li>
                            <a href="logout.php">Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
<div class="main-content">
    <div class="row mb-4">
        <div class="col-md-8 mb-3">
            <div class="card shadow-sm border-0 p-4 welcome-card">
                <div class="d-flex align-items-center">
                    <div class="welcome-emoji">👋</div>
                    <div>
                        <div class="welcome-text">Selamat datang,</div>
                        <h3 class="mb-0 welcome-name"><?php echo htmlspecialchars($username); ?>!</h3>
                        <div class="admin-desc">Sistem Absensi Karyawan</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex align-items-center quick-actions">
            <a href="datakaryawan.php" class="btn btn-primary shadow-sm"><i class="fas fa-users"></i> Karyawan</a>
            <a href="data_absen.php" class="btn btn-warning shadow-sm text-white"><i class="fas fa-calendar-alt"></i> Absen</a>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-3 col-6 mb-3">
            <div class="card-stat">
                <div class="icon" style="color:#667eea;"><i class="fas fa-users"></i></div>
                <div class="value">
                    <?php $q = mysqli_query($koneksi,"SELECT COUNT(*) AS total FROM tb_karyawan"); $d=mysqli_fetch_assoc($q); echo $d['total']; ?>
                </div>
                <div class="desc">Total Karyawan</div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-3">
            <div class="card-stat">
                <div class="icon" style="color:#46c97f;"><i class="fas fa-calendar-check"></i></div>
                <div class="value">
                    <?php
// Format tanggal sesuai dengan database (contoh: "Saturday, 21-06-2025")
$today = date('l, d-m-Y'); 
$q = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM tb_absen WHERE waktu LIKE '%$today%'");
$d = mysqli_fetch_assoc($q);
echo $d['total'];
?>
                </div>
                <div class="desc">Absen Hari Ini</div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-3">
            <div class="card-stat">
                <div class="icon" style="color:#f093fb;"><i class="fas fa-user-md"></i></div>
                <div class="value">
                    <?php
$today = date('l, d-m-Y'); // Format: "Saturday, 21-06-2025"
$q = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM tb_keterangan WHERE waktu LIKE '%$today%'");
$d = mysqli_fetch_assoc($q);
echo $d['total']; // Output: 1 (sesuai data 21 Juni)
?>
                </div>
                <div class="desc">Izin/Sakit Hari Ini</div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-3">
            <div class="card-stat">
                <div class="icon" style="color:#ff7979;"><i class="fas fa-clock"></i></div>
                 <div class="value">
            <?php
            $today = date('l, d-m-Y'); // Format: "Saturday, 21-06-2025"
            
            // Query untuk menghitung terlambat (10:01 - 16:00)
            $q = mysqli_query($koneksi, 
                "SELECT COUNT(*) AS total FROM tb_absen 
                 WHERE 
                     waktu LIKE '%$today%'
                     AND (
                         TIME(STR_TO_DATE(waktu, '%W, %d-%m-%Y %h:%i:%s %p')) > '10:00:00'
                         AND TIME(STR_TO_DATE(waktu, '%W, %d-%m-%Y %h:%i:%s %p')) <= '16:00:00'
                     )
                ");
            $d = mysqli_fetch_assoc($q);
            echo $d['total'];
            ?>
        </div>
                <div class="desc">Terlambat Hari Ini</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-7 mb-4">
    <div class="card shadow border-0 p-4 h-100 chart-card">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="chart-title"><i class="fas fa-chart-pie mr-2"></i>Statistik Absensi Hari Ini (<?php echo date('l, d-m-Y'); ?>)</div>
        </div>
        <canvas id="absensiChart" height="250"></canvas>
    </div>
</div>
                <div class="col-lg-5 mb-4">
            <div class="card card-activity shadow border-0 p-4 h-100 activity-card">
                <?php
// Array hari dalam bahasa Indonesia
$hari_indonesia = array(
    'Sunday' => 'Minggu',
    'Monday' => 'Senin',
    'Tuesday' => 'Selasa',
    'Wednesday' => 'Rabu',
    'Thursday' => 'Kamis',
    'Friday' => 'Jumat',
    'Saturday' => 'Sabtu'
);
$hari_ini = date('l');
$hari_indonesia_ini = $hari_indonesia[$hari_ini];
?>

<div class="activity-title">
    <i class="fas fa-bolt mr-2"></i>
    Aktivitas absen hari ini (<?php echo $hari_indonesia_ini; ?>)
</div>
                <ul class="mt-3">
                <?php
                $today = date('l, d-m-Y');
                
                // Pagination logic
                $records_per_page = 7;
                $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                $offset = ($page - 1) * $records_per_page;
                
                // Get total records
                $total_query = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM tb_absen WHERE waktu LIKE '%$today%'");
                $total_row = mysqli_fetch_assoc($total_query);
                $total_records = $total_row['total'];
                $total_pages = ceil($total_records / $records_per_page);
                
                // Get data for current page
                $result = mysqli_query($koneksi, 
                    "SELECT nama, waktu 
                    FROM tb_absen 
                    WHERE waktu LIKE '%$today%' 
                    ORDER BY waktu DESC 
                    LIMIT $offset, $records_per_page");
                
                while ($row = mysqli_fetch_assoc($result)) {
                    // Konversi jam dari string waktu
                    $jam_absen = strtotime(date("H:i", strtotime($row['waktu'])));
                    $status = "";
                    $badge_class = "";
                    
                    $awal = strtotime("08:00");
                    $terlambat = strtotime("10:00");
                    $akhir = strtotime("16:00");
                    
                    if ($jam_absen >= $awal && $jam_absen <= $terlambat) {
                        $status = "Tepat Waktu";
                        $badge_class = "badge-success";
                    } elseif ($jam_absen > $terlambat && $jam_absen <= $akhir) {
                        $status = "Terlambat";
                        $badge_class = "badge-warning";
                    } else {
                        $status = "Luar Jam Kerja";
                        $badge_class = "badge-danger";
                    }
                    
                    echo '<li class="d-flex justify-content-between align-items-center">';
                    echo '<span><i class="fas fa-user-circle mr-2"></i>'.$row['nama'].'</span>';
                    echo '<div>';
                    echo '<span class="activity-time mr-2">'.date('H:i', strtotime($row['waktu'])).'</span>';
                    echo '<span class="badge '.$badge_class.'">'.$status.'</span>';
                    echo '</div>';
                    echo '</li>';
                }
                
                // Jika tidak ada data absen hari ini
                if (mysqli_num_rows($result) === 0) {
                    echo '<li class="text-muted">Tidak ada aktivitas absen hari ini</li>';
                }
                ?>
                </ul>
                
                <!-- Pagination -->
                <?php if ($total_pages > 1): ?>
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-sm justify-content-center mt-3">
                        <?php if ($page > 1): ?>
                        <li class="page-item">
                            <a class="page-link" href="?page=<?php echo $page - 1; ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <?php endif; ?>
                        
                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                        <li class="page-item <?php echo ($page == $i) ? 'active' : ''; ?>">
                            <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        </li>
                        <?php endfor; ?>
                        
                        <?php if ($page < $total_pages): ?>
                        <li class="page-item">
                            <a class="page-link" href="?page=<?php echo $page + 1; ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </nav>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="copyright">&copy; <?php echo date('Y'); ?> Apriyana Prawira Suradi | Winnicode</div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    <?php
    $today = date('l, d-m-Y'); // Format: "Thursday, 19-06-2025"
    
    // Query untuk menghitung statistik absen hari ini
    $q = mysqli_query($koneksi, "
        SELECT
            SUM(IF(
                TIME(STR_TO_DATE(waktu, '%W, %d-%m-%Y %h:%i:%s %p')) BETWEEN '08:00:00' AND '10:00:00', 
                1, 0
            )) AS tepat,
            SUM(IF(
                TIME(STR_TO_DATE(waktu, '%W, %d-%m-%Y %h:%i:%s %p')) BETWEEN '10:01:00' AND '16:00:00', 
                1, 0
            )) AS telat,
            SUM(IF(
                TIME(STR_TO_DATE(waktu, '%W, %d-%m-%Y %h:%i:%s %p')) NOT BETWEEN '08:00:00' AND '16:00:00', 
                1, 0
            )) AS luarjam
        FROM tb_absen
        WHERE waktu LIKE '%$today%'
    ");
    
    $data = mysqli_fetch_assoc($q);
    $tepat = $data['tepat'] ?? 0;
    $telat = $data['telat'] ?? 0;
    $luarjam = $data['luarjam'] ?? 0;
    
    // Debugging - tampilkan hasil query
    echo "console.log('Hasil Query:', {tepat: $tepat, telat: $telat, luarjam: $luarjam});";
    ?>
    
    const ctx = document.getElementById('absensiChart');
    if (ctx) {
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [
                    'Tepat Waktu (08:00-10:00)', 
                    'Terlambat (10:01-16:00)', 
                    'Luar Jam Kerja'
                ],
                datasets: [{
                    data: [<?php echo $tepat; ?>, <?php echo $telat; ?>, <?php echo $luarjam; ?>],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.8)',  // Hijau
                        'rgba(255, 206, 86, 0.8)',   // Kuning
                        'rgba(255, 99, 132, 0.8)'    // Merah
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 1,
                    hoverOffset: 15
                }]
            },
            options: {
                responsive: false,
                maintainAspectRatio: false,
                cutout: '65%',
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            font: {
                                size: 12,
                                family: "'Poppins', sans-serif"
                            },
                            padding: 20,
                            usePointStyle: true
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const label = context.label || '';
                                const value = context.raw;
                                const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                const percentage = Math.round((value / total) * 100);
                                return `${label}: ${value} orang (${percentage}%)`;
                            }
                        }
                    }
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                }
            }
        });
    } else {
        console.error('Elemen canvas tidak ditemukan!');
    }
});
</script>
</body>
</html>
