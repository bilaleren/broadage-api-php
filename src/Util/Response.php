<?php

namespace BroadAgeApi\Util;

use ArrayAccess;
use DOMDocument;
use Psr\Http\Message\ResponseInterface;

final class Response implements ArrayAccess
{

    /**
     * @var ResponseInterface
     */
    private $response;

    /**
     * @var array
     */
    private $items;

    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
        $this->items = (array) json_decode($this->getContent(), true);
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        $body = $this->response->getBody();
        $body->rewind();
        return $body->getContents();
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->response->getStatusCode();
    }

    /**
     * @return string[][]
     */
    public function getHeaders()
    {
        return $this->response->getHeaders();
    }

    /**
     * @return ResponseInterface
     */
    public function response(): ResponseInterface
    {
        return $this->response;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return $this->items;
    }

    /**
     * @return DOMDocument
     */
    public function toXml(): DOMDocument
    {
        $xml = new DOMDocument;
        $xml->loadXML($this->getContent());
        return $xml;
    }

    /**
     * @param mixed $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->items[$name];
    }

    /**
     * @param mixed $name
     * @param mixed $value
     * @return void
     */
    public function __set($name, $value): void
    {
        $this->items[$name] = $value;
    }

    /**
     * @param mixed $name
     * @return bool
     */
    public function __isset($name): bool
    {
        return array_key_exists($name, $this->items);
    }

    /**
     * @param mixed $name
     * @return void
     */
    public function __unset($name): void
    {
        unset($this->items[$name]);
    }

    /**
     * @param mixed $offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->__get($offset);
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        $this->__set($offset, $value);
    }

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset): bool
    {
        return $this->__isset($offset);
    }

    /**
     * @param mixed $offset
     * @return void
     */
    public function offsetUnset($offset): void
    {
        $this->__unset($offset);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getContent();
    }

}