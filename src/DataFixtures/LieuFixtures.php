<?php

namespace App\DataFixtures;

use App\Entity\Lieu;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class LieuFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $bowlingRennes = new Lieu();
        $bowlingRennes->setNom('Bowling Rennes');
        $bowlingRennes->setRue(' 2 Rue du Bosphore');
        $bowlingRennes->setLatitude('48.08223655234337');
        $bowlingRennes->setLongitude('-1.6811398405813196');
        $bowlingRennes->setVille($this->getReference('ville-rennes'));
        $manager->persist($bowlingRennes);

        $patinoireRennes = new Lieu();
        $patinoireRennes->setNom('Patinoire Rennes');
        $patinoireRennes->setRue(' 8 Av. des Gayeulles');
        $patinoireRennes->setLatitude('48.13276961537219');
        $patinoireRennes->setLongitude('-1.6502342851600178');
        $patinoireRennes->setVille($this->getReference('ville-rennes'));
        $manager->persist($patinoireRennes);

        $piscineNantes = new Lieu();
        $piscineNantes->setNom('Piscine Nantes');
        $piscineNantes->setRue(' All. de l\'Île Gloriette');
        $piscineNantes->setLatitude('47.2099573794909');
        $piscineNantes->setLongitude('-1.559962200075289');
        $piscineNantes->setVille($this->getReference('ville-nantes'));
        $manager->persist($piscineNantes);

        $hangarBanaesNantes = new Lieu();
        $hangarBanaesNantes->setNom('Hangar à bananes Nantes');
        $hangarBanaesNantes->setRue('Bd des Antilles');
        $hangarBanaesNantes->setLatitude('47.200908870481086');
        $hangarBanaesNantes->setLongitude(' -1.5729968240414818');
        $hangarBanaesNantes->setVille($this->getReference('ville-nantes'));
        $manager->persist($hangarBanaesNantes);

        $museeDonjonNiort = new Lieu();
        $museeDonjonNiort->setNom('Musée du donjon Niort');
        $museeDonjonNiort->setRue('Rue du Guesclin');
        $museeDonjonNiort->setLatitude('46.325308905939366');
        $museeDonjonNiort->setLongitude(' -0.4649998540667174');
        $museeDonjonNiort->setVille($this->getReference('ville-niort'));
        $manager->persist($museeDonjonNiort);

        $chamoisLudikNiort = new Lieu();
        $chamoisLudikNiort->setNom('Chamois ludik Niort');
        $chamoisLudikNiort->setRue('29 rue de l\'Alsace Lorraine');
        $chamoisLudikNiort->setLatitude('46.325918927168495');
        $chamoisLudikNiort->setLongitude('-0.4583059480134086');
        $chamoisLudikNiort->setVille($this->getReference('ville-niort'));
        $manager->persist($chamoisLudikNiort);

        $pepieQuimper = new Lieu();
        $pepieQuimper->setNom('Pepie Quimper');
        $pepieQuimper->setRue('3 rue du cosquer');
        $pepieQuimper->setLatitude('48.001117858053334');
        $pepieQuimper->setLongitude('-4.110350471212874');
        $pepieQuimper->setVille($this->getReference('ville-quimper'));
        $manager->persist($pepieQuimper);

        $escapeGameQuimper = new Lieu();
        $escapeGameQuimper->setNom('Escape Game Quimper');
        $escapeGameQuimper->setRue('16 Rue Pierre Brossolette');
        $escapeGameQuimper->setLatitude('47.99270597971226');
        $escapeGameQuimper->setLongitude('-4.085801842376751');
        $escapeGameQuimper->setVille($this->getReference('ville-quimper'));
        $manager->persist($escapeGameQuimper);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [VillesFixtures::class];
    }
}
