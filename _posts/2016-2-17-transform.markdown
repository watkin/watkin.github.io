---
layout: post
title:  "Unity场景物体的变换"
date:   2016-2-17 19:30:32
subtitle:   ""
author:     "Watkin"
categories: blog
comments: true
---

<h4>快捷键快速选中左上角图标：</h4>
**Q**: 平移窗口（Scene中鼠标变成手型）<br>
**W**: 物体位置移动Position（Scene中选中物体 按住command拖动 会按照单位1进行平移）<br>
**E**: 旋转Rotation（Scene中选中物体 按住command拖动 会按照单位15进行旋转）<br>
**R**: 缩放Scale（Scene中选中物体 按住command拖动 会按照单位0.1个百分点进行缩放）<br>
**T**: 2D选择<br>

**这些物体信息都是相对父容器的相对位置** 

{% highlight c#%}
//y轴正方向以每秒1.5格的速度向上移动 (注意：是按照世界坐标系的方向向上移动)
this.transform.position = new Vector3(transform.position.x,transform.position.y+1.5f*Time.deltaTime,transform.postion.z);
{% endhighlight %}

<h4>Transform实用函数</h4>  
请参考 [官网API]

<h4>坐标系</h4>  

{% highlight c#%}
Right;//x轴方向
Up;//y轴方向
Forward;//z轴方向
worldToLocalMatrix;// (Read Only)极少用到 除非涉及到非常复杂的线性代数问题 
localToWorldMatrix//  (Read Only)把本地矩阵坐标变换世界矩阵坐标

TransformPoint();//从本地坐标到世界坐标变换坐标
InverseTransformPoint();//从世界坐标到本地坐标变换坐标
TransformDirection();//从本地坐标到世界坐标变换方向
InverseTransformDirection();//从世界坐标到本地坐标变换方向
{% endhighlight %}

<h4>位移</h4>  
{% highlight c#%}
Position;//相对世界坐标的位置
localPosition;//相对父容器坐标的位置
{% endhighlight %}

[Translate（）] : 更方便的来变换物体的位置，指定物体沿着设置的方向进行移动

{% highlight c#%}
this.transform.Translate(0.1f*Time.deltaTime,0,0，Space.self);
{% endhighlight %}

<h4>扩展：</h4> 
[AnimationCurve] : 可视化的编辑变换物体的位置

{% highlight c#%}
//public 就可以显示在编辑中进行编辑动画曲线
public AnimationCurve animCurve;
void Update(){
	//会看到随着时间增加，数值会根据编辑的动画曲线进行变化
	animCurve.Evaluate(Time.Time);
}
{% endhighlight %}

<h4>旋转</h4> **欧拉角**

注意：不在0-360度范围 编辑器会自动变成该范围的数值 会有些许偏差 所以最好设值得时候都自己转换到0-360范围内

{% highlight c#%}
eulerAngies;//相对世界进行旋转 
localEulerAngles;//相对父物体进行旋转

Rotate();//三种用法
//沿着设置的欧拉角进行旋转
Rotate(Vector3 eulerAngles, Space relativeTo = Space.Self);
//沿着设置的欧拉角进行旋转
Rotate(float xAngle, float yAngle, float zAngle, Space relativeTo = Space.Self);
//沿着设置的 axis方向 以angle速度进行旋转
Rotate(Vector3 axis, float angle, Space relativeTo = Space.Self);
//每秒沿着设置的y轴45度进行旋转
this.transform.Rotate(0,45f*Time.deltaTime,0,Space.World);
//每秒沿着方向(1,1,1),以45度进行旋转
this.transform.Rotate(new Vector3(1,1,1),45*Time.deltaTime,Space.World);

//沿着某个点进行旋转
//point：要旋转中心点 axis：沿着中心点的哪个方向轴进行旋转 angle：旋转的速度
RotateAround(Vector3 point, Vector3 axis, float angle);
//物体的某个轴一直对着设置的物体
LookAt(Transform target, Vector3 worldUp = Vector3.up);
//物体的某个轴一直对着设置的世界坐标
LookAt(Vector3 worldPosition, Vector3 worldUp = Vector3.up);
{% endhighlight %}

Rotation();<br>
localRotation();

<h4>扩展</h4> 
[Quaternion四元数] ：解决3D空间中的万向节死锁（Gimbal Lock）等问题

<h4>缩放</h4> 

{% highlight c#%}
lossyScale;//(Read Only)世界坐标的物体缩放大小
localScale;//物体的缩放
{% endhighlight %}

<h4>位置关系</h4> 

{% highlight c#%}
parent;//父物体
root;//返回层次最高的Transform 不会出现null
childCount;//返回子物体的数量,int值类型

Find();//利用反射得到对应名字的子物体
IsChildOf();//返回是否是物体的子类
DetachChildren();//把关联的子物体都解除关联
GetChild(int index);//获取index索引的子物体
GetSiblingIndex();//得到同级子物体的索引位置
SetSiblingIndex(int index);//设置同级别的物体索引位置
SetAsFirstSibling();//设置移动物体到同级别开始索引位置
SetAsLastSibling();//设置移动物体到同级别最后索引位置
{% endhighlight %}

[Quaternion四元数]:http://docs.unity3d.com/ScriptReference/Quaternion.html
[AnimationCurve]:http://docs.unity3d.com/ScriptReference/AnimationCurve.html
[Translate（）]:http://docs.unity3d.com/ScriptReference/Transform.Translate.html
[官网API]:http://docs.unity3d.com/ScriptReference/Transform.html