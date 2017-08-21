<?php

namespace FeedBundle\Entity;

use JMS\Serializer\Annotation\Type;

class Feed
{

    /**
     * @Type("array<FeedBundle\Entity\Imported>")
     */
    private $items;

    public function getItems()
    {
        return $this->items;
    }
}
