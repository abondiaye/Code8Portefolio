<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        // Créer un nouvel objet de type User et définir ses propriétés
        $user = new User();
        $user->setPrenom('Pierre')
            ->setNom('abdoulaye')
            ->setAge(40)
            ->setUsername('abondiaye')
            ->setEmail('abondiaye@example.com')
            ->setRoles(["ROLE_ADMIN"])
            ->setVille('Lyon');

        // Hacher le mot de passe et le définir
        $hashedPassword = $this->passwordHasher->hashPassword($user, 'test1234');
        $user->setPassword($hashedPassword);

        // Persister l'utilisateur et sauvegarder dans la base de données
        $manager->persist($user);
        $manager->flush();
    }
}
