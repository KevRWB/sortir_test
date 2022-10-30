<?php

namespace App\DataFixtures;

use App\Entity\Ville;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class VillesFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $niort = new Ville();
        $niort->setNom('Niort');
        $niort->setCodePostal(7900);
        $manager->persist($niort);
        $this->addReference('ville-niort');

        $rennes = new Ville();
        $rennes->setNom('Rennes');
        $rennes->setCodePostal(35000);
        $manager->persist($rennes);
        $this->addReference('ville-rennes');

        $nantes = new Ville();
        $nantes->setNom('Nantes');
        $nantes->setCodePostal(4400);
        $manager->persist($nantes);
        $this->addReference('ville-nantes');

        $quimper = new Ville();
        $quimper->setNom('Quimper');
        $quimper->setCodePostal(2900);
        $manager->persist($quimper);
        $this->addReference('ville-quimper');

        $manager->flush();
    }

    public function getDependencies()
    {
        return [EtatsFixtures::class];
    }
}
