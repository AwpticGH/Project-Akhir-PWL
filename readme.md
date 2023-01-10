### Project Status : WIP

------------
# Aplikasi Monitoring Kinerja
### Kelompok 4
- Alfian Fakhrudin (Frontend)
- Benaya Adi Sahat (Backend)
- Dava Alif (Backend)
- Muhammad Fauzan M (Frontend)
- Rafi Fajar S (Backend)

## Task List
### ui :
- [x] layout/sidebar.php
- [x] layout/navbar.php
- [x] auth/show.php
- [x] admin/dashboard.php
- [x] employee/dashboard.php
- [x] report/create.php
- [x] report/show.php
- [x] presence/create.php
- [x] presence/confirmation.php
- [x] notification/index.php

### frontend :
- [x] layout/sidebar.php (application title, list of pages, darkmode theme toggle button)
- [x] layout/navbar.php (icon sidebar, page title, icon notification, profile btn with dropdown)
- [x] auth/create.php (register) (first name, last name, password, picture, address, dob, position, division)
- [x] auth/index.php (login) (username, password)
- [x] auth/show.php halaman profile user (cuma bisa ganti picture, address dan password)
- [x] admin/dashboard.php dashboard head division & superadmin
- [x] employee/dashboard.php dashboard karyawan
- [] report/create.php halaman create laporan buat pekerja
- [] report/show.php halaman pencarian laporan buat head division
- [x] presence/create.php halaman create absen buat pekerja
- [] presence/confirmation.php halaman konfirmasi absen pekerja buat admin
- [] notification/index.php halaman untuk melihat notifikasi

### backend :
- [] UsersController -> create, update, readById, login/readByUsername
- [] NotificationsController -> create, update, readAllByUserId
- [] PresencesController -> create, readAllByUserId
- [] EvaluationsController -> readByEvaluationForId, create
- [] WebsMiddleware -> dashboard
- [] GuardsMiddleware -> auth, head, employee
- [] Model kalo bisa, kalo ga gausah
- [x] database creation
- [x] database seeding

## Folder Structure :
1. controller : tempat menyimpan file controller
2. model : tempat menyimpan file model
3. middleware : tempat menyimpan file middleware
4. database/users : tempat menyimpan image user, pathnya akan tersimpan di database table users
5. web : tempat menyimpan file web
6. asset/css : tempat menyimpan file css
7. asset/img : tempat menyimpan file img untuk website
8. asset/js : tempat menyimpan file js

## Middleware Explanation :
WebsMiddleware : Mengarahkan user ke halaman tertentu berdasarkan validasi jabatan
GuardsMiddleware : Mengizinkan user untuk mengakses halaman tertentu berdasarkan validasi2 tertentu

### WebsMiddleware :
1. dashboard($jabatan) : return path dashboard berdasarkan $jabatan, kalo $jabatan = "Karyawan" return employee/dashboard.php, else return admin/dashboard.php

### GuardsMiddleware :
1. auth($user) : DIGUNAKAN PADA SETIAP HALAMAN KECUALI LOGIN DAN REGISTER, GUNAKAN INI DULU SEBELUM GUARD YANG LAIN
    $user = $_SESSION['user']. if null header("location:auth/index.php"), else return null
2. head($user) : DIGUNAKAN PADA HALAMAN admin/dashboard.php, report/show.php, presence/confirmation.php
    $position = jabatan user. if "Kepala" boleh akses, else balikin ke halaman sebelumnya
3. employee($user) : DIGUNAKAN PADA HALAMAN employee/dashboard.php, report/create.php, presence/create.php
    $position = jabatan user. if "Karyawan" boleh akses, else balikin ke halaman sebelumnya

## Database Design
[![DBDesign](https://kuliah.fauzanmhr.my.id/0:/ASSET/drawSQL-export-2023-01-02_12_49.png "DBDesign")](https://kuliah.fauzanmhr.my.id/0:/ASSET/drawSQL-export-2023-01-02_12_49.png "DBDesign")
