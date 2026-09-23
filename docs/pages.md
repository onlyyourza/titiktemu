# Daftar halaman kosong TitikTemu

Semua halaman hanya memiliki layout dan judul tab browser. Isi, form, tombol, tabel, dan data belum dibuat.
Halaman internal hanya dapat dipratinjau pada APP_ENV=local atau testing. Parameter {id} dapat diganti 1 untuk pratinjau; belum mengambil data dari database.

| Area | URL lokal | View di resources/views | Nama route |
| --- | --- | --- | --- |
| Umum | / | pages/auth/login.blade.php | home |
| Umum | /login | pages/auth/login.blade.php | login |
| Umum | /login/petugas | pages/auth/staff-login.blade.php | staff.login |
| mahasiswa | /mahasiswa/dashboard | pages/student/dashboard.blade.php | student.dashboard |
| mahasiswa | /mahasiswa/barang-hilang | pages/student/lost-items/index.blade.php | student.lost-items.index |
| mahasiswa | /mahasiswa/barang-hilang/buat | pages/student/lost-items/create.blade.php | student.lost-items.create |
| mahasiswa | /mahasiswa/barang-hilang/{id} | pages/student/lost-items/show.blade.php | student.lost-items.show |
| mahasiswa | /mahasiswa/barang-hilang/{id}/edit | pages/student/lost-items/edit.blade.php | student.lost-items.edit |
| mahasiswa | /mahasiswa/barang-temuan | pages/student/found-items/index.blade.php | student.found-items.index |
| mahasiswa | /mahasiswa/barang-temuan/buat | pages/student/found-items/create.blade.php | student.found-items.create |
| mahasiswa | /mahasiswa/barang-temuan/{id} | pages/student/found-items/show.blade.php | student.found-items.show |
| mahasiswa | /mahasiswa/barang-temuan/{id}/edit | pages/student/found-items/edit.blade.php | student.found-items.edit |
| mahasiswa | /mahasiswa/barang-temuan/{id}/klaim | pages/student/claims/create.blade.php | student.claims.create |
| mahasiswa | /mahasiswa/klaim/{id} | pages/student/claims/show.blade.php | student.claims.show |
| mahasiswa | /mahasiswa/aktivitas | pages/student/activities/index.blade.php | student.activities.index |
| mahasiswa | /mahasiswa/profil | pages/student/profile/edit.blade.php | student.profile.edit |
| petugas | /petugas/dashboard | pages/staff/dashboard.blade.php | staff.dashboard |
| petugas | /petugas/barang-hilang | pages/staff/lost-items/index.blade.php | staff.lost-items.index |
| petugas | /petugas/barang-hilang/{id} | pages/staff/lost-items/show.blade.php | staff.lost-items.show |
| petugas | /petugas/pengajuan-temuan | pages/staff/submissions/index.blade.php | staff.submissions.index |
| petugas | /petugas/pengajuan-temuan/{id} | pages/staff/submissions/show.blade.php | staff.submissions.show |
| petugas | /petugas/barang | pages/staff/inventory/index.blade.php | staff.inventory.index |
| petugas | /petugas/barang/buat | pages/staff/inventory/create.blade.php | staff.inventory.create |
| petugas | /petugas/barang/{id} | pages/staff/inventory/show.blade.php | staff.inventory.show |
| petugas | /petugas/barang/{id}/edit | pages/staff/inventory/edit.blade.php | staff.inventory.edit |
| petugas | /petugas/klaim | pages/staff/claims/index.blade.php | staff.claims.index |
| petugas | /petugas/klaim/{id} | pages/staff/claims/show.blade.php | staff.claims.show |
| petugas | /petugas/klaim/{id}/penyerahan | pages/staff/handovers/create.blade.php | staff.handovers.create |
| petugas | /petugas/riwayat | pages/staff/history/index.blade.php | staff.history.index |
| petugas | /petugas/rekap | pages/staff/reports/index.blade.php | staff.reports.index |
| petugas | /petugas/profil | pages/staff/profile/edit.blade.php | staff.profile.edit |
| admin | /admin/dashboard | pages/admin/dashboard.blade.php | admin.dashboard |
| admin | /admin/petugas | pages/admin/staff/index.blade.php | admin.staff.index |
| admin | /admin/petugas/buat | pages/admin/staff/create.blade.php | admin.staff.create |
| admin | /admin/petugas/{id}/edit | pages/admin/staff/edit.blade.php | admin.staff.edit |
| admin | /admin/kategori | pages/admin/categories/index.blade.php | admin.categories.index |
| admin | /admin/kategori/buat | pages/admin/categories/create.blade.php | admin.categories.create |
| admin | /admin/kategori/{id}/edit | pages/admin/categories/edit.blade.php | admin.categories.edit |
| admin | /admin/lokasi | pages/admin/locations/index.blade.php | admin.locations.index |
| admin | /admin/lokasi/buat | pages/admin/locations/create.blade.php | admin.locations.create |
| admin | /admin/lokasi/{id}/edit | pages/admin/locations/edit.blade.php | admin.locations.edit |
| admin | /admin/pengumuman | pages/admin/announcements/index.blade.php | admin.announcements.index |
| admin | /admin/pengumuman/{id} | pages/admin/announcements/show.blade.php | admin.announcements.show |
| admin | /admin/moderasi | pages/admin/moderation/index.blade.php | admin.moderation.index |
| admin | /admin/moderasi/{id} | pages/admin/moderation/show.blade.php | admin.moderation.show |
| admin | /admin/aktivitas | pages/admin/audit/index.blade.php | admin.audit.index |
| admin | /admin/rekap | pages/admin/reports/index.blade.php | admin.reports.index |
| admin | /admin/profil | pages/admin/profile/edit.blade.php | admin.profile.edit |

Satpam dan OB memakai area petugas yang sama. Halaman untuk mengubah status belum memiliki endpoint penyimpanan atau tombol aksi.
