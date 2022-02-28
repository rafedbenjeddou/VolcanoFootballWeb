<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220220151332 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE evenement_artiste (evenement_id INT NOT NULL, artiste_id INT NOT NULL, INDEX IDX_9F022293FD02F13 (evenement_id), INDEX IDX_9F02229321D25844 (artiste_id), PRIMARY KEY(evenement_id, artiste_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, hebergement_id INT DEFAULT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, etat VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_42C8495523BB0F66 (hebergement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE evenement_artiste ADD CONSTRAINT FK_9F022293FD02F13 FOREIGN KEY (evenement_id) REFERENCES evenement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evenement_artiste ADD CONSTRAINT FK_9F02229321D25844 FOREIGN KEY (artiste_id) REFERENCES artiste (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495523BB0F66 FOREIGN KEY (hebergement_id) REFERENCES hebergement (id)');
        $this->addSql('ALTER TABLE agence ADD photo_a VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE hebergement ADD agence_id INT DEFAULT NULL, ADD photo_h VARCHAR(255) DEFAULT NULL, DROP id_agence, DROP date_debut, DROP date_fin');
        $this->addSql('ALTER TABLE hebergement ADD CONSTRAINT FK_4852DD9CD725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('CREATE INDEX IDX_4852DD9CD725330D ON hebergement (agence_id)');
        $this->addSql('ALTER TABLE kiosque ADD stade_id INT DEFAULT NULL, ADD photo VARCHAR(255) NOT NULL, DROP id_stade');
        $this->addSql('ALTER TABLE kiosque ADD CONSTRAINT FK_636D6C1E6538AB43 FOREIGN KEY (stade_id) REFERENCES stade (id)');
        $this->addSql('CREATE INDEX IDX_636D6C1E6538AB43 ON kiosque (stade_id)');
        $this->addSql('ALTER TABLE stade ADD photo VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE evenement_artiste');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('ALTER TABLE agence DROP photo_a, CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse adresse VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE artiste CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type type VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE equipe CHANGE nom_equipe nom_equipe VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE drapeau_equipe drapeau_equipe VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE hebergement DROP FOREIGN KEY FK_4852DD9CD725330D');
        $this->addSql('DROP INDEX IDX_4852DD9CD725330D ON hebergement');
        $this->addSql('ALTER TABLE hebergement ADD id_agence VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD date_debut INT NOT NULL, ADD date_fin DATE NOT NULL, DROP agence_id, DROP photo_h, CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type type VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse adresse VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE joueur CHANGE nom_joueur nom_joueur VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom_joueur prenom_joueur VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE kiosque DROP FOREIGN KEY FK_636D6C1E6538AB43');
        $this->addSql('DROP INDEX IDX_636D6C1E6538AB43 ON kiosque');
        $this->addSql('ALTER TABLE kiosque ADD id_stade INT NOT NULL, DROP stade_id, DROP photo, CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type type VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE matche CHANGE nom_arbitre nom_arbitre VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE tour tour VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE stade DROP photo, CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse adresse VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
