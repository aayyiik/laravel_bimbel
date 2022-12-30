# Halo semua! 

Project kali ini bernama **Bimbel**.\
**Bimbel** adalah sistem informasi yang digunakan untuk mencatat semua aktivitas kemajuan murid.

Gambaran Sistem :
- Pendaftaran (melibatkan tabel murid)
- Pembelajaran (melibatkan tabel kemajuan dan detail kemajuan)
- Pengaturan peran (melibatkan tabel detailperan)
- Proses pendukung (melibatkan tabel pengurus, peran, buku, bab,buku)

Keterangan tambahan :

- Aktor staf -> mengelola proses pengaturan peran, pendaftaran dan proses pendukung
- Aktor guru -> mengelola proses pembelajaran
- Aktor orang tua -> melihat kemajuan putra/putrinya.
- Attribute password menggunakan enkripsi (md5/ekripsi lainnya)
- Attribute aktif (1= aktif (default) dan 0=tidak aktif)
- Attribute gender (M = male/laki2 dan F = Female/Perempuan)
- Attribute kemajuan.status (N=naik, T=tetap (default), M=mundur)

Aktor :
- Orang Tua
- Guru
- Staf

Proses pengembangan :
- Laravel 8
- DB MySql
- Boostrap

Dikerjakan Oleh :
- Ari Lathifatul Chusna (saya)
