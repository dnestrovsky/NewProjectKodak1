

@isset($souvenirs)
    @section('title', 'Редактировать категорию ' . $souvenirs->name)
@else
    @section('title', 'Создать категорию')
@endisset

@section('content')
    <form @isset($souvenirs)
        action="{{ route('souvenirs.update') }}"
          @else
          action="{{ route('souvenirs.store') }}"
            @endisset
          method="post" class="decor">
        @isset($souvenirs)
            @method('PUT')
        @endisset
        @csrf

        <div class="container">
            <div class="form-inner">
                @isset($souvenirs)
                    <h1>Редактировать Категорию <b>{{ $souvenirs->name }}</b></h1>
                @else
                    <h1>Добавить Категорию</h1>
                @endisset
                <div class="form-group">
                    <input type="text" name="name" placeholder="Введите название" id="name" class="form-control">
                </div>
                <div class="form-group">
                <textarea name="description" id="description" placeholder="Введите описание товара" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Картинка товара</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>

            <button type="submit" class="btn btn-secondary btn-lg btn-block" style="background: #f69a73;">Добавить новый товар</button>
        </div>
    </form>
@endsection
