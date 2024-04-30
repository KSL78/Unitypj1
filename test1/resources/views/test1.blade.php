내용 작성 필

<p>{!! $name !!}</p>
<p>{{$name}}</p>
<p>@{{name}}</p>
<p>홍길동</p>
<p>{{now()}}</p>
@for ($i = 0;$i<10;$i++)
    숫자가 증가합니다. {{$i}} <br>
@endfor
@include ('inc') <br>
@include('incf.incfs')
@includeIf('incf.incf')<br>
@php
    $a = 0;
    $a++;
    echo '<p>a의 값은'.$a.'입니다</p>';
@endphp
{{--주석입니다.--}}