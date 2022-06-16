<?php

declare(strict_types=1);

namespace Application\Documents;

use DateTime;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Gedmo\Mapping\Annotation as Gedmo;

use function array_keys;
use function get_class_vars;

/**
 * @ODM\Document(collection="unit_kearsipan_transaksi_peminjaman")
 *
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class UnitKearsipanTransaksiPeminjaman
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
    private $shortid;

    /**
     * @ODM\ReferenceOne(targetDocument="Application\Documents\UnitKearsipanPeminjam")
     *
     * @var object
     */
    private $peminjam;

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
     */
    private $tanggalPeminjaman;

    /**
     * @ODM\Date
     *
     * @var DateTime
     */
    private $targetTanggalPengembalian;

    /**
     * @ODM\Date
     *
     * @var DateTime
     */
    private $tanggalPengembalian;

    /**
     * @ODM\Field(type="boolean")
     *
     * @var bool
     */
    private $apakahSudahDikembalikan = false;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    private $catatan;

    /**
     * @ODM\Field(type="hash")
     *
     * @var array
     */
    private $logs;

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
     * @return DateTime
     */
    public function getTanggalPeminjaman()
    {
        return $this->tanggalPeminjaman;
    }

    /**
     * @param DateTime $tanggalPeminjaman
     */
    public function setTanggalPeminjaman($tanggalPeminjaman)
    {
        $this->tanggalPeminjaman = $tanggalPeminjaman;
    }

    /**
     * @return DateTime
     */
    public function getTargetTanggalPengembalian()
    {
        return $this->targetTanggalPengembalian;
    }

    /**
     * @param DateTime $targetTanggalPengembalian
     */
    public function setTargetTanggalPengembalian($targetTanggalPengembalian)
    {
        $this->targetTanggalPengembalian = $targetTanggalPengembalian;
    }

    /**
     * @return DateTime
     */
    public function getTanggalPengembalian()
    {
        return $this->tanggalPengembalian;
    }

    /**
     * @param DateTime $tanggalPengembalian
     */
    public function setTanggalPengembalian($tanggalPengembalian)
    {
        $this->tanggalPengembalian = $tanggalPengembalian;
    }

    /**
     * @return bool
     */
    public function isApakahSudahDikembalikan()
    {
        return $this->apakahSudahDikembalikan;
    }

    /**
     * @param bool $apakahSudahDikembalikan
     */
    public function setApakahSudahDikembalikan($apakahSudahDikembalikan)
    {
        $this->apakahSudahDikembalikan = $apakahSudahDikembalikan;
    }

    /**
     * @return string
     */
    public function getCatatan()
    {
        return $this->catatan;
    }

    /**
     * @param string $catatan
     */
    public function setCatatan($catatan)
    {
        $this->catatan = $catatan;
    }

    /**
     * @return array
     */
    public function getLogs()
    {
        return $this->logs;
    }

    /**
     * @param array $logs
     */
    public function setLogs($logs)
    {
        $this->logs = $logs;
    }

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
     * @return string
     */
    public function getShortid()
    {
        return $this->shortid;
    }

    /**
     * @param string $shortid
     */
    public function setShortid($shortid)
    {
        $this->shortid = $shortid;
    }

    /**
     * @return object
     */
    public function getPeminjam()
    {
        return $this->peminjam;
    }

    /**
     * @param object $peminjam
     */
    public function setPeminjam($peminjam)
    {
        $this->peminjam = $peminjam;
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
