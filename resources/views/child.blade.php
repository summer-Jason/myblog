<!--文件保存于resources/views/test.blade.php-->
<!--继承公共模板内容-->
@extends('layouts/main2')
<!--替换单行占位的内容-->
@section('title','child')
<!--替换单行占位的content内容-->
@section('content')
			<div style="text-align: center; width: ;">
			<image src="华为.jpg"></image>
			</div>
<p>
	<div style="text-align: center;">
		华为技术有限公司，成立于1987年，总部位于广东省深圳市龙岗区。 [1]  华为是全球领先的信息与通信技术（ICT）解决方案供应商，专注于ICT领域，坚持稳健经营、持续创新、开放合作，在电信运营商、企业、终端和云计算等领域构筑了端到端的解决方案优势，为运营商客户、企业客户和消费者提供有竞争力的ICT解决方案、产品和服务，并致力于实现未来信息社会、构建更美好的全联接世界。2013年，华为首超全球第一大电信设备商爱立信，排名《财富》世界500强第315位。华为的产品和解决方案已经应用于全球170多个国家，服务全球运营商50强中的45家及全球1/3的人口。
	<div style="text-align: center; width: ;">
	<image src="任正非.jpg"></image>
	</div>
	<br>
	<a href="https://www.huawei.com/cn/?ic_medium=direct&ic_source=surlent">
	华为官网
	</a>
	</div>
</p>
@endsection