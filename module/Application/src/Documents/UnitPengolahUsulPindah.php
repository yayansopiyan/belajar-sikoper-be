<?php

declare(strict_types=1);

namespace Application\Documents;

use DateTime;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Gedmo\Mapping\Annotation as Gedmo;

use function array_keys;
use function get_class_vars;

/**
 * @ODM\Document(collection="unit_pengolah_usul_pindah")
 *
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class UnitPengolahUsulPindah
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
    protected $suratUsulanFileName;

    /**
     * @ODM\Field(type="integer")
     *
     * @var int
     */
    protected $suratUsulanFileSize;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    protected $suratUsulanFileType;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    protected $suratUsulanFileDestination;

    /**
     * @ODM\Field(type="boolean")
     *
     * @var bool
     */
    private $apakahSudahDikirimKeUnitKearsipan;

    /**
     * @ODM\Date
     *
     * @var DateTime
     */
    private $tanggalDikirimKeUnitKearsipan;

    /**
     * @ODM\Field(type="boolean")
     *
     * @var bool
     */
    private $apakahSudahLulusVerifikasi;

    /**
     * @ODM\Date
     *
     * @var DateTime
     */
    private $tanggalVerifikasi;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    protected $alasanVerifikasiDitolak;

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
     * @ODM\Field(type="string")
     *
     * @var string
     */
    protected $beritaAcaraFileName;

    /**
     * @ODM\Field(type="integer")
     *
     * @var int
     */
    protected $beritaAcaraFileSize;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    protected $beritaAcaraFileType;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    protected $beritaAcaraFileDestination;

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
    public function getSuratUsulanFileName()
    {
        return $this->suratUsulanFileName;
    }

    /**
     * @param string $suratUsulanFileName
     */
    public function setSuratUsulanFileName($suratUsulanFileName)
    {
        $this->suratUsulanFileName = $suratUsulanFileName;
    }

    /**
     * @return int
     */
    public function getSuratUsulanFileSize()
    {
        return $this->suratUsulanFileSize;
    }

    /**
     * @param int $suratUsulanFileSize
     */
    public function setSuratUsulanFileSize($suratUsulanFileSize)
    {
        $this->suratUsulanFileSize = $suratUsulanFileSize;
    }

    /**
     * @return string
     */
    public function getSuratUsulanFileType()
    {
        return $this->suratUsulanFileType;
    }

    /**
     * @param string $suratUsulanFileType
     */
    public function setSuratUsulanFileType($suratUsulanFileType)
    {
        $this->suratUsulanFileType = $suratUsulanFileType;
    }

    /**
     * @return string
     */
    public function getSuratUsulanFileDestination()
    {
        return $this->suratUsulanFileDestination;
    }

    /**
     * @param string $suratUsulanFileDestination
     */
    public function setSuratUsulanFileDestination($suratUsulanFileDestination)
    {
        $this->suratUsulanFileDestination = $suratUsulanFileDestination;
    }

    /**
     * @return bool
     */
    public function isApakahSudahDikirimKeUnitKearsipan()
    {
        return $this->apakahSudahDikirimKeUnitKearsipan;
    }

    /**
     * @param bool $apakahSudahDikirimKeUnitKearsipan
     */
    public function setApakahSudahDikirimKeUnitKearsipan($apakahSudahDikirimKeUnitKearsipan)
    {
        $this->apakahSudahDikirimKeUnitKearsipan = $apakahSudahDikirimKeUnitKearsipan;
    }

    /**
     * @return DateTime
     */
    public function getTanggalDikirimKeUnitKearsipan()
    {
        return $this->tanggalDikirimKeUnitKearsipan;
    }

    /**
     * @param DateTime $tanggalDikirimKeUnitKearsipan
     */
    public function setTanggalDikirimKeUnitKearsipan($tanggalDikirimKeUnitKearsipan)
    {
        $this->tanggalDikirimKeUnitKearsipan = $tanggalDikirimKeUnitKearsipan;
    }

    /**
     * @return bool
     */
    public function isApakahSudahLulusVerifikasi()
    {
        return $this->apakahSudahLulusVerifikasi;
    }

    /**
     * @param bool $apakahSudahLulusVerifikasi
     */
    public function setApakahSudahLulusVerifikasi($apakahSudahLulusVerifikasi)
    {
        $this->apakahSudahLulusVerifikasi = $apakahSudahLulusVerifikasi;
    }

    /**
     * @return DateTime
     */
    public function getTanggalVerifikasi()
    {
        return $this->tanggalVerifikasi;
    }

    /**
     * @param DateTime $tanggalVerifikasi
     */
    public function setTanggalVerifikasi($tanggalVerifikasi)
    {
        $this->tanggalVerifikasi = $tanggalVerifikasi;
    }

    /**
     * @return string
     */
    public function getAlasanVerifikasiDitolak()
    {
        return $this->alasanVerifikasiDitolak;
    }

    /**
     * @param string $alasanVerifikasiDitolak
     */
    public function setAlasanVerifikasiDitolak($alasanVerifikasiDitolak)
    {
        $this->alasanVerifikasiDitolak = $alasanVerifikasiDitolak;
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
     * @return string
     */
    public function getBeritaAcaraFileName()
    {
        return $this->beritaAcaraFileName;
    }

    /**
     * @param string $beritaAcaraFileName
     */
    public function setBeritaAcaraFileName($beritaAcaraFileName)
    {
        $this->beritaAcaraFileName = $beritaAcaraFileName;
    }

    /**
     * @return int
     */
    public function getBeritaAcaraFileSize()
    {
        return $this->beritaAcaraFileSize;
    }

    /**
     * @param int $beritaAcaraFileSize
     */
    public function setBeritaAcaraFileSize($beritaAcaraFileSize)
    {
        $this->beritaAcaraFileSize = $beritaAcaraFileSize;
    }

    /**
     * @return string
     */
    public function getBeritaAcaraFileType()
    {
        return $this->beritaAcaraFileType;
    }

    /**
     * @param string $beritaAcaraFileType
     */
    public function setBeritaAcaraFileType($beritaAcaraFileType)
    {
        $this->beritaAcaraFileType = $beritaAcaraFileType;
    }

    /**
     * @return string
     */
    public function getBeritaAcaraFileDestination()
    {
        return $this->beritaAcaraFileDestination;
    }

    /**
     * @param string $beritaAcaraFileDestination
     */
    public function setBeritaAcaraFileDestination($beritaAcaraFileDestination)
    {
        $this->beritaAcaraFileDestination = $beritaAcaraFileDestination;
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
