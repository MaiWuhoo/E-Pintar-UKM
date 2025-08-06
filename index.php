<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Landing Page</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        /* Optional: Add smooth scrolling */
        .scroll-container {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-white text-gray-900">

<?php include 'includes/header.php'; ?>

<div x-data="{ open: false, selected: { title: '', detail: '' } }">

    <!-- Aktiviti Section -->
    <section id="aktiviti" class="p-6">
        <h2 class="text-xl font-bold mb-4">Aktiviti Akan Datang</h2>
        <div class="flex overflow-x-auto scroll-container space-x-4 pb-2">
            <?php
            $aktiviti = [
                ['img' => 'Act4.jpg', 'title' => 'Brain With Beauty', 'detail' => '12 Dis 2024 (Khamis), 8.00 PM'],
                ['img' => 'Act1.jpg', 'title' => 'Explorace Mahasiswa', 'detail' => '15 Dis 2024 (Jumaat), 10.00 AM'],
                ['img' => 'Act2.jpg', 'title' => 'Bengkel Kerjaya', 'detail' => '18 Dis 2024 (Isnin), 2.00 PM'],
                ['img' => 'Act3.jpg', 'title' => 'Sukan Mahasiswa', 'detail' => '20 Dis 2024 (Rabu), 5.00 PM'],
                ['img' => 'Act1.jpg', 'title' => 'Explorace Mahasiswa', 'detail' => '15 Dis 2024 (Jumaat), 10.00 AM'],
                ['img' => 'Act2.jpg', 'title' => 'Bengkel Kerjaya', 'detail' => '18 Dis 2024 (Isnin), 2.00 PM'],
                ['img' => 'Act3.jpg', 'title' => 'Sukan Mahasiswa', 'detail' => '20 Dis 2024 (Rabu), 5.00 PM']
            ];

            foreach ($aktiviti as $a) {
                echo "
                <div class='flex-shrink-0 w-64 bg-gray-100 p-2 rounded shadow cursor-pointer'
                     @click=\"open = true; selected = { title: '{$a['title']}', detail: '{$a['detail']}' }\">
                    <img src='images/{$a['img']}' alt='...' class='w-full h-64 object-cover rounded'>
                    <h3 class='mt-2 font-semibold'>{$a['title']}</h3>
                    <p class='text-sm'>{$a['detail']}</p>
                </div>
                ";
            }
            ?>
        </div>
    </section>

    <!-- Persatuan Section -->
    <section id="persatuan" class="p-6">
        <h2 class="text-xl font-bold mb-4">Persatuan</h2>
        <div class="flex overflow-x-auto scroll-container space-x-4 pb-2">
            <?php
            $persatuan = [
                ['img' => 'PERMAJ.jpg', 'title' => 'PERMAJ', 'detail' => 'Persatuan Mahasiswa Anak Johor di UKM'],
                ['img' => 'PERMANIS.jpeg', 'title' => 'PERMANIS', 'detail' => 'Persatuan Mahasiswa Negeri Sembilan'],
                ['img' => 'PERDANA.jpg', 'title' => 'PERDANA', 'detail' => 'Persatuan Mahasiswa Darul Naim'],
                ['img' => 'PERMATA.jpeg', 'title' => 'PERMATA', 'detail' => 'Persatuan Mahasiswa Terengganu'],
                ['img' => 'PERMAJ.jpg', 'title' => 'PERMAJ', 'detail' => 'Persatuan Mahasiswa Anak Johor di UKM'],
                ['img' => 'PERMANIS.jpeg', 'title' => 'PERMANIS', 'detail' => 'Persatuan Mahasiswa Negeri Sembilan'],
                ['img' => 'PERDANA.jpg', 'title' => 'PERDANA', 'detail' => 'Persatuan Mahasiswa Darul Naim'],
                ['img' => 'PERMATA.jpeg', 'title' => 'PERMATA', 'detail' => 'Persatuan Mahasiswa Terengganu']
            ];

            foreach ($persatuan as $p) {
                echo "
                <div class='flex-shrink-0 w-64 bg-gray-100 p-2 rounded shadow cursor-pointer'
                     @click=\"open = true; selected = { title: '{$p['title']}', detail: '{$p['detail']}' }\">
                    <img src='images/{$p['img']}' alt='...' class='w-full h-64 object-cover rounded'>
                    <h3 class='mt-2 font-semibold text-center'>{$p['title']}</h3>
                </div>
                ";
            }
            ?>
        </div>
    </section>

    <!-- Universal Modal -->
    <template x-if="open">
        <div class="fixed inset-0 bg-black bg-opacity-60 flex justify-center items-center z-50">
            <div class="bg-white p-6 rounded-lg w-[90%] md:w-[400px] text-center">
                <h2 class="text-xl font-bold mb-2" x-text="selected.title"></h2>
                <p class="text-sm" x-text="selected.detail"></p>
                <button class="mt-4 px-4 py-2 bg-blue-500 text-white rounded" @click="open = false">Tutup</button>
            </div>
        </div>
    </template>

</div>

</body>
</html>
