<?php
use Propel\Generator\Manager\MigrationManager;

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1670484081.
 * Generated on 2022-12-08 07:21:21 by spryker 
 */
class PropelMigration_1670484081 
{
    public $comment = '';

    public function preUp(MigrationManager $manager)
    {
        // add the pre-migration code here
    }

    public function postUp(MigrationManager $manager)
    {
        // add the post-migration code here
    }

    public function preDown(MigrationManager $manager)
    {
        // add the pre-migration code here
    }

    public function postDown(MigrationManager $manager)
    {
        // add the post-migration code here
    }

    /**
     * Get the SQL statements for the Up migration
     *
     * @return array list of the SQL strings to execute for the Up migration
     *               the keys being the datasources
     */
    public function getUpSQL()
    {
        $connection_zed = <<< 'EOT'

# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `pyz_store_locations`
(
    `idstore` INTEGER NOT NULL AUTO_INCREMENT,
    `storename` VARCHAR(255) NOT NULL,
    `street` VARCHAR(255) NOT NULL,
    `city` VARCHAR(255) NOT NULL,
    `region` VARCHAR(255) NOT NULL,
    `country` VARCHAR(255) NOT NULL,
    `zipcode` VARCHAR(255) NOT NULL,
    `longitude` VARCHAR(255) NOT NULL,
    `latitude` VARCHAR(255) NOT NULL,
    `storeimage` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`idstore`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
EOT;

        return array(
            'zed' => $connection_zed,
        );
    }

    /**
     * Get the SQL statements for the Down migration
     *
     * @return array list of the SQL strings to execute for the Down migration
     *               the keys being the datasources
     */
    public function getDownSQL()
    {
        $connection_zed = <<< 'EOT'

# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS `pyz_store_locations`;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
EOT;

        return array(
            'zed' => $connection_zed,
        );
    }

}