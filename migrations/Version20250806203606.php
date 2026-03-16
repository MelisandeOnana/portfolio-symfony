<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250806203606 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE demande_contact CHANGE date_envoi date_envoi DATETIME NOT NULL');
        $this->addSql('ALTER TABLE projet_technologie ADD CONSTRAINT FK_76BB624A76222944 FOREIGN KEY (id_projet) REFERENCES projet (id_projet)');
        $this->addSql('ALTER TABLE projet_technologie ADD CONSTRAINT FK_76BB624AB593FB83 FOREIGN KEY (id_technologie) REFERENCES technologie (id_technologie)');
        $this->addSql('CREATE INDEX IDX_76BB624A76222944 ON projet_technologie (id_projet)');
        $this->addSql('ALTER TABLE projet_technologie RENAME INDEX id_technologie TO IDX_76BB624AB593FB83');
        $this->addSql('ALTER TABLE projet_images ADD CONSTRAINT FK_C2B60E3C76222944 FOREIGN KEY (id_projet) REFERENCES projet (id_projet)');
        $this->addSql('ALTER TABLE projet_images RENAME INDEX id_projet TO IDX_C2B60E3C76222944');
        $this->addSql('DROP INDEX nom ON technologie');
        $this->addSql('ALTER TABLE technologie CHANGE description description LONGTEXT NOT NULL, CHANGE statut statut VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE utilisateur CHANGE date_creation date_creation DATETIME NOT NULL');
        $this->addSql('ALTER TABLE utilisateur RENAME INDEX email TO UNIQ_1D1C63B3E7927C74');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE demande_contact CHANGE date_envoi date_envoi DATETIME DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE projet_images DROP FOREIGN KEY FK_C2B60E3C76222944');
        $this->addSql('ALTER TABLE projet_images RENAME INDEX idx_c2b60e3c76222944 TO id_projet');
        $this->addSql('ALTER TABLE projet_technologie DROP FOREIGN KEY FK_76BB624A76222944');
        $this->addSql('ALTER TABLE projet_technologie DROP FOREIGN KEY FK_76BB624AB593FB83');
        $this->addSql('DROP INDEX IDX_76BB624A76222944 ON projet_technologie');
        $this->addSql('ALTER TABLE projet_technologie RENAME INDEX idx_76bb624ab593fb83 TO id_technologie');
        $this->addSql('ALTER TABLE technologie CHANGE description description TEXT NOT NULL, CHANGE statut statut VARCHAR(50) DEFAULT \'en_cours\'');
        $this->addSql('CREATE UNIQUE INDEX nom ON technologie (nom)');
        $this->addSql('ALTER TABLE utilisateur CHANGE date_creation date_creation DATETIME DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE utilisateur RENAME INDEX uniq_1d1c63b3e7927c74 TO email');
    }
}
