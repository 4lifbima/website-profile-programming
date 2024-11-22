
## Installation

Install Company profile dengan composer

```bash
  cd company-profile-gas
  composer Install
```
Kemudian copypaste .env.example
```bash
  cp .env.example .env
```
Buatlah key generate
```bash
  php artisan key:generate
```
cek file .env and Kemudian Samakan dengan nama DB_DATABASE dengan nama database di MySql

Jalankan migrate dengan seed
```bash
  php artisan migrate --seed
```
Buatlah symlink pada project
```bash
  php artisa storage:link
```
Terakhir jalankan ```php artisan serve```

Buka browser and menjalankan laravel
```bash
  http://127.0.0.1:8000/
```
## Demo

Url : ```http://127.0.0.1:8000/admin/login```

Untuk Login admin:
```php
  username: admin@gmail.com
  password: password
```

## Screenshots

![App Screenshot](https://github.com/destroylord/company-profile-gas/blob/main/public/ss/auth.png)
![App Screenshot](https://github.com/destroylord/company-profile-gas/blob/main/public/ss/admin.png)
![App Screenshot](https://github.com/destroylord/company-profile-gas/blob/main/public/ss/herro.png)

