<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250812093334 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration est auto-générée, modifiée pour éviter l'erreur si la colonne n'existe pas
        $this->addSql('ALTER TABLE technologie ADD certifications_pdf JSON DEFAULT NULL');
        // Suppression de la colonne certification_pdf commentée car elle n'existe pas
        // $this->addSql('ALTER TABLE technologie DROP certification_pdf');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE technologie ADD certification_pdf VARCHAR(255) DEFAULT NULL, DROP certifications_pdf');
    }
}
