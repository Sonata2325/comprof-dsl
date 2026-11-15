<?php

/*
|--------------------------------------------------------------------------
| Konten Company Profile PT. Danatrans Service Logistics
|--------------------------------------------------------------------------
|
| Seluruh konten statis halaman Company Profile dipusatkan di sini agar
| mudah diperbarui tanpa menyentuh view. Ke depannya, data ini dapat
| dipindahkan ke database (mis. dikelola admin melalui modul KMS).
|
*/

return [

    'name' => 'PT. Danatrans Service Logistics',
    'short_name' => 'Danatrans',
    'tagline' => 'Moving Cargo. Connecting Business.',
    'subheadline' => 'Jasa Pengurusan Transportasi (PPJK) & International Freight Forwarding berbasis di Semarang, Indonesia.',

    'address' => 'Semarang Indah C-14 No.10, Tawangmas, Semarang Barat, Kota Semarang, Jawa Tengah - Indonesia',
    'fields' => ['PPJK', 'Export', 'Import', 'Trucking', 'Freight Forwarding'],

    'overview' => [
        'Bergerak di bidang jasa pengurusan kepabeanan (PPJK), transportasi, dan freight forwarding yang berorientasi pada kegiatan ekspor-impor di Kota Semarang.',
        'Mengintegrasikan koordinasi dokumen, cargo, trucking, dan komunikasi lintas pihak dengan mengedepankan ketepatan proses, komunikasi yang jelas, dan pelayanan yang aman.',
    ],

    'highlights' => [
        ['icon' => 'document', 'label' => 'Koordinasi Dokumen'],
        ['icon' => 'cube', 'label' => 'Penanganan Cargo'],
        ['icon' => 'truck', 'label' => 'Trucking'],
        ['icon' => 'chat', 'label' => 'Komunikasi Lintas Pihak'],
    ],

    'vision' => 'Menjadi mitra logistik yang profesional, responsif, dan terpercaya dalam mendukung perdagangan nasional dan internasional.',

    'missions' => [
        ['title' => 'Pelayanan', 'desc' => 'Memberikan layanan yang cepat dan komunikatif pada setiap tahap pengiriman.'],
        ['title' => 'Integritas', 'desc' => 'Menjalankan proses secara transparan, tertib, dan sesuai ketentuan.'],
        ['title' => 'Kolaborasi', 'desc' => 'Membangun koordinasi efektif dengan customer, carrier, pelabuhan, dan trucking.'],
        ['title' => 'Pertumbuhan', 'desc' => 'Mengembangkan kompetensi SDM dan memperluas jaringan kemitraan.'],
    ],

    'values' => [
        ['icon' => 'bolt', 'title' => 'Responsif', 'desc' => 'Tanggap terhadap kebutuhan dan pertanyaan pelanggan.'],
        ['icon' => 'link', 'title' => 'Terintegrasi', 'desc' => 'Dokumen, cargo, dan trucking dikoordinasikan dalam satu alur.'],
        ['icon' => 'chart', 'title' => 'Terukur', 'desc' => 'Setiap tahapan proses jelas, terpantau, dan dapat dilaporkan.'],
        ['icon' => 'adjust', 'title' => 'Fleksibel', 'desc' => 'Solusi menyesuaikan karakter cargo dan jadwal pelanggan.'],
    ],

    'services' => [
        ['icon' => 'globe', 'title' => 'Freight Forwarding', 'desc' => 'Koordinasi pengiriman internasional, carrier, shipment, dan dokumen.'],
        ['icon' => 'arrow-up-right', 'title' => 'Export Handling', 'desc' => 'Pengurusan proses ekspor, booking, dokumen, dan koordinasi pelabuhan.'],
        ['icon' => 'arrow-down-left', 'title' => 'Import Handling', 'desc' => 'Pengurusan proses impor, dokumen, clearance, dan delivery.'],
        ['icon' => 'truck', 'title' => 'Trucking', 'desc' => 'Pengangkutan kontainer/cargo dari dan menuju pelabuhan atau lokasi customer.'],
        ['icon' => 'document', 'title' => 'Documentation', 'desc' => 'Pemeriksaan dan koordinasi dokumen perdagangan serta pengiriman.'],
        ['icon' => 'headset', 'title' => 'Customer Service', 'desc' => 'Komunikasi status shipment dan koordinasi kebutuhan pelanggan.'],
    ],

    'flows' => [
        'ekspor' => [
            'label' => 'Alur Layanan Ekspor',
            'steps' => [
                ['title' => 'Customer Inquiry', 'desc' => 'Pelanggan menyampaikan kebutuhan pengiriman & detail cargo.'],
                ['title' => 'Quotation & Booking', 'desc' => 'Penawaran harga, konfirmasi, dan booking space ke carrier.'],
                ['title' => 'Dokumen & Cargo Ready', 'desc' => 'Persiapan dokumen ekspor dan kesiapan barang.'],
                ['title' => 'Trucking / Stuffing', 'desc' => 'Pengangkutan dan pemuatan cargo ke dalam kontainer.'],
                ['title' => 'Port / Customs Process', 'desc' => 'Pengurusan kepabeanan dan proses di pelabuhan.'],
                ['title' => 'Loading & Departure', 'desc' => 'Kontainer dimuat ke kapal dan berangkat ke tujuan.'],
            ],
        ],
        'impor' => [
            'label' => 'Alur Layanan Impor',
            'steps' => [
                ['title' => 'Pre-alert / Arrival Info', 'desc' => 'Informasi awal & jadwal kedatangan shipment.'],
                ['title' => 'Dokumen Impor', 'desc' => 'Pengumpulan dan pemeriksaan dokumen impor.'],
                ['title' => 'Clearance / Customs', 'desc' => 'Pengurusan pemberitahuan pabean dan clearance.'],
                ['title' => 'Release Cargo', 'desc' => 'Cargo dirilis dari pelabuhan setelah proses selesai.'],
                ['title' => 'Trucking / Delivery', 'desc' => 'Pengantaran cargo ke lokasi pelanggan.'],
                ['title' => 'Proof of Delivery', 'desc' => 'Bukti serah terima sebagai penutup proses.'],
            ],
        ],
    ],

    'organization' => [
        'director' => ['role' => 'Direktur', 'name' => 'Slamet Rusman'],
        'manager' => ['role' => 'Manager', 'name' => 'Musriyatul Khomsiyati'],
        'divisions' => [
            [
                'name' => 'Divisi Ekspor',
                'icon' => 'arrow-up-right',
                'head' => 'Yudi Harto',
                'staff' => ['Nurmanto', 'Suhono', 'Agung'],
                'duty' => 'Mengelola booking, dokumen ekspor, stuffing, hingga koordinasi pelabuhan dan keberangkatan kapal.',
            ],
            [
                'name' => 'Divisi Impor',
                'icon' => 'arrow-down-left',
                'head' => 'Nabila',
                'staff' => ['Nur Wandani'],
                'duty' => 'Menangani dokumen impor, proses clearance kepabeanan, dan rilis cargo dari pelabuhan.',
            ],
            [
                'name' => 'Divisi Keuangan',
                'icon' => 'wallet',
                'head' => 'Danang Agil',
                'staff' => ['Peni', 'Suwarto'],
                'duty' => 'Mengelola penagihan, pembayaran biaya operasional, dan pencatatan keuangan per shipment.',
            ],
            [
                'name' => 'Divisi Truck',
                'icon' => 'truck',
                'head' => 'Putri',
                'staff' => [],
                'duty' => 'Menjadwalkan armada dan memantau pengangkutan kontainer dari/ke pelabuhan dan lokasi customer.',
            ],
            [
                'name' => 'Divisi Konsultasi & System',
                'icon' => 'cpu',
                'head' => 'Khodim',
                'staff' => [],
                'duty' => 'Memberikan konsultasi kepabeanan serta mengelola sistem informasi dan data internal.',
            ],
        ],
        'support' => [
            'name' => 'Divisi Marketing',
            'icon' => 'megaphone',
            'note' => 'Unit pendukung lintas divisi',
            'duty' => 'Menjaring pelanggan baru, menyusun penawaran, dan menjaga hubungan dengan pelanggan serta mitra.',
        ],
    ],

];
