# FUT Team Builder for PHP


Ce projet vise à développer la partie backend de la plateforme FUT Champions Ultimate Team en utilisant PHP procédural et MySQLi. L’accent est mis sur la création d’un gestionnaire de contenu robuste pour faciliter la gestion des joueurs, des équipes, des nationalités, et d’autres entités liées. Une fonctionnalité d'internationalisation est également intégrée pour permettre une utilisation multilingue de la plateforme.

## Contexte du Projet

Nous visons à développer la partie backend de la plateforme FUT Champions Ultimate Team en utilisant PHP procédural et MySQLi. L’accent sera mis sur la création d’un gestionnaire de contenu robuste pour faciliter la gestion des joueurs, des équipes, des nationalités, et d’autres entités liées. Une fonctionnalité d'internationalisation sera intégrée afin de permettre une utilisation multilingue de la plateforme.

## Fonctionnalités Backend Attendues

### Analyse et Optimisation des Données

- Analyse approfondie du fichier JSON fourni pour concevoir une structure de base de données optimale.
- Éviter la redondance des attributs et des données en appliquant les principes de normalisation des bases de données.
- Création de schémas relationnels efficaces pour gérer les entités telles que joueurs, équipes, nationalités, et leurs relations.

### Gestion des Entités

- Implémentation d’une interface pour ajouter, modifier, supprimer et lister les entités.
- Gestion des relations entre les entités (par exemple, associer un joueur à une équipe et à une nationalité).

### Tableau de Bord et Statistiques

- Conception d’un tableau de bord dynamique permettant de visualiser les statistiques clés (nombre de joueurs, répartition par nationalité, performances des équipes, etc.).
- Intégration de graphiques et diagrammes via des bibliothèques comme Chart.js pour rendre les statistiques interactives.

### Internationalisation i18n

- Mise en place d’un système d’internationalisation (i18n) pour permettre le support multilingue.
- Gestion des fichiers de langues séparés pour chaque langue supportée (par exemple, fr.php, en.php, es.php).
- Possibilité de changer la langue de l’interface via une option dans le tableau de bord.




## User Stories

- **US01 : Gestion des Joueurs** : En tant qu’administrateur, je veux pouvoir ajouter, modifier, supprimer et lister des joueurs afin de maintenir une base de données à jour.
- **US02 : Gestion des Équipes** : En tant qu’administrateur, je veux pouvoir créer et gérer des équipes pour organiser les compétitions efficacement.
- **US03 : Internationalisation (Bonus)** : En tant qu’utilisateur, je veux avoir la possibilité de changer la langue de l’interface afin d’utiliser la plateforme dans ma langue préférée.
- **US04 : Statistiques Dynamiques** : En tant qu’administrateur, je veux visualiser des statistiques clés sur un tableau de bord afin de mieux comprendre l’utilisation de la plateforme.
- **US05 : Fluidité de Navigation (Bonus)** : En tant qu’utilisateur, je veux pouvoir effectuer des actions sans rechargement de page grâce à AJAX afin d’améliorer mon expérience utilisateur.

## Installation

1. Clonez le dépôt :
    ```sh
    git clone https://github.com/Bouanaya/-FUT-Champions-Ultimate-Team-PHP.git
    ```
2. Naviguez dans le répertoire du projet :
    ```sh
    cd FUT-Champions-Ultimate-Team
    ```
3. Importez la base de données :
    ```sh
    mysql -u yourusername -p yourpassword < create_table.sql
    ```
4. Configurez votre serveur web pour pointer vers le répertoire du projet.

## Utilisation

1. Démarrez votre serveur web (par exemple, XAMPP, WAMP).
2. Ouvrez votre navigateur et accédez à `http://localhost/FUT-Champions-Ultimate-Team`.

## Dépendances

- PHP
- MySQL
- TailwindCSS

