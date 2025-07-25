<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全网关自定义头部
 *
 * @method array getRequestToAddList() 获取请求添加头部配置
 * @method void setRequestToAddList(array $RequestToAddList) 设置请求添加头部配置
 */
class CustomHeader extends AbstractModel
{
    /**
     * @var array 请求添加头部配置
     */
    public $RequestToAddList;

    /**
     * @param array $RequestToAddList 请求添加头部配置
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RequestToAddList",$param) and $param["RequestToAddList"] !== null) {
            $this->RequestToAddList = [];
            foreach ($param["RequestToAddList"] as $key => $value){
                $obj = new CustomRequestToAdd();
                $obj->deserialize($value);
                array_push($this->RequestToAddList, $obj);
            }
        }
    }
}
