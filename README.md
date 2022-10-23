## Admin Panel

## Installation

### Clone the Repository

| Type | URL |
| -- | -- |

### Install Composer Packages
```shell
composer install
```

### Create .env
```shell
cp .env.example .env
```
### Database set up
Change your database name in env file.
```shell
php artisan migrate --seed
```
### Key generate
```shell
php artisan key:generate
```
### Compile assests
```shell
npm install 
```
```shell
npm run dev
```
or
```shell
npm run build
```


___

### Tool Requirements

| Title | Version |
| -- | -- |
| Laravel | 9.32 |
| Nginx | 1.21.6 |
| PHP | 8.1 |
| MySQL | 8.0.27 |
| Composer | 2.3.7 |
