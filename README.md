# Real estate

1. **DB**
    - trains
        - id | bigInteger
        - azienda | string(100)
        - stazione_di_partenza | string(100)
        - stazione_di_arrivo | string(100)
        - giorno | date
        - orario_di_partenza | datetime(6)
        - orario_di_arrivo | datetime(6)
        - numero_di_carrozze | bigInteger
        - cancellato | boolean
        - in_orario | boolean
        - price | int
        - codice_treno | bigint
        - created_at | date
        - modified_at | date
1. **CREATE_DB**
1. **ENV_FILE**
    - if the env file exist we need to update with DB informaion, else dosn not exist:
        - copy the env file in the same folder
        - rename properly
        - execute command: php artisan key:generate
1. **COMMAND**

    - execute command: php artisan make:model NomeModel(singolare of table name), to create model, controller, seeder

1. **MODEL**
    - train
1. **CONTROLLER**
    - TrainController.php
1. **MIGRATION**
    - create_Trains_table
1. **SEEDER**
    - TrainSeeder.php
1. **COMMAND**
    - execute command: php artisan migrate
