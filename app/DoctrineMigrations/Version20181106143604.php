<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20181106143604 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE fonction (id INT AUTO_INCREMENT NOT NULL, name_fonction VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_900D5BD25D12073 (name_fonction), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nature (id INT AUTO_INCREMENT NOT NULL, name_nature VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_B1D882A7B7A011EA (name_nature), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE adresse DROP departement');
        $this->addSql('ALTER TABLE annonce ADD nature_id INT DEFAULT NULL, ADD fonction_id INT DEFAULT NULL, ADD assurances VARCHAR(255) DEFAULT NULL, DROP nature, DROP fonction, DROP date_creation');
        $this->addSql('ALTER TABLE annonce ADD CONSTRAINT FK_F65593E53BCB2E4B FOREIGN KEY (nature_id) REFERENCES nature (id)');
        $this->addSql('ALTER TABLE annonce ADD CONSTRAINT FK_F65593E557889920 FOREIGN KEY (fonction_id) REFERENCES fonction (id)');
        $this->addSql('CREATE INDEX IDX_F65593E53BCB2E4B ON annonce (nature_id)');
        $this->addSql('CREATE INDEX IDX_F65593E557889920 ON annonce (fonction_id)');
        $this->addSql('ALTER TABLE annonce_calendrier ADD CONSTRAINT FK_AC01E93A8805AB2F FOREIGN KEY (annonce_id) REFERENCES annonce (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE annonce_calendrier ADD CONSTRAINT FK_AC01E93AFF52FC51 FOREIGN KEY (calendrier_id) REFERENCES calendrier (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE annonce_prix ADD CONSTRAINT FK_CD9A36C08805AB2F FOREIGN KEY (annonce_id) REFERENCES annonce (id)');
        $this->addSql('ALTER TABLE annonce_prix_public_mairie ADD CONSTRAINT FK_1F646C2E6E28B892 FOREIGN KEY (annonce_prix_id) REFERENCES annonce_prix (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE annonce_prix_public_mairie ADD CONSTRAINT FK_1F646C2E235DA22A FOREIGN KEY (public_mairie_id) REFERENCES publicmairie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE annonce_prix_public_administre ADD CONSTRAINT FK_CF9369E86E28B892 FOREIGN KEY (annonce_prix_id) REFERENCES annonce_prix (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE annonce_prix_public_administre ADD CONSTRAINT FK_CF9369E8A08CF4F FOREIGN KEY (public_administre_id) REFERENCES publicadministre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE calendrier ADD CONSTRAINT FK_B2753CB9F6203804 FOREIGN KEY (statut_id) REFERENCES statut (id)');
        $this->addSql('ALTER TABLE tarif_administre_epci ADD CONSTRAINT FK_574D41FA8805AB2F FOREIGN KEY (annonce_id) REFERENCES annonce (id)');
        $this->addSql('ALTER TABLE tarif_administre_non_epci ADD CONSTRAINT FK_75AB1B478805AB2F FOREIGN KEY (annonce_id) REFERENCES annonce (id)');
        $this->addSql('ALTER TABLE tarif_non_administre ADD CONSTRAINT FK_DE4FA49B8805AB2F FOREIGN KEY (annonce_id) REFERENCES annonce (id)');
        $this->addSql('ALTER TABLE tarif_non_epci ADD CONSTRAINT FK_71723D488805AB2F FOREIGN KEY (annonce_id) REFERENCES annonce (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE annonce DROP FOREIGN KEY FK_F65593E557889920');
        $this->addSql('ALTER TABLE annonce DROP FOREIGN KEY FK_F65593E53BCB2E4B');
        $this->addSql('DROP TABLE fonction');
        $this->addSql('DROP TABLE nature');
        $this->addSql('ALTER TABLE adresse ADD departement VARCHAR(55) DEFAULT NULL COLLATE utf8_unicode_ci');
        $this->addSql('DROP INDEX IDX_F65593E53BCB2E4B ON annonce');
        $this->addSql('DROP INDEX IDX_F65593E557889920 ON annonce');
        $this->addSql('ALTER TABLE annonce ADD nature VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD fonction VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD date_creation DATE NOT NULL, DROP nature_id, DROP fonction_id, DROP assurances');
        $this->addSql('ALTER TABLE annonce_calendrier DROP FOREIGN KEY FK_AC01E93A8805AB2F');
        $this->addSql('ALTER TABLE annonce_calendrier DROP FOREIGN KEY FK_AC01E93AFF52FC51');
        $this->addSql('ALTER TABLE annonce_prix DROP FOREIGN KEY FK_CD9A36C08805AB2F');
        $this->addSql('ALTER TABLE annonce_prix_public_administre DROP FOREIGN KEY FK_CF9369E86E28B892');
        $this->addSql('ALTER TABLE annonce_prix_public_administre DROP FOREIGN KEY FK_CF9369E8A08CF4F');
        $this->addSql('ALTER TABLE annonce_prix_public_mairie DROP FOREIGN KEY FK_1F646C2E6E28B892');
        $this->addSql('ALTER TABLE annonce_prix_public_mairie DROP FOREIGN KEY FK_1F646C2E235DA22A');
        $this->addSql('ALTER TABLE calendrier DROP FOREIGN KEY FK_B2753CB9F6203804');
        $this->addSql('ALTER TABLE tarif_administre_epci DROP FOREIGN KEY FK_574D41FA8805AB2F');
        $this->addSql('ALTER TABLE tarif_administre_non_epci DROP FOREIGN KEY FK_75AB1B478805AB2F');
        $this->addSql('ALTER TABLE tarif_non_administre DROP FOREIGN KEY FK_DE4FA49B8805AB2F');
        $this->addSql('ALTER TABLE tarif_non_epci DROP FOREIGN KEY FK_71723D488805AB2F');
    }
}
