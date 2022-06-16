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
 * @ODM\Document(collection="unit_kearsipan_daftar_berkas")
 *
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class UnitKearsipanDaftarBerkas
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
    private $unitPengolahDaftarBerkasUuid;

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
     * @ODM\ReferenceOne(targetDocument="Application\Documents\UnitKearsipanRak")
     *
     * @var object
     */
    private $rak;

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
    private $nomorFolderUk;

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
     * @ODM\Field(type="integer")
     *
     * @var int
     */
    private $jumlahIsiBerkas = 0;

    /**
     * @ODM\Field(type="boolean")
     *
     * @var bool
     */
    private $apakahSedangDipinjam = false;

    /**
     * @ODM\Field(type="boolean")
     *
     * @var bool
     */
    private $apakahBerkasTersedia;

    /**
     * @ODM\Date
     *
     * @var DateTime
     */
    private $tanggalPengecekanBerkas;

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
    private $apakahPenyusutanUsulMusnah;

    /**
     * @ODM\ReferenceOne(targetDocument="Application\Documents\UnitKearsipanPenyusutanUsulMusnah")
     *
     * @var object
     */
    private $penyusutanUsulMusnah;

    /**
     * @ODM\Field(type="boolean")
     *
     * @var bool
     */
    private $apakahPenyusutanUsulSerah;

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
     * @return string
     */
    public function getUnitPengolahDaftarBerkasUuid()
    {
        return $this->unitPengolahDaftarBerkasUuid;
    }

    /**
     * @param string $unitPengolahDaftarBerkasUuid
     */
    public function setUnitPengolahDaftarBerkasUuid($unitPengolahDaftarBerkasUuid)
    {
        $this->unitPengolahDaftarBerkasUuid = $unitPengolahDaftarBerkasUuid;
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
     * @return object
     */
    public function getRak()
    {
        return $this->rak;
    }

    /**
     * @param object $rak
     */
    public function setRak($rak)
    {
        $this->rak = $rak;
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
    public function getNomorFolderUk()
    {
        return $this->nomorFolderUk;
    }

    /**
     * @param string $nomorFolderUk
     */
    public function setNomorFolderUk($nomorFolderUk)
    {
        $this->nomorFolderUk = $nomorFolderUk;
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
     * @return bool
     */
    public function isApakahBerkasTersedia()
    {
        return $this->apakahBerkasTersedia;
    }

    /**
     * @param bool $apakahBerkasTersedia
     */
    public function setApakahBerkasTersedia($apakahBerkasTersedia)
    {
        $this->apakahBerkasTersedia = $apakahBerkasTersedia;
    }

    /**
     * @return DateTime
     */
    public function getTanggalPengecekanBerkas()
    {
        return $this->tanggalPengecekanBerkas;
    }

    /**
     * @param DateTime $tanggalPengecekanBerkas
     */
    public function setTanggalPengecekanBerkas($tanggalPengecekanBerkas)
    {
        $this->tanggalPengecekanBerkas = $tanggalPengecekanBerkas;
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
    public function isApakahPenyusutanUsulMusnah()
    {
        return $this->apakahPenyusutanUsulMusnah;
    }

    /**
     * @param bool $apakahPenyusutanUsulMusnah
     */
    public function setApakahPenyusutanUsulMusnah($apakahPenyusutanUsulMusnah): void
    {
        $this->apakahPenyusutanUsulMusnah = $apakahPenyusutanUsulMusnah;
    }

    /**
     * @return object
     */
    public function getPenyusutanUsulMusnah()
    {
        return $this->penyusutanUsulMusnah;
    }

    /**
     * @param object $penyusutanUsulMusnah
     */
    public function setPenyusutanUsulMusnah($penyusutanUsulMusnah): void
    {
        $this->penyusutanUsulMusnah = $penyusutanUsulMusnah;
    }

    /**
     * @return bool
     */
    public function isApakahPenyusutanUsulSerah()
    {
        return $this->apakahPenyusutanUsulSerah;
    }

    /**
     * @param bool $apakahPenyusutanUsulSerah
     */
    public function setApakahPenyusutanUsulSerah($apakahPenyusutanUsulSerah): void
    {
        $this->apakahPenyusutanUsulSerah = $apakahPenyusutanUsulSerah;
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
