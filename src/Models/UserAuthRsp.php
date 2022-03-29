<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\RMS\Models;

use AlibabaCloud\Tea\Model;

class UserAuthRsp extends Model
{
    // powers
    /**
     * @example powers
     *
     * @var LongListKeySet[]
     */
    public $powers;

    // bd_powers
    /**
     * @example bd_powers
     *
     * @var LongListKeySet[]
     */
    public $bdPowers;

    // w_powers
    /**
     * @example w_powers
     *
     * @var LongListKeySet[]
     */
    public $wPowers;

    // t_powers
    /**
     * @example t_powers
     *
     * @var LongListKeySet[]
     */
    public $tPowers;

    // super_admin
    /**
     * @example true, false
     *
     * @var bool
     */
    public $superAdmin;

    // super_view
    /**
     * @example true, false
     *
     * @var bool
     */
    public $superView;

    // biz_domains
    /**
     * @example biz_domains
     *
     * @var BizDomain[]
     */
    public $bizDomains;

    // auth_url
    /**
     * @example auth_url
     *
     * @var string
     */
    public $authUrl;
    protected $_name = [
        'powers'     => 'powers',
        'bdPowers'   => 'bd_powers',
        'wPowers'    => 'w_powers',
        'tPowers'    => 't_powers',
        'superAdmin' => 'super_admin',
        'superView'  => 'super_view',
        'bizDomains' => 'biz_domains',
        'authUrl'    => 'auth_url',
    ];

    public function validate()
    {
        Model::validateRequired('powers', $this->powers, true);
        Model::validateRequired('bdPowers', $this->bdPowers, true);
        Model::validateRequired('wPowers', $this->wPowers, true);
        Model::validateRequired('tPowers', $this->tPowers, true);
        Model::validateRequired('superAdmin', $this->superAdmin, true);
        Model::validateRequired('superView', $this->superView, true);
        Model::validateRequired('bizDomains', $this->bizDomains, true);
        Model::validateRequired('authUrl', $this->authUrl, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->powers) {
            $res['powers'] = [];
            if (null !== $this->powers && \is_array($this->powers)) {
                $n = 0;
                foreach ($this->powers as $item) {
                    $res['powers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bdPowers) {
            $res['bd_powers'] = [];
            if (null !== $this->bdPowers && \is_array($this->bdPowers)) {
                $n = 0;
                foreach ($this->bdPowers as $item) {
                    $res['bd_powers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->wPowers) {
            $res['w_powers'] = [];
            if (null !== $this->wPowers && \is_array($this->wPowers)) {
                $n = 0;
                foreach ($this->wPowers as $item) {
                    $res['w_powers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tPowers) {
            $res['t_powers'] = [];
            if (null !== $this->tPowers && \is_array($this->tPowers)) {
                $n = 0;
                foreach ($this->tPowers as $item) {
                    $res['t_powers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->superAdmin) {
            $res['super_admin'] = $this->superAdmin;
        }
        if (null !== $this->superView) {
            $res['super_view'] = $this->superView;
        }
        if (null !== $this->bizDomains) {
            $res['biz_domains'] = [];
            if (null !== $this->bizDomains && \is_array($this->bizDomains)) {
                $n = 0;
                foreach ($this->bizDomains as $item) {
                    $res['biz_domains'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->authUrl) {
            $res['auth_url'] = $this->authUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UserAuthRsp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['powers'])) {
            if (!empty($map['powers'])) {
                $model->powers = [];
                $n             = 0;
                foreach ($map['powers'] as $item) {
                    $model->powers[$n++] = null !== $item ? LongListKeySet::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['bd_powers'])) {
            if (!empty($map['bd_powers'])) {
                $model->bdPowers = [];
                $n               = 0;
                foreach ($map['bd_powers'] as $item) {
                    $model->bdPowers[$n++] = null !== $item ? LongListKeySet::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['w_powers'])) {
            if (!empty($map['w_powers'])) {
                $model->wPowers = [];
                $n              = 0;
                foreach ($map['w_powers'] as $item) {
                    $model->wPowers[$n++] = null !== $item ? LongListKeySet::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['t_powers'])) {
            if (!empty($map['t_powers'])) {
                $model->tPowers = [];
                $n              = 0;
                foreach ($map['t_powers'] as $item) {
                    $model->tPowers[$n++] = null !== $item ? LongListKeySet::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['super_admin'])) {
            $model->superAdmin = $map['super_admin'];
        }
        if (isset($map['super_view'])) {
            $model->superView = $map['super_view'];
        }
        if (isset($map['biz_domains'])) {
            if (!empty($map['biz_domains'])) {
                $model->bizDomains = [];
                $n                 = 0;
                foreach ($map['biz_domains'] as $item) {
                    $model->bizDomains[$n++] = null !== $item ? BizDomain::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['auth_url'])) {
            $model->authUrl = $map['auth_url'];
        }

        return $model;
    }
}
