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
 * @ODM\Document(collection="unit_pengolah_peminjam")
 *
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class UnitPengolahPeminjam
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
     * @ODM\Field(type="string")
     *
     * @var string
     */
    private $nip;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    private $fullName;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    private $description;

    /**
     * @ODM\Field(type="boolean")
     *
     * @var bool
     */
    private $isActive = true;

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
     * @return string
     */
    public function getNip()
    {
        return $this->nip;
    }

    /**
     * @param string $nip
     */
    public function setNip($nip)
    {
        $this->nip = $nip;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param string $fullName
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
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
