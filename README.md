# Pterodactyl Canva Theme

Theme Pterodactyl v1.x dengan tampilan **Canva Dark Mode** serta fitur **Protection Management** bawaan di halaman Admin Panel.

## Fitur
- Aksen warna Canva (`#00C4CC` & `#7D2AE8`)
- Dashboard Admin khusus untuk pengaturan proteksi
- Auto installer script

# Panduan Instalasi

Jalankan perintah ini di VPS Pterodactyl kamu (sebagai root):

```bash
cd /tmp
git clone [https://github.com/USERNAME/pterodactyl-canva-theme.git](https://github.com/USERNAME/pterodactyl-canva-theme.git)
cd pterodactyl-canva-theme
chmod +x install.sh
./install.sh

# Quick Start Guide

1. Jalankan `install.sh` di server VPS.
2. Buka Admin Panel Pterodactyl.
3. Menu **Protection Management** dapat diakses pada sidebar kiri di bawah menu **Settings**.

# Development Guide

Jika ingin mengedit CSS/JS:

1. Edit file di `resources/css` atau `resources/js`
2. Jalankan perintah kompilasi:
   ```bash
   npm run watch

# Changelog

## [1.0.0] - 2026-07-20
- Release awal Canva Dark Theme
- Penambahan UI Protection Management
- Script otomatisasi installer
# Cara Upload ke GitHub

1. Buat repository baru di GitHub.
2. Jalankan perintah git berikut dari folder project kamu:

```bash
git init
git add .
git commit -m "Initial commit Canva Theme"
git branch -M main
git remote add origin [https://github.com/USERNAME/pterodactyl-canva-theme.git](https://github.com/USERNAME/pterodactyl-canva-theme.git)
git push -u origin main
