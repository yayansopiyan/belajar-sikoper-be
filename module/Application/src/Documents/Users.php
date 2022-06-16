<?php

declare(strict_types=1);

namespace Application\Documents;

use DateTime;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Gedmo\Mapping\Annotation as Gedmo;
use Laminas\Crypt\Password\Bcrypt;

use function array_keys;
use function get_class_vars;
use function is_array;
use function strtolower;

/**
 * @ODM\Document(collection="oauth_users")
 *
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class Users
{
    public function __construct()
    {
    }

    /**
     * @ODM\Id
     *
     * @var string
     */
    protected $id;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    protected $uuid;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    protected $username;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    protected $password;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    protected $fullName;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    protected $description;

    /**
     * @ODM\Field(type="boolean")
     *
     * @var bool
     */
    protected $isActive = true;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    protected $email;

    /**
     * @ODM\Field(type="boolean")
     *
     * @var bool
     */
    protected $isEmailVerified = false;

    /**
     * @ODM\Field(type="boolean")
     *
     * @var bool
     */
    protected $isUnitPengolah = false;

    /**
     * @ODM\ReferenceOne(targetDocument="Application\Documents\UnitPengolah")
     *
     * @var object
     */
    private $unitPengolah;

    /**
     * @ODM\Field(type="boolean")
     *
     * @var bool
     */
    protected $isUnitKearsipan = false;

    /**
     * @ODM\Field(type="boolean")
     *
     * @var bool
     */
    protected $isAdministrator = false;

    /**
     * @ODM\Date
     *
     * @var DateTime
     * @Gedmo\Timestampable(on="create")
     */
    protected $createdAt;

    /**
     * @ODM\Date
     *
     * @var DateTime
     * @Gedmo\Timestampable(on="update")
     */
    protected $updatedAt;

    /**
     * @ODM\Date
     *
     * @var DateTime
     */
    protected $deletedAt;

    /**
     * @ODM\Field(type="hash")
     *
     * @var array
     */
    protected $lowercase;

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
    public function getId()
    {
        return $this->id;
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
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = strtolower($username);
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $bcrypt         = new Bcrypt();
        $this->password = $bcrypt->create($password);
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
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
    public function getFullName()
    {
        return $this->fullName;
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

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return bool
     */
    public function isEmailVerified()
    {
        return $this->isEmailVerified;
    }

    /**
     * @param bool $isEmailVerified
     */
    public function setIsEmailVerified($isEmailVerified)
    {
        $this->isEmailVerified = $isEmailVerified;
    }

    /**
     * @return bool
     */
    public function isUnitPengolah()
    {
        return $this->isUnitPengolah;
    }

    /**
     * @param bool $isUnitPengolah
     */
    public function setIsUnitPengolah($isUnitPengolah)
    {
        $this->isUnitPengolah = $isUnitPengolah;
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
     * @return bool
     */
    public function isUnitKearsipan()
    {
        return $this->isUnitKearsipan;
    }

    /**
     * @param bool $isUnitKearsipan
     */
    public function setIsUnitKearsipan($isUnitKearsipan)
    {
        $this->isUnitKearsipan = $isUnitKearsipan;
    }

    /**
     * @return bool
     */
    public function isAdministrator()
    {
        return $this->isAdministrator;
    }

    /**
     * @param bool $isAdministrator
     */
    public function setIsAdministrator($isAdministrator)
    {
        $this->isAdministrator = $isAdministrator;
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
