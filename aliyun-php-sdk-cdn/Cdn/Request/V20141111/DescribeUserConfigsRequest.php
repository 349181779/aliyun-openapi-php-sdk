<?php

namespace Cdn\Request\V20141111;

/**
 * Request of DescribeUserConfigs
 *
 * @method string getSecurityToken()
 * @method string getOwnerId()
 * @method string getConfig()
 */
class DescribeUserConfigsRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Cdn',
            '2014-11-11',
            'DescribeUserConfigs'
        );
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $config
     *
     * @return $this
     */
    public function setConfig($config)
    {
        $this->requestParameters['Config'] = $config;
        $this->queryParameters['Config'] = $config;

        return $this;
    }
}
