@if ($errors->any())
    <div class="alert" role="alert">
        <h3>Введенные данные некорректны</h3>
        <div>
            <ul class="zebra">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

@if(session('success'))
<div class="alert">
    {{ session('success')}}
</div>
@endif
