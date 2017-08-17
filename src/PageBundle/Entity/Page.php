<?php


namespace PageBundle\Entity;

use CoreBundle\Plagins\Content\ContentEntityInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Page
 * @package PageBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="page")
 */
class Page implements ContentEntityInterface
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $title;

    /**
     * @ORM\Column(type="datetime").
     */
    private $created;

    public function __construct()
    {
        $this->created = new \DateTime();
    }

    protected function typeList()
    {
        return array('article', 'page');
    }

    public function id()
    {
        return $this->id;
    }

    public function title()
    {
        return 'Some title';
    }

    public function addLink()
    {
        return 'page_add';
    }

    public function editLink()
    {
        return 'page_edit';
    }

    public function canonicalLink()
    {
        return 'page_view';
    }

    public function formWidget()
    {

    }

    public function formaterWidget()
    {

    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Page
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Page
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }
}
