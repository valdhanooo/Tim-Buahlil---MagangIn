# Product Requirement Document (PRD)

# MagangIn

## 1. Overview & Problem Statement

### Project Information

* **Project Name:** MagangIn
* **Target Release:** Day 5 (Final Hackathon Presentation)

### Objective

Menyediakan platform pencarian magang yang terfokus pada fleksibilitas jadwal kuliah bagi mahasiswa Universitas Pamulang (UNPAM), sekaligus memotong birokrasi pengajuan surat rekomendasi kampus melalui integrasi otomatis.

### Problem Statement

#### Schedule Conflict

* 83,33% mahasiswa UNPAM mengeluhkan jadwal kuliah yang bentrok dengan jam operasional magang konvensional.

#### Information Void

* 91,67% mahasiswa merasa kesulitan atau cukup kesulitan mencari informasi magang resmi di lingkungan internal UNPAM.
* 83,33% mahasiswa akhirnya mencari informasi magang melalui Instagram atau sumber tidak resmi yang keabsahannya belum terjamin.

### Proposed Solution

Platform agregator lowongan magang berbasis web dengan fitur:

* **Smart Filter** untuk fleksibilitas waktu kerja:

  * Remote
  * Hybrid
  * Part-time
  * Weekend

* **Zero-Friction Magic Link** untuk mempermudah dosen memberikan rekomendasi digital tanpa perlu login ke platform.

---

# 2. User Persona & Target Market

## Primary User

Mahasiswa aktif Universitas Pamulang, khususnya Semester 6–8 yang sedang memprogramkan mata kuliah magang.

Target utama mencakup:

* Mahasiswa Reguler
* Mahasiswa Kelas Karyawan (Reguler B)
* Mahasiswa yang membutuhkan fleksibilitas waktu tinggi

## User Roles

### Customer (Mahasiswa)

Tugas dan kebutuhan:

* Mencari lowongan magang yang sesuai jadwal kuliah
* Melakukan pencocokan jadwal
* Mengirim lamaran
* Meminta rekomendasi dosen
* Memantau status aplikasi

### Validator (Dosen Pembimbing)

Tugas dan kebutuhan:

* Menerima notifikasi permohonan rekomendasi melalui email resmi
* Memberikan verifikasi atau rekomendasi hanya dengan satu klik
* Tidak perlu membuat akun
* Tidak perlu login ke platform

---

# 3. Scope of Work (MVP Features)

Prinsip pengembangan:

> "Yang penting jalan dulu, jangan sempurna dulu tapi tidak selesai."

## A. Fitur Krusial (Wajib Ada untuk Demo)

### 1. Smart Filter & Database Lowongan

Fitur pencarian lowongan berdasarkan fleksibilitas waktu kerja:

* Part-time
* Remote
* Hybrid
* Weekend

**Validasi Data:**
66,67% responden menganggap fitur ini sangat membantu.

### 2. Formulir Aplikasi Lamaran Terintegrasi

Modal pop-up yang memungkinkan mahasiswa:

* Mengunggah CV
* Mengunggah portofolio
* Mengonfirmasi kesesuaian jadwal kuliah dengan jadwal magang

### 3. Zero-Friction Endorsement (Magic Link Dosen)

Sistem otomatis yang:

1. Mengirim email rekomendasi kepada dosen.
2. Menyediakan tautan unik (Magic Link).
3. Memungkinkan dosen menyetujui rekomendasi tanpa login.

### 4. Real-Time Tracker (Statis)

Halaman riwayat sederhana yang memungkinkan mahasiswa:

* Melihat status lamaran
* Mengetahui progres pengajuan magang

## B. Out of Scope (Future Release)

### Dashboard Kompleks Dosen

Tidak termasuk dalam MVP karena keterbatasan waktu pengembangan.

Sebagai gantinya:

* Seluruh proses persetujuan dosen menggunakan Magic Link melalui email.

### Sistem Notifikasi AI Otomatis

Ditunda untuk versi komersial berikutnya agar tim fokus menyelesaikan alur utama aplikasi.

---

# 4. Business Flow (User Journey)

## 1. Discovery

Mahasiswa:

* Membuka halaman beranda MagangIn
* Menggunakan Smart Filter
* Mencari lowongan yang tidak bentrok dengan jadwal kuliah

Contoh:

* Remote Internship
* Weekend Internship

## 2. Detail & Application

Mahasiswa:

1. Mengklik tombol **Lihat Detail**
2. Mengklik tombol **Lamar Sekarang**
3. Mengisi formulir lamaran
4. Memasukkan:

   * Nama Dosen Pembimbing
   * Email Resmi Dosen UNPAM

## 3. Zero-Friction Validation

Sistem:

1. Mengirim email otomatis kepada dosen
2. Menyertakan Magic Link unik

Dosen:

1. Membuka email
2. Mengklik tombol persetujuan

Sistem:

1. Memvalidasi persetujuan
2. Memperbarui status lamaran mahasiswa

## 4. Tracking

Mahasiswa membuka halaman riwayat untuk melihat status terbaru:

**Disetujui Dosen & Dikirim ke Perusahaan**

---

# 5. Technical Stack & Git Rules

## Technology Stack

### Frontend

* React + ViteJS atau Next.js
* Tailwind CSS

### Backend

* Node.js atau Laravel

### Database

* MySQL atau Supabase

---

## Git Version Control Rules

### Branching Strategy

Dilarang keras melakukan seluruh pekerjaan langsung pada branch:

* main
* master

Setiap fitur wajib menggunakan branch tersendiri.

Contoh:

```bash
feature/smart-filter
feature/magic-link-dosen
feature/job-tracker
```

### Commit Message Rules

Commit harus deskriptif dan menjelaskan perubahan yang dilakukan.

Contoh:

```bash
feat: add smart filter for internship categories
feat: implement magic link approval flow
fix: resolve application submission validation
```

Dilarang menggunakan commit message seperti:

```bash
first commit
bismillah
update
revisi
```

---

# 6. Emergency Backup Plan (Day 3 Preparation)

## Live Demo Risk Mitigation

Sebelum Day 5:

* Tim wajib merekam seluruh alur aplikasi (screen recording).
* Rekaman harus mencakup:

  * Pencarian lowongan
  * Pengiriman lamaran
  * Pengiriman email dosen
  * Persetujuan melalui Magic Link
  * Perubahan status aplikasi

### Contingency Plan

Jika saat presentasi terjadi:

* Bug aplikasi
* Gangguan server
* Gangguan internet
* Error sistem lainnya

Maka Hustler akan langsung menampilkan video rekaman demo yang telah dipersiapkan sebelumnya sehingga alur presentasi tetap berjalan lancar dan meyakinkan di hadapan dewan juri.
