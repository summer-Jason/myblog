<!--文件保存于resources/views/test.blade.php-->
<!--继承公共模板内容-->
@extends('layouts/main2')
<!--替换单行占位的内容-->
@section('title','child2')
<!--替换单行占位的content内容-->
@section('content')
<div style="text-align: center;">
			<image src="小米.png"></image>
			</div>
<p>
	<div style="text-align: center;">
		北京 [1]  小米科技有限责任公司成立于2010年3月3日 [2]  ，是一家专注于智能硬件和电子产品研发的全球化移动互联网企业 [3]  ，同时也是一家专注于高端智能手机、互联网电视及智能家居生态链建设的创新型科技企业。 [4]  小米公司创造了用互联网模式开发手机操作系统、发烧友参与开发改进的模式。小米还是继苹果、三星、华为之后第四家拥有手机芯片自研能力的科技公司。2018年7月9日在香港交易所主板挂牌上市，成为港交所上市制度改革后首家采用不同投票权架构的上市企业。
		<div style="text-align: center;">
					<image src="雷军.jpg"></image>
					</div>
		<br>
	<a href="https://www.mi.com/">
		小米官网
	</div>
	</a>
</p>
@endsection