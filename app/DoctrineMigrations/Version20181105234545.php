<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20181105234545 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        
        $this->addSql('ALTER TABLE membre ADD mairie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE membre ADD CONSTRAINT FK_F6B4FB29E7A79AB FOREIGN KEY (mairie_id) REFERENCES mairie (id)');
        $this->addSql('CREATE INDEX IDX_F6B4FB29E7A79AB ON membre (mairie_id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE annonce_calendrier DROP FOREIGN KEY FK_AC01E93A8805AB2F');
        $this->addSql('ALTER TABLE annonce_calendrier DROP FOREIGN KEY FK_AC01E93AFF52FC51');
        $this->addSql('ALTER TABLE annonce_prix DROP FOREIGN KEY FK_CD9A36C08805AB2F');
        $this->addSql('ALTER TABLE annonce_prix_public_administre DROP FOREIGN KEY FK_CF9369E86E28B892');
        $this->addSql('ALTER TABLE annonce_prix_public_administre DROP FOREIGN KEY FK_CF9369E8A08CF4F');
        $this->addSql('ALTER TABLE annonce_prix_public_mairie DROP FOREIGN KEY FK_1F646C2E6E28B892');
        $this->addSql('ALTER TABLE annonce_prix_public_mairie DROP FOREIGN KEY FK_1F646C2E235DA22A');
        $this->addSql('ALTER TABLE calendrier DROP FOREIGN KEY FK_B2753CB9F6203804');
        $this->addSql('ALTER TABLE membre DROP FOREIGN KEY FK_F6B4FB29E7A79AB');
        $this->addSql('DROP INDEX IDX_F6B4FB29E7A79AB ON membre');
        $this->addSql('ALTER TABLE membre DROP mairie_id');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FA76ED395');
        $this->addSql('ALTER TABLE tarif_administre_epci DROP FOREIGN KEY FK_574D41FA8805AB2F');
        $this->addSql('ALTER TABLE tarif_administre_non_epci DROP FOREIGN KEY FK_75AB1B478805AB2F');
        $this->addSql('ALTER TABLE tarif_non_administre DROP FOREIGN KEY FK_DE4FA49B8805AB2F');
        $this->addSql('ALTER TABLE tarif_non_epci DROP FOREIGN KEY FK_71723D488805AB2F');
    }
}
