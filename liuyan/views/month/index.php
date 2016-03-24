<input type="text" id='keyword'><input type="button" value="搜索" id="search">
<div id="div"></div>
<script src='/jquery-1.8.3.min.js'></script>
<script>
	$(document).on("click","#search",function(){
		keyword=$("#keyword").val()
		$.get("index.php?r=month/search",{keyword:keyword},function(data){
			$("#div").html(data);
		});
	})
</script>