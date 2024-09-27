## Setup Instructions
### Run by Locally

1. Clone the repository
```
git clone https://github.com/iskandar93/sqr-assessment.git
```

2. Install composer package and dependencies by run
```
composer install
```

3. Copy `.env.example` to `.env` file

4. Configure database
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=student_database
DB_USERNAME=root
DB_PASSWORD=
```

5. Generate key: 
```
php artisan key:generate
```

6.Migrate the database
```
php artisan migrate
```

7.Run database seed
```
php artisan db:seed
```

8. Install NPM package: 
```
npm install
```

9. Run: 
```
npm run dev
```

10. Run the application: 
```
php artisan serve
```

11. Open [http://127.0.0.1:8000](http://127.0.0.1:8000) in your browser

### Run by Docker
1. Clone the repository
```
git clone https://github.com/iskandar93/herepay-assessment.git
```

2. Install composer package and dependencies by run
```
composer install
```

3. Copy `.env.example` to `.env` file

4. Configure database
```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=student_database
DB_USERNAME=root
DB_PASSWORD=root
```

5. Run application by Docker
```
docker-compose up -d --build
```

6. Clear config cache:
```
docker-compose run --rm artisan config:cache
```

7. Open [http://127.0.0.1:8000](http://127.0.0.1:8000) in your browser 
