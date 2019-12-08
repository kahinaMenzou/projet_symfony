Pré-requis
    • avoir composer installé (gestionnaire de package php)
    • avoir yarn installé (gestionnaire de packages, surcharge npm)
Installation
    • composer install, installe les packages php décrits dans composer.json
    • yarn install, installe les packages js décrits dans package.json
Et ensuite pour l'affichage :
    • ./bin/console s:r ou ./bin/console server:run ou sudo symfony server:start , démarre un serveur web local de développement
    • yarn watch, exécute en continu 'encore' qui agrège les js et styles, dans où il y a des beugs au niveau l'installation de Yarn vous pouvez passer par npm install puis utiliser ./node_modules/.bin/encore dev --watch à la place de yarn watch.
Les entités : projet et hobbies :
    • ./bin/console make:entity
      les fixtures
    • ./bin/console make:Fixtures : pour creation d’un fixtures
    • composer require --dev doctrine/doctrine-fixtures-bundle : pour avoir la derniére version du bundle
    • php bin/console doctrine:fixtures:load : pour avoir les attributs des entités.



