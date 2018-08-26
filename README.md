# elevenlabs-symfoapi - API REST - Symfony 4

## Note :

Ce projet est destiné à être utilisé avec le [front react](https://github.com/Vubs/eleven-react)
Vous trouverez les informations pour installer ce second projet sur son Repo.

## Installation

Pour utiliser vous devez d'abord installer docker

* [Windows](https://docs.docker.com/windows/started)
* [OS X](https://docs.docker.com/mac/started/)
* [Linux](https://docs.docker.com/linux/started/)

Après avoir cloné le projet utiliser la commande suivante à la racine du projet:

```
docker-compose up -d
```

Une fois les containers lancés, nous accédons au bash pour pouvoir créer la base de donnée et y injecter des Fixtures.
On utilise les commandes suivantes :

Se connecter au bash
```
docker-compose exec php-fpm bash
```

Creer la db
```
bin/console doctrine:schema:build
```

Loader les fixtures
```
bin/console doctrine:fixture:load
```

## Accès au projet:
On peut maintenant accéder au projet avec localhost:8000


## Endpoints
L'api met a disposition 3 routes :
* GET  : /api/characters : qui retourne tous les personnages
* GET  : /api/characters/{id} : qui retourne les infos d'un personnage en particulier
* POST : /api/characters : qui permet d'insérer un personnage

Pour la route POST elle peut être testé à l'aide de l'outil [Postman](https://www.getpostman.com/)

