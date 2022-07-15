# Skills GE

[TODO](./todo.md)

## Secrétaire

Le secrétaire du forem d’un login et d’un mot de passe
Il doit pouvoir créer une formation
Il spécifie les infos de la formation:

-   nom de la formation: ingrwf11
-   choix du centre
-   date d’entrée en formation
-   formateur: exemple Olivier Belery
-   encoder les stagiaires qui y sont inscrits (bdd)

## Stagiaire

Login (existe déjà: fait par la secrétaire)

Formuaire avec:

-   Formation auquel il est inscrit
-   Dates pré-complétée,
-   date de la GE (date de connexion)
-   le centre cepegra pré-complété
-   le formateur pré-complété
-   le stagiaire (nom-prénom) pré-complété

## Savoir faire comportementeaux

Pour chaque thématique

-   une mise en situation
-   cocher les réponses d’auto-évaluation 1-2-3-4
-   la mise en situation et les réponses doivent pouvoir être modifiées par la secrétaire
-   data visualisation afficher les résultats avec le radar (charts.js, graphique, svg, canvas…)

## Structure du projet

### Partie Stagiaire

url : `site_url/`.

-   liste des fiches au click d'une fiche:
    -   fomrulaire pré-complèté,
    -   auto évaluation avec graphique qui bouge

### Partie secrétaire

url : `site_url/admin`.

La homepage est une page à plusieurs choix:

-   Modifier une fiche savoir faire
    -   index qui visualise les différentes fiches,
    -   Edit page
-   Création des formations
    -   nom, centre, date formateur, encodage des stagiaires

## Pages:

### Admin

url : `site_url/admin/`.

url : `site_url/admin/formations`.
url : `site_url/admin/formations/create`.

url : `site_url/admin/knowledge-forms`.
url : `site_url/admin/knowledge-forms/edit`.

### Stagiaire

url : `site_url/`.
url : `site_url/{ge_id}/edit`.
