<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20181105203536 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE membre (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, pseudo VARCHAR(255) NOT NULL, fonction VARCHAR(255) NOT NULL, devis TINYINT(1) NOT NULL, contrat_achat TINYINT(1) NOT NULL, vente TINYINT(1) NOT NULL, reference TINYINT(1) NOT NULL, url VARCHAR(255) NOT NULL, alt VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_F6B4FB2986CC499D (pseudo), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        
        $this->addSql('ALTER TABLE user ADD membre_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6496A99F74A FOREIGN KEY (membre_id) REFERENCES membre (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6496A99F74A ON user (membre_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6496A99F74A');
        $this->addSql('DROP TABLE membre');
        $this->addSql('ALTER TABLE adresse CHANGE departement departement VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE annonce CHANGE type_forfait type_forfait VARCHAR(10) NOT NULL COLLATE utf8_unicode_ci, CHANGE nature nature VARCHAR(35) NOT NULL COLLATE utf8_unicode_ci, CHANGE fonction fonction VARCHAR(30) NOT NULL COLLATE utf8_unicode_ci, CHANGE type_annul type_annul VARCHAR(10) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE annonce_calendrier DROP FOREIGN KEY FK_AC01E93A8805AB2F');
        $this->addSql('ALTER TABLE annonce_calendrier DROP FOREIGN KEY FK_AC01E93AFF52FC51');
        $this->addSql('ALTER TABLE annonce_prix DROP FOREIGN KEY FK_CD9A36C08805AB2F');
        $this->addSql('ALTER TABLE annonce_prix_public_administre DROP FOREIGN KEY FK_CF9369E86E28B892');
        $this->addSql('ALTER TABLE annonce_prix_public_administre DROP FOREIGN KEY FK_CF9369E8A08CF4F');
        $this->addSql('ALTER TABLE annonce_prix_public_mairie DROP FOREIGN KEY FK_1F646C2E6E28B892');
        $this->addSql('ALTER TABLE annonce_prix_public_mairie DROP FOREIGN KEY FK_1F646C2E235DA22A');
        $this->addSql('ALTER TABLE calendrier DROP FOREIGN KEY FK_B2753CB9F6203804');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FA76ED395');
        $this->addSql('ALTER TABLE tarif_administre_epci DROP FOREIGN KEY FK_574D41FA8805AB2F');
        $this->addSql('ALTER TABLE tarif_administre_non_epci DROP FOREIGN KEY FK_75AB1B478805AB2F');
        $this->addSql('ALTER TABLE tarif_non_administre DROP FOREIGN KEY FK_DE4FA49B8805AB2F');
        $this->addSql('ALTER TABLE tarif_non_epci DROP FOREIGN KEY FK_71723D488805AB2F');
        $this->addSql('DROP INDEX IDX_8D93D6496A99F74A ON user');
        $this->addSql('ALTER TABLE user DROP membre_id');
    }
}
