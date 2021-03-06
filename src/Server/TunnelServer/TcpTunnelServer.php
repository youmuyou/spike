<?php
/**
 * Spike library
 * @author Tao <taosikai@yeah.net>
 */
namespace Spike\Server\TunnelServer;

/**
 * @codeCoverageIgnore
 */
class TcpTunnelServer extends TunnelServer
{
    /**
     * {@inheritdoc}
     */
    public function closePublicConnection(PublicConnection $publicConnection, $message = null)
    {
        $publicConnection->getConnection()->end($message ?: "Timeout");
    }
}