# 🗝QkeyTool


> ✨ 这是由易语言编写的QQskey工具，包含主控端，被控端和终端源码。
>
> ⚠️ 腾讯随时会更新，不能保证该工具会长期有效。
>
> 🚫 源码仅供学习研究使用，不得作非法用途，非法使用产生的一切后果概不负责。

***
# 🧾 目录
1. <a href="#qy">前言</a>
2. <a href="#sm">源码使用说明</a>
	* <a href="#zk">主控</a>
	* <a href="#bk">被控</a>
	* <a href="#zd">终端</a>
3. <a href="#qt">其他说明</a>
4. <a href="#img">截图</a>
5. <a href="#update">更新记录</a>
***

## <a name="qy">✅ 前言</a>
> 不知道。


## <a name="sm">🚀 源码使用说明</a>
- **❌ 源码不提供编译版下载**


### <a name="zk">❤️ 主控</a>
* Modules文件夹内包含了源码所使用的模块。
* 源码内包含bkn算法(参考CSDN)，但是还未完善，可能无法正常使用。
* 大多数Uin都与QQ号相同，所以查绑是基于Uin查询的，所以可能会出现账号却无法查询的问题。

### <a name="bk">🧡 被控</a>
* Modules文件内包含了源码所使用的模块。
* `Key_Mail.e` 是发信版，`Key_Net.e` 是终端版；发信版可以单独使用，终端版需要搭配终端使用。
* 获取Key的原理是取QQ内存，算法取自精易论坛。
* 暂不支持新版Windows QQ的Key获取。
* 被控编译后一定会被杀软报毒。~~(自己看着办)~~

### <a name="zd">💛 终端</a>
* ~~终端是针对 **对稳定性要求高的用户** 所开发。其作用是减少敏感操作，降低被报毒的几率~~。
* 终端仅制作了基本框架。
	* 更多功能敬请期待

***

## <a name="qt">🍀 其他说明</a>
- 易语言版本：5.8
- 使用模块：
	- 精易模块[v10.4.5]
	- 乐易模块[v6.6]
- 作者：CowNow

***

## <a name="img">📸 截图</a>
- 主控界面

![](/img/QkeyTool2.png)

- 被控触发

![](/img/Mail.png)  

***

## <a name="update">🛠 更新记录</a>
> 2023-7-26
- 主控[+] 支持导出信息

> 2023-7-22
- 终端[+] 发布基本框架
- 被控[+] 上传了终端版本
- 主控[+] 自定义被控生成
- 被控[+] 无窗口运行

> 2023-7-21
- 主控[+] 优化Key读取
***
