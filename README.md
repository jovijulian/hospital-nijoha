## Nijoha Hospital App

![Dashboard](https://user-images.githubusercontent.com/53847981/216038618-b0d02916-9e17-48bf-bb8c-26170e0e1dd1.png)

Nijoha Hospital App merupakan singkatan dari NIsa, JOvi, HAiran Hospital yang merupakan kontribusi dalam melakukan pengembangan proyek Aplikasi Rumah Sakit ini.
Aplikasi ini merupakan Tugas Besar dari Mata Kuliah Praktek Pemrograman Website 2 dengan tema menggunakan Framework Laravel. Pada pengembangan aplikasi ini menggunakan Laravel 9 dengan Database MySQL. Menu yang terdapat di dalam aplikasi adalah
- Polyclinics
- Doctors
- Patients


## Polyclinics

![Polyclinics](https://user-images.githubusercontent.com/53847981/216041115-cbf6e3b6-0f67-40d0-b8f2-e6b886d77b33.png)

Pada menu ini berfungsi untuk mengelola data Poliklinik.

## Polyclinic Detail

![Detail Polyclinics](https://user-images.githubusercontent.com/53847981/216041432-96a7ef25-fba8-47ee-ad43-5b683d4b5d95.png)

Pada detail poliklinik akan menampilkan data poliklinik dengan data dokter yang bertugas pada poliklinik itu dan data pasien yang di rawat pada poliklinik itu.

## Create Polyclinic

![Create Polyclinic](https://user-images.githubusercontent.com/53847981/216049144-56d1d67d-536b-43f1-9342-0415799ad99c.png)

Berikut tampilan untuk menambahkan data Poliklinik.

## Doctors

![Doctors](https://user-images.githubusercontent.com/53847981/216042786-3577b718-39d8-457f-ab7b-016b04bcb114.png)

Pada menu ini berfungsi untuk mengelola data Dokter.

![Regist Code Doctor](https://user-images.githubusercontent.com/53847981/216047691-b8ffa153-6b63-440b-a297-cd6d19d2968e.png)

Pada Registration Number di Dokter berisikan format seperti berikut D(Kode dokter) + Huruf Awal pada Nama dokter + tanggal ketika ditambahkannya data dokter + 001(increment). <br />
Ketika di hari yang sama contoh (2023-01-30) akan menambahkan 3 data dokter maka 3 digit terakhir pada Registration Number akan berjumlah 003 pada data dokter yang terakhir ditambahkan. <br />
Dan juga ketika sudah berganti contoh (2023-02-01) akan menambahkan 1 data dokter, maka 3 digit terakhir pada Registration Number akan melakukan reset, tidak melanjutkan pada data yang ditambahkan sebelumnya pada tanggal 2023-01-30. Data yang ditambahkan pada 2023-02-01 akan menjadi 001 kembali. <br />

## Doctor Detail

![Doctor Detail](https://user-images.githubusercontent.com/53847981/216044768-af3c410c-ef78-44aa-aaea-0077c1b24fde.png)

Pada detail dokter akan menampilkan data dokter dengan data pasien yang di rawat oleh dokter tersebut.

## Create Doctor

![Create Doctor](https://user-images.githubusercontent.com/53847981/216045292-f9132c50-b4dd-47b8-9d54-3856b752d8c2.png)

Berikut tampilan untuk menambahkan data Dokter. Pada menu ini dapat menambahkan dokter sesuai dengan Poli yang ia ditugaskan.

## Patients

![Patients](https://user-images.githubusercontent.com/53847981/216046787-0b8714ca-aa4f-4d4a-a43e-6f36c987291d.png)

Pada menu ini berfungsi untuk mengelola data Pasien.

![Regist Code Patient](https://user-images.githubusercontent.com/53847981/216047123-faafa300-cf6d-435c-ba6e-0d86ecf7c6a4.png)

Pada Registration Number di Pasien berisikan format seperti berikut P(Kode pasien) + Huruf Awal pada Nama pasien + tanggal ketika ditambahkannya data pasien + 001(increment). <br />
Ketika di hari yang sama contoh (2023-01-30) akan menambahkan 2 data pasien maka 3 digit terakhir pada Registration Number akan berjumlah 002 pada data pasien yang terakhir ditambahkan. <br />
Dan juga ketika sudah berganti contoh (2023-01-31) akan menambahkan 1 data pasien, maka 3 digit terakhir pada Registration Number akan melakukan reset, tidak melanjutkan pada data yang ditambahkan sebelumnya pada tanggal 2023-01-30. Data yang ditambahkan pada 2023-01-31 akan menjadi 001 kembali. <br />

## Patient Detail

![Detail patient](https://user-images.githubusercontent.com/53847981/216047986-8b54900a-11ce-4f55-9b10-3b32c9df6725.png)

Pada detail pasien akan menampilkan data pasien.

## Create Patient

![Create Patient](https://user-images.githubusercontent.com/53847981/216048478-afdb5ca9-f2b5-41ba-9948-0cbfbcbb1d8e.png)
![Create Patient 2](https://user-images.githubusercontent.com/53847981/216048897-091aa721-b25c-4ecd-9914-635786d8ef83.png)

Berikut tampilan untuk menambahkan data pasien. Pada menu ini dapat menambahkan pasien sesuai dengan poli yang ia dirawat dan mampu memfilter dokter apa saja yang bertugas pada poli tersebut seperti contoh pada gambar di atas.

## Data Contributors
- Hairan Kani Jatnika - 3IF-01 - 200914016
- Jovi Julian Hendri - 3MI-01 - 200613007
- Khoirunisa Mujahidah Salman - 3MI-02 - 200313017

Dosen pengampu: <b>Rudy Sofian, M.Kom</b>
