<?php

declare(strict_types=1);

namespace Application\Documents;

use DateTime;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

use function array_keys;
use function get_class_vars;
use function is_array;

/**
 * @ODM\Document(collection="oauth_refresh_tokens")
 */
class UserRefreshToken
{
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
    protected $refreshToken;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    protected $clientId;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    protected $userId;

    /**
     * @ODM\Field(type="integer")
     *
     * @var int
     */
    protected $expires;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    protected $scope;

    /**
     * @ODM\Date
     *
     * @var DateTime
     */
    protected $createdAt;

    /**
     * @ODM\Date
     *
     * @var DateTime
     */
    protected $updatedAt;

    /**
     * @ODM\Date
     *
     * @var DateTime
     */
    protected $deletedAt;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getRefreshToken(): string
    {
        return $this->refreshToken;
    }

    public function setRefreshToken(string $refreshToken): void
    {
        $this->refreshToken = $refreshToken;
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function setClientId(string $clientId): void
    {
        $this->clientId = $clientId;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * @param int $expires
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;
    }

    /**
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param string $scope
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
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
