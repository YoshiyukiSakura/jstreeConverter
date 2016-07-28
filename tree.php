<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>TREE</title>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jstree/3.0.9/themes/default/style.min.css" />
<script src="./tree.js"></script>
<script>
var data,tree;
$(document).ready(function() {
  var option = {text:"name", id:"id", children:"SpUrls", selected:34}
  data = {"core":{"data":$.jstree.convert(json.data, option)}};
	$('#container').jstree(data);
	$('#container').on("changed.jstree"
					,function (e, data) {
						if(data.selected.length) {
							$("#selected").val(data.instance.get_node(data.selected[0]).text);
						}
					}				
					);
	$('button').click(function () {
      $('#container').jstree("deselect_all");
      $('#container').jstree("select_node", "43");
  }
	);
});

var json = {"status":0,"size":38,"data":[{"id":"83","name":"产线人员管理","Spid":83,"SpName":"产线人员管理","SpCode":"PLPERS","SpUrls":[{"id":"34","name":"人员查看","Puid":34,"PuName":"人员查看","PuUrl":"PM/PersonInfo.aspx","PuParam":"","PuRequest":1}]},{"id":"90","name":"质量代码管理","Spid":90,"SpName":"质量代码管理","SpCode":"QUACODE","SpUrls":[{"id":"43","name":"质量代码管理","Puid":43,"PuName":"质量代码管理","PuUrl":"DM/DMQuaCode.aspx","PuParam":"","PuRequest":1},{"id":"44","name":"质量代码编辑","Puid":"44","PuName":"质量代码编辑","PuUrl":"DM/DMQuaCodeEdit.aspx","PuParam":"","PuRequest":6}]}]};
</script>
</head>
<body>
	<button>BTN</button>
	<input type="text" id="selected">
<div id="container" style="hight:100px">
  <!--<ul>
    <li>Root node
      <ul>
        <li>Child node 1</li>
        <li>
        	Child node 2
        	<ul>
        		<li>grandson</li>
        		<li>grandson</li>
        	</ul>
        </li>
      </ul>
    </li>
    <li>Root222 node222</li>
  </ul>
-->
</div>
</body>
</html>