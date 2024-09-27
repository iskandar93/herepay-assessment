## Setup Instructions

1. Clone the repository
```git clone https://github.com/iskandar93/herepay-assessment.git```

2. Install composer package and dependencies
```composer install```

3. Copy `.env.example` to `.env` file

4. Configure database
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=root
DB_PASSWORD=
```

5. Generate key
```php artisan key:generate```

6. Install NPM package
```npm install```

7. Run NPM
```npm run dev```

8. Run the application
```php artisan serve```

9. Open [http://localhost:8000](http://localhost:8000) in your browser
