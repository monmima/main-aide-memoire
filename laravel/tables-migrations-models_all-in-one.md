## Tables, Migrations And Models

### Creating A New Table, Migration, Model And So Forth

To generate multiples files in a single command, use:

        php artisan make:model ModelName -mc --resource

The resource flag is what pre-generates the methods in your controller for you different routes (/photos/create, /photos/{id}/edit, etc.). A similar flag is --api.

Note: In **-mc**, **m** stands for ***migration*** and **c** stands for ***controller***. You can also add **api** to the end of the string if you want to use AJAX.

This will create the:

- Migration
- Project model
- Controller