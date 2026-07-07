<?php
declare(strict_types=1);

namespace Panth\PageBuilderAi\Cron;

use Magento\Framework\MessageQueue\ConsumerFactory;
use Psr\Log\LoggerInterface;

class DrainGenerationQueue
{
    private const CONSUMER_NAME = 'panth_pagebuilderai.generate_meta.consumer';

    private const MAX_MESSAGES = 50;

    public function __construct(
        private readonly ConsumerFactory $consumerFactory,
        private readonly LoggerInterface $logger
    ) {
    }

    public function execute(): void
    {
        try {
            $consumer = $this->consumerFactory->get(self::CONSUMER_NAME, self::MAX_MESSAGES);
            $consumer->process(self::MAX_MESSAGES);
        } catch (\Throwable $e) {
            $this->logger->warning(
                '[Panth PageBuilderAi] drain-queue cron failed: ' . $e->getMessage()
            );
        }
    }
}
