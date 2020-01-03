# TP IGL
the project aims to facilitate the organization of the permutaions between groups.

## Team members:

- [Saoud Abderraouf](https://github.com/saoudiabderraouf)
- [Aboutaleb Noussaiba](https://github.com/noussaiba99)
- [Mimene Younes](https://github.com/younes38)

## About the architecture
![Architecture of the project](https://github.com/noussaiba99/tp_Igl/blob/master/soa.PNG)

## Intructions to test the project localy:
1. Clone GitHub repo for this project locally
`git clone https://github.com/noussaiba99/tp_Igl projectName`

2. cd into the project
`cd projectName`

3. Install Composer Dependencies
`composer install`

4. Install NPM Dependencies
`npm install`

5. Create a copy of your .env file
`cp .env.example .env`

6. Generate an app encryption key
`php artisan key:generate`

7. Create an empty database for our application

8. In the .env file, add database information to allow Laravel to connect to the database

9. Migrate the database
`php artisan migrate`

10. launch the project
`php artisan serve`
