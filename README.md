# 🏥 Application de gestion de patients – Cabinet Médical

Projet Fullstack **Symfony 7 + Angular 17** pour la gestion d’un cabinet médical.

## 🎯 Objectif

Permettre aux professionnels de santé de :
- gérer leurs patients,
- planifier des rendez-vous,
- organiser les consultations,
- et contrôler les accès via des rôles utilisateurs (admin, médecin, secrétaire).

---

## 🛠️ Technologies

- **Backend** : Symfony 7, PHP 8.2+, Doctrine ORM, MySQL
- **Frontend** : Angular 17, TypeScript, Angular Material ou Bootstrap
- **Sécurité** : Symfony Security avec authentification par rôles
- **API** : JSON via contrôleurs classiques ou API Platform (optionnel)

---

## 🧩 Fonctionnalités

- Gestion des **patients** (fiche complète)
- Gestion des **médecins** (avec spécialité)
- Prise et gestion des **rendez-vous**
- Authentification sécurisée (admin, médecin, secrétaire)
- Interface responsive moderne
- Connexion entre Angular & Symfony via API

---

## 🚀 Installation

### Backend (Symfony)

```bash
cd backend
composer install
php bin/console doctrine:database:create
php bin/console make:migration
php bin/console doctrine:migrations:migrate
symfony serve
Frontend (Angular)
bash
Copier
Modifier
cd frontend
npm install
ng serve
