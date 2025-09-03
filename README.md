# spatie-admin-panel

## **Installation Guide**

### 1. Clone the Repository

```bash
git clone https://github.com/official-mafuzalam/spatie-admin-filemanager

```

Change directory

```bash
  cd spatie-admin-filemanager
```

NPM Install

```bash
  npm install
```

Composer Install

```bash
  composer install
```

NPM Run

```bash
  npm run dev
```

Serve the project

```bash
  php artisan serve
```

Migrate the database

```bash
  php artisan migrate
```

Seed the Data

```bash
  php artisan db:seed
```

Migration fresh and seed

```bash
  php artisan migrate:fresh --seed
```
Link to storage

```bash
  php artisan storage:link
```

Browse the project

```bash
  http://127.0.0.1:8000
```

## Production:

```bash
composer install --optimize-autoloader --no-dev
```

```bash
php artisan optimize:clear
```

---

## Usage

After installation, access the admin panel at `/admin`. Use the default credentials or create a new admin user.