<?php

namespace App\DataFixtures;

use App\Entity\Etat;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EtatsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $creee = new Etat();
        $creee->setLibelle('Créée');
        $manager->persist($creee);
        $this->addReference('etat-creee');

        $ouverte = new Etat();
        $ouverte->setLibelle('Ouverte');
        $manager->persist($ouverte);
        $this->addReference('etat-ouverte');

        $cloture = new Etat();
        $cloture->setLibelle('Clôturée');
        $manager->persist($cloture);
        $this->addReference('etat-cloture');

        $enCours = new Etat();
        $enCours->setLibelle('Activité en cours');
        $manager->persist($enCours);
        $this->addReference('etat-enCours');

        $passee = new Etat();
        $passee->setLibelle('Passée');
        $manager->persist($passee);
        $this->addReference('etat-passee');

        $annulee = new Etat();
        $annulee->setLibelle('Annulée');
        $manager->persist($annulee);
        $this->addReference('etat-annulee');

        $manager->flush();
    }
}
