# exemple-controller-frontal
Exemple d'un controlleur frontal pour votre site portfolio

## Étape 1

Créer votre repository sur github en public.

Clonez celui-ci sur votre machine.

Entrez dans le référenciel sur la branche par défaut : `main`

## Étape 2
Créez des branches par actions, et surtout faires régulièrement des sauvegardes (commit)

    git checkout -b NomDeMaBranche
    git add .
    git commit -m"Mon message"
    ...
    git push origin NomDeMaBranche

Puis effectuer un pull request sur la `main` sur github, ensuite le valider et retourner sur la `main` en local et faire
    
    git checkout main
    git pull origin main

Et puis création d'une nouvelle branche et ainsi de suite...

## Étape 3
Création du contrôleur fontal nommé `index.php`
