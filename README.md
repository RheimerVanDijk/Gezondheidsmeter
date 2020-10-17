# Gezondheidsmeter - school project

This is a **school project** for senior years.

## Setup
What it takes to run this project.

### Database.
You need a MariaDB/MySql Database. The needed seeder / setup for this is defined [here](https://github.com/RheimerVanDijk/Gezondheidsmeter/tree/master/seeder)


Configuration for the website is defined in ``/src/classes/dbClass.php``
In there you need to change needed variables
```php
    public function connect() {
      // host=ENTER YOUR DB IP HERE
      // dbname=ENTER YOUR DB NAME HRE
      $dns = 'mysql:host=127.0.0.1;dbname=gezondheidsmeter';
      $user = 'root'; // Username of the database user
      $pass = ''; // Password of the database user

      return new PDO($dns, $user, $pass);
    }
```

### Running the website
Simple, have [PHP installed](https://www.php.net/downloads) and then run the following command:
```bash
php -S localhost:80
```

after that you will be able to access the website with [http://localhost](http://localhost)
