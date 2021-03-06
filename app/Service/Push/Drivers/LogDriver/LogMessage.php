<?php

namespace App\Service\Push\Drivers\LogDriver;

use App\Service\Push\Contracts\PushMessageContract;

class LogMessage implements PushMessageContract
{
    /**
     * @param string $message
     * @return PushMessageContract
     */
    public function setMessage(string $message): PushMessageContract
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @param array $payload
     * @return PushMessageContract
     */
    public function setPayload(array $payload): PushMessageContract
    {
        $this->payload = $payload;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return array
     */
    public function getPayload(): array
    {
        return $this->payload;
    }

    /**
     * @param string $os
     * @return PushMessageContract
     */
    public function setOs(string $os): PushMessageContract
    {
        $this->os = $os;

        return $this;
    }

    /**
     * @return string
     */
    public function getOs(): string
    {
        return $this->os;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'message' => $this->getMessage(),
            'payload' => $this->getPayload(),
            'os' => $this->getOs(),
        ];
    }
}