### Technical assessment for EnerGaia

#### Problem description
You work in an e-commerce company. Where the supplier gives products to the company.
The company has an inventory of products where they store products from suppliers.
Make an application to help them to automate this process.
When a user login from a company should see all products they received 
from a supplier and In supplier page, they can see all the products they had to send to the company.


#### Solution
User can have two roles (company-user, supplier user). When any type of user will sign in, they will see their corresponding
dashboard.

Company user credentials:
```
Email: user@company.com
Password: 123456
```
Supplier user credentials:
 ```
 Email: user@supplier-company.com
 Password: 123456
 ```

##### Technology
* Laravel 6.2
* MySQL

##### Setup & run (development)
```bash
composer install
npm install
npm run dev
php artisan migrate
php artisan db:seed
php artisan serve
```

