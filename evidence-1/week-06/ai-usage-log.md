# AI Usage Log - Pertemuan 6

| Masalah/tujuan | Saran AI | Keputusan | Hasil uji |
|---|---|---|---|
| Branching diskon | Pisahkan aturan ke `getDiscountPercent()` | Diterima | Mahasiswa 20%, guru 15%, umum 0% |
| Checkbox kosong | Gunakan `$_POST['interests'] ?? []` dan validasi array | Diterima | Tidak ada warning saat minat kosong |
| Looping | Render kursus/minat/fasilitas dari array dengan `foreach` | Diterima | Data baru muncul tanpa copy-paste markup |