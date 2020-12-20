<h1>欢迎{{session()->get('uname')}}来到web开发世界!<h1>
<form action="{{url('admin/exit')}}" method="get">
<button>退出</button>
</form>