# shopping-cart
Simple shopping cart

##Stack :
- Laravel 5.8
- php 7.3
- MySQL 5.8


##Two different access :

- Admin - to create products or edit/add roles and permission
https://shoppingcard.test/admin


-  Normal front -end  :
https://shoppingcard.test/products


##Install :

1. Prepare your .env file there with database connection and other settings
2. Run composer install command
3. Run php artisan migrate --seed command. Notice: seed is important, because it will create the first admin user for you.
4. Run php artisan key:generate command.
5. npm install
6. npm run dev

And that's your  login details for the admin panel :
Username:	admin@admin.com
Password:	password