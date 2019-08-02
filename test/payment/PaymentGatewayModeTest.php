<?php

namespace Cardpay\test\payment;

use Cardpay\ApiException;
use Cardpay\test\BaseTestCase;
use Cardpay\test\Config;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\MessageFormatter;
use GuzzleHttp\Middleware;
use Psr\Log\LoggerInterface;

class PaymentGatewayModeTest extends BaseTestCase
{
    /**
     * @throws ApiException
     */
    public function testGateway()
    {
        $paymentUtils = new PaymentUtils();
        $paymentResponse = $paymentUtils->createPaymentInGatewayMode(time(), Config::$gatewayTerminalCode, Config::$gatewayPassword);

        self::assertNotEmpty($paymentResponse->getPaymentData()->getId());
    }

    /**
     * @throws ApiException
     */
    public function testGatewayWithMiddlewareLog()
    {

        $paymentUtils = new PaymentUtils();
        $paymentUtils->setClient($this->getClientWithLogMiddleware());

        $paymentResponse = $paymentUtils->createPaymentInGatewayMode(time(), Config::$gatewayTerminalCode, Config::$gatewayPassword);

        self::assertNotEmpty($paymentResponse->getPaymentData()->getId());
    }

    private function getClientWithLogMiddleware()
    {
        $logger = $this->createMock(LoggerInterface::class);
        $stack = HandlerStack::create();

        $stack->push(Middleware::log($logger, new MessageFormatter(MessageFormatter::DEBUG)));

        return new Client(['handler' => $stack]);
    }
}