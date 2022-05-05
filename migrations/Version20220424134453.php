<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220424134453 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id_categorie INT AUTO_INCREMENT NOT NULL, nom_categorie VARCHAR(255) NOT NULL, PRIMARY KEY(id_categorie)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande (id_cmd INT AUTO_INCREMENT NOT NULL, id_produit INT DEFAULT NULL, id_fournisseur INT DEFAULT NULL, id_utilisateur INT DEFAULT NULL, statut VARCHAR(255) NOT NULL, date_cmd DATE NOT NULL, date_livraison DATE NOT NULL, quantite DOUBLE PRECISION NOT NULL, INDEX id_prod_cmd_fk (id_produit), INDEX id_fournisseur (id_fournisseur), INDEX id_utilisateur_fk (id_utilisateur), PRIMARY KEY(id_cmd)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE conge (id_conge INT AUTO_INCREMENT NOT NULL, id_utilisateur INT DEFAULT NULL, id_type_conge INT DEFAULT NULL, date_deb DATE NOT NULL, date_fin DATE NOT NULL, solde_restant INT DEFAULT 30 NOT NULL, etat VARCHAR(255) DEFAULT \'\'\'en cours\'\'\' NOT NULL, INDEX id_conge_fk (id_type_conge), INDEX id_utilisateur_cong_fk (id_utilisateur), PRIMARY KEY(id_conge)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE facture (num_facture INT AUTO_INCREMENT NOT NULL, id_rest INT DEFAULT NULL, id_fournisseur INT DEFAULT NULL, date_facture DATE NOT NULL, total DOUBLE PRECISION NOT NULL, statut VARCHAR(255) NOT NULL, INDEX id_rest_fk (id_rest), INDEX id_fournisseur_fk (id_fournisseur), PRIMARY KEY(num_facture)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournisseur (id_fournisseur INT AUTO_INCREMENT NOT NULL, nom_fournisseur VARCHAR(255) NOT NULL, matricule_fiscale VARCHAR(255) NOT NULL, domaine_fournisseur VARCHAR(255) NOT NULL, num_tel_fournisseur VARCHAR(255) NOT NULL, email_fournisseur VARCHAR(255) NOT NULL, adresse_fournisseur VARCHAR(255) NOT NULL, logo VARCHAR(255) DEFAULT \'NULL\', PRIMARY KEY(id_fournisseur)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit_restaurant (id_pdtrest INT AUTO_INCREMENT NOT NULL, id_rest INT DEFAULT NULL, nom_pdt VARCHAR(255) NOT NULL, quantite_pdt DOUBLE PRECISION NOT NULL, categ VARCHAR(255) NOT NULL, INDEX id_res_produit_fk (id_rest), PRIMARY KEY(id_pdtrest)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclamation (num_reclamation INT AUTO_INCREMENT NOT NULL, id_utilisateur INT DEFAULT NULL, id_type_reclamation INT DEFAULT NULL, destinataire VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, statut_reclamation VARCHAR(255) NOT NULL, date_reclamation DATE NOT NULL, INDEX id_uti_recl_fk (id_utilisateur), INDEX id_type_reclamation_FK (id_type_reclamation), PRIMARY KEY(num_reclamation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE restaurant (id_rest INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, specialite VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, num_tel VARCHAR(255) NOT NULL, UNIQUE INDEX nom (nom), PRIMARY KEY(id_rest)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id_role INT AUTO_INCREMENT NOT NULL, nom_role VARCHAR(255) NOT NULL, PRIMARY KEY(id_role)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stock (id_stock INT AUTO_INCREMENT NOT NULL, id_fournisseur INT DEFAULT NULL, nom_stock VARCHAR(255) NOT NULL, prix_unitaire DOUBLE PRECISION NOT NULL, quantite DOUBLE PRECISION NOT NULL, INDEX id_stock_fk (id_fournisseur), PRIMARY KEY(id_stock)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_conge (id_type_conge INT AUTO_INCREMENT NOT NULL, nom_type_conge VARCHAR(255) NOT NULL, PRIMARY KEY(id_type_conge)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_reclamation (id_type_reclamation INT AUTO_INCREMENT NOT NULL, nom_type_reclamation VARCHAR(255) NOT NULL, PRIMARY KEY(id_type_reclamation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id_utilisateur INT AUTO_INCREMENT NOT NULL, id_role INT DEFAULT NULL, id_rest INT DEFAULT NULL, id_fournisseur INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, cin VARCHAR(8) NOT NULL, mdp VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, num_tel VARCHAR(8) NOT NULL, date_naissance DATE NOT NULL, adresse VARCHAR(255) NOT NULL, salaire INT DEFAULT NULL, solde_conge INT DEFAULT 30, poste_employe VARCHAR(255) DEFAULT \'NULL\', Status_compte VARCHAR(255) DEFAULT \'non_verifier\' NOT NULL, roles JSON DEFAULT NULL, INDEX id_role_util_fk (id_role), INDEX id_rest_util_fk (id_rest), INDEX id_four_util_fk (id_fournisseur), PRIMARY KEY(id_utilisateur)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DF7384557 FOREIGN KEY (id_produit) REFERENCES produit_restaurant (id_pdtrest)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D2E8C07C5 FOREIGN KEY (id_fournisseur) REFERENCES fournisseur (id_fournisseur)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D50EAE44 FOREIGN KEY (id_utilisateur) REFERENCES utilisateur (id_utilisateur)');
        $this->addSql('ALTER TABLE conge ADD CONSTRAINT FK_2ED8934850EAE44 FOREIGN KEY (id_utilisateur) REFERENCES utilisateur (id_utilisateur)');
        $this->addSql('ALTER TABLE conge ADD CONSTRAINT FK_2ED89348855E9468 FOREIGN KEY (id_type_conge) REFERENCES type_conge (id_type_conge)');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT FK_FE86641076343DD2 FOREIGN KEY (id_rest) REFERENCES restaurant (id_rest)');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT FK_FE8664102E8C07C5 FOREIGN KEY (id_fournisseur) REFERENCES fournisseur (id_fournisseur)');
        $this->addSql('ALTER TABLE produit_restaurant ADD CONSTRAINT FK_42AD2B3276343DD2 FOREIGN KEY (id_rest) REFERENCES restaurant (id_rest)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE60640450EAE44 FOREIGN KEY (id_utilisateur) REFERENCES utilisateur (id_utilisateur)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE60640466F3E644 FOREIGN KEY (id_type_reclamation) REFERENCES type_reclamation (id_type_reclamation) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES utilisateur (id_utilisateur)');
        $this->addSql('ALTER TABLE stock ADD CONSTRAINT FK_4B3656602E8C07C5 FOREIGN KEY (id_fournisseur) REFERENCES fournisseur (id_fournisseur)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B3DC499668 FOREIGN KEY (id_role) REFERENCES role (id_role)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B376343DD2 FOREIGN KEY (id_rest) REFERENCES restaurant (id_rest)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B32E8C07C5 FOREIGN KEY (id_fournisseur) REFERENCES fournisseur (id_fournisseur)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D2E8C07C5');
        $this->addSql('ALTER TABLE facture DROP FOREIGN KEY FK_FE8664102E8C07C5');
        $this->addSql('ALTER TABLE stock DROP FOREIGN KEY FK_4B3656602E8C07C5');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B32E8C07C5');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DF7384557');
        $this->addSql('ALTER TABLE facture DROP FOREIGN KEY FK_FE86641076343DD2');
        $this->addSql('ALTER TABLE produit_restaurant DROP FOREIGN KEY FK_42AD2B3276343DD2');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B376343DD2');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B3DC499668');
        $this->addSql('ALTER TABLE conge DROP FOREIGN KEY FK_2ED89348855E9468');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE60640466F3E644');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D50EAE44');
        $this->addSql('ALTER TABLE conge DROP FOREIGN KEY FK_2ED8934850EAE44');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE60640450EAE44');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE conge');
        $this->addSql('DROP TABLE facture');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE produit_restaurant');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE restaurant');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE stock');
        $this->addSql('DROP TABLE type_conge');
        $this->addSql('DROP TABLE type_reclamation');
        $this->addSql('DROP TABLE utilisateur');
    }
}
