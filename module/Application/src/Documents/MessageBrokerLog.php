<?php

declare(strict_types=1);

namespace Application\Documents;

use DateTime;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Gedmo\Mapping\Annotation as Gedmo;

use function array_keys;
use function get_class_vars;

/**
 * @ODM\Document(collection="message_broker_log")
 *
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class MessageBrokerLog
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
    private $username;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    private $topic;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    private $channel;

    /**
     * @ODM\Field(type="string")
     *
     * @var string
     */
    private $command;

    /**
     * @ODM\Field(type="boolean")
     *
     * @var bool
     */
    private $isExecuted = false;

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

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getTopic(): string
    {
        return $this->topic;
    }

    public function setTopic(string $topic): void
    {
        $this->topic = $topic;
    }

    public function getChannel(): string
    {
        return $this->channel;
    }

    public function setChannel(string $channel): void
    {
        $this->channel = $channel;
    }

    public function getCommand(): string
    {
        return $this->command;
    }

    public function setCommand(string $command): void
    {
        $this->command = $command;
    }

    public function isExecuted(): bool
    {
        return $this->isExecuted;
    }

    public function setIsExecuted(bool $isExecuted): void
    {
        $this->isExecuted = $isExecuted;
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
