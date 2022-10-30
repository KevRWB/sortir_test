<?php

namespace App\DataFixtures;

use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class UtilisateursFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $roger = new Utilisateur();
        $roger->setNom('Dupont');
        $roger->setPrenom('Roger');
        $roger->setTelephone('0699999999');
        $roger->setMail('roger@roger.com');
        $roger->setPassword('admin');
        $roger->setIsAdmin(true);
        $roger->setIsActif(true);
        $roger->setCampus($this->getReference('campus-rennes'));
        $manager->persist($roger);

        $Ludwig = new Utilisateur();
        $Ludwig->setNom('Van Der Brook');
        $Ludwig->setPrenom('Ludwig');
        $Ludwig->setTelephone('0711111111');
        $Ludwig->setMail('ludwig@ludwig.com');
        $Ludwig->setPassword('123456');
        $Ludwig->setIsAdmin(false);
        $Ludwig->setIsActif(true);
        $Ludwig->setCampus($this->getReference('campus-rennes'));
        $manager->persist($Ludwig);

        $Solange = new Utilisateur();
        $Solange->setNom('Duprés');
        $Solange->setPrenom('Solange');
        $Solange->setTelephone('0622222222');
        $Solange->setMail('solange@solange.com');
        $Solange->setPassword('123456');
        $Solange->setIsAdmin(false);
        $Solange->setIsActif(true);
        $Solange->setCampus($this->getReference('campus-niort'));
        $manager->persist($Solange);

        $Dylan = new Utilisateur();
        $Dylan->setNom('Pain');
        $Dylan->setPrenom('Dylan');
        $Dylan->setTelephone('0633333333');
        $Dylan->setMail('dylan@dylan.com');
        $Dylan->setPassword('123456');
        $Dylan->setIsAdmin(false);
        $Dylan->setIsActif(true);
        $Dylan->setCampus($this->getReference('campus-quimper'));
        $manager->persist($Dylan);

        $natacha = new Utilisateur();
        $natacha->setNom('Youmildovskaya');
        $natacha->setPrenom('natacha');
        $natacha->setTelephone('0655555555');
        $natacha->setMail('natacha@natacha.com');
        $natacha->setPassword('123456');
        $natacha->setIsAdmin(false);
        $natacha->setIsActif(true);
        $natacha->setCampus($this->getReference('campus-nantes'));
        $manager->persist($natacha);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [CampusFixtures::class];
    }
}
