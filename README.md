# CTF SQL Injection - Environnement Privé

## 🎯 Objectif

Ce projet est un environnement de test **privé et isolé** conçu pour apprendre et pratiquer les techniques d'**injection SQL** dans un cadre sécurisé et contrôlé.

⚠️ **IMPORTANT** : Ce projet est destiné à l'éducation et à la recherche en sécurité informatique. À utiliser uniquement dans un environnement privé et autorisé.

---

## 📋 Structure du Projet

```
CTF_SQL_INJECTION/
├── docker-compose.yml      # Configuration Docker pour l'infrastructure
├── db/
│   └── init.sql           # Initialisation de la base de données
└── web/
    ├── index.php          # Page d'accueil
    ├── article.php        # Page d'affichage des articles
    └── page.php           # Autres pages
```

---

## 🚀 Démarrage Rapide avec Docker

### Prérequis

- **Docker** et **Docker Compose** installés
- Une connexion réseau fonctionnelle

### Instructions de démarrage

1. **Cloner ou placer le projet localement**

   ```bash
   cd CTF_SQL_INJECTION
   ```

2. **Démarrer les conteneurs**

   ```bash
   docker-compose up -d
   ```

   Cette commande lance :
   - **MySQL 8.0** : Base de données (port 3306)
   - **PHP 8.1 + Apache** : Serveur web (port 8080)

3. **Accéder à l'application**

   ```
   http://localhost:8080
   ```

4. **Arrêter les conteneurs**
   ```bash
   docker-compose down
   ```

---

## 🗄️ Base de Données

### Initialisation

Le fichier `db/init.sql` est automatiquement exécuté au démarrage du conteneur MySQL. Il crée et initialise :

#### Tables créées :

1. **`articles`** - Blog et contenu public
   - `id` : Identifiant unique (AUTO_INCREMENT)
   - `title` : Titre de l'article
   - `body` : Contenu de l'article

2. **`users`** - Comptes utilisateurs
   - `id` : Identifiant unique
   - `email` : Adresse email
   - `password` : Mot de passe

3. **`flags`** - Drapeaux CTF à découvrir
   - `id` : Identifiant unique
   - `name` : Nom du flag
   - `value` : Contenu du flag

### Données initiales

- **Articles** : 2 articles d'exemple
- **Utilisateur admin** : `admin@zerotech.com` / `Sup3rAdmin!`
- **Flag CTF** : `FLAG{WEB_SQL}` (à découvrir via injection SQL)

---

## 🔒 Configuration des Conteneurs

### MySQL (Service `db`)

```
Image : mysql:8.0
Container : zerosubtech_db
Port : 3306
Base de données : ctf
Utilisateur : ctfuser / ctfpass
Root password : rootpass
```

### PHP + Apache (Service `web`)

```
Image : php:8.1-apache
Container : zerosubtech_web
Port : 8080
Volume : ./web → /var/www/html
Extension : mysqli (installée automatiquement)
```

---

## 💡 Utilisation

### Depuis votre machine locale

**Se connecter à la base de données MySQL :**

```bash
mysql -h localhost -P 3306 -u ctfuser -p
# Mot de passe : ctfpass
```

**Consulter les logs du serveur web :**

```bash
docker-compose logs -f web
```

**Accéder au conteneur PHP :**

```bash
docker exec -it zerosubtech_web bash
```

**N'utilisez JAMAIS ce code en production !**

---

**Made with <3 by Daniween**
