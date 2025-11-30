# Todo List PHP/MySQL

Une application Todo List simple développée avec **PHP** et **MySQL** permettant de gérer des tâches avec ajout, suppression et marquage comme terminée.

---

## Fonctionnalités

- Ajouter une tâche
- Supprimer une tâche
- Marquer une tâche comme terminée
- Affichage dynamique des tâches avec le statut
- Interface simple et responsive

---

## Technologies utilisées

- PHP 7+
- MySQL / MariaDB
- HTML5 / CSS3
- Boxicons pour les icônes
- Serveur local : XAMPP, WAMP ou MAMP

---

## Installation

1. Cloner le dépôt ou télécharger les fichiers.
2. Importer le fichier SQL pour créer la base de données `to_do_list` avec la table `list_taches` :

```sql
CREATE TABLE list_taches (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tache VARCHAR(255) NOT NULL,
    statut VARCHAR(255) DEFAULT 'en_attente'
);

```
## Auteur: Abada Aziz Développeur Web Full Stack.
