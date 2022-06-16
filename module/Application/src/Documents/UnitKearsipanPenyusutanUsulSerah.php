<?php

declare(strict_types=1);

namespace Application\Documents;

use DateTime;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Gedmo\Mapping\Annotation as Gedmo;

use function array_keys;
use function get_class_vars;

/**
 * @ODM\Document(collection="unit_kearsipan_penyusutan_usul_serah")
 *
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class UnitKearsipanPenyusutanUsulSerah
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
     * @ODM\Field(type="string")
     *
     * @var string
     */
    private $shortId;

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
     * @ODM\Field(type="boolean")
     *
     * @var bool
     */
    private $checkDokumenSuratUsulan = false;

    /**
     * @ODM\Field(type="boolean")
     *
     * @var bool
     */
    private $checkDokumenKesepakatan = false;

    /**
     * @ODM\Field(type="boolean")
     *
     * @var bool
     */
    private $checkDokumenBeritaAcaraPenyerahan = false;

    /**
     * @ODM\Field(type="boolean")
     *
     * @var bool
     */
    private $apakahSudahSerah = false;

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

    public function getShortId(): string
    {
        return $this->shortId;
    }

    public function setShortId(string $shortId): void
    {
        $this->shortId = $shortId;
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

    public function isCheckDokumenSuratUsulan(): bool
    {
        return $this->checkDokumenSuratUsulan;
    }

    public function setCheckDokumenSuratUsulan(bool $checkDokumenSuratUsulan): void
    {
        $this->checkDokumenSuratUsulan = $checkDokumenSuratUsulan;
    }

    public function isCheckDokumenKesepakatan(): bool
    {
        return $this->checkDokumenKesepakatan;
    }

    public function setCheckDokumenKesepakatan(bool $checkDokumenKesepakatan): void
    {
        $this->checkDokumenKesepakatan = $checkDokumenKesepakatan;
    }

    public function isCheckDokumenBeritaAcaraPenyerahan(): bool
    {
        return $this->checkDokumenBeritaAcaraPenyerahan;
    }

    public function setCheckDokumenBeritaAcaraPenyerahan(bool $checkDokumenBeritaAcaraPenyerahan): void
    {
        $this->checkDokumenBeritaAcaraPenyerahan = $checkDokumenBeritaAcaraPenyerahan;
    }

    public function isApakahSudahSerah(): bool
    {
        return $this->apakahSudahSerah;
    }

    public function setApakahSudahSerah(bool $apakahSudahSerah): void
    {
        $this->apakahSudahSerah = $apakahSudahSerah;
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
