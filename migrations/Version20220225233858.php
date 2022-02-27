<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220225233858 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, hebergement_id INT DEFAULT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, id_client VARCHAR(255) NOT NULL, background_color VARCHAR(7) NOT NULL, border_color VARCHAR(7) NOT NULL, text_color VARCHAR(7) NOT NULL, INDEX IDX_42C8495523BB0F66 (hebergement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495523BB0F66 FOREIGN KEY (hebergement_id) REFERENCES hebergement (id)');
        $this->addSql('ALTER TABLE agence ADD photo_a VARCHAR(255) DEFAULT NULL, ADD nb_etoiles INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hebergement ADD agence_id INT DEFAULT NULL, ADD nom_h VARCHAR(255) NOT NULL, ADD photo_h VARCHAR(255) DEFAULT NULL, DROP nom, DROP id_agence, DROP date_debut, DROP date_fin');
        $this->addSql('ALTER TABLE hebergement ADD CONSTRAINT FK_4852DD9CD725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('CREATE INDEX IDX_4852DD9CD725330D ON hebergement (agence_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE reservation');
        $this->addSql('ALTER TABLE agence DROP photo_a, DROP nb_etoiles, CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse adresse VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE artiste CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type type VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE equipe CHANGE nom_equipe nom_equipe VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE drapeau_equipe drapeau_equipe VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE hebergement DROP FOREIGN KEY FK_4852DD9CD725330D');
        $this->addSql('DROP INDEX IDX_4852DD9CD725330D ON hebergement');
        $this->addSql('ALTER TABLE hebergement ADD nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD id_agence VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD date_debut INT NOT NULL, ADD date_fin DATE NOT NULL, DROP agence_id, DROP nom_h, DROP photo_h, CHANGE type type VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse adresse VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE joueur CHANGE nom_joueur nom_joueur VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom_joueur prenom_joueur VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE kiosque CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type type VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE matche CHANGE nom_arbitre nom_arbitre VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE tour tour VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE produit CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type type VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE taille taille VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE couleur couleur VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE photo photo VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE stade CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse adresse VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE username username VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE roles roles JSON NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE genre genre VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE pays pays VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
