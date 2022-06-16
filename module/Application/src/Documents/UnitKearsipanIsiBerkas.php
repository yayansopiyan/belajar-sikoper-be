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
 * @ODM\Document(collection="unit_kearsipan_isi_berkas")
 *
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class UnitKearsipanIsiBerkas
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
    private $unitPengolahIsiBerkasUuid;

    /**
     * @ODM\ReferenceOne(targetDocument="Application\Documents\UnitKearsipanDaftarBerkas")
     *
     * @var object
     */
    private $daftarBerkas;

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
    private $nomorDokumen;

    /**
     * @ODM\Date
     *
     * @var DateTime
     */
    private $tanggalDokumen;

    /**
     * @ODM\ReferenceOne(targetDocument="Application\Documents\TingkatPerkembangan")
     *
     * @var object
     */
    private $tingkatPerkembangan;

    /**
     * @ODM\ReferenceOne(targetDocument="Application\Documents\JenisMediaPenyimpanan")
     *
     * @var object
     */
    private $jenisMediaPenyimpanan;

    /**
     * @ODM\ReferenceOne(targetDocument="Application\Documents\KlasifikasiAkses")
     *
     * @var object
     */
    private $klasifikasiAkses;

    /**
     * @ODM\ReferenceOne(targetDocument="Application\Documents\KlasifikasiKeamanan")
     *
     * @var object
     */
    private $klasifikasiKeamanan;

    /**
     * @ODM\ReferenceOne(targetDocument="Application\Documents\KondisiArsip")
     *
     * @var object
     */
    private $kondisiArsip;

    /**
     * @ODM\ReferenceOne(targetDocument="Application\Documents\BahasaTulisan")
     *
     * @var object
     */
    private $bahasaTulisan;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    private $subyek;

    /**
     * @ODM\Field(type="boolean")
     *
     * @var bool
     */
    private $apakahIsiBerkasTersedia;

    /**
     * @ODM\Date
     *
     * @var DateTime
     */
    private $tanggalPengecekanIsiBerkas;

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
     * @return string
     */
    public function getUnitPengolahIsiBerkasUuid()
    {
        return $this->unitPengolahIsiBerkasUuid;
    }

    /**
     * @param string $unitPengolahIsiBerkasUuid
     */
    public function setUnitPengolahIsiBerkasUuid($unitPengolahIsiBerkasUuid)
    {
        $this->unitPengolahIsiBerkasUuid = $unitPengolahIsiBerkasUuid;
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
    public function getJudul()
    {
        return $this->judul;
    }

    /**
     * @param string $judul
     */
    public function setJudul($judul)
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
    public function setDeskripsi($deskripsi)
    {
        $this->deskripsi = $deskripsi;
    }

    /**
     * @return string
     */
    public function getNomorDokumen()
    {
        return $this->nomorDokumen;
    }

    /**
     * @param string $nomorDokumen
     */
    public function setNomorDokumen($nomorDokumen)
    {
        $this->nomorDokumen = $nomorDokumen;
    }

    /**
     * @return DateTime
     */
    public function getTanggalDokumen()
    {
        return $this->tanggalDokumen;
    }

    /**
     * @param DateTime $tanggalDokumen
     */
    public function setTanggalDokumen($tanggalDokumen)
    {
        $this->tanggalDokumen = $tanggalDokumen;
    }

    /**
     * @return object
     */
    public function getTingkatPerkembangan()
    {
        return $this->tingkatPerkembangan;
    }

    /**
     * @param object $tingkatPerkembangan
     */
    public function setTingkatPerkembangan($tingkatPerkembangan)
    {
        $this->tingkatPerkembangan = $tingkatPerkembangan;
    }

    /**
     * @return object
     */
    public function getJenisMediaPenyimpanan()
    {
        return $this->jenisMediaPenyimpanan;
    }

    /**
     * @param object $jenisMediaPenyimpanan
     */
    public function setJenisMediaPenyimpanan($jenisMediaPenyimpanan)
    {
        $this->jenisMediaPenyimpanan = $jenisMediaPenyimpanan;
    }

    /**
     * @return object
     */
    public function getKlasifikasiAkses()
    {
        return $this->klasifikasiAkses;
    }

    /**
     * @param object $klasifikasiAkses
     */
    public function setKlasifikasiAkses($klasifikasiAkses)
    {
        $this->klasifikasiAkses = $klasifikasiAkses;
    }

    /**
     * @return object
     */
    public function getKlasifikasiKeamanan()
    {
        return $this->klasifikasiKeamanan;
    }

    /**
     * @param object $klasifikasiKeamanan
     */
    public function setKlasifikasiKeamanan($klasifikasiKeamanan)
    {
        $this->klasifikasiKeamanan = $klasifikasiKeamanan;
    }

    /**
     * @return object
     */
    public function getKondisiArsip()
    {
        return $this->kondisiArsip;
    }

    /**
     * @param object $kondisiArsip
     */
    public function setKondisiArsip($kondisiArsip)
    {
        $this->kondisiArsip = $kondisiArsip;
    }

    /**
     * @return object
     */
    public function getBahasaTulisan()
    {
        return $this->bahasaTulisan;
    }

    /**
     * @param object $bahasaTulisan
     */
    public function setBahasaTulisan($bahasaTulisan)
    {
        $this->bahasaTulisan = $bahasaTulisan;
    }

    /**
     * @return string
     */
    public function getSubyek()
    {
        return $this->subyek;
    }

    /**
     * @param string $subyek
     */
    public function setSubyek($subyek)
    {
        $this->subyek = $subyek;
    }

    /**
     * @return bool
     */
    public function isApakahIsiBerkasTersedia()
    {
        return $this->apakahIsiBerkasTersedia;
    }

    /**
     * @param bool $apakahIsiBerkasTersedia
     */
    public function setApakahIsiBerkasTersedia($apakahIsiBerkasTersedia)
    {
        $this->apakahIsiBerkasTersedia = $apakahIsiBerkasTersedia;
    }

    /**
     * @return DateTime
     */
    public function getTanggalPengecekanIsiBerkas()
    {
        return $this->tanggalPengecekanIsiBerkas;
    }

    /**
     * @param DateTime $tanggalPengecekanIsiBerkas
     */
    public function setTanggalPengecekanIsiBerkas($tanggalPengecekanIsiBerkas)
    {
        $this->tanggalPengecekanIsiBerkas = $tanggalPengecekanIsiBerkas;
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
