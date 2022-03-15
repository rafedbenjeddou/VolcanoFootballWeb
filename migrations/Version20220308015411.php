<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220308015411 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE billet ADD matche_id INT DEFAULT NULL, DROP id_match, DROP date_achat');
        $this->addSql('ALTER TABLE billet ADD CONSTRAINT FK_1F034AF6FD997C2B FOREIGN KEY (matche_id) REFERENCES matche (id)');
        $this->addSql('CREATE INDEX IDX_1F034AF6FD997C2B ON billet (matche_id)');
        $this->addSql('ALTER TABLE matche ADD stade_id INT DEFAULT NULL, ADD date DATE NOT NULL, ADD nom_matche VARCHAR(255) NOT NULL, ADD time TIME NOT NULL, ADD image1 VARCHAR(255) DEFAULT NULL, ADD image2 VARCHAR(255) DEFAULT NULL, DROP id_equipe1, DROP id_equipe2, DROP id_stade');
        $this->addSql('ALTER TABLE matche ADD CONSTRAINT FK_9FCAD5106538AB43 FOREIGN KEY (stade_id) REFERENCES stade (id)');
        $this->addSql('CREATE INDEX IDX_9FCAD5106538AB43 ON matche (stade_id)');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE prenom prenom VARCHAR(255) NOT NULL, CHANGE genre genre VARCHAR(255) NOT NULL, CHANGE age age INT NOT NULL, CHANGE pays pays VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(255) NOT NULL, CHANGE num_tel num_tel INT NOT NULL, CHANGE username username VARCHAR(180) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agence CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse adresse VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE photo_a photo_a VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE artiste CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type type VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE billet DROP FOREIGN KEY FK_1F034AF6FD997C2B');
        $this->addSql('DROP INDEX IDX_1F034AF6FD997C2B ON billet');
        $this->addSql('ALTER TABLE billet ADD id_match INT NOT NULL, ADD date_achat DATE NOT NULL, DROP matche_id');
        $this->addSql('ALTER TABLE commande CHANGE adresse adresse VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE contact_joueur CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE message message VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE objet objet VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE equipe CHANGE nom_equipe nom_equipe VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE drapeau_equipe drapeau_equipe VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nom_entreneur nom_entreneur VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE facture CHANGE type type VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE hebergement CHANGE nom_h nom_h VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type type VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse adresse VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE photo_h photo_h VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE joueur CHANGE nom_joueur nom_joueur VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom_joueur prenom_joueur VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE position position VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE photo photo VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE kiosque CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type type VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE photo photo VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE matche DROP FOREIGN KEY FK_9FCAD5106538AB43');
        $this->addSql('DROP INDEX IDX_9FCAD5106538AB43 ON matche');
        $this->addSql('ALTER TABLE matche ADD id_equipe1 INT NOT NULL, ADD id_equipe2 INT NOT NULL, ADD id_stade INT NOT NULL, DROP stade_id, DROP date, DROP nom_matche, DROP time, DROP image1, DROP image2, CHANGE nom_arbitre nom_arbitre VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE tour tour VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE produit CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type type VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE taille taille VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE couleur couleur VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE photo photo VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE reservation_kiosque CHANGE type type VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE reset_password_request CHANGE selector selector VARCHAR(20) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE hashed_token hashed_token VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE stade CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse adresse VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE photo photo VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE username username VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nom nom VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE genre genre VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE age age INT DEFAULT NULL, CHANGE pays pays VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE num_tel num_tel INT DEFAULT NULL, CHANGE token token VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE code code VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
