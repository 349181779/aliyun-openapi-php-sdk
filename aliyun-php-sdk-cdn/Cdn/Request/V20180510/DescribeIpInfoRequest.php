<?php

namespace Cdn\Request\V20180510;

/**
 * Request of DescribeIpInfo
 *
 * @method string getSecurityToken()
 * @method string getIP()
 * @method string getOwnerId()
 */
class DescribeIpInfoRequest extends \RpcAcsRequest
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
            '2018-05-10',
            'DescribeIpInfo'
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
     * @param string $iP
     *
     * @return $this
     */
    public function setIP($iP)
    {
        $this->requestParameters['IP'] = $iP;
        $this->queryParameters['IP'] = $iP;

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
}
