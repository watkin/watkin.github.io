---
layout: post
title:  "Unity 脚本生命周期"
date:   2015-11-27 21:30:32
categories: blog
comments: true
---
![1](/images/1.png)
当我们把脚本添加到物体上后
<h3>立刻调用：</h3>
在编辑窗口中就调用
Reset    

<h3>运行游戏后：</h3>

只要物体是存在的调用：<br>
Awake   --  初始函数，无论脚本组件是否被激活，游戏开始时 自动调用，一般用来创建变量 

OnEnable 

<h3>更新</h3>
如果脚本被调用后：<br>
Start：--  初始化函数，只有脚步组件被激活才被调用，在所有Awake函数运行完之后，Update函数运行之前，一般用来给变量赋值

FixedUpdate: 基于物理时间的计算，每隔固定时间调用一次（unity物理运行基本都是通过固定时间来算的）

<h3>每桢都会调用</h3>
Update  --  脚本每一帧调用一次 ，一般用于非物理运动
（如果改变物体位置使用该方法 可以乘以Time.deltaTime 来使物体运动更加稳定）

其他的所有Update调用完后 再调用
LateUpdate

<h3>渲染</h3>
OnWillRenderObject  

<h3>GUI</h3>
OnGUI：调用完上面的所有的函数后进行调用


<h3>销毁</h3>
OnDisable：当这个组件被隐藏的时候调用     
OnDestroy:当这个组件被销毁的时候调用


