<?php

declare(strict_types=1);

namespace Application\Documents;

use Application\Documents\UnitKearsipanDaftarBerkas;
use Application\Documents\UnitKearsipanPenyusutanUsulMusnah;
use DateTime;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Gedmo\Mapping\Annotation as Gedmo;

use function array_keys;
use function get_class_vars;

/**
 * @ODM\Document(collection="unit_kearsipan_penyusutan_usul_musnah_daftar_berkas")
 *
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class UnitKearsipanPenyusutanUsulMusnahDaftarBerkas
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
     * @ODM\ReferenceOne(targetDocument="Application\Documents\UnitKearsipanPenyusutanUsulMusnah")
     *
     * @var object
     */
    private $usulMusnah;

    /**
     * @ODM\ReferenceOne(targetDocument="Application\Documents\UnitKearsipanDaftarBerkas")
     *
     * @var object
     */
    private $daftarBerkas;

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

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): void
    {
        $this->uuid = $uuid;
    }

    public function getUsulMusnah(): object
    {
        return $this->usulMusnah;
    }

    public function setUsulMusnah(UnitKearsipanPenyusutanUsulMusnah $usulMusnah): void
    {
        $this->usulMusnah = $usulMusnah;
    }

    public function getDaftarBerkas(): object
    {
        return $this->daftarBerkas;
    }

    public function setDaftarBerkas(UnitKearsipanDaftarBerkas $daftarBerkas): void
    {
        $this->daftarBerkas = $daftarBerkas;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(DateTime $updatedAt): void
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

    public function getLowercase(): array
    {
        return $this->lowercase;
    }

    public function setLowercase(array $lowercase): void
    {
        $this->lowercase = $lowercase;
    }

    /**
     * @param array $data
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
