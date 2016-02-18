---
layout: page
header-img: img/tags-bg.jpg
title: 项目|Project
permalink: /project/
comments: true
---

<!-- <h2>{{ category | first }}({{ category | last | size }})</h2> -->
{% for category in site.categories %}
<ul class="arc-list">
    {% for post in category.last %}
    	{% if {{post.categories[0]}} == 'project'%}
	    	<div class="post-preview">
	          <a href="{{ post.url | prepend: site.baseurl }}">
	          	<table>
			    <tr>
			        <td width="18%"> <img width="110" src="{{ prepend: site.baseurl }}/favicon/{{prepend: post.logo}}"></img></td>
			        <td>
						 <h2 class="post-title">
			                  {{ post.title }}
			              </h2>
			              {% if post.subtitle %}
			              <h3 class="post-subtitle">
			                  {{ post.subtitle }}
			              </h3>
			              {% endif %}
			               <div class="post-content-preview">
		                  	{{ post.content | strip_html | truncate:130 }}
			              </div>
			        </td>
			    </tr>
				</table>
			 </a>
          <p class="post-meta">
              Posted by {% if post.author %}{{ post.author }}{% else %}{{ site.title }}{% endif %} on {{ post.date | date: "%B %-d, %Y" }}
          </p>
	      </div>
	      <br>
   		{% endif %}
    {% endfor %}
</ul>
{% endfor %}