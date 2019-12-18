# marketplace
Ne pas oublier de configurer le fichier parameters.yml selon vos parametres de base de données
Créer la base de données
php bin/console doctrine:database:create
Importer les tables de la base existante dans votre base
php bin/console doctrine:schema:update
