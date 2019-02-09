# Hire A Laid Off

> **Hire a Laid Off is a project based on a recent project, Hire A BuzzFeeder** made by me, [Alexandre Mouriec](https://alexandremouriec.com), to help people find a new home after being laid off from their company.

![](/Users/Alexandre/Projects/hirealaidoff/CoverREADME.jpg)

When BuzzFeed and other important media companies like the Huffington Post laid off hundreds of employees, I decided to build a website highlighting people, to help them find a new job. After seeing the impact the project had, receiving messages from laid offs being contacted by companies and questions to know if the project was going to be generalized to other company layoffs,  **I am now making the project open-source here on Github**. 

Below is a small tutorial explaining how to set up your own to help more people needing support in a difficult time.



## ✍️ Initial Steps

First, to use the project, you will *need to fork this project* using the fork button on Github.

Now you have your own project and can now start setting it up to add people.



## 👨‍💻CodeIgniter Configuration :

I decided to use the CodeIgniter framework since I prefer to develop using the MVC method. The website is based on this framework, which needs specific settings to work.

You have 3 files to configure :

##### Config.php

First you need to configure the config.php file, located in application/config/config.php

`$config['base_url'] = "";`

You add between "" the URL of your website. If you don't have one, you can read the Hosting section where I write about the platform I used to host the project.

##### Routes.php

The MVC method stands for Method, View and Controller. You need to specify your default controller in application/config/routes.php

`$route['default_controller'] = 'Hire/index';`

##### Database.php

The latest part is the hardest part if you are not familiar with programming and database. The database file in application/config/database.php is going to help you connect to the database where all the information is going to be stored.

To set up this file, you need to fill the hostname, username, password, database, dbdriver (postgre or mysqli) fields in this file. **This information is essential and confidential so you should not make it public on Github, only put it where you host the website.**

`

```php
$db['default'] = array(
    'dsn'	=> '',
    'hostname' => '',
    'username' => '',
    'password' => '',
    'database' => '',
    'dbdriver' => 'postgre',
    'dbprefix' => '',
    'pconnect' => false,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => false,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => false,
    'compress' => false,
    'stricton' => false,
    'failover' => array(),
    'save_queries' => true
);`
```



## 🗄Database Configuration :

To create a database in SQL, you need Database knowledge. To make it easier for everyone, I decided to build only one table, so people familiar with Excel and CSV will understand better. This is definitely not the best and right way to build a project (my projects always have several tables and constraints)

```sql
CREATE TABLE _journalists (
  id SERIAL UNIQUE, 
  idPhoto varchar(200),
  name varchar(50),
  surname varchar(50),
  bio varchar(200),
  expertise varchar(280),
  location varchar(30),
  email varchar(50),
  url varchar(150),
  CONSTRAINT journalists_pk PRIMARY KEY (id)
);
```



## 🏨 Hosting

 For hosting, I decided to use [Heroku](https://www.heroku.com).  My setup is the following one. I have a PHP builpack and a PostgreSQL addon for the database.

- For the PHP Buildpack, you can read more [here](https://devcenter.heroku.com/articles/getting-started-with-php).

- For the Postgre add-on, you can read more [here](https://www.heroku.com/postgres).

When your environment is configured, you can now modify the code, add people to your database, and host your website to publish it.

## 🚀 Last Steps :

Your project is finished! Thank you for using the project to help people who have been laidoff 🙏  "Being able to use skills to help people is what makes tech powerful" Your website is now going to help people find a new job!

Feel free to share your website with me on Twitter [@mrcalexandre](https://twitter.com/mrcalexandre) 😊



------



> The website design is based on a template from Creative Tim, which I would like to thank. I would also like to thank one of my best friends Samuel for helping me on the project, and one of my friends Antoine for letting me use some parts of an old project to build Hire A BuzzFeeder. 

