<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220423110259 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fournisseur ADD updated_at DATETIME DEFAULT NULL, DROP updatedAt');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY id_type_reclamation_FK');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE60640466F3E644 FOREIGN KEY (id_type_reclamation) REFERENCES type_reclamation (id_type_reclamation) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reset_password_request CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES utilisateur (id_utilisateur)');
        $this->addSql('ALTER TABLE utilisateur DROP username, CHANGE Status_compte Status_compte VARCHAR(255) DEFAULT \'non_verifier\' NOT NULL, CHANGE roles roles JSON DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fournisseur ADD updatedAt DATETIME DEFAULT \'NULL\', DROP updated_at');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE60640466F3E644');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT id_type_reclamation_FK FOREIGN KEY (id_type_reclamation) REFERENCES type_reclamation (id_type_reclamation)');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE reset_password_request CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD username VARCHAR(255) NOT NULL, CHANGE Status_compte Status_compte VARCHAR(255) DEFAULT \'\'\'non_verifier\'\'\' NOT NULL, CHANGE roles roles LONGTEXT DEFAULT NULL COLLATE `utf8mb4_bin`');
    }
}