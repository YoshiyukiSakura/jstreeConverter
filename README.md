#JSTREE使用手册
#A DEMO URL : http://kirisamenana.com/frontend/tree/tree.php
##引入
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jstree/3.0.9/themes/default/style.min.css"/>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jstree/3.0.9/jstree.min.js"></script>

##初始化TREE
<script type="text/javascript">
	$('#container').jstree();
</script>
<div id="container">
  <ul>
    <li>Root node
      <ul>
        <li>Child node 1</li>
        <li>Child node 2</li>
      </ul>
    </li>
  </ul>
</div>

##使用JSON的情况
原版的jstree对数据格式有严格要求
treeData =  { "id":"ID"
		 ,"text":"树根目录"
		 ,"state":{展开,选中等}
		 ,"children":[必须是数组,节点是对象]
		}
##使用convert
原生的jstree要求传入特定格式的数据,例如text字段定义内容,id字段定义id,如果有无法满足这些格式的数据,可以使用$.jstree.convert来进行转换,并且我提供类似disabled和selected这样的选项来初始化tree的属性
var option  = { "text":"文字字段,默认name",
				"children":"子级字段,默认false",
				"id":"不解释",
				"selected":"传入一个ID默认选中"};
treeData = {"core":{"data":$.jstree.convert(yourData, option)}};
$('#container').jstree(treeData);
##选中发生事件
###以选中树节点给input赋值为例
$('#container').on("changed.jstree"
				,function (e, data) {
					if(data.selected.length) {
						$("#selected").val(data.instance.get_node(data.selected[0]).text);
					}
				}				
				);

##调用方法
$('#container').jstree("select_node", "1");
//或者
tree = $('#container').jstree(true);