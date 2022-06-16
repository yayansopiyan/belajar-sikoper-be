<?php

declare(strict_types=1);

namespace Application\Documents;

use DateTime;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Gedmo\Mapping\Annotation as Gedmo;

use function array_keys;
use function get_class_vars;

/**
 * @ODM\Document(collection="unit_pengolah_daftar_berkas")
 *
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class UnitPengolahDaftarBerkas
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
     * @ODM\ReferenceOne(targetDocument="Application\Documents\TingkatPerkembangan")
     *
     * @var object
     */
    private $tingkatPerkembangan;

    /**
     * @ODM\ReferenceOne(targetDocument="Application\Documents\KlasifikasiKeamanan")
     *
     * @var object
     */
    private $klasifikasiKeamanan;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    private $idBerkas;

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
    private $vitalNonVital;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    private $nomorFolder;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    private $nomorRak;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    private $nomorFillingCabinet;

    /**
     * @ODM\Field(type="integer")
     *
     * @var int
     */
    private $jumlahFolder;

    /**
     * @ODM\Date
     *
     * @var DateTime
     */
    private $kurunWaktuMulai;

    /**
     * @ODM\Date
     *
     * @var DateTime
     */
    private $kurunWaktuSelesai;

    /**
     * @ODM\ReferenceOne(targetDocument="Application\Documents\JraKlasifikasi")
     *
     * @var object
     */
    private $jraKlasifikasi;

    /**
     * @ODM\Field(type="hash")
     *
     * @var array
     */
    private $jraLabel;

    /**
     * @ODM\Field(type="integer")
     *
     * @var int
     */
    private $retensiAktif;

    /**
     * @ODM\Date
     *
     * @var DateTime
     */
    private $retensiAktifDueTime;

    /**
     * @ODM\Field(type="integer")
     *
     * @var int
     */
    private $retensiInaktif;

    /**
     * @ODM\Date
     *
     * @var DateTime
     */
    private $retensiInaktifDueTime;

    /**
     * @ODM\Field(type="boolean")
     *
     * @var bool
     */
    private $isActive = true;

    /**
     * @ODM\Field(type="integer")
     *
     * @var int
     */
    private $jumlahIsiBerkas = 0;

    /**
     * @ODM\ReferenceOne(targetDocument="Application\Documents\Users")
     *
     * @var object
     */
    private $createdBy;

    /**
     * @ODM\Field(type="boolean")
     *
     * @var bool
     */
    private $apakahSedangDipinjam = false;

    /**
     * @ODM\Field(type="integer")
     *
     * @var int
     */
    private $jumlahBerkasNilai;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    private $jumlahBerkasSatuan;

    /**
     * @ODM\Field(type="boolean")
     *
     * @var bool
     */
    private $apakahSudahProsesPindah;

    /**
     * @ODM\Date
     *
     * @var DateTime
     */
    private $tanggalProsesPindah;

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
     * @return string
     */
    public function getIdBerkas()
    {
        return $this->idBerkas;
    }

    /**
     * @param string $idBerkas
     */
    public function setIdBerkas($idBerkas)
    {
        $this->idBerkas = $idBerkas;
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
    public function getVitalNonVital()
    {
        return $this->vitalNonVital;
    }

    /**
     * @param string $vitalNonVital
     */
    public function setVitalNonVital($vitalNonVital)
    {
        $this->vitalNonVital = $vitalNonVital;
    }

    /**
     * @return string
     */
    public function getNomorFolder()
    {
        return $this->nomorFolder;
    }

    /**
     * @param string $nomorFolder
     */
    public function setNomorFolder($nomorFolder)
    {
        $this->nomorFolder = $nomorFolder;
    }

    /**
     * @return string
     */
    public function getNomorRak()
    {
        return $this->nomorRak;
    }

    /**
     * @param string $nomorRak
     */
    public function setNomorRak($nomorRak)
    {
        $this->nomorRak = $nomorRak;
    }

    /**
     * @return string
     */
    public function getNomorFillingCabinet()
    {
        return $this->nomorFillingCabinet;
    }

    /**
     * @param string $nomorFillingCabinet
     */
    public function setNomorFillingCabinet($nomorFillingCabinet)
    {
        $this->nomorFillingCabinet = $nomorFillingCabinet;
    }

    /**
     * @return int
     */
    public function getJumlahFolder()
    {
        return $this->jumlahFolder;
    }

    /**
     * @param int $jumlahFolder
     */
    public function setJumlahFolder($jumlahFolder)
    {
        $this->jumlahFolder = $jumlahFolder;
    }

    /**
     * @return DateTime
     */
    public function getKurunWaktuMulai()
    {
        return $this->kurunWaktuMulai;
    }

    /**
     * @param DateTime $kurunWaktuMulai
     */
    public function setKurunWaktuMulai($kurunWaktuMulai)
    {
        $this->kurunWaktuMulai = $kurunWaktuMulai;
    }

    /**
     * @return DateTime
     */
    public function getKurunWaktuSelesai()
    {
        return $this->kurunWaktuSelesai;
    }

    /**
     * @param DateTime $kurunWaktuSelesai
     */
    public function setKurunWaktuSelesai($kurunWaktuSelesai)
    {
        $this->kurunWaktuSelesai = $kurunWaktuSelesai;
    }

    /**
     * @return object
     */
    public function getJraKlasifikasi()
    {
        return $this->jraKlasifikasi;
    }

    /**
     * @param object $jraKlasifikasi
     */
    public function setJraKlasifikasi($jraKlasifikasi)
    {
        $this->jraKlasifikasi = $jraKlasifikasi;
    }

    /**
     * @return array
     */
    public function getJraLabel()
    {
        return $this->jraLabel;
    }

    /**
     * @param array $jraLabel
     */
    public function setJraLabel($jraLabel)
    {
        $this->jraLabel = $jraLabel;
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
     * @return DateTime
     */
    public function getRetensiAktifDueTime()
    {
        return $this->retensiAktifDueTime;
    }

    /**
     * @param DateTime $retensiAktifDueTime
     */
    public function setRetensiAktifDueTime($retensiAktifDueTime)
    {
        $this->retensiAktifDueTime = $retensiAktifDueTime;
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
     * @return DateTime
     */
    public function getRetensiInaktifDueTime()
    {
        return $this->retensiInaktifDueTime;
    }

    /**
     * @param DateTime $retensiInaktifDueTime
     */
    public function setRetensiInaktifDueTime($retensiInaktifDueTime)
    {
        $this->retensiInaktifDueTime = $retensiInaktifDueTime;
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

    /**
     * @return int
     */
    public function getJumlahIsiBerkas()
    {
        return $this->jumlahIsiBerkas;
    }

    /**
     * @param int $jumlahIsiBerkas
     */
    public function setJumlahIsiBerkas($jumlahIsiBerkas)
    {
        $this->jumlahIsiBerkas = $jumlahIsiBerkas;
    }

    /**
     * @return object
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param object $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @return bool
     */
    public function isApakahSedangDipinjam()
    {
        return $this->apakahSedangDipinjam;
    }

    /**
     * @param bool $apakahSedangDipinjam
     */
    public function setApakahSedangDipinjam($apakahSedangDipinjam)
    {
        $this->apakahSedangDipinjam = $apakahSedangDipinjam;
    }

    /**
     * @return int
     */
    public function getJumlahBerkasNilai()
    {
        return $this->jumlahBerkasNilai;
    }

    /**
     * @param int $jumlahBerkasNilai
     */
    public function setJumlahBerkasNilai($jumlahBerkasNilai)
    {
        $this->jumlahBerkasNilai = $jumlahBerkasNilai;
    }

    /**
     * @return string
     */
    public function getJumlahBerkasSatuan()
    {
        return $this->jumlahBerkasSatuan;
    }

    /**
     * @param string $jumlahBerkasSatuan
     */
    public function setJumlahBerkasSatuan($jumlahBerkasSatuan)
    {
        $this->jumlahBerkasSatuan = $jumlahBerkasSatuan;
    }

    /**
     * @return bool
     */
    public function isApakahSudahProsesPindah()
    {
        return $this->apakahSudahProsesPindah;
    }

    /**
     * @param bool $apakahSudahProsesPindah
     */
    public function setApakahSudahProsesPindah($apakahSudahProsesPindah)
    {
        $this->apakahSudahProsesPindah = $apakahSudahProsesPindah;
    }

    /**
     * @return DateTime
     */
    public function getTanggalProsesPindah()
    {
        return $this->tanggalProsesPindah;
    }

    /**
     * @param DateTime $tanggalProsesPindah
     */
    public function setTanggalProsesPindah($tanggalProsesPindah)
    {
        $this->tanggalProsesPindah = $tanggalProsesPindah;
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
