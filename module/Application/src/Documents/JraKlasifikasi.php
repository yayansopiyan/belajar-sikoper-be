<?php

declare(strict_types=1);

namespace Application\Documents;

use DateTime;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Gedmo\Mapping\Annotation as Gedmo;

use function array_keys;
use function get_class_vars;
use function is_array;

/**
 * @ODM\Document(collection="jra_klasifikasi")
 *
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class JraKlasifikasi
{
    /**
     * @ODM\Id
     *
     * @var string
     */
    private $id;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    private $uuid;

    /**
     * @ODM\ReferenceOne(targetDocument="Application\Documents\JraTahun")
     *
     * @var object
     */
    private $tahun;

    /**
     * @ODM\ReferenceOne(targetDocument="Application\Documents\JraKategori")
     *
     * @var object
     */
    private $kategori;

    /**
     * @ODM\ReferenceOne(targetDocument="Application\Documents\JraSubKategori")
     *
     * @var object
     */
    private $subKategori;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    private $code;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    private $name;

    /**
     * @ODM\Field(type="integer")
     *
     * @var int
     */
    private $retensiAktif;

    /**
     * @ODM\Field(type="integer")
     *
     * @var int
     */
    private $retensiInaktif;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    private $statusPenanganan;

    /**
     * @ODM\Date
     *
     * @var DateTime
     * @Gedmo\Timestampable(on="create")
     */
    private $createdAt;

    /**
     * @ODM\Date
     *
     * @var DateTime
     * @Gedmo\Timestampable(on="update")
     */
    private $updatedAt;

    /**
     * @ODM\Date
     *
     * @var DateTime
     */
    private $deletedAt;

    /**
     * @ODM\Field(type="hash")
     *
     * @var array
     */
    private $lowercase;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @param string $uuid
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * @return object
     */
    public function getTahun()
    {
        return $this->tahun;
    }

    /**
     * @param object $tahun
     */
    public function setTahun($tahun)
    {
        $this->tahun = $tahun;
    }

    /**
     * @return object
     */
    public function getKategori()
    {
        return $this->kategori;
    }

    /**
     * @param object $kategori
     */
    public function setKategori($kategori)
    {
        $this->kategori = $kategori;
    }

    /**
     * @return object
     */
    public function getSubKategori()
    {
        return $this->subKategori;
    }

    /**
     * @param object $subKategori
     */
    public function setSubKategori($subKategori)
    {
        $this->subKategori = $subKategori;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getRetensiAktif()
    {
        return $this->retensiAktif;
    }

    /**
     * @param int $retensiAktif
     */
    public function setRetensiAktif($retensiAktif)
    {
        $this->retensiAktif = $retensiAktif;
    }

    /**
     * @return int
     */
    public function getRetensiInaktif()
    {
        return $this->retensiInaktif;
    }

    /**
     * @param int $retensiInaktif
     */
    public function setRetensiInaktif($retensiInaktif)
    {
        $this->retensiInaktif = $retensiInaktif;
    }

    /**
     * @return string
     */
    public function getStatusPenanganan()
    {
        return $this->statusPenanganan;
    }

    /**
     * @param string $statusPenanganan
     */
    public function setStatusPenanganan($statusPenanganan)
    {
        $this->statusPenanganan = $statusPenanganan;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return DateTime
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * @param DateTime $deletedAt
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;
    }

    /**
     * @return array
     */
    public function getLowercase()
    {
        return $this->lowercase;
    }

    /**
     * @param array $lowercase
     */
    public function setLowercase($lowercase)
    {
        $this->lowercase = $lowercase;
    }

    /**
     * @param array $data
     * @return $this
     */
    public function setData($data)
    {
        if ($data !== null && is_array($data)) {
            foreach (array_keys(get_class_vars(self::class)) as $key) {
                if (isset($data[$key]) && ($key !== 'id') && ($key !== 'uuid')) {
                    $this->$key = $data[$key];
                }
            }
        }
        return $this;
    }

    /**
     * @return array
     */
    public function getData()
    {
        $data = [];
        foreach (array_keys(get_class_vars(self::class)) as $key) {
            $data[$key] = $this->$key;
        }
        return $data;
    }
}
