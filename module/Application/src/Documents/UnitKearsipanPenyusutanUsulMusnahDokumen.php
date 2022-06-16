<?php

declare(strict_types=1);

namespace Application\Documents;

use Application\Documents\UnitKearsipanPenyusutanJenisDokumen;
use Application\Documents\UnitKearsipanPenyusutanUsulMusnah;
use DateTime;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Gedmo\Mapping\Annotation as Gedmo;

use function array_keys;
use function get_class_vars;

/**
 * @ODM\Document(collection="unit_kearsipan_penyusutan_usul_musnah_dokumen")
 *
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class UnitKearsipanPenyusutanUsulMusnahDokumen
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
     * @ODM\ReferenceOne(targetDocument="Application\Documents\UnitKearsipanPenyusutanJenisDokumen")
     *
     * @var object
     */
    private $jenisDokumen;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    private $judul;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    private $deskripsi;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    protected $fileName;

    /**
     * @ODM\Field(type="integer")
     *
     * @var int
     */
    protected $fileSize;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    protected $fileType;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    protected $fileDestination;

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

    public function getJenisDokumen(): object
    {
        return $this->jenisDokumen;
    }

    public function setJenisDokumen(UnitKearsipanPenyusutanJenisDokumen $jenisDokumen): void
    {
        $this->jenisDokumen = $jenisDokumen;
    }

    public function getJudul(): string
    {
        return $this->judul;
    }

    public function setJudul(string $judul): void
    {
        $this->judul = $judul;
    }

    /**
     * @return string
     */
    public function getDeskripsi()
    {
        return $this->deskripsi;
    }

    /**
     * @param string $deskripsi
     */
    public function setDeskripsi($deskripsi): void
    {
        $this->deskripsi = $deskripsi;
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function setFileName(string $fileName): void
    {
        $this->fileName = $fileName;
    }

    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    public function setFileSize(int $fileSize): void
    {
        $this->fileSize = $fileSize;
    }

    public function getFileType(): string
    {
        return $this->fileType;
    }

    public function setFileType(string $fileType): void
    {
        $this->fileType = $fileType;
    }

    public function getFileDestination(): string
    {
        return $this->fileDestination;
    }

    public function setFileDestination(string $fileDestination): void
    {
        $this->fileDestination = $fileDestination;
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
