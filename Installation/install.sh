#!/bin/bash

PTERO_DIR="/var/www/pterodactyl"

echo "[KALL XTREME X] Memulai Injeksi Canva Theme & Protection Panel..."

if [ ! -d "$PTERO_DIR" ]; then
    echo "[!] Directory Pterodactyl tidak ditemukan di $PTERO_DIR"
    exit 1
fi

# Pindah ke directory pterodactyl
cd $PTERO_DIR || exit

echo "[+] Menyalin file tema dan sistem proteksi..."
cp -r /tmp/pterodactyl-canva-theme/resources/* resources/
cp -r /tmp/pterodactyl-canva-theme/app/* app/
cp -r /tmp/pterodactyl-canva-theme/database/* database/
cp /tmp/pterodactyl-canva-theme/webpack.mix.js .
cp /tmp/pterodactyl-canva-theme/tailwind.config.js .
cp /tmp/pterodactyl-canva-theme/package.json .

echo "[+] Mendaftarkan Route Proteksi..."
if ! grep -q "ProtectionRoutes.php" routes/admin.php; then
    echo "require base_path('app/Routes/ProtectionRoutes.php');" >> routes/admin.php
fi

echo "[+] Menjalankan Migrasi Database..."
php artisan migrate --force

echo "[+] Compiling Asset UI..."
npm install
npm run build || npm run production

echo "[+] Clearing Cache..."
php artisan optimize:clear
chown -R www-data:www-data $PTERO_DIR/*

echo "[✔] Pemasangan Canva Theme & Protection Panel Selesai!"
