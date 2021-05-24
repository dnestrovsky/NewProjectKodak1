@if ($errors->any())
    <div class="alert" role="alert">
        <h3>Аккаунт не найден</h3>
        <div>
            <ul class="zebra">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
