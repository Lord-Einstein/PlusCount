<?php

namespace App\DataFixtures;

use App\Entity\Expense;
use App\Entity\User;
use App\Entity\Wallet;
use App\Entity\XUserWallet;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Random\RandomException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Uid\Uuid;

class AppFixtures extends Fixture
{
    private const array EXPENSE_DATA = [
        'Restaurant' => 'fa-solid fa-utensils',
        'Courses' => 'fa-solid fa-cart-shopping',
        'Bar' => 'fa-solid fa-beer-mug-empty',
        'Transport' => 'fa-solid fa-bus',
        'Logement' => 'fa-solid fa-house',
        'Loisir' => 'fa-solid fa-gamepad',
        'Santé' => 'fa-solid fa-stethoscope',
        'Cadeau' => 'fa-solid fa-gift',
        'Randonnée' => 'fa-solid fa-mountain',
        'Fête' => 'fa-solid fa-champagne-glasses',
        'Shopping' => 'fa-solid fa-shirt',
        'Voyage' => 'fa-solid fa-plane',
        'Abonnements' => 'fa-solid fa-tv',
        'Autre' => 'fa-solid fa-receipt'
    ];

    private array $generatedUsers = [];
    private array $generatedWallets = [];

    private UserPasswordHasherInterface $hasher;
    private ObjectManager $manager;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    /**
     * @throws RandomException
     */
    public function load(ObjectManager $manager): void
    {
        $this->manager = $manager;
        $this->generatedUsers = [];
        $this->generatedWallets = [];

        // 1. Users
        $this->generatedUsers[] = $this->generateUser("Alice", "alice@coda.fr", "alice", "F");
        $this->generatedUsers[] = $this->generateUser("Bob", "bob@coda.fr", "bob", "M");

        // 2. Wallets
        $this->generatedWallets[] = $this->generateWallet("Vacances");
        $this->generatedWallets[] = $this->generateWallet("Colloc");
        $this->generatedWallets[] = $this->generateWallet("Montagne");

        // Récupération des clés (les descriptions : "Restaurant", "Courses"...) pour le random
        $expenseTypes = array_keys(self::EXPENSE_DATA);

        // 3. Expenses
        foreach ($this->generatedWallets as $wallet) {
            for ($i = 0; $i < 125; $i++) {
                // Alternance du payeur
                $payer = $this->generatedUsers[$i % 2];

                // Choix aléatoire d'un type de dépense
                $randomTypeIndex = array_rand($expenseTypes);
                $description = $expenseTypes[$randomTypeIndex];

                // Récupération de l'icône associée
                $icon = self::EXPENSE_DATA[$description];

                $this->generateExpense(
                    $wallet,
                    random_int(1, 150) * 100,
                    $description,
                    $icon,
                    $payer
                );
            }
        }

        // 4. Liens User-Wallet
        foreach ($this->generatedWallets as $wallet) {
            foreach ($this->generatedUsers as $user) {
                $walletRole = ($user->getName() === "Alice") ? "admin" : "user";
                $this->generateXUserWallet($user, $wallet, $walletRole);
            }
        }

        $this->manager->flush();
    }

    // --- HELPER METHODS ---

    private function generateUser(string $name, string $email, string $password, string $gender): User
    {
        $user = new User();
        $user->setName($name);
        $user->setEmail($email);
        $user->setGender($gender);
        $user->setPassword($this->hasher->hashPassword($user, $password));

        $this->manager->persist($user);
        return $user;
    }

    private function generateWallet(string $label): Wallet
    {
        $wallet = new Wallet();
        $wallet->setUid(Uuid::v7()->toString());
        $wallet->setLabel($label);
        $wallet->setTotalAmount(0);
        $wallet->setPaymentsDue([]);
        $wallet->setCreatedBy($this->generatedUsers[0]);
        $wallet->setCreatedDate(new DateTime());

        $this->manager->persist($wallet);
        return $wallet;
    }

    // Ajout du paramètre $icon
    private function generateExpense(Wallet $wallet, int $amount, string $description, string $icon, User $createdBy): Expense
    {
        $expense = new Expense();
        $expense->setUid(Uuid::v7()->toString());

        $expense->setWallet($wallet);
        $expense->setDescription($description);
        $expense->setIcon($icon);
        $expense->setAmount($amount);
        $expense->setCreatedBy($createdBy);
        $expense->setCreatedDate(new DateTime());

        $wallet->setTotalAmount($wallet->getTotalAmount() + $amount);

        $this->manager->persist($expense);
        return $expense;
    }

    private function generateXUserWallet(User $user, Wallet $wallet, string $role): XUserWallet
    {
        $xUserWallet = new XUserWallet();
        $xUserWallet->setTargetUser($user);
        $xUserWallet->setWallet($wallet);
        $xUserWallet->setRole($role);
        $xUserWallet->setCreatedBy($this->generatedUsers[0]);
        $xUserWallet->setCreatedDate(new DateTime());

        $this->manager->persist($xUserWallet);
        return $xUserWallet;
    }
}


