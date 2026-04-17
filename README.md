Berikut aku satukan jadi **1 file README.md utuh, siap copy-paste ke GitHub tanpa potongan**.

---

````md
# 🍎 Toko Buah - Laravel CRUD Project

Project ini adalah aplikasi CRUD sederhana menggunakan Laravel 12 untuk mengelola data buah (nama, jenis, harga, stok).

---

# ⚙️ REQUIREMENTS

Sebelum memulai, pastikan sudah install:

- PHP 8.2 / 8.3
- Composer
- Laragon (recommended)
- MySQL (via Laragon)
- VS Code
- Browser (Chrome/Edge)

---

# 🚀 INSTALL LARAGON

1. Download Laragon:
   https://laragon.org/download/

2. Install Laragon (Full Version)

3. Jalankan Laragon:
   - Klik Start All

4. Pastikan:
   - Apache Running
   - MySQL Running

---

# 🗄️ BUAT DATABASE

Buka terminal Laragon / HeidiSQL:

```sql
CREATE DATABASE toko_buah;
````

---

# 🧱 INSTALL LARAVEL 12

```bash
cd C:\laragon\www
composer create-project laravel/laravel toko-buah
```

Masuk folder project:

```bash
cd toko-buah
```

---

# ⚙️ SETUP ENV

Edit file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=toko_buah
DB_USERNAME=root
DB_PASSWORD=
```

---

# ▶️ JALANKAN PROJECT

```bash
php artisan serve
```

Akses:

[http://127.0.0.1:8000](http://127.0.0.1:8000)

---

# 🧩 BUAT MODEL & MIGRATION

```bash
php artisan make:model Buah -m
```

Edit migration:

```php
Schema::create('buahs', function (Blueprint $table) {
    $table->id();
    $table->string('nama_buah');
    $table->string('jenis');
    $table->integer('harga');
    $table->integer('stok');
    $table->timestamps();
});
```

Jalankan migration:

```bash
php artisan migrate
```

---

# 🧠 BUAT CONTROLLER

```bash
php artisan make:controller BuahController --resource
```

---

# 📦 MODEL (Buah.php)

```php
protected $fillable = [
    'nama_buah',
    'jenis',
    'harga',
    'stok'
];
```

---

# 🌐 ROUTE (web.php)

```php
use App\Http\Controllers\BuahController;

Route::get('/', function () {
    return redirect('/buah');
});

Route::resource('buah', BuahController::class);
```

---

# 🧾 CONTROLLER CRUD

## INDEX

```php
public function index()
{
    $buah = Buah::all();
    return view('buah.index', compact('buah'));
}
```

## STORE

```php
public function store(Request $request)
{
    Buah::create($request->all());
    return redirect()->route('buah.index');
}
```

## EDIT

```php
public function edit($id)
{
    $buah = Buah::findOrFail($id);
    return view('buah.edit', compact('buah'));
}
```

## UPDATE

```php
public function update(Request $request, $id)
{
    $buah = Buah::findOrFail($id);
    $buah->update($request->all());

    return redirect()->route('buah.index');
}
```

## DELETE

```php
public function destroy($id)
{
    Buah::destroy($id);
    return redirect()->route('buah.index');
}
```

---

# 🎨 VIEW STRUCTURE

```
resources/views/buah/
    index.blade.php
    create.blade.php
    edit.blade.php
```

---

# 📋 INDEX (READ DATA)

```php
@foreach($buah as $b)
    {{ $b->nama_buah }}
@endforeach
```

---

# ➕ CREATE DATA

Form input:

* nama_buah
* jenis
* harga
* stok

POST ke:

```
/buah
```

---

# ✏️ EDIT DATA (PENTING)

Gunakan:

```php
$buah->nama_buah
```

❌ Jangan pakai foreach di edit page

---

# 🗑️ DELETE DATA

```php
<form method="POST">
@csrf
@method('DELETE')
<button type="submit">Hapus</button>
</form>
```

---

# ⚡ TROUBLESHOOTING

## ERROR UMUM:

* “on true” → controller salah return
* “property on null” → data tidak ditemukan
* migration error → database belum migrate

## FIX:

```bash
php artisan optimize:clear
php artisan migrate:fresh
```

---

# 🎯 HASIL AKHIR

✔ CRUD Buah
✔ Laravel 12
✔ MySQL Database
✔ Create, Read, Update, Delete

---

# 👨‍💻 AUTHOR

Laravel CRUD Project (Learning Purpose)

```

---

Kalau kamu mau next level:
👉 aku bisa upgrade ini jadi **README profesional GitHub (dengan badge, screenshot, struktur folder, install clone git, dll)**
```
