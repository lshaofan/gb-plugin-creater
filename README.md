# plugin-creater

```
composer create-project shaofan7/gb-plugin-creater
```

```
# 先进入 项目根目录 目录
# 要创建一个插件
# {目录}/demo 为插件路径名称
# 执行命令根据提示一步步操作即可
composer create-project shaofan/gb-plugin-creater plugin/demo
会在项目根目录下创建 plugin/demo 插件目录
```

## 插件目录示例

```shell position-relative overflow-auto
# 执行成功后就会得到一下如下结构的插件
plugin/maxincai/demo/
|-- composer.json
|-- LICENSE
|-- phpunit.xml
|-- README.md
|-- src
|   |-- ConfigProvider.php
|   |-- Action-------------------------------------- 动作目录(控制器)
|   |-- Constants----------------------------------- 常量目录
|   |-- Contract------------------------------------ 服务接口契约目录
|   |-- Event--------------------------------------- 事件目录
|   |-- Job----------------------------------------- 异步任务目录
|   |-- Listener------------------------------------ 事件监听器目录
|   |-- Logic--------------------------------------- 业务逻辑目录
|   |-- Model--------------------------------------- 模型目录
|   |-- Queue--------------------------------------- 异步队列目录
|   |-- Service------------------------------------- 服务目录
|   `-- Task---------------------------------------- 定时任务目录
`-- tests
    |-- bootstrap.php
    `-- Cases
```

#感谢：

本工具根据 [mochat-cloud/plugin-creater](https://github.com/mochat-cloud/plugin-creater) 大量代码 Copy 而来，感谢 mochat-cloud。

本工具根据 Hyperf 官方 component-creater 大量代码 Copy 而来，再次感谢。

