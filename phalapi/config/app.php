<?php
/**
 * 请在下面放置任何您需要的应用配置
 *
 * @license     http://www.phalapi.net/license GPL 协议
 * @link        http://www.phalapi.net/
 * @author dogstar <chanzonghuang@gmail.com> 2017-07-13
 */

return array(

    /**
     * 应用接口层的统一参数
     */
    'apiCommonRules' => array(
        //'sign' => array('name' => 'sign', 'require' => true),
    ),

	
	/* redis信息 */
    'REDIS_HOST' => "127.0.0.1",
    'REDIS_AUTH' => "521124",
    'REDIS_PORT' => "6379",
	
	/* 接口签名key */
    'sign_key' => '76576076c1f5f657b634e966c8836a06',
	
	/* 上传方式：0表示本地，1表示 七牛，2表示 亚马逊，3表示 腾讯云(预留)，4表示阿里云(预留) */
	'uptype'=>1,
    
    /**
     * 七牛相关配置
     */
    'Qiniu' =>  array(
        'access_key' => 'aQZ8J4O2NNktBpTWasQZ6B5xf6n99pn1szzKcPnW',
        //sk
        'secret_key' => 'GrkeMTdmmuqYPIbU4ccMjX7fUX1z6ReT6s5tzj2E',
        //存储空间
        'space_bucket' => 'qijiuk',
        //cdn加速域名 格式：http(s)://a.com
        'space_host' => 'http://cdn.xiangqu8.com',
		'uphost' => 'https://up.qiniup.com', 
        //七牛云存储区域 华东：z0，华北：z1，华南：z2，北美：na0，东南亚：as0，参考文档：https://developer.qiniu.com/kodo/manual/1671/
        'region'=>'z0',
    ),
	
	 /**
     * 亚马逊配置
     */
	'Aws' =>  array(
        'space_host' => '', // 如果有配置此项，则优先使用此域名
    ),

    /**
     * 接口服务白名单，格式：接口服务类名.接口服务方法名
     *
     * 示例：
     * - *.*         通配，全部接口服务，慎用！
     * - Site.*      Api_Default接口类的全部方法
     * - *.Index     全部接口类的Index方法
     * - Site.Index  指定某个接口服务，即Api_Default::Index()
     */
    'service_whitelist' => array(
        'Site.Index',
    ),
    
);
