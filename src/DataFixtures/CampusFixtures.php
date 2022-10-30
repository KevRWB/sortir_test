<?php

namespace App\DataFixtures;

use App\Entity\Campus;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class CampusFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $nantes = new Campus();
        $nantes->setNom('Nantes');
        $manager->persist($nantes);
        $this->addReference('campus-nantes');

        $rennes = new Campus();
        $rennes->setNom('Rennes');
        $manager->persist($rennes);
        $this->addReference('campus-rennes');

        $quimper = new Campus();
        $quimper->setNom('Quimper');
        $manager->persist($quimper);
        $this->addReference('campus-quimper');

        $niort = new Campus();
        $niort->setNom('Niort');
        $manager->persist($niort);
        $this->addReference('campus-niort');

        $manager->flush();
    }

    public function getDependencies()
    {
        return [LieuFixtures::class];
    }
}
