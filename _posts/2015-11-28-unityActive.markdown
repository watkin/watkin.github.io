---
layout: post
title:  "Unity 物体组件开关"
date:   2015-11-28 19:30:32
categories: blog
comments: true
---
<h4>控制物体中的组件是否可见：</h4>
<!-- {% highlight c++ linenos %}
MeshRenderer:渲染的组件     
//直接把物体拉进该编辑器对应变量中  就会自动识别物体对应绑定的渲染组件 赋值进来    
public MeshRenderer mesh;    
void Update(){    
	if(Input.GetKeyDown(KeyCode.Space)){    
		//mesh.enabled=false;    
		mesh.enabled=!mesh.enabled;    
	}    
} 
{% endhighlight %}-->
MeshRenderer:渲染的组件 
{% highlight c#%}
//直接把物体拉进该编辑器对应变量中  就会自动识别物体对应绑定的渲染组件 赋值进来    
public MeshRenderer mesh;    
void Update(){    
	if(Input.GetKeyDown(KeyCode.Space)){    
		//mesh.enabled=false;    
		mesh.enabled=!mesh.enabled;    
	}    
}
{% endhighlight %}

<h4>直接控制物体是否可见：</h4>
{% highlight c#%}
gameObject.setActive(bo:Boolean)//gameObject代表该类默认的物体对象      物体是否激活   
{% endhighlight %}
如果父类设置了不激活子类就不显示了       
不过代码中的 子类的setActive 返回还是为true  
{% highlight c#%}
//只读--该物体在Hierarchy是否被激活 （如果父节点的active存在flase, 返回false)     
gameObject.activeInHierarchy 
//只读--该物体是否被激活(不受父节点的active影响)
gameObject.activeSelf  
{% endhighlight %}
<h4>注意：</h4>
材质如果在脚本改变了之后  就算游戏关掉后  材质也不会复原    
只能在取消的时候自己设置修改回去 
{% highlight c#%}
OnDisable：//当这个组件被隐藏的时候调用     
OnDestroy://当这个组件被销毁的时候调用
{% endhighlight %}

<h4>脚本的声明</h4>

编辑器可见类型：
{% highlight c#%}
public enum emType {A,B,c}//编辑器不会看到    
public emType  em;//一个下拉菜单    
Public //可以在编辑器里面修改     
[SerializeField]//在变量上面加上这个 可序列化  编辑器中也可见    
[HideInInspector]//如果public变量上面添加该标签后 在编辑器就看不到了    
[System.Serializable]//放到类上面一行 代表该类所有的变量都可在编辑器中看到(该类需实例化） 

boolean //选框
int //文本框    
float //文本框    
byte //文本框   
string //文本框    

vector2 //两个文本框    
vector3 //三个文本框    
Quaternion //四个文本框    

GameObject  //可选绑定框  所有物体对象都可以    
Script //(具体 使用脚本名）  可选绑定框        

{% endhighlight %}
利用反射来查找物体：    
{% highlight c#%}
GameObject.Find ("name")//从Hierarchy最下面开始查找该名字的物体     
GameObject.FindGameObjectWithTag("tag")//通过标签进行查找物体
{% endhighlight %}
<h6>注意值类型和引用类型</h6>