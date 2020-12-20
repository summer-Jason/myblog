<table align="center">
	<caption><h3>商品详细信息</h3></caption>
	@foreach($goods_info as $g)
	<tr>
		<td><h4>商品名称:{{$g->goods_title}}</h4></td>
	</tr>
	<tr>
		<td><h4>商品描述</h4></td>
	</tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;{{$g->goods_content}}</td>
	</tr>
	<tr>
		<td>
		<br/>
		<a href="{{url('goods')}}">返回</a>
		</td>
	</tr>
	@endforeach
</table>