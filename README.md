# 🗝QkeyTool
[![Language](https://img.shields.io/badge/build-%E6%98%93%E8%AF%AD%E8%A8%80-blue?style=flat&label=Language)](https://zh.wikipedia.org/wiki/%E6%98%93%E8%AF%AD%E8%A8%80)
[![License](https://img.shields.io/github/license/CowNowK/QkeyTool.svg?style=flat)](LICENSE)


> ✨ 这是由易语言编写的QQskey工具，包含主控端，被控端和终端源码。
>
> ⚠️ 该工具将不再更新，现已无法适配最新版QQ和NT版QQ
>
> 🚫 源码仅供学习研究使用，不得作非法用途，非法使用产生的一切后果概不负责。

***
# 🧾 目录
1. <a href="#qy">前言</a>
2. <a href="#sm">源码使用说明</a>
	* <a href="#zk">主控</a>
	* <a href="#bk">被控</a>
	* <a href="#zd">终端</a>
	* <a href="#api">API</a>
3. <a href="#qt">常见问答</a>
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
* 不支持新版NT框架的QQ的Key获取。
* 被控编译后一定会被杀软报毒。~~(自己看着办)~~

### <a name="zd">💛 终端</a>
* ~~终端是针对 **对稳定性要求高的用户** 所开发。其作用是减少敏感操作，降低被报毒的几率~~。
* 终端仅制作了基本框架。
	* 更多功能敬请期待
 
### <a name="api">🧪 api</a>
* 使用Nodejs和php编写
* 由于易语言的限制性 (~~是我的技术有限~~)，导致易语言原生语法无法直接实现bkn的计算，如果使用dll调用，又对用户操作系统有一定限制。
* 本文件夹内包含了提供bkn计算的api接口源码，部署完毕后直接访问`index.php`并且提交 **skey** 数据即可返回 **Bkn**

***

## <a name="qt">🍀 其他说明 & 常见问答</a>

<details>
<summary>源码信息</summary>

### 源码信息
- 易语言版本：5.8
- 使用模块：
	- 精易模块[v10.4.5]
	- 乐易模块[v6.6]
	- 路菲皮肤模块[v1.1]
- 作者：CowNow

 </details>

<details>
<summary>如何部署发信邮箱</summary>

### 这里以网易邮箱为例
1. 首先，注册一个你准备用来发信的邮箱
2. 点击邮箱设置，点击`POP3/SMTP/IMAP`，如图

![](/img/Tutorial_mail1.png)

4. 开启`IMAP/SMTP服务`，然后你会得到一个授权密码
5. 邮箱成功部署，你只需要将邮箱账号和授权密码填写到源码中即可使用你自己的邮箱进行发信
</details>

<details>
<summary>如何部署api接口</summary>

### 接口部署
1. 首先，你需要有一个云服务器，如果有条件的，也可以家里云
2. 就像搭建网站一样把Api接口的文件传上去
3. 记得自行编写一份`package.json`，不然接口会无法正常调用
4. 访问api地址，提交数据为 skey=`Skey值`，如果成功返回json格式的Bkn文本，那么就说明部署成功了

</details>

***

## <a name="img">📸 截图</a>
- 主控界面

![](/img/QkeyTool1.png)
![](/img/QkeyTool3.png)

- 被控触发

![](/img/Mail.png)  

***

## <a name="update">🛠 更新记录</a>
> 2023-9-2
- `主控[+]` 被控生成界面添加兼容性设置
- `被控[+]` 支持写入不同长度的QQ号

<details>
<summary>所有记录</summary>

### 更早的更新
> 2023-8-18
- `主控[+]` 更新UI界面

> 2023-8-13
- `主控[+]` 允许强行加好友

> 2023-7-26
- `主控[+]` 支持导出信息

> 2023-7-22
- `终端[+]` 发布基本框架
- `被控[+]` 上传了终端版本
- `主控[+]` 自定义被控生成
- `被控[+]` 无窗口运行

> 2023-7-21
- `主控[+]` 优化Key读取

</details>

***
