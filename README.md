# 💰 +Count - Gestion collaborative de dépenses partagées.

<div align="center">

![+Count Logo](./img/logo+count.png)

**Une application web moderne pour simplifier la gestion de vos dépenses en groupe...**

[![Symfony](https://img.shields.io/badge/Symfony-7.4-000000?style=for-the-badge&logo=symfony&logoColor=white)](https://symfony.com/)
[![PHP](https://img.shields.io/badge/PHP-8.3-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![PostgreSQL](https://img.shields.io/badge/PostgreSQL-16-316192?style=for-the-badge&logo=postgresql&logoColor=white)](https://www.postgresql.org/)
[![Twig](https://img.shields.io/badge/Twig-3.x-green?style=for-the-badge&logo=twig&logoColor=white)](https://twig.symfony.com/)

[✍️ Guide de projet ](https://adriengras.fr/courses/2025-coda-php/) | [📖 Documentation principale](https://symfony.com/doc) | [💻 Voir la Démo](#)

</div>

---

## 📑 Table des Matières

<details>
<summary><b>Cliquez pour déplier ...</b></summary>

- [🎓 Intérêt Académique](#-intérêt-académique)
- [💡 Intérêt Fonctionnel](#-intérêt-fonctionnel)
- [🏗️ Architecture du Projet](#️-architecture-du-projet)
- [🛠️ Technologies Utilisées](#️-technologies-utilisées)
- [📚 Méthodologie de Développement](#-méthodologie-de-développement)
- [✨ Fonctionnalités Détaillées](#-fonctionnalités-détaillées)
- [🚀 Installation & Configuration](#-installation--configuration)
- [📊 Modèle de Données](#-modèle-de-données)
- [🔮 Perspectives d'Évolution](#-perspectives-dévolution)
- [📄 Licence](#-licence)

</details>

---

## 🎓 Intérêt académique

Ce projet illustre l'application concrète de **compétences techniques avancées** en développement web full-stack à l'aide de frameworks tel que Symfony :

### Compétences Backend
- 🎯 **Architecture MVC** avec Symfony 7.4
- 🔄 **Doctrine ORM** pour la gestion de la persistance ([doc](https://symfony.com/doc/current/doctrine.html))
- 🛡️ **Services métier** pour une logique réutilisable ([doc](https://symfony.com/doc/current/service_container.html))
- 📦 **DTOs** pour le transfert de données structurées
- ✅ **Validation** côté serveur avec contraintes ([doc](https://symfony.com/doc/current/validation.html))
- 🔐 **Security Component** pour l'authentification ([doc](https://symfony.com/doc/current/security.html))

### Compétences Frontend
- **Templates Twig** modulaires ([doc](https://symfony.com/doc/current/templates.html))
- **Dark Mode** avec gestion d'état persistant
- **Responsive Design** (320px → ∞)
- **JavaScript Vanilla** moderne (ES6+)
- **Animations CSS3** pour fluidité

### Compétences Base de Données
- **PostgreSQL** avec schéma relationnel optimisé
- **Migrations** versionnées ([doc](https://symfony.com/doc/current/doctrine.html#migrations))
- **Relations complexes** (OneToMany, ManyToMany)
- **Notion de Soft Delete**


---

## 💡 L'intérêt fonctionnel

### Le Problème

La gestion des dépenses partagées (colocation, voyages, sorties) génère bien souvent :
- ❌ Calculs manuels fastidieux
- ❌ Incompréhensions sur les remboursements
- ❌ Manque de transparence
- ❌ Absence d'historique centralisé

### La Solution +Count

![Page d'acceuil.](./img/acceuil+count.png)
![Page d'acceuil.](./img/features+count.png)

✅ **Automatisation** des calculs pour l'équilibre des dépenses  
✅ **Transparence** totale sur toutes les dépenses  
✅ **Collaboration** avec système de rôles  
✅ **Historique** permanent et accessible pour tous les membres
✅ **Interface** agréable, intuitive et multi-plateforme (responsive...)

### Cas d'Usage

| Contexte | Utilisation |
|----------|-------------|
|  **Colocation** | Courses, loyer, factures partagées |
|  **Voyage** | Suivi des dépenses courantes en temps réel |
| **Sorties** | Restaurants, activités entre amis |
| **Toute dépense de groupe** | Randonnées , Organisation de fêtes... |


---

## 🏗️ Architecture du Projet

### Structure Simplifiée

```
+count/
├── 📁 src/
│   ├── Controller/        # Contrôleurs MVC
│   ├── Entity/           # Modèles Doctrine
│   ├── Repository/       # Accès données
│   ├── Service/          # Logique métier
│   ├── Form/             # Types de formulaires
│   └── Security/         # Authentification
│
├── 📁 templates/
│   ├── _layouts/         # Layouts de base
│   ├── _components/      # Composants réutilisables
│   └── wallets/          # Pages wallets
│
├── 📁 public/
│   ├── styles/           # CSS (main, forms, wallets...)
│   └── scripts/          # JavaScript
│
└── 📁 migrations/        # Migrations BDD
```

### Architecture du projet avec Symfony (en couches...)

```
┌─────────────────────┐
│   PRÉSENTATION      │  Controller + Twig
├─────────────────────┤
│   MÉTIER            │  Services + DTOs
├─────────────────────┤
│   PERSISTANCE       │  Entities + Repositories
├─────────────────────┤
│   BASE DE DONNÉES   │  PostgreSQL
└─────────────────────┘
```

![Architecture Projet Symfony](./img/archi-symfony.png)

---

## 🛠️ Technologies Utilisées

### Backend

| Technologie | Version | Utilisation |
|-------------|---------|-------------|
| ![Symfony](https://img.shields.io/badge/Symfony-7.4-black?logo=symfony) | 7.4 LTS | Framework PHP full-stack ([doc](https://symfony.com/doc/current/index.html)) |
| ![PHP](https://img.shields.io/badge/PHP-8.3-777BB4?logo=php) | 8.3 | Langage backend |
| ![Doctrine](https://img.shields.io/badge/Doctrine-2.4-orange) | 2.4 | ORM pour abstraction BDD ([doc](https://www.doctrine-project.org/)) |
| ![Composer](https://img.shields.io/badge/Composer-2.6-brown?logo=composer) | 2.* | Gestionnaire de dépendances PHP |

### Frontend

| Technologie | Utilisation |
|-------------|-------------|
| ![Twig](https://img.shields.io/badge/Twig-3.x-green) | Moteur de templates sécurisé ([doc](https://twig.symfony.com/)) |
| CSS3 | Variables, Grid, Flexbox, Animations |
| JavaScript ES6+ | DOM moderne, Async/Await, Modules |
| FontAwesome | Bibliothèque d'icônes vectorielles |

### Base de Données

| Technologie | Justification |
|-------------|---------------|
| ![PostgreSQL](https://img.shields.io/badge/PostgreSQL-15-blue?logo=postgresql) | SGBD relationnel assez robuste avec prise en charge des transactions ACID ([doc](https://www.postgresql.org/docs/)) |

---

## 📚 Méthodologie de Développement

<details>
<summary><b>Entities & Doctrine ORM</b></summary>

Les **entités** représentent les modèles de données mappés vers PostgreSQL.

**Entités principales :**
- **User** : Utilisateurs de l'application
- **Wallet** : Portefeuilles partagés
- **XUserWallet** : Table de jonction avec rôles
- **Expense** : Dépenses individuelles

```php
#[ORM\Entity(repositoryClass: WalletRepository::class)]
class Wallet
{
    #[ORM\Id]
    #[ORM\Column(type: 'uuid')]
    private ?Uuid $uid = null;
    
    #[ORM\Column(length: 100)]
    private ?string $label = null;
    
    #[ORM\OneToMany(mappedBy: 'wallet', targetEntity: Expense::class)]
    private Collection $expenses;
}
```

📖 [Documentation Doctrine](https://symfony.com/doc/current/doctrine.html)

</details>

[![](https://mermaid.ink/img/pako:eNq1Vt1u0zAUfhXLNwWUjXVs_ckdGyAhBEJoCAmKKrc-7TwcO_iHbWx7Fy7pM3CZF-PYadKsXUc3jUhVE-d83_nOj49zQceaA00pmBeCTQ3LBorgxYWBsRNakaODgSrXTpmU4Mjl5daWviBwloOyQFIy1soJUK608hZMtLm8JGcf8eFTCUuJFMVshWmNVYProrwPl1AOprgkOHn_Jvn4hgzoa46exUQw5YhX4rsHwoHIlndCCssceDOgCwbrjFBTAhkTkkSCl_F2A4xiGaC90tnT3ILnehNQzqw91YYj8K12ARFWgIyPxWRiitmtHCcW82-0BIvwD_H_0YeD54ePb0U9IU5kYB3L8oA7LmZGuGJmA-ioesNGEirQ1bWi3D3dfg5tivAeQeF3DYVcc1DuR3I9unLstGNyyDLt0V3IoHLBcVzGcDCkYha70C54krA4Yd6RnRvqIdkIJFK901nTNVlKes7OM5Rsh9yHmh-FdDEfOx1UkBBqkTMB0Qo9_sFH7Q0pZt89VmVkUL2EFUmtL19b17xxLF8oFwqzbmjBORk5h-EFen4BRonit4FoSXirdsCm0AxaeSmDyoWvsPIQfVFt9HvtQ1aX6H7dsZaiklDGPyyVvFpWUieoWbrbCVe6bb2GeU9hI46NyOO0DBVbPF2H_s8iNWfoAxbqrlmOw_sGfBjkt6DjnF_GzrMb5t98_K2MPdwUyi72GXkUiBLCeCbUY0wylJsurLYeIssDusVGqIuN3day4U1pHxtAnXw4OicxbInHJPkBxi6FgVuaMLQuZngiyFbIjTtvCq7HRMVYjYc4FCBCWd1yNxDUhcj5HRRlwpLiFzkJk61iJRCc4FQKmf53Q9fKK89Lynk94NAZ1N4aYWzipQqPA7bBxuFZn-dGZI2c3ymiytlSRJEVrF2qxibUI60lEXjqlMwhgDrr1jX0ak-UVguiCZOLjXtFEzo1gtPUGQ8JzcDgNw4-0tiiA-qO8YwZ0BRvOTPfAi5gcqY-a51VMKP99JimkTqhZfnm34i1CSis32EYmDTtRwaaXtAzmu4_2-70unv9_u7ebre93293EnpO0_Zub3u319tpt3f6e51ut_vsKqE_o9Od7Wjf7_e6nf1ut9NrJxS4cNq8Lb9Q44fq1V9qXaUF?type=png)](https://mermaid.live/edit#pako:eNq1Vt1u0zAUfhXLNwWUjXVs_ckdGyAhBEJoCAmKKrc-7TwcO_iHbWx7Fy7pM3CZF-PYadKsXUc3jUhVE-d83_nOj49zQceaA00pmBeCTQ3LBorgxYWBsRNakaODgSrXTpmU4Mjl5daWviBwloOyQFIy1soJUK608hZMtLm8JGcf8eFTCUuJFMVshWmNVYProrwPl1AOprgkOHn_Jvn4hgzoa46exUQw5YhX4rsHwoHIlndCCssceDOgCwbrjFBTAhkTkkSCl_F2A4xiGaC90tnT3ILnehNQzqw91YYj8K12ARFWgIyPxWRiitmtHCcW82-0BIvwD_H_0YeD54ePb0U9IU5kYB3L8oA7LmZGuGJmA-ioesNGEirQ1bWi3D3dfg5tivAeQeF3DYVcc1DuR3I9unLstGNyyDLt0V3IoHLBcVzGcDCkYha70C54krA4Yd6RnRvqIdkIJFK901nTNVlKes7OM5Rsh9yHmh-FdDEfOx1UkBBqkTMB0Qo9_sFH7Q0pZt89VmVkUL2EFUmtL19b17xxLF8oFwqzbmjBORk5h-EFen4BRonit4FoSXirdsCm0AxaeSmDyoWvsPIQfVFt9HvtQ1aX6H7dsZaiklDGPyyVvFpWUieoWbrbCVe6bb2GeU9hI46NyOO0DBVbPF2H_s8iNWfoAxbqrlmOw_sGfBjkt6DjnF_GzrMb5t98_K2MPdwUyi72GXkUiBLCeCbUY0wylJsurLYeIssDusVGqIuN3day4U1pHxtAnXw4OicxbInHJPkBxi6FgVuaMLQuZngiyFbIjTtvCq7HRMVYjYc4FCBCWd1yNxDUhcj5HRRlwpLiFzkJk61iJRCc4FQKmf53Q9fKK89Lynk94NAZ1N4aYWzipQqPA7bBxuFZn-dGZI2c3ymiytlSRJEVrF2qxibUI60lEXjqlMwhgDrr1jX0ak-UVguiCZOLjXtFEzo1gtPUGQ8JzcDgNw4-0tiiA-qO8YwZ0BRvOTPfAi5gcqY-a51VMKP99JimkTqhZfnm34i1CSis32EYmDTtRwaaXtAzmu4_2-70unv9_u7ebre93293EnpO0_Zub3u319tpt3f6e51ut_vsKqE_o9Od7Wjf7_e6nf1ut9NrJxS4cNq8Lb9Q44fq1V9qXaUF)




<details>
<summary><b>Services Métier</b></summary>

Les **services** encapsulent la logique métier réutilisable.

**Services implémentés :**
- `WalletService` : Gestion des wallets
- `ExpenseService` : Gestion des dépenses  
- `BalanceService` : Calcul des équilibres
- `UserService` : Gestion utilisateurs

```php
class WalletService
{
    public function __construct(
        private WalletRepository $repository,
        private EntityManagerInterface $em
    ) {}
    
    public function create(User $owner, string $label): Wallet
    {
        $wallet = new Wallet();
        $wallet->setLabel($label);
        $wallet->setOwner($owner);
        
        $this->em->persist($wallet);
        $this->em->flush();
        
        return $wallet;
    }
}
```

📖 [Documentation Services](https://symfony.com/doc/current/service_container.html)

</details>

<details>
<summary><b>Form Types</b></summary>

Les **Form Types** gèrent les formulaires de manière objet.

```php
class ExpenseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('amount', MoneyType::class)
            ->add('description', TextType::class)
            ->add('icon', ChoiceType::class, [
                'choices' => [
                    'Restaurant' => 'fa-utensils',
                    'Transport' => 'fa-car',
                    // ...
                ]
            ]);
    }
}
```

📖 [Documentation Forms](https://symfony.com/doc/current/forms.html)

</details>

![Form Example](./img/registration-form.png)


<details>
<summary><b>Templates Twig</b></summary>

Architecture modulaire avec **héritage** et **composants**.

```twig
{# Layout de base #}
{% extends '_layouts/base.html.twig' %}

{% block content %}
    <h1>{{ wallet.label }}</h1>
    
    {% include '_components/menu.html.twig' %}
    
    {% for expense in expenses %}
        {# ... #}
    {% endfor %}
{% endblock %}
```

📖 [Documentation Twig](https://symfony.com/doc/current/templates.html)

</details>

<details>
<summary><b>Fixtures de Test</b></summary>

Données de test cohérentes pour développement.

```php
class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i <= 10; $i++) {
            $user = new User();
            $user->setEmail("user$i@test.com");
            // ...
            $manager->persist($user);
        }
        $manager->flush();
    }
}
```

```bash
php bin/console doctrine:fixtures:load
```

📖 [Documentation Fixtures](https://symfony.com/bundles/DoctrineFixturesBundle/current/index.html)

</details>

<details>
<summary><b>Sécurité</b></summary>

- **Authentification** par session avec Security Component
- **Hachage** bcrypt des mots de passe
- **CSRF Protection** sur tous les formulaires

```php
class WalletVoter extends Voter
{
    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();
        
        return match($attribute) {
            'view' => $this->canView($subject, $user),
            'edit' => $this->canEdit($subject, $user),
            default => false
        };
    }
}
```

📖 [Documentation Security](https://symfony.com/doc/current/security.html)

</details>

---

## ✨ Fonctionnalités Détaillées

### Authentification & Gestion Utilisateur

<details>
<summary><b>Voir les détails</b></summary>

**Inscription**
- Formulaire avec validation email unique
- Hachage automatique du mot de passe
- Choix du genre et avatar par défaut

**Connexion**
- Authentification par email/mot de passe
- Système de sessions sécurisées
- Redirection intelligente après login

**Profil Utilisateur**
- Modification des informations
- Changement d'avatar (12 avatars 3D disponibles)
- Statistiques personnelles (wallets créés, dépenses, etc.)

</details>

![Auth Pages](./img/connect-form.png)
![Auth Pages](./img/registration-form.png)

---

### Gestion des Wallets

<details>
<summary><b>Voir les détails</b></summary>

**Création de Wallet**
- Formulaire simple (nom du wallet)
- Génération automatique d'un UUID unique
- Utilisateur créateur = Owner automatiquement

**Liste des Wallets**
- Vue d'ensemble avec cartes modernes
- Affichage du solde total
- Badge rôle (Admin/Member)
- Animation au survol

**Détails d'un Wallet**
- Solde total en tête de page
- Liste paginée des dépenses
- Accordéon pour équilibres à régler
- Actions selon les droits (edit/delete/invite)
</details>

![Wallet Pages](./img/list-wallets.png)
![Wallet Pages](./img/create-wallet.png)

---

### Gestion des Dépenses

<details>
<summary><b>Voir les détails</b></summary>

**Ajout de Dépense**
- Montant en euros (converti en centimes)
- Description de la dépense
- Choix de catégorie avec icône (28 catégories)
- Enregistrement avec date automatique

**Affichage des Dépenses**
- Liste chronologique inversée
- Icône de catégorie colorée
- Montant formaté (couleur verte si c'est vous)
- Pagination (10 par page)

**Actions sur Dépenses**
- 👁️ **Voir détails** : Modal avec infos complètes
- 🗑️ **Supprimer** (admin seulement) : Confirmation requise

</details>

![Expense Management](./img/show-wallet.png)
![Expense Management](./img/details-wallet.png)

---

### Système de Rôles

<details>
<summary><b>Voir les détails</b></summary>

**3 Niveaux de Rôles**

| Rôle | Permissions |
|------|-------------|
| 👑 **Owner/Admin** | Tous les droits + suppression wallet |
| **Admin** | Gestion membres, dépenses, paramètres |
| **User** | Lecture seule + ajout dépenses |

**Gestion des Membres**
- Invitation (sélection utilisateur)
- Attribution du rôle à l'invitation
- Promotion/rétrogradation (admin → member)
- Exclusion avec choix (garder/supprimer les dépenses)

**Interface Membres**
- Modal listant tous les membres
- Avatar + nom + email + rôle
- Actions contextuelles selon droits

</details>

![Roles System](./img/members-list.png)
![Roles System](./img/test-suppression.png)

---

### Calcul Automatique des Équilibres

<details>
<summary><b>Voir les détails</b></summary>

**Algorithme d'Équilibrage**

L'application calcule automatiquement qui doit combien à qui pour équilibrer les comptes.

**Principe :**
1. Calcul du total des dépenses
2. Calcul de la part équitable par personne
3. Détermination des débiteurs et créditeurs
4. Optimisation du nombre de transactions

**Exemple :**
```
Alice a payé : 100€
Bob a payé : 50€
Charlie a payé : 0€

Total : 150€ → Part/personne : 50€

Résultat :
- Bob doit 0€ à Alice (déjà à l'équilibre relatif)
- Charlie doit 50€ à Alice
```

**Affichage**
- Accordéon dépliable "Voir les équilibres"
- Instructions claires : "X rembourse Y"
- Montants colorés (vert = vous recevez, rouge = vous devez)
- Bouton "Solder tous les comptes" (admin)


</details>

![Balance Calculation](./img/solde-compte.png)

---

### Interface Utilisateur Moderne

<details>
<summary><b>Voir les détails</b></summary>

**Design System**

- **Couleurs** : Orange vibrant (#ff5722) + dégradés
- **Typographie** : Poppins (Google Fonts)
- **Cards** : Glassmorphism avec backdrop-filter
- **Animations** : Transitions fluides 0.3s cubic-bezier

**Composants Réutilisables**
- Header avec logo animé (spin-pause)
- Menu FAB flottant (Floating Action Button)
- Flash messages avec auto-dismiss (5s)
- Modals avec fond blur
- Boutons avec hover effects

**Interactions**
- Smooth scroll sur ancres
- Animations au scroll (Intersection Observer)
- Compteurs animés (statistiques)
- Floating cards avec parallax

</details>


**Menu flottant moderne...**
![UI Components](./img/menu-flottant.png)

**Interface utilisateur personnalisée...**
![UI Components](./img/user-interface.png)
![UI Components](./img/choice-avatar.png)

---

### 🌙 Dark Mode / ☀️ Light mode

<details>
<summary><b>Voir les détails</b></summary>

**Implémentation**

- Toggle via bouton flottant (bas droite)
- Persistance dans localStorage
- Variables CSS dynamiques
- Transition fluide 0.3s

**Activation**
```javascript
// Au chargement
const theme = localStorage.getItem('theme') || 'light';
document.documentElement.setAttribute('data-theme', theme);

// Au clic
document.documentElement.setAttribute('data-theme', 'dark');
localStorage.setItem('theme', 'dark');
```

**CSS**
```css
:root {
    --bg-primary: #f0f2f5;
    --text-dark: #212020;
}

[data-theme="dark"] {
    --bg-primary: #0f172a;
    --text-dark: #e2e8f0;
}
```

</details>

![Dark Mode](./img/light-mode.png)

---

### Responsive Design

<details>
<summary><b>Voir les détails</b></summary>

**Breakpoints**

| Largeur | Adaptations |
|---------|-------------|
| ≥ 1200px | Layout complet desktop |
| 768-1199px | Tablette, colonnes réduites |
| 480-767px | Mobile, stack vertical |
| 320-479px | Très petit mobile, optimisé |

**Techniques**
- Flexbox pour layouts flexibles
- CSS Grid pour grilles responsives
- Media queries mobile-first
- Touch-friendly (boutons 44px min)

</details>

![Responsive Views](./img/reponsive.png)

---

## 🚀 Installation & configurations.

### Prérequis

- PHP 8.2+
- Composer 2.6+
- PostgreSQL 15+
- Symfony CLI (optionnel)

### Installation

```bash
# 1. Cloner le projet

# 2. Installer les dépendances
composer install

# 3. Configurer la base de données
# Éditer .env.local
DATABASE_URL="postgresql://user:password@127.0.0.1:5432/pluscount?serverVersion=15&charset=utf8"

# 4. Créer la base et exécuter les migrations
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate

# 5. (Optionnel) Charger les fixtures
php bin/console doctrine:fixtures:load

# 6. Lancer le serveur
symfony serve
# ou
php -S localhost:8000 -t public/
```

### Configuration Avancée

```yaml
# config/packages/doctrine.yaml
doctrine:
    dbal:
        url: '%env(resolve:DATABASE_URL)%'
    orm:
        auto_mapping: true
        mappings:
            App:
                is_bundle: false
                dir: '%kernel.project_dir%/src/Entity'
                prefix: 'App\Entity'
```

---

## 🔮 Perspectives d'Évolution

### Court Terme
- [ ] Notifications email (invitations, remboursements)
- [ ] Export PDF des dépenses
- [ ]  Recherche et filtres avancés
- [ ]  Graphiques de répartition (Chart.js)

### Moyen Terme
- [ ] Application mobile (React Native / Flutter)
- [ ]  API REST publique
- [ ]  Intégration paiement (Stripe)
- [ ]  Multi-langues (i18n)

### Long Terme
- [ ]  Suggestions IA basées sur historique
- [ ]  Synchronisation bancaire
- [ ]  Communauté et partage de templates
- [ ]  Budgets et objectifs d'épargne

---

## Contribution

Les contributions sont les bienvenues ! 

1. Fork le projet
2. Créer une branche (`git checkout -b feature/AmazingFeature`)
3. Commit les changements (`git commit -m 'Add AmazingFeature'`)
4. Push vers la branche (`git push origin feature/AmazingFeature`)
5. Ouvrir une Pull Request

---

## Licence

Ce projet est sous licence **_**.

---

## 🙏 Remerciements

- **Équipe pédagogique :** [Adrien Gras](https://github.com/AdrienGras) & [Yoan Thirion](https://github.com/ythirion)
- **Communauté Symfony** pour la documentation super exhaustive.
- **Unsplash** pour les images libres de droits 
- **FontAwesome** pour les icônes vectorielles

---

<div align="center">

**Développé avec passion 🤩 par un aventurier surnommé Overlord 😉**

[⬆ Retour en haut](#-count---gestion-collaborative-de-dépenses-partagées)

</div>