<?php

namespace PN\Bundle\SeoBundle\Repository;

use Doctrine\ORM\EntityRepository;
use PN\Utils\SQL;

class BackLinkRepository extends EntityRepository {

    /**
     * get random blog 
     * @return type
     */
    public function findAllByJSON() {
        $connection = $this->getEntityManager()->getConnection();
        $sql = "SELECT * FROM `back_link` ORDER BY CHAR_LENGTH(word) DESC";
        $statement = $connection->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }

}
