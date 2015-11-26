---
layout: page
title: Project
permalink: /project/
comments: true
---

{% for category in site.categories %}
<!-- <h2>{{ category | first }}({{ category | last | size }})</h2> -->
<ul class="arc-list">
    {% for post in category.last %}
    	{% if {{post.categories[0]}} == 'project'%}
    		<li>{{ post.date | date:"%d/%m/%Y"}}<a href="{{ post.url }}">{{ post.title }}</a></li>
   		 {% endif %}
    {% endfor %}
</ul>
{% endfor %}