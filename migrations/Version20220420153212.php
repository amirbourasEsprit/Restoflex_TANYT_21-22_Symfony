<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220420153212 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande CHANGE id_utilisateur id_utilisateur INT DEFAULT NULL, CHANGE id_produit id_produit INT DEFAULT NULL');
        $this->addSql('ALTER TABLE conge CHANGE id_type_conge id_type_conge INT DEFAULT NULL, CHANGE id_utilisateur id_utilisateur INT DEFAULT NULL, CHANGE etat etat VARCHAR(255) DEFAULT \'\'\'en cours\'\'\' NOT NULL');
        $this->addSql('ALTER TABLE facture CHANGE id_fournisseur id_fournisseur INT DEFAULT NULL, CHANGE id_rest id_rest INT DEFAULT NULL');
        $this->addSql('ALTER TABLE fournisseur ADD updated_at DATETIME NOT NULL, CHANGE logo logo VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE produit_restaurant CHANGE id_rest id_rest INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation CHANGE id_type_reclamation id_type_reclamation INT DEFAULT NULL, CHANGE id_utilisateur id_utilisateur INT DEFAULT NULL');
        $this->addSql('ALTER TABLE stock CHANGE id_fournisseur id_fournisseur INT DEFAULT NULL');
        $this->addSql('ALTER TABLE utilisateur CHANGE id_role id_role INT DEFAULT NULL, CHANGE poste_employe poste_employe VARCHAR(255) DEFAULT \'NULL\', CHANGE Status_compte Status_compte VARCHAR(255) DEFAULT \'\'\'non_verifier\'\'\' NOT NULL');
        $this->addSql('ALTER TABLE fournisseur ADD date DATE NULL DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande CHANGE id_produit id_produit INT NOT NULL, CHANGE id_utilisateur id_utilisateur INT NOT NULL');
        $this->addSql('ALTER TABLE conge CHANGE id_utilisateur id_utilisateur INT NOT NULL, CHANGE id_type_conge id_type_conge INT NOT NULL, CHANGE etat etat VARCHAR(255) DEFAULT \'en cours\' NOT NULL');
        $this->addSql('ALTER TABLE facture CHANGE id_rest id_rest INT NOT NULL, CHANGE id_fournisseur id_fournisseur INT NOT NULL');
        $this->addSql('ALTER TABLE fournisseur DROP updated_at, CHANGE logo logo VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE produit_restaurant CHANGE id_rest id_rest INT NOT NULL');
        $this->addSql('ALTER TABLE reclamation CHANGE id_utilisateur id_utilisateur INT NOT NULL, CHANGE id_type_reclamation id_type_reclamation INT NOT NULL');
        $this->addSql('ALTER TABLE stock CHANGE id_fournisseur id_fournisseur INT NOT NULL');
        $this->addSql('ALTER TABLE utilisateur CHANGE id_role id_role INT NOT NULL, CHANGE poste_employe poste_employe VARCHAR(255) DEFAULT NULL, CHANGE Status_compte Status_compte VARCHAR(255) DEFAULT \'non_verifier\' NOT NULL');
    }
}
