<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Faker\Factory;

class AppFixtures extends Fixture
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager)
    {   
        // Utilisation de Faker
        $faker = Factory::create('fr_FR');
      
        // Créer plusieurs utilisateurs factices
        for ($i = 0; $i < 10; $i++) {
            $user = new User();

            $user->setPrenom($faker->firstName)
                ->setNom($faker->lastName)
                ->setEmail($faker->email)
                ->setRoles(['ROLE_USER'])
                ->setAge($faker->numberBetween(18, 60))
                ->setUsername($faker->userName)
                ->setVille($faker->city);

            // Hacher le mot de passe
            $hashedPassword = $this->passwordHasher->hashPassword(
                $user,
                'password' // Vous pouvez changer ce mot de passe par défaut
            );
            $user->setPassword($hashedPassword);

            // Persister l'utilisateur
            $manager->persist($user);
        }

        // Persister les modifications
        $manager->flush();
    }
}
