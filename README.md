##Introduction
Web Application for IT Camp 2022 registration. based on Laravel and Livewire.

## Installation
After you cloned this repository, You must have run commands below, Step by step.

1. Install and update packeges via composer
```
composer u
composer i
```
2. Install and compile via npm
```
npm i
npm run dev
```
3. Generate .env file
```
copy .env.example .env
```
4. Generate Laravel app key
```
php artisan key:generate
```
5. Migrate database (You shoud config your databse in .env file before run this command)
```
php artisan migrate --seed
```
6. Run application
```
php artisan serve
```
7. (Optional) If you lazy to run "npm run dev" every time when you change something in .css or .js files, You could run this command. It will automatic compile you .css and .js files when you change something in it.
```
npm run watch
```
