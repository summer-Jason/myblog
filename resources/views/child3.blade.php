<!--文件保存于resources/views/test.blade.php-->
<!--继承公共模板内容-->
@extends('layouts/main2')
<!--替换单行占位的内容-->
@section('title','child3')
<!--替换单行占位的content内容-->
@section('content')
<div style="text-align: center;">
			<image src="苹果.jpg"></image>
			</div>
<p>
	<div style="text-align: center;">
		苹果公司1980年12月12日公开招股上市，2012年创下6235亿美元的市值记录，截至2014年6月，苹果公司已经连续三年成为全球市值最大公司。苹果公司在2016年世界500强排行榜中排名第9名。 [1]  2013年9月30日，在宏盟集团的“全球最佳品牌”报告中，苹果公司超过可口可乐成为世界最有价值品牌。2014年，苹果品牌超越谷歌（Google），成为世界最具价值品牌。
		<div style="text-align: center;">
					<image src="乔布斯.jpg"></image>
					</div>
		<br>
	<a href="https://www.apple.com.cn/">
	苹果官网
</a>
	</div>
</p>
@endsection