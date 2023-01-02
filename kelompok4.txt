Kelompok 4 :
- Alfian Fakhrudin
- Benaya Adi Sahat
- Dava Alif
- Muhammad Fauzan M
- Rafi Fajar S

Aplikasi : Monitoring Kinerja
DB Design : https://drawsql.app/teams/rafi-fajar-sulaiman/diagrams/project-akhir-pwl

foldering :
1. controller : tempat menyimpan file controller
2. model : tempat menyimpan file model
3. middleware : tempat menyimpan file middleware
4. database/users : tempat menyimpan image user, pathnya akan tersimpan di database table users
5. web : tempat menyimpan file web
6. asset/css : tempat menyimpan file css
7. asset/img : tempat menyimpan file img untuk website
8. asset/js : tempat menyimpan file js

frontend :
1. register (first name, last name, password, picture, address, dob, position, division)
2. login (username, password)
3. dashboard pekerja
4. dashboard head division & superadmin
5. halaman create laporan buat pekerja
6. halaman create absen buat pekerja
7. halaman pencarian laporan buat head division
8. halaman profile user (cuma bisa ganti picture, address dan password)
--tambahin kalo dah kepikiran

backend :
1. UsersController -> create, update, readById, login/readByUsername
2. NotificationsController -> create, update, readAllByUserId
3. PresencesController -> create, readAllByUserId
4. EvaluationsController -> readByEvaluationForId, create
5. WebsMiddleware -> bakal ngeread user role dan return string buat arahin user
6. GuardsMiddleware -> bakal read roles buat liat akses crud berdasarkan user role, return type boolean
7. Model kalo bisa, kalo ga gausah
8. database creation
9. database seeding
--tambahin kalo dah kepikiran

pembagian kerjaan :
1. alfian : fe
2. fauzan : fe
3. benaya : be
4. dava : be
5. rafi fajar : rangkap biar adil