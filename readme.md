###Project Status : WIP

------------
#Monitoring Kinerja
###Kelompok 4
- Alfian Fakhrudin (Frontend)
- Benaya Adi Sahat (Backend)
- Dava Alif (Backend)
- Muhammad Fauzan M (Frontend)
- Rafi Fajar S (Backend)

##Task List
frontend :
- [ ] register (first name, last name, password, picture, address, dob, position, division)
- [x] login (username, password)
- [ ] dashboard pekerja- [ ] dashboard head division & superadmin
- [ ] halaman create laporan buat pekerja
- [ ] halaman create absen buat pekerja
- [ ] halaman pencarian laporan buat head division
- [ ] halaman profile user (cuma bisa ganti picture, address dan password)


backend :
- [ ] UsersController -> create, update, readById, login/readByUsername
- [ ] NotificationsController -> create, update, readAllByUserId
- [ ] PresencesController -> create, readAllByUserId
- [ ] EvaluationsController -> readByEvaluationForId, create
- [ ] WebsMiddleware -> bakal ngeread user role dan return string buat arahin user
- [ ] GuardsMiddleware -> bakal read roles buat liat akses crud berdasarkan user role, return type boolean
- [ ] Model kalo bisa, kalo ga gausah
- [ ] database creation
- [ ] database seeding

#Database Design
[![DBDesign](https://kuliah.fauzanmhr.my.id/0:/ASSET/drawSQL-export-2023-01-02_12_49.png "DBDesign")](https://kuliah.fauzanmhr.my.id/0:/ASSET/drawSQL-export-2023-01-02_12_49.png "DBDesign")

##Folder Structure :
1. controller : tempat menyimpan file controller
2. model : tempat menyimpan file model
3. middleware : tempat menyimpan file middleware
4. database/users : tempat menyimpan image user, pathnya akan tersimpan di database table users
5. web : tempat menyimpan file web
6. asset/css : tempat menyimpan file css
7. asset/img : tempat menyimpan file img untuk website
8. asset/js : tempat menyimpan file js
