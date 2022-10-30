<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221030155626 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_3C3FD3F2D936B2FA ON sortie');
        $this->addSql('ALTER TABLE sortie CHANGE organisateur_id oganisateur_id INT NOT NULL');
        $this->addSql('ALTER TABLE sortie ADD CONSTRAINT FK_3C3FD3F218A00293 FOREIGN KEY (oganisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_3C3FD3F218A00293 ON sortie (oganisateur_id)');
        $this->addSql('ALTER TABLE utilisateur ADD campus_id INT NOT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B3AF5D55E1 FOREIGN KEY (campus_id) REFERENCES campus (id)');
        $this->addSql('CREATE INDEX IDX_1D1C63B3AF5D55E1 ON utilisateur (campus_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sortie DROP FOREIGN KEY FK_3C3FD3F218A00293');
        $this->addSql('DROP INDEX IDX_3C3FD3F218A00293 ON sortie');
        $this->addSql('ALTER TABLE sortie CHANGE oganisateur_id organisateur_id INT NOT NULL');
        $this->addSql('CREATE INDEX IDX_3C3FD3F2D936B2FA ON sortie (organisateur_id)');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B3AF5D55E1');
        $this->addSql('DROP INDEX IDX_1D1C63B3AF5D55E1 ON utilisateur');
        $this->addSql('ALTER TABLE utilisateur DROP campus_id');
    }
}
