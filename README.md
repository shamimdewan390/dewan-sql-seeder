# README

here is doc


## Installation

```
composer require dewan/dewan-sql-seeder
```
## Basic use

### Step- 1
> Create folder named "dewan/sql" in database directory 


### Step- 2
> Download or export .sql file from database

### Step- 3
> Remove extra code. The code look like:

```
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES 
(1, 'name', 'email@test.com', NULL, '', NULL, NULL, NULL),
```

### Step- 4
> Run command:  
``` php artisan dewan:sql-seeder```

> The command copy all sql file to public/sql directory then run migrate:fresh and seed all data form sql file.

![My Image](dewan-sql-seeder/src/images/Group.png)