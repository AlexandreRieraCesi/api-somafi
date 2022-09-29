#Reverse Engineering
##Make entities from database to symfony

In root folder, you have to run this command in terminal :
```php bin/console doctrine:mapping:import "App\Entity" annotation --path=src/Entity```

##To map entities in ApiPlatform, you must add :
- ```use ApiPlatform\Metadata\ApiResource;``` at the top of your entity Class file
- ```#[ApiResource()]``` before your Class opening

##Check routes in browser
To make sure it works, go in your browser on [http://127.0.0.1:8000/api]

