<?php

namespace Symfony\Component\Messenger\Bridge\Amqp\Transport;

use Symfony\Component\Messenger\Stamp\StampInterface;

class AmqpTransportPublicationAttemptsStamp implements StampInterface {
    public function __construct(
        public int $publishAttempts,
    ) {
    }
}
