## Setup Instructions
### Run by Locally

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
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=student_database
DB_USERNAME=root
DB_PASSWORD=root
```

5. Generate key: 
```
php artisan key:generate
```

5.Migrate the database
```
php artisan migrate
```

6. Install NPM package: 
```
npm install
```

7. Run: 
```
npm run dev
```

8. Run the application: 
```
php artisan serve
```

9. Open [http://127.0.0.1:8000](http://127.0.0.1:8000) in your browser

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
