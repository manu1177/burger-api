# Mettre en place le projet PHP OMDB

## Pré-requis

- WSL2
- Docker installé sur WSL

## Récupérer le projet en local

Dans votre dossier wsldev/projects

```
git clone [urlDuDépot]
```

Puis on va se rendre dans le dossier cloné avec

```
cd php-omdb
```

## Construire le conteneur

S'assurer d'être bien placé au même endroit que le fichier docker-compose.yml et exécuter la commande suivante

**La première fois**

```
docker compose up --build -d
```

**Les fois suivantes**

```
docker compose up -d
```

## Vérifier

Vous devriez avoir accès aux URLs suivantes :

[http://localhost:8080](http://) pour votre site

[http://localhost:8025](http://) pour MailPit

## Éteindre le conteneur

Dans le même répertoire que docker-compose.yml

```
docker compose down
```
