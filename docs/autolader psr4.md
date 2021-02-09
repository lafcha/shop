# Autoloader PSR 4

## Etape 1

J'imagine le nom d'un dossier virtuel qui contiendra toute mon application.
Ici, on prendra "Oshop"

Pour lier dans un premier temps ce dossier virtuel Oshop au dossier physique "app" qui contient notre application, on complète composer.json avec le code suivant :

```php
    "autoload": {
        "psr-4": {"Nom du dossier principal virtuel\\" : "nom du dossier physique app/"}
    }
```

## Etape 2

Commencer à ranger les classes dans des namespaces en respectant le nom du dossier mentionné en composer.json

ET

En rangeant dans un dossier physique

Exemple : app/Controller => Oshop\Controllers

## Etape 3

Corriger toute les erreurs en placant des use dans les fichiers (sous namespace).

## Etape 4

Une fois que tout est terminé, dans le terminal, on fait :

```
composer dumpautoload
```

ou

```
composer install
```

## Etape 5

Commenter/ supprimer les require & vérifier que tout fonctionne
