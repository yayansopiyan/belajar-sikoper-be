<?php

declare(strict_types=1);

namespace Application\Documents;

use DateTime;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Gedmo\Mapping\Annotation as Gedmo;

use function array_keys;
use function get_class_vars;

/**
 * @ODM\Document(collection="unit_pengolah_usul_pindah_daftar_berkas")
 *
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class UnitPengolahUsulPindahDaftarBerkas
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
     * @ODM\ReferenceOne(targetDocument="Application\Documents\UnitPengolah")
     *
     * @var object
     */
    private $unitPengolah;

    /**
     * @ODM\ReferenceOne(targetDocument="Application\Documents\UnitPengolahUsulPindah")
     *
     * @var object
     */
    private $usulPindah;

    /**
     * @ODM\ReferenceOne(targetDocument="Application\Documents\UnitPengolahDaftarBerkas")
     *
     * @var object
     */
    private $daftarBerkas;

    /**
     * @ODM\Field(type="boolean")
     *
     * @var bool
     */
    private $apakahSudahLulusPengecekan = false;

    /**
     * @ODM\Date
     *
     * @var DateTime
     */
    private $tanggalLulusPengecekan;

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
    public function getUnitPengolah()
    {
        return $this->unitPengolah;
    }

    /**
     * @param object $unitPengolah
     */
    public function setUnitPengolah($unitPengolah)
    {
        $this->unitPengolah = $unitPengolah;
    }

    /**
     * @return object
     */
    public function getUsulPindah()
    {
        return $this->usulPindah;
    }

    /**
     * @param object $usulPindah
     */
    public function setUsulPindah($usulPindah)
    {
        $this->usulPindah = $usulPindah;
    }

    /**
     * @return object
     */
    public function getDaftarBerkas()
    {
        return $this->daftarBerkas;
    }

    /**
     * @param object $daftarBerkas
     */
    public function setDaftarBerkas($daftarBerkas)
    {
        $this->daftarBerkas = $daftarBerkas;
    }

    /**
     * @return bool
     */
    public function isApakahSudahLulusPengecekan()
    {
        return $this->apakahSudahLulusPengecekan;
    }

    /**
     * @param bool $apakahSudahLulusPengecekan
     */
    public function setApakahSudahLulusPengecekan($apakahSudahLulusPengecekan)
    {
        $this->apakahSudahLulusPengecekan = $apakahSudahLulusPengecekan;
    }

    /**
     * @return DateTime
     */
    public function getTanggalLulusPengecekan()
    {
        return $this->tanggalLulusPengecekan;
    }

    /**
     * @param DateTime $tanggalLulusPengecekan
     */
    public function setTanggalLulusPengecekan($tanggalLulusPengecekan)
    {
        $this->tanggalLulusPengecekan = $tanggalLulusPengecekan;
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
     * @return $this
     */
    public function setData(array $data)
    {
        foreach (array_keys(get_class_vars(self::class)) as $key) {
            if (isset($data[$key]) && ($key !== 'id') && ($key !== 'uuid')) {
                $this->$key = $data[$key];
            }
        }
        return $this;
    }

    public function getData(): array
    {
        $data = [];
        foreach (array_keys(get_class_vars(self::class)) as $key) {
            $data[$key] = $this->$key;
        }
        return $data;
    }
}
