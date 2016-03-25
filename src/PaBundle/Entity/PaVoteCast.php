<?php

namespace PaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaVoteCast
 *
 * @ORM\Table(name="pa_vote_cast")
 * @ORM\Entity(repositoryClass="PaBundle\Repository\PaVoteCastRepository")
 */
class PaVoteCast
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="figureValue", type="integer")
     */
    private $figureValue;

    /**
     * @var string
     *
     * @ORM\Column(name="wordValue", type="string", length=255, nullable=true)
     */
    private $wordValue;

    /**
     * @var bool
     *
     * @ORM\Column(name="edited", type="boolean", nullable=true)
     */
    private $edited;
    
    /**
     * @ORM\ManyToOne(targetEntity="VtallyBundle\Entity\PollingStation", inversedBy="paVoteCasts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pollingStation;
    
    /**
     * @ORM\ManyToOne(targetEntity="PaBundle\Entity\PaCandidate", inversedBy="paVoteCasts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $paCandidate;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set figureValue
     *
     * @param integer $figureValue
     *
     * @return PaVoteCast
     */
    public function setFigureValue($figureValue)
    {
        $this->figureValue = $figureValue;

        return $this;
    }

    /**
     * Get figureValue
     *
     * @return int
     */
    public function getFigureValue()
    {
        return $this->figureValue;
    }

    /**
     * Set wordValue
     *
     * @param string $wordValue
     *
     * @return PaVoteCast
     */
    public function setWordValue($wordValue)
    {
        $this->wordValue = $wordValue;

        return $this;
    }

    /**
     * Get wordValue
     *
     * @return string
     */
    public function getWordValue()
    {
        return $this->wordValue;
    }

    /**
     * Set edited
     *
     * @param boolean $edited
     *
     * @return PaVoteCast
     */
    public function setEdited($edited)
    {
        $this->edited = $edited;

        return $this;
    }

    /**
     * Get edited
     *
     * @return bool
     */
    public function getEdited()
    {
        return $this->edited;
    }

    /**
     * Set pollingStation
     *
     * @param \VtallyBundle\Entity\PollingStation $pollingStation
     *
     * @return PaVoteCast
     */
    public function setPollingStation(\VtallyBundle\Entity\PollingStation $pollingStation)
    {
        $this->pollingStation = $pollingStation;

        return $this;
    }

    /**
     * Get pollingStation
     *
     * @return \VtallyBundle\Entity\PollingStation
     */
    public function getPollingStation()
    {
        return $this->pollingStation;
    }

    /**
     * Set paCandidate
     *
     * @param \PaBundle\Entity\PaCandidate $paCandidate
     *
     * @return PaVoteCast
     */
    public function setPaCandidate(\PaBundle\Entity\PaCandidate $paCandidate)
    {
        $this->paCandidate = $paCandidate;

        return $this;
    }

    /**
     * Get paCandidate
     *
     * @return \PaBundle\Entity\PaCandidate
     */
    public function getPaCandidate()
    {
        return $this->paCandidate;
    }
}
